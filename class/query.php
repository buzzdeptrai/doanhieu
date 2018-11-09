<?php
class Query{
	protected $connObj;

	public function connect($servername,$username,$password,$dbname){
		// Create connection
		$this->connObj = mysqli_connect($servername, $username, $password,$dbname);
		mysqli_set_charset($this->connObj,'utf8');
		// Check connection
		if (!$this->connObj) {
		    die("Connection failed: " . $connObj->connect_error);
		}
		return $this->connObj;
	}
	//dung insert update or delete
	public function qr($query_string){
		$result = mysqli_query($this->connObj,$query_string);
		if(!$result){
			echo $query_string;
			$this->alert('cannot query');
		}
		return $result;
	}
	//get du lieu nhieu dong
	public function queryDB($query_string){
		$result = $this->qr($query_string);
		return $this->fetch($result);
	}
	//get du lieu 1 dong
	public function queryDBFirst($query_string){
		$result = $this->qr($query_string);		
		if(mysqli_num_rows($result)){
			return mysqli_fetch_assoc($result);
		}	
		return false;
	}
	public function fetch($result){
		if(mysqli_num_rows($result)){
			$output = array();
			while($row = mysqli_fetch_assoc($result)){
				array_push($output, $row);
			}
			return $output;
			}
		else return false;
	}
	public function getInsertId(){
		return mysqli_insert_id($this->connObj);
	}
	public function alert($message){
		echo $message;exit;
	}
	public function parseURI(){
		list($server_uri,$server_query) = explode('?',$_SERVER['REQUEST_URI']);
		$url_array = explode('/', $server_uri);
		$server_request = explode('&',$server_query);
		$url_splash_count = substr_count($_SERVER['PHP_SELF'],'/');
		foreach($server_request as $each_request)
			if($each_request!=''){
				list($key,$value) = explode('=',$value);
				$_REQUEST[$key] = $value;
			}
		for($i=0; $i<$url_splash_count; $i++) array_shift($url_array);

		$_REQUEST['view'] = $url_array[0];
		$_REQUEST['idx'] = @$url_array[1];
		$_REQUEST['pos'] = @$url_array[2];
		$_REQUEST['fiter'] = @$url_array[3];
		
		return $_REQUEST;
	}
	// format input data before insert into database
	public function formatInput($source,$no_mres=null){
		if(is_array($source)){
			$destiny = array();
			foreach($source as $key=>$value){
				$source[$key] = $this->formatInput($value);
			}
			return $source;
		}
		else{
			if(get_magic_quotes_gpc()){
                $source = htmlspecialchars($source, ENT_QUOTES,'UTF-8',false);
				$source = stripslashes($source);
			}
			if ($no_mres) {
				return $source;
			}else {
				return mysqli_real_escape_string($source);
			}
		}
	}
	public function formatOutput($source){
		if(is_array($source)){
			$destiny = array();
			foreach($source as $key=>$value){
				$destiny[$key] = $this->formatOutput($value);
			}
			return $destiny;
		}
		else{
			$source	=	 stripslashes($source);
			$source	=	htmlspecialchars_decode($source,ENT_QUOTES);
			return $source;
		}
	}
	public function getCurrentTime($time=NULL){
		if(!$time) $time = time();
		return date('Y-m-d H:i:s', $time);
	}


	public function convert_vi_to_en($str) {
		$unicode = array(
            'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',
            'd'=>'đ',
            'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
            'i'=>'í|ì|ỉ|ĩ|ị',
            'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
            'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
            'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
			'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
            'D'=>'Đ',
            'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
            'I'=>'Í|Ì|Ỉ|Ĩ|Ị',
            'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
            'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
            'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ',
        );
        
       foreach($unicode as $nonUnicode=>$uni){
            $str = preg_replace("/($uni)/i", $nonUnicode, $str);
       }
		return $str;
	}

	public function slug($string, $space="-") {

		

		
		$string = $this->convert_vi_to_en($string);

        $string = utf8_encode($string);
        $string = $this->convert_vi_to_en($string);
        if (function_exists('iconv')) {
            $string = iconv('UTF-8', 'ASCII//TRANSLIT', $string);
        }
        $string = preg_replace("/[^a-zA-Z0-9 \-]/", "", $string);
        $string = trim(preg_replace("/\\s+/", " ", $string));
        $string = strtolower($string);
        $string = str_replace(" ", $space, $string);

        return $string;
    }

    public function getProductByUrl($stringUrl){
    	return $this->queryDBFirst("
			SELECT * from product where product_url = '".$stringUrl."'
    	");
    }
}
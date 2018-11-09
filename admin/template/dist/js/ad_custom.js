function makeid() {
  	var text = "";
  	var possible = "abcdefghijklmnopqrstuvwxyz0123456789";
  	for (var i = 0; i < 10; i++)
    	text += possible.charAt(Math.floor(Math.random() * possible.length));
  	return text;
}
	
$( "#add_images" ).click(function() {
  	console.log('add images');
  	var name = makeid();
  	$("#div_add_images").append('<input type="file"  name="'+name+'">');
});

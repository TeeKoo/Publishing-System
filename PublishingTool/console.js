$(document).ready(function(){

	//variables to send data from form
	var title;
	var description;
	var price;
	var picture;
	var link;
	var selection;
	
		//getting the data from logout.php when user clicks logout button on console.php.
		$('#logoutbutton').click(function(){
			$.get("logout.php", function(data){
				location.reload(true);
			});
		});
		
		//Setting the preview image when user enters the URL.
		$('#urlinput').change(function(){
			var image = $(this).val();
            $('#setimg').attr("src", image);
		});
		//sending stuff to sendhtmlcontent.php
		$('#publishbutton').click(function(){
			title = $('#titleinput').val();
			description = $('#maincontent').val();
			price = $('#priceinput').val();
			link = $('#linkinput').val();
			picture = $('#urlinput').val();
			selection = $('#category').val();
			
			//Checking that none of the fields are empty. (The actual check for proper URLs and SQL injections are in sendhtmlcontent.php)
			if(title!="" && description != "" && price != "" && link!= "" && picture != "" && selection != 0){
	 		$.ajax({
				  type: "POST",
				  url: "sendhtmlcontent.php",
				  data: { title: title, description: description, price: price, link: link, picture: picture, category: selection}
				}).done(function( msg ) {
				  alert(msg);
				});
			}
			else alert("please fill out all the fields and choose a category");
		});
});

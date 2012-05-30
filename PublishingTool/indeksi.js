$(document).ready(function(){
	//getting the content on the page.
	$.get("gethtmlcontent.php", function(data){
		$('#contents').html(data);
		});
	
	//click functions for different categories with AJAX. They send the selectionid with to the gethtmlcontent.php so it knows which query to use.
	$('#games').click(function(){
		$.get("gethtmlcontent.php", { selectionid: "games"},
				   function(data){
				$('#contents').html(data);
				   });
	});
		
	$('#phones').click(function(){
		$.get("gethtmlcontent.php", { selectionid: "phones"},
				   function(data){
				$('#contents').html(data);
				   });
	});		
	
		$('#gadgets').click(function(){
			$.get("gethtmlcontent.php", { selectionid: "gadgets"},
					   function(data){
					$('#contents').html(data);
					   });
		});	
		
		$('#movies').click(function(){
			$.get("gethtmlcontent.php", { selectionid: "movies"},
					   function(data){
					$('#contents').html(data);
					   });
		});	
		
		$('#electronics').click(function(){
			$.get("gethtmlcontent.php", { selectionid: "electronics"},
					   function(data){
					$('#contents').html(data);
					   });
		});
	
});
		
	<footer>
		<p>Copyright &#169; 2014 UIBrush.</p>
	</footer>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="script/jquery.panelslider.min.js"></script>
<script>

	$(document).ready(function() {
		$('#right-panel-link').panelslider({side: 'right', clickClose: true, duration: 200 });

    	$('#menu li a').click(function() {
	      $.panelslider.close();
	    });
	    console.log( "ready!" );
	});    

	$(document).ready(function(){

 	$('.bxslider').bxSlider();

 });

  </script>

	
</script>

</body>
</html>
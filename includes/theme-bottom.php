	</div>
	<div class="grass">
	</div>	
	<footer>&copy 2012, Tracy Karnabi</footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCOSF6EUJHi28FLeCSkKsQsG1gtn4vRkN4&sensor=false"></script>
	<script src="js/volleyball.js"></script>
	
	<script type="text/javascript" src="jquery/jquery.js"></script>
	<script type="text/javascript" src="jquery/jRating.jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.basic').jRating();
			
			$('.exemple2').jRating({
				type:'small',
				length : 40,
				decimalLength : 1
			});
			
			$('.exemple3').jRating({
				step:true,
				length : 20
			});
			
			$('.exemple4').jRating({
				isDisabled : true
			});
			
			$('.exemple5').jRating({
				length:10,
				decimalLength:1,
				onSuccess : function(){
					alert('Success : your rate has been saved :)');
				},
				onError : function(){
					alert('Error : please retry');
				}
			});
			
			$(".exemple6").jRating({
			  length:10,
			  decimalLength:1,
			  showRateInfo:false
			});
		});
	</script>
</body>
</html>

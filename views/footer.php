</body>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script type="text/javascript">

	$(document).bind('ready',function(){
		$('li').bind('mouseover',function(){
			tmp=$(this).parent();
			if(tmp.attr('id')=='masthead'){
				$('li').removeClass('active');
				$(this).addClass('active');
			}
		});
		$('h1').bind('click',function(){
			window.open('/index.php/Board','_self');
		});
	});

</script>
</html>
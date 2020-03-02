<script src="public/doc/scripts/jquery/jquery-3.4.1.min.js"></script>
<script src="public/doc/scripts/bootstrap3/bootstrap.min.js"></script>
<script src="public/doc/scripts/app/app.js"></script>
<script src="publuc/doc/scripts/lightbox.js"></script>
<script src="public/doc/scripts/waypoints.js"></script>
<script>
	$(function(){

		// Object for focus input
		let selianord = {
			border:'2px solid #c42126',
			background:'transparent',
			transition: '.5s ease-in'
		}

		let selemani = {
			border:'1px solid #ddd',
			transition:' .5s ease-out'
		}

		let loan = {
			border: '2px solid #c42126',
			background: '#000',
			transition: '.5s ease-in'
		}

		// $('#nav-box').hover(function(){
		// 	$('li:first').fadeOut(1000).fadeIn(1200).delay();
		// });

		// declare the var
		var path = window.location.pathname.split("/").pop();

		// home page with empty path

		if(path == ''){
			path = 'index.php';
		}

		var target = $('nav a[href="' +path+ '"]');

		// Add current class to target link

		target.addClass('current');

		// more code

		$('input,textarea').focus(function(){
			$(this).css(selianord).animate(1000);
		});

		$('text,textarea').blur(function(){
			$(this).css(selemani);
		});

		$('input[type="submit"]').focus(function(){
			$(this).css(loan);
		});

		$(window).scroll(function(){
			if($(this).scrollTop() > 200 ){
				$(".go-top").fadeIn(200);
			}
			else {
				$(".go-top").fadeOut(200);
			}
		});

		$(".go-top").click(function(event){
			event.preventDefault();
			$("html, body").animate({scrollTop: 0}, 600);
		});
	});
</script>

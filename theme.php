<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?=wCMS::get('config','siteTitle')?> - <?=wCMS::page('title')?></title>
	<meta name="description" content="<?=wCMS::page('description')?>">
	<meta name="keywords" content="<?=wCMS::page('keywords')?>">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=wCMS::asset('css/style.css')?>">
	<?=wCMS::css()?>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.4.min.js"></script>

   <script type="text/javascript">
   $(document).ready(function() {
   	   $("body").css("display", "none"); /** body (здесь и далее) означает, что эффект примен€етс€ ко всей странице. ћожно изменить на идентификаторы любых элементов (#content, .comments и т.д.) */

	   $("body").fadeIn(1000); /** врем€ по€влени€ в миллисекундах */
	 
	   $("a.fade").click(function(event){ /** a.fade означает, что данное решение будет работать только при нажатии на ссылки с классом (class) "fade" (можно изменить на свой) */
		   event.preventDefault();
		   linkLocation = this.href;
		   $("body").fadeOut(1000, redirectPage); /** врем€ изчезани€ в миллисекундах */
	   });

	   function redirectPage() {
		   window.location = linkLocation;
	   }
   });
   </script>
</head>
<body>
	<?=wCMS::alerts()?>
	<?=wCMS::settings()?>
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="col-sm-5 text-center">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navMobile">&#9776;</button>
					<a href="./"><h1><?=wCMS::get('config','siteTitle')?></h1></a>
				</div>
			</div>
			<div class="col-sm-7 text-center">
				<div class="collapse navbar-collapse" id="navMobile">
					<ul class="nav navbar-nav navbar-right">
						<?=wCMS::menu()?>
					</ul>
				</div>
			</div>
		</div>
	</nav>

	<div class="container">
		<div class="col-xs-12 col-sm-8">
			<div class="whiteBackground grayFont padding20 rounded5">
				<?=wCMS::page('content')?>
			</div>
		</div>
		<div class="col-xs-12 col-sm-4">
			<div class="visible-xs spacer20"></div>
			<div class="blueBackground padding20 rounded5">
				<?=wCMS::block('subside')?>
			</div>
		</div>
	</div>

	<footer class="container-fluid">
		<div class="padding20 text-right">
			<?=wCMS::footer()?>
		</div>
	</footer>

	<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/jquery.autosize/3.0.17/autosize.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<?=wCMS::js()?>
</body>
</html>
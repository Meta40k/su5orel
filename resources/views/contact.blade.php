@extends('layouts.app')

@section('content')
<body>
<div class="boxed-container">

	<div class="main-title" style="background-color: #f2f2f2; ">
		<div class="container">
			<h1 class="main-title__primary">ООО "Строительное Управление №5"</h1>
			<h3 class="main-title__secondary">г. Орёл,  ул. 6й Орловской стрелковой дивизии, 6</h3>
		</div>
	</div>
	<div class="breadcrumbs breadcrumbs--page-builder">
		<div class="container">
			<span typeof="v:Breadcrumb"><a rel="v:url" property="v:title" title="Go to BuildPress." href="/" class="home">Главная</a></span>
			<span typeof="v:Breadcrumb"><span property="v:title">Контакты</span></span>	
		</div>
	</div>

	<div class="master-container">

		<div class="spacer-big"></div>
		<div class="hentry container" role="main">
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-grid widget widget_text panel-last-child">
						<h3 class="widget-title">Контакты</h3>	
					</div>
				</div>
			</div>
			<div class="spacer"></div>
			<div class="row">			
				<div class="col-md-3">
					<div class="textwidget panel widget">
						<span class="icon-container"><span class="fa fa-home"></span></span> <b>г. Орёл</b><br>
						ул. 6й Орловской дивизии<br>
						дом 6, 302024<br><br>
						<span class="icon-container"><span class="fa fa-phone"></span></span> <b>(4862)47-61-00</b><br>
						<!-- <span class="icon-container"><span class="fa fa-fax"></span></span> <b>(4862)47-61-00</b><br> -->
						<span class="icon-container"><span class="fa fa-envelope"></span></span><a href="mailto:info@su5orel.ru">info@su5orel.ru</a> 
						<br><br>
						<span class="icon-container"><span class="fa fa-home"></span></span> <b>Пн - Пт 8.00 - 17.00</b><br>
						суббота, воскресенье - выходные
					</div>
					<div class="panel widget widget_pt_social_icons panel-last-child">	
						<!-- <a class="social-icons__link" href="#" target="_blank"><i class="fa  fa-facebook"></i></a> -->
						<!-- <a class="social-icons__link" href="#" target="_blank"><i class="fa  fa-twitter"></i></a> -->
						<!-- <a class="social-icons__link" href="#" target="_blank"><i class="fa  fa-youtube"></i></a> -->
					</div>
				</div>
				<div class="col-md-9">
					<div class="wpcf7" id="wpcf7-f5-o1" lang="en-US" dir="ltr">
						<form action="/path" method="post" class="wpcf7-form" novalidate="novalidate">
						 @csrf 
							<div class="row">
								<div class="col-xs-12  col-sm-4">
									<span class="wpcf7-form-control-wrap your-name">
										<input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text" placeholder="Ваше имя"/>
									</span><br/>
									<span class="wpcf7-form-control-wrap your-email">
										<input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email" placeholder="Ваш E-mail"/>
									</span><br/>
									<span class="wpcf7-form-control-wrap your-subject">
										<input type="text" name="your-subject" value="" size="40" class="wpcf7-form-control wpcf7-text" placeholder="Ваш телефон"/>
									</span>
								</div>
								<div class="col-xs-12  col-sm-8">
									<span class="wpcf7-form-control-wrap your-message">
										<textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" placeholder="Сообщение"></textarea>
									</span><br/>
									<input type="submit" value="Отправить" class="wpcf7-form-control wpcf7-submit btn btn-danger"/>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div><!-- /container -->


		<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A15265096fc648eda45c496e0ed3feab0651d09e5988c1f24855becec8cabb747&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe>


	</div>
	
</div><!-- end of .boxed-container -->

<script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=false'></script>
<script type="text/javascript" src="js/almond.js"></script>
<script type="text/javascript" src="js/underscore.js"></script>
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="js/header_carousel.js"></script>
<script type="text/javascript" src="js/sticky_navbar.js"></script>
<script type="text/javascript" src="js/simplemap.js"></script>
<script type="text/javascript" src="js/main.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>

</body>
@endsection
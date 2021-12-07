@extends('layouts.app')

@section('content')



<body>
<div class="main-title" style="background-color: #f2f2f2">
		<div class="container">
			<h1 class="main-title__primary">Наши проекты</h1>
			<h3 class="main-title__secondary">Вот лишь некоторый перечень объектов, в строительстве которых ООО «Строительное управление №5» принимала непосредственное участие</h3>
		</div>
	</div>
	<div class="breadcrumbs breadcrumbs--page-builder">
		<div class="container">
			<span typeof="v:Breadcrumb"><a rel="v:url" property="v:title" title="На главную." href="/" class="home">Главная</a></span>

			<span typeof="v:Breadcrumb"><span property="v:title">Проекты СУ №5</span></span>	
		</div>
	</div>
	<div class="spacer-big"></div>

<section class="fdb-block">
  <div class="container">
    <div class="row text-center align-items-center">
      <div class="col-8 col-md-4">
        <img alt="image" class="img-fluid" src="./images/projects/fso/fso_main2.jpeg">
      </div>

      <div class="col-4 col-md-2">
        <div class="row">
          <div class="col-12">
            <img alt="image" class="img-fluid" src="./images/projects/fso/fso_main.jpeg">
          </div>
        </div>

        <div class="row mt-4">
          <div class="col-12">
            <img alt="image" class="img-fluid" src="./images/projects/fso/fso_main3.jpeg">
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-5 ml-auto pt-5 pt-md-0">
        <img alt="image" class="fdb-icon" src="./images/projects/fso/fso_logo.jpg">
        <h1>ФСО России</h1>
        <p class="lead">Автомобильный парк академии ФСО России.</p>
      </div>
    </div>
  </div>
</section>
<br><br>
<hr>

    </body>
@endsection
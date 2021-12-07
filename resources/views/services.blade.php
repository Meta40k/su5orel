@extends('layouts.app')

@section('content')

<body>

  <div class="main-title" style="background-color: #f2f2f2">
    <div class="container">
      <h1 class="main-title__primary">Виды деятельности</h1>
      <h3 class="main-title__secondary">ООО "Строительное Управление №5 - надёжная строительная компания в Орле с
        безупречной репутацией.</h3>
    </div>
  </div>
  <div class="breadcrumbs breadcrumbs--page-builder">
    <div class="container">
      <span typeof="v:Breadcrumb"><a rel="v:url" property="v:title" title="На главную." href="/"
          class="home">Главная</a></span>

      <span typeof="v:Breadcrumb"><span property="v:title">Виды деятельности</span></span>
    </div>
  </div>
  <div class="spacer-big"></div>
  </div>


  <section class="fdb-block">
    <div class="container">
      <!-- <div class="row justify-content-center pb-5">
      <div class="col-12 text-center">
        <h1>Froala Design Blocks</h1>
      </div>
    </div> -->

      <div class="row text-left align-items-center pt-5 pb-md-5">
        <div class="col-4 col-md-5 text-center">
          <img alt="image" class="img-fluid" src="./images/services/circle9.png">
        </div>

        <div class="col-12 col-md-5 m-md-auto">
          <h2><strong>Газопровод</strong></h2>
          <p class="lead">Монтаж газопроводов и газового оборудования. Наладка систем газоснабжения. Установка газового
            оборудования для жилых, общественных и производственных зданий.</p>
          <!-- <p><a href="https://www.froala.com">Learn More <i class="fas fa-angle-right"></i></a></p> -->
        </div>
      </div>
      <hr>
      <div class="row text-left align-items-center pt-5 pb-md-5">
        <div class="col-4 col-md-5 m-md-auto order-md-5 text-center">
          <img alt="image" class="img-fluid" src="./images/services/circle10.png">
        </div>

        <div class="col-12 col-md-5">
          <h2><strong>Горизонтально Направленное бурение</strong></h2>
          <p class="lead">Бестраншейный метод прокладывания подземных коммуникаций с помощью специальных буровых
            установок ГНБ. Прокладка кабеля, прокладка труб для водопровода, прокладка труб канализации, прокладка
            газопровода, прокладка кабелей и т.д.</p>
          <!-- <p><a href="https://www.froala.com">Learn More <i class="fas fa-angle-right"></i></a></p> -->
        </div>
      </div>
      <hr>
      <div class="row text-left align-items-center pt-5">
        <div class="col-4 col-md-5 text-center">
          <img alt="image" class="img-fluid" src="./images/services/circle5.png">
        </div>

        <div class="col-12 col-md-5 m-md-auto">
          <h2><strong>Электросети</strong></h2>
          <p class="lead">Монтаж электрических сетей. Проектные работы и электромонтаж для квартир и жилых домов, а
            также офисов и промышленных помещений. Создание отказоустойчивой силовой кабельной инфраструктуры
          </p>
          <!-- <p><a href="https://www.froala.com">Learn More <i class="fas fa-angle-right"></i></a></p> -->
        </div>
      </div>
      <hr>
      <div class="row text-left align-items-center pt-5 pb-md-5">
        <div class="col-4 col-md-5 m-md-auto order-md-5 text-center">
          <img alt="image" class="img-fluid" src="./images/services/circle4.png">
        </div>

        <div class="col-12 col-md-5">
          <h2><strong>Монтаж котельных</strong></h2>
          <p class="lead">Разработка проекта отопления, строительство котельных, монтаж отопительного оборудования,
            пусконаладочные работы.</p>
          <!-- <p><a href="https://www.froala.com">Learn More <i class="fas fa-angle-right"></i></a></p> -->
        </div>
      </div>
      <hr>
    </div> <!-- END CONTAINER-->
  </section>



</body>






@endsection
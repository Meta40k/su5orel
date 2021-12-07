@extends('layouts.app')

@section('content')
<div class="jumbotron  jumbotron--with-captions">
		<div class="carousel  slide  js-jumbotron-slider" id="headerCarousel" data-interval="5000">
			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<div class="item active">
					<img src="images/slider/slide1.jpg"	alt="Строительная компания" />
					<div class="container">
						<div class="carousel-content">
							<div class="jumbotron__category">
								<h6>Строительное управление №5</h6>
							</div>
							<div class="jumbotron__title">
								<h1>Инженерные системы</h1>
							</div>
							<div class="jumbotron__content">
								<p>Создание инженерных систем для зданий и сооружений. Электрические и газовые сети. Прокладка и ввод в эксплуатацию</p>
								<a class="btn  btn-danger" href="/services">УЗНАТЬ</a>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<img src="images/slider/slide2.jpg" alt="Construction Management">
					<div class="container">
						<div class="carousel-content">
							<div class="jumbotron__category">
								<h6>Строительное управление №5</h6>
							</div>
							<div class="jumbotron__title">
								<h1>Вентиляционные системы</h1>
							</div>
							<div class="jumbotron__content">
								<p>Собственное производство систем вентиляции, Воздуховоды дымовые трубы францевые соединения, вентялиционный отвод, решетки. соединительный бандажи, узлы прохода перекрытия, залушки на воздуховод, опоры под воздуховоды.</p>
								<a class="btn  btn-danger" href="#" target="_self">УЗНАТЬ</a>
							</div>
						</div>
					</div>
				</div>
				<div class="item ">
					<img src="images/slider/slide3.png" alt="Green School in London">
					<div class="container">
						<div class="carousel-content">
							<div class="jumbotron__category">
								<h6>Строительное управление №5</h6>
							</div>
							<div class="jumbotron__title">
								<h1>Аренда спецтехники</h1>
							</div>
							<div class="jumbotron__content">
								<p>Краткосрочная и долгосрочная аренда дорожно-строительной, грузовой и коммунальной спецтехники. Наш автопарк состоит из автокранов, самосвалов, погрузчиков, экскаваторов, бортовых грузовиков,
									автовышек, автобетононасосов и пр.</p>
								<a class="btn  btn-danger" href="arenda" target="_self">Список техники</a>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<img src="images/slider/slide4.jpg" alt="Relationships That Last" />
					<div class="container">
						<div class="carousel-content">
							<div class="jumbotron__category">
								<h6>Строительное управление №5</h6>
							</div>
							<div class="jumbotron__title">
								<h1>Свидетельства и лицензии</h1>
							</div>
							<div class="jumbotron__content">
								<p>Работы проводятся в строгом соответствии с требованиями ГОСТ и СНиП. На все готовые объекты предоставляется гарантия и возможность сервисного обслуживания.</p>
								<a class="btn  btn-danger" href="images/lic/lic11.png" data-rel="prettyPhoto" target="_self">ОТКРЫТЬ</a>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<img src="images/slider/slide5.jpg" alt="Renovating Homes and Offices">
					<div class="container">
						<div class="carousel-content">
							<div class="jumbotron__category">
								<h6>Строительное управление №5</h6>
							</div>
							<div class="jumbotron__title">
								<h1>Наша репутация</h1>
							</div>
							<div class="jumbotron__content">
								<p>ООО "СУ №5" — НАДЕЖНАЯ СТРОИТЕЛЬНАЯ КОМПАНИЯ В ОРЛЕ С БЕЗУПРЕЧНОЙ РЕПУТАЦИЕЙ И МНОГОЛЕТНИМ ОПЫТОМ РАБОТЫ.</p>
								<a class="btn  btn-danger" href="#carousel-testimonials-widget-4-0-0" target="_self">ОТЗЫВЫ</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Controls -->
			<a class="left carousel-control" href="#headerCarousel" role="button" data-slide="prev">
				<i class="fa fa-angle-left"></i>
			</a>
			<a class="right carousel-control" href="#headerCarousel" role="button" data-slide="next">
				<i class="fa fa-angle-right"></i>
			</a>
		</div>
	</div>
	<div class="master-container">
		<div class="promo">
			<div class="container" >
				<div class="row">
					<div class="col-md-12">
						<div class="siteorigin-panels-stretch panel-row-style" style="background-color:#eeeeee">
							<div class="panel-grid-cell">
								<div class="panel widget widget_pt_banner panel-first-child panel-last-child">	
									<div class="banner__text">
										Нужна помощь специалиста?	
									</div>
									<div class="banner__buttons">
										<a class="btn btn-danger" href="contact-us.html" target="_self">Написать нам</a>&nbsp;
										<a class="btn  btn-default" href="projects.html" target="_self">Заказать звонок</a>	
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="spacer"></div>
		
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="panel widget widget_text panel-first-child" id="panel-7-3-0-0">	
						<div class="textwidget"></div>
					</div>
					<div class="panel panel-grid widget widget_black-studio-tinymce panel-last-child" id="panel-7-3-0-1">
						<h3 class="widget-title">Почему мы?</h3>
						<div class="textwidget">
							<h5>
								<span style="color: #1FA7DA"><br/><span class="icon-container"><span class="fa fa-check"></span></span></span> 
								<span style="color: #333333">ТРЕБОВАНИЯ</span>
							</h5>
							<p>
								Работы выполняются в строгом соответствии с требованиями существующих сегодня СНиПов, ГОСТов и других документов, регламентирующих направления нашей деятельности.
							</p>
							<h5>
								<span style="color: #1FA7DA"><br/><span class="icon-container"><span class="fa fa-check"></span></span></span> 
								ТЕХНОЛОГИИ
							</h5>
							<p>
								Мощная материально техническая база и высокая квалификация сотрудников позволяет нам выполнять профессиональный монтаж инженерных сетей и коммуникаций.
							</p>
							<h5>
								<span style="color: #1FA7DA"><br/><span class="icon-container"><span class="fa fa-check"></span></span></span> 
								<span style="color: #333333">ГАРАНТИЯ</span>
							</h5>
							<p>
								Предоставляем длительный гарантийный срок эксплуатации. В любой момент наши сотрудники готовы выехать на место и устранить проблемы в функционировании системы, если такие возникнут.
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="panel widget widget_text panel-first-child" id="panel-7-3-1-0">	
						<div class="textwidget"></div>
					</div>
					<div class="panel panel-grid widget widget_black-studio-tinymce panel-last-child" id="panel-7-3-1-1">
						<h3 class="widget-title">Немного о нас:</h3>
						<div class="textwidget">
							<p>
								<a href="images/mainpage/label_1.jpg" data-rel="prettyPhoto">
									<img class="alignleft wp-image-115 size-medium" src="images/mainpage/label_1.jpg" alt="Content Image" width="300" height="168"/>
								</a>
								<a href="images/lic/lic11.png" data-rel="prettyPhoto">
									<img class="alignleft wp-image-116 size-medium" src="images/lic/lic_mini.jpg" alt="Content Image" width="300" height="168"/>
								</a>
							</p>
							<p>
								Компания "Строительное управление №5" образована в 2003 году. Является дочерней структурой крупнейшего в Орловской области строительного холдинга ПАО "Орёлстрой.
							</p>
							<p>Используя современные технологии, мы изо дня в день совершенствуем подходы к решению поставленных технических задач. Многолетний опыт работы в этой сфере позволяет нам выполнять все пожелания заказчика качественно и в срок.
								Обращайтесь в нашу компанию. Мы гарантируем стопроцентный результат на каждом этапе, независимо от объема работ и сложности проекта.</p>
							<h5><strong><a href="about-us">УЗНАТЬ БОЛЬШЕ</a></strong></h5>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="spacer-big"></div>
		<div class="portfolio-mini-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<!-- GRID WRAPPER FOR CONTAINER SIZING - HERE YOU CAN SET THE CONTAINER SIZE AND CONTAINER SKIN -->
						<div class="portfolio-container portfolio-active">
							<div id="options" class="text-left">
								<!-- THE FILTER BUTTONS -->
								<ul id="filters" class="filter">
									<li class="active">	<a href="#" data-filter="*">Виды деятельности</a></li>
									<li>				<a href="#" data-filter=".filter-electrical">Электро сети</a></li>
									<li>				<a href="#" data-filter=".filter-ventilation">Вентиляции</a></li>	
									<li>				<a href="#" data-filter=".filter-boiler">Котельные</a></li>
									<li>				<a href="#" data-filter=".filter-gaz">Газопровод</a></li>									
									<li>				<a href="#" data-filter=".filter-burenie">Бурение</a></li>
								</ul>
							</div>
								
							<!-- THE GRID ITSELF WITH ENTRIES -->
							<div id="portfolio-content" class="projects-container row">
								
								
								<div class="project-post filter-electrical filter-boiler col-lg-3 col-md-4 col-sm-6 col-xs-12">
									<!-- THE CONTAINER FOR THE MEDIA AND THE COVER EFFECTS -->
									<img src="images/mozayka/electrical_360x240.jpg" alt="Электромонтаж в котельных" />
									<div class="project-content">
										<div class="inner-project">
											<h3>Электромонтаж котельных</h3>                                    
											<a href="404.html" class="project-link">Посмотреть</a>
										</div>	
									</div>
								</div>
								<div class="project-post filter-gaz filter-boiler col-lg-3 col-md-4 col-sm-6 col-xs-12">
									<img src="images/mozayka/gazprovod_360x240.jpg" alt="Газоснабжение котельных" />
									<div class="project-content">
										<div class="inner-project">
											<h3>Газоснабжение котельных</h3>                                    
											<a href="projects-single.html" class="project-link">Посмотреть</a>
										</div>	
									</div>
								</div>
								<div class="project-post filter-ventilation col-lg-3 col-md-4 col-sm-6 col-xs-12">
									<img src="images/mozayka/vent_360x240.jpg" alt="Системы вентиляции" />
									<div class="project-content">
										<div class="inner-project">
											<h3>Монтаж систем вентиляции</h3>                                    
											<a href="projects-single.html" class="project-link">Посмотреть</a>
										</div>	
									</div>
								</div>
								<div class="project-post filter-boiler col-lg-3 col-md-4 col-sm-6 col-xs-12">
									<img src="images/mozayka/boiler_360x240.jpg" alt="Монтаж котельных" />
									<div class="project-content">
										<div class="inner-project">
											<h3>Монтаж котельных</h3>                                    
											<a href="projects-single.html" class="project-link">Посмотреть</a>
										</div>	
									</div>
								</div>
								<div class="project-post filter-burenie col-lg-3 col-md-4 col-sm-6 col-xs-12">
									<img src="images/mozayka/gnb_360x240.jpg" alt="горизонтально-направленное бурение" />
									<div class="project-content">
										<div class="inner-project">
											<h3>горизонтально-направленное бурение</h3>                                    
											<a href="projects-single.html" class="project-link">Посмотреть</a>
										</div>	
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
		<div class="spacer-big"></div>

		<div class="container" role="main">
			<div class="row">
				<div class="col-md-4">
					<div class="panel widget widget_pt_featured_page panel-first-child panel-last-child" id="panel-7-1-0-0">
						<div class="has-post-thumbnail page-box page-box--block">
							<a class="page-box__picture" href="services-content/design-and-build.html">
								<img width="360" height="240" src="images/services/ventel_360x240.jpg" alt="Content Image"/>
							</a>
							<div class="page-box__content">
								<h5 class="page-box__title  text-uppercase">
									<a href="design-and-build.html">Монтаж систем вентиляции</a>
								</h5>
								Собственное производство элементов От успешного внедрения автоматики зависит надежная работа вентиляции, ее безотказность и сигнализация при возникновении неполадок и форс-мажорных ситуаций.	
								<p>
									<a href="services-content/design-and-build.html" class="read-more read-more--page-box">Узнать подробнее</a>
								</p>
							</div>
							
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="panel widget widget_pt_featured_page panel-first-child panel-last-child" id="panel-7-1-1-0">
						<div class="has-post-thumbnail page-box page-box--block">
							<a class="page-box__picture" href="services-content/tiling-and-painting.html">
								<img width="360" height="240" src="images/services/elekto_seti_360x240.jpg" alt="Content Image"/>
							</a>
							<div class="page-box__content">
								<h5 class="page-box__title text-uppercase">
									<a href="tiling-and-painting.html">Электрические сети</a>
								</h5>
								Монтажэлектрооборудования. Квартирный монтаж электропроводки. Установка розеток выключатейле. 
								Автоматочвыключателей. Электросчётчики. Уличное освещение. Многоквартирные дома. Квартиры котеджи. Торговые центры. Склады. Прокладка сетей в земле. ПНР Котельных. Заземленте. Контур заземления								<p>
									<a href="services-content/tiling-and-painting.html" class="read-more read-more--page-box">Узнать подробнее</a>
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="panel widget widget_pt_featured_page panel-first-child" id="panel-7-1-2-0">
						<div class="has-post-thumbnail page-box page-box--inline">
							<a class="page-box__picture" href="services-content/construction-management.html">
								<img src="images/services/ETL10_100x75.jpg" alt="передвижная электротехническая лаборатория ЭТЛ"/>
							</a>
							<div class="page-box__content">
								<h5 class="page-box__title text-uppercase">
									<a href="services-content/construction-management.html">Передвижная Лаборатория</a>
								</h5>
								Мобильные электротехнические лаборатории ЭТЛ&hellip;	
							</div>
						</div>
						<div class="spacer"></div>
					</div>
					<div class="panel widget widget_pt_featured_page" id="panel-7-1-2-1">
						<div class="has-post-thumbnail page-box page-box--inline">
							<a class="page-box__picture" href="services-content/condo-remodeling.html">
								<img width="100" height="75" src="images/services/burenie_100x75.jpg"  class="attachment-thumbnail wp-post-image" alt="Горизонтально-направленное бурение"/>
							</a>
							<div class="page-box__content">
								<h5 class="page-box__title text-uppercase">
									<a href="services-content/condo-remodeling.html">Горизонтально-направленное бурение</a>
								</h5>
								бестраншейный метод прокладывания подземных коммуникаций&hellip;	
							</div>
						</div>
						<div class="spacer"></div>
					</div>
					<div class="panel widget widget_pt_featured_page" id="panel-7-1-2-2">
						<div class="has-post-thumbnail page-box page-box--inline">
							<a class="page-box__picture" href="services-content/hardwood-flooring.html">
								<img width="100" height="75" src="images/services/kotel_100x75.jfif"  class="attachment-thumbnail wp-post-image" alt="Content Image"/>
							</a>
							<div class="page-box__content">
								<h5 class="page-box__title text-uppercase">
									<a href="services-content/hardwood-flooring.html">Монтаж котельных</a>
								</h5>
								Газовые котельные под ключ&hellip;	
							</div>
						</div>
						<div class="spacer"></div>
					</div>
					<div class="panel widget widget_pt_featured_page panel-last-child" id="panel-7-1-2-3">
						<div class="has-post-thumbnail page-box page-box--inline">
							<a class="page-box__picture" href="services-content/kitchen-remodeling.html">
								<img width="100" height="75" src="images/services/gaz_100x75.jpg"  class="attachment-thumbnail wp-post-image" alt="Content Image"/>
							</a>
							<div class="page-box__content">
								<h5 class="page-box__title text-uppercase">
									<a href="services-content/kitchen-remodeling.html">Монтаж газопроводов</a>
								</h5>
								We can execute complex kitchen remodelling projects that suit &hellip;	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>






		
		<div class="spacer-big"></div>
		<div class="siteorigin-panels-stretch panel-row-style testimonials-bg">
			<div class="container">
				<div class="panel-grid">
					<div class="panel-grid-cell" id="pgc-7-4-0">
						<div class="panel widget widget_pt_testimonials panel-first-child panel-last-child">
							<div class="testimonial">
								<h2 class="widget-title">
									<a class="testimonial__carousel testimonial__carousel--left" href="#carousel-testimonials-widget-4-0-0" data-slide="next">
										<i class="fa  fa-angle-right" aria-hidden="true"></i>
										<span class="sr-only" role="button">Next</span>
									</a>
									<a class="testimonial__carousel  testimonial__carousel--right" href="#carousel-testimonials-widget-4-0-0" data-slide="prev">
										<i class="fa  fa-angle-left" aria-hidden="true"></i>
										<span class="sr-only" role="button">Previous</span>
									</a>
									Про нас говорят:	
								</h2>
								<div id="carousel-testimonials-widget-4-0-0" class="carousel slide">
									<!-- Wrapper for slides -->
									<div class="carousel-inner" role="listbox">
										<div class="item active">
											<div class="row">
												<div class="col-xs-12  col-sm-6">
													<blockquote class="testimonial__quote">
															Выбирая подрядчика газового оборудования, ниразу не пожалела, выбрав Строительное Управление №5
													</blockquote>
													<cite class="testimonial__author">Демидова Екатерина</cite>
													<div class="testimonial__rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>	
													</div>
												</div>
												<div class="col-xs-12  col-sm-6">
													<blockquote class="testimonial__quote">
														Система вентиляции, сделанная ООО "СУ-5" в фитнес-клубе, исправно работает пятый год.
													</blockquote>
													<cite class="testimonial__author">Апальков Иван</cite>
													<div class="testimonial__rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>		
													</div>
												</div>
											</div>
										</div> 
										<div class="item">
											<div class="row">	
												<div class="col-xs-12  col-sm-6">
													<blockquote class="testimonial__quote">
														Внушает доверие, работа по проектной документации. Всё согласно смете и договору.
													</blockquote>
													<cite class="testimonial__author">Евгений Смелый</cite>
													<div class="testimonial__rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
													</div>
												</div>
												<div class="col-xs-12  col-sm-6">
													<blockquote class="testimonial__quote">
														Прокол под трубопровод, без повреждения асфальтового покрытия от СУ-5, избавил меня от многих, лишних проблем
													</blockquote>
													<cite class="testimonial__author">Андрей Кузнец</cite>
													<div class="testimonial__rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>	
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="panel-grid" id="pg-7-5">
			<div class="promobg">
				<div class="container">
					<div class="panel widget row">	
						<div class="col-md-12">
							<div class="motivational-text">
								Выбор подрядчика всегда серьёзный шаг. Прежде, чем определиться с исполнителем, необходимо тщательно изучить рынок услуг и тех, кто их оказывает. Только обращение к профессионалам гарантирует безопасность и высокое качество выполненых работ.
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="spacer-big"></div>
		<div class="panel-grid">
			<div class="panel-grid-cell">
				<div class="panel container">
					<h3 class="widget-title">МЫ СОТРУДНИЧАЕМ С ГОСУДАРСТВЕННЫМИ ЗАКАЗЧИКАМИ, ЧАСТНЫМИ ИНВЕСТОРАМИ, ИНДИВИДУАЛЬНЫМИ ЛИЦАМИ</h3>	
					<div class="textwidget">
						<div class="logo-panel">
							<div class="row">
								<div class="col-xs-12 col-sm-2"><img src="images/clients/orelstroy.jpg" alt="Client" width="308" height="260"></div>
								<div class="col-xs-12 col-sm-2"><img src="images/clients/regionstroy.jpg" alt="Client" width="308" height="260"></div>
								<div class="col-xs-12 col-sm-2"><img src="images/clients/injilkom.jpg" alt="Client" width="308" height="260"></div>
								<div class="col-xs-12 col-sm-2"><img src="images/clients/jilstroy_invest.jpg" alt="Client" width="308" height="260"></div>
								<div class="col-xs-12 col-sm-2"><img src="images/clients/zenit.jpg" alt="Client" width="308" height="260"></div>
								<div class="col-xs-12 col-sm-2"><img src="images/clients/odsk.jpg" alt="Client" width="308" height="260"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

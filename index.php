<!DOCTYPE html>
<html lang="ru">
<head>
	<meta name="keywodrds" content="">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

	<link rel="stylesheet" href="/local/blocks/main/main.css">

	<!-- Bootstrap -->
	<link rel="stylesheet" href="/local/blocks/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="/local/blocks/bootstrap/bootstrap-theme.css">

	<!-- Flicker Slider -->
	<link rel="stylesheet" href="/local/blocks/flicker/css/flickerplate.css">

	<!-- Slick Slider -->
	<link rel="stylesheet" href="/local/blocks/slick/slick.css">
	<link rel="stylesheet" href="/local/blocks/slick/slick-theme.css">

	<!-- Fancybox -->
	<link rel="stylesheet" href="/local/blocks/fancybox/jquery.fancybox.min.css">

	<!-- Main scripts -->
	<script src="/local/blocks/jquery/jquery-3.2.1.js"></script>
	<script src="/local/blocks/bootstrap/bootstrap.js"></script>
	<script src="local/blocks/main/main.js"></script>

	<!-- Flicker Slider -->
	<script src="/local/blocks/flicker/js/jquery-finger-v0.1.0.js"></script>
	<script src="/local/blocks/flicker/js/flickerplate.js"></script>
	<script src="/local/blocks/flicker/js/modernizr-custom-v2.7.1.js"></script>

	<!-- Slick Slider -->
	<script src="/local/blocks/slick/slick.js"></script>

	<!-- Masked Input -->
	<script src="/local/blocks/maskedInput/jquery.maskedinput.js"></script>

	<!-- Fancybox -->
	<script src="/local/blocks/fancybox/jquery.fancybox.min.js"></script>

	<title>Медицинские эксперты</title>
</head>
<body>
	<!-- Хэдер -->
	<?
		if(file_exists($_SERVER['DOCUMENT_ROOT'].'/local/include/header_main.php')) 
		{
			require_once($_SERVER['DOCUMENT_ROOT'].'/local/include/header_main.php');
		}
	?>
	
	<section class="triggers-block">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="row">
						<div class="col-md-12 col-lg-12" id="aboutService"><h2>Когда:</h2></div>
						<div class="col-md-6 col-lg-6"><p class="triggers-block__item">Приехали в поликлинику, но прием у врача расписан на две недели вперед</p></div>
						<div class="col-md-6 col-lg-6"><p class="triggers-block__item">Врач поставил диагноз и назначил лечение, но сомнения остались</p></div>
						<div class="col-md-6 col-lg-6"><p class="triggers-block__item">Чувствуете недомогание, ухудшилась работоспособность, но нет времени сходить к врачу</p></div>
						<div class="col-md-6 col-lg-6"><p class="triggers-block__item">Получили результаты анализов и хотите знать, что делать дальше</p></div>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="row">
						<div class="col-md-12 col-lg-12"><h2>Есть выход</h2></div>
						<div class="col-md-12 col-lg-12"><p class="triggers-block__online-cons">On-line консультации современных врачей</p></div>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="row">
						<div class="col-md-12 col-lg-12" id="ourServices"><h2>Что мы делаем:</h2></div>
						<div class="col-xs-12 col-md-6 col-lg-6">
							<div class="triggers-block__img-item triggers-block__img-item_color-1">
								<img src="/local/icon/trigger-img-1.png" alt="Помощь в выборе врача">
								<h3>Помощь в выборе врача</h3>
								<p>Находим необходимого профильного врача (педиатрия, аллергология, эндокринология и тд)</p>
							</div>
						</div>
						<div class="col-xs-12 col-md-6 col-lg-6">
							<div class="triggers-block__img-item triggers-block__img-item_color-2">
								<img src="/local/icon/trigger-img-2.png" alt="Консультации On-line">
								<h3>Консультации On-line</h3>
								<p>Организуем консультации с врачами по видеосвязи через Интернет, либо по телефону</p>
							</div>
						</div>
						<div class="hidden-xs clearfix"></div>
						<div class="col-xs-12 col-md-6 col-lg-6">
							<div class="triggers-block__img-item triggers-block__img-item_color-3">
								<img src="/local/icon/trigger-img-3.png" alt="Врачи из городов РФ">
								<h3>Врачи из городов РФ</h3>
								<p>Гарантируем прямой доступ к врачам экспертного уровня из городов РФ</p>
							</div>
						</div>
						<div class="col-xs-12 col-md-6 col-lg-6">
							<div class="triggers-block__img-item triggers-block__img-item_color-4">
								<img src="/local/icon/trigger-img-4.png" alt="Диагностика">
								<h3>Диагностика</h3>
								<p>Подбор необходимой диагностики и расшифровка результатов анализов</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="why-we">
			<div class="container-fluid">
				<div class="row">
					<div class="container">
						<div class="row">
							<div class="col-md-12 col-lg-12 why-we__line why-we__line_low">Большинство населения не имеет доступа к лучшим врачам</div>
							<div class="col-md-12 col-lg-12 why-we__line why-we__line_middle">Не каждый может себе позволить объехать полстраны чтобы найти нужного доктора</div>
							<div class="col-md-12 col-lg-12 why-we__line why-we__line_high">Современные технологии решили эту проблему</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
		
	<section>
		<div class="triggers-block-2">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-12">
						<h2 class="triggers-block-2__title">Наши преимущества:</h2>
					</div>
					<div class="col-md-6 col-lg-6">
						<div class="triggers-block-2__item">
							<img src="/local/icon/trigger2-img-1.png" alt="Удобство">
							<h2>Удобство</h2>
							<p>Общение с врачом, не выходя из дома. Без суеты и посторонних взглядов</p>
						</div>
					</div>
					<div class="col-md-6 col-lg-6">
						<div class="triggers-block-2__item">
							<img src="/local/icon/trigger2-img-2.png" alt="Скорость">
							<h2>Скорость</h2>
							<p>Консультации терапевта и педиатра в день обращения. Профильных врачей не позднее трех дней со дня заявки</p>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="col-md-6 col-lg-6">
						<div class="triggers-block-2__item">
							<img src="/local/icon/trigger2-img-3.png" alt="Качество">
							<h2>Качество</h2>
							<p>Консультации с врачами экспертного уровня</p>
						</div>
					</div>
					<div class="col-md-6 col-lg-6">
						<div class="triggers-block-2__item">
							<img src="/local/icon/trigger2-img-4.png" alt="Экономия">
							<h2>Экономия</h2>
							<p>Скидки на обследования, анализы в диагностических центрах</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="consultation-info">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12 col-lg-12">
						<div class="consultation-info__item">
							<h2>Консультации от 500 руб.</h2>
							<p>Цена консультации зависит от уровня врача и города в котором он практикует</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="get-consultation">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-12"><h2>Как получить консультацию</h2></div>
					<div class="col-xs-12 col-md-5 col-lg-5">
						<div class="get-consultation__item get-consultation__item_one">
							<h3><a href="#" class="get-consultation__item-reg">Зарегистрируйтесь</a></h3>
							<p>в системе и закажите звонок или отправьте заявку</p>
						</div>
					</div>
					<div class="hidden-xs col-md-1 col-lg-1 get-consultation__separator get-consultation__separator-one">
						<i class="get-consultation__separator-item glyphicon glyphicon-menu-right"></i>
					</div>
					<div class="col-xs-12 col-md-5 col-lg-5">
						<div class="get-consultation__item get-consultation__item_two">
							<h3>Примите звонок оператора</h3>
							<p>Он поможет выбрать доктора и согласовать время</p>
						</div>
					</div>
					<div class="col-xs-12 col-md-5 col-lg-5">
						<div class="get-consultation__item get-consultation__item_three">
							<h3><a href="#" class="get-consultation__item-pay">Оплатите консультацию</a></h3>
							<p>любым из предоставленных способов</p>
						</div>
					</div>
					<div class="hidden-xs col-md-1 col-lg-1 get-consultation__separator get-consultation__separator-two">\
						<i class="get-consultation__separator-item glyphicon glyphicon-menu-right"></i>
					</div>
					<div class="col-xs-12 col-md-5 col-lg-5">
						<div class="get-consultation__item get-consultation__item_four">
							<h3>Получите консультацию</h3>
							<p>врача в согласованное время</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-12 col-lg-12">
						<img src="/local/images/we-care-for-you.jpg" class="get-consultation__item-img" alt="Мы заботимся о Вашем душевном спокойствии">
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="our-services">
			<div class="container">
				<h2>Наши направления</h2>
				<ul class="our-services-list">
					<div class="row">
						<div class="col-md-4 col-lg-4">
							<li class="our-services-list__item">
								<span class="list-item__numb">1</span>
								<span class="list-item__text">Гинекология</span>
							</li>
							<li class="our-services-list__item">
								<span class="list-item__numb">2</span>
								<span class="list-item__text">Терапия</span>
							</li>
							<li class="our-services-list__item">
								<span class="list-item__numb">2</span>
								<span class="list-item__text">Педиатрия</span>
							</li>
							<li class="our-services-list__item">
								<span class="list-item__numb">4</span>
								<span class="list-item__text">Эндокринология</span>
							</li>
						</div>
						<div class="col-md-4 col-lg-4">
							<li class="our-services-list__item">
								<span class="list-item__numb">5</span>
								<span class="list-item__text">Диагностика</span>
							</li>
							<li class="our-services-list__item">
								<span class="list-item__numb">6</span>
								<span class="list-item__text">Кардиология</span>
							</li>
							<li class="our-services-list__item">
								<span class="list-item__numb">7</span>
								<span class="list-item__text">Аллергология</span>
							</li>
							<li class="our-services-list__item">
								<span class="list-item__numb">8</span>
								<span class="list-item__text">Урология</span>
							</li>
						</div>
						<div class="col-md-4 col-lg-4">
							<li class="our-services-list__item">
								<span class="list-item__numb">9</span>
								<span class="list-item__text">Неврология</span>
							</li>
							<li class="our-services-list__item">
								<span class="list-item__numb">10</span>
								<span class="list-item__text">Ортопедия</span>
							</li>
							<li class="our-services-list__item">
								<span class="list-item__numb">11</span>
								<span class="list-item__text">Гастроэнтерология</span>
							</li>
							<li class="our-services-list__item">
								<span class="list-item__numb">12</span>
								<span class="list-item__text">ЭКО</span>
							</li>
						</div>
					</div>
				</ul>
			</div>
		</div>
	</section>

	<section>
		<div class="our-medics">
			<div class="container" id="ourMedics">
				<h2>Наши врачи</h2>
				<div class="row">
					<div class="col-md-12 col-lg-12">
						<div class="regular slider">
							<div class="slider__item">
								<div class="our-medics__item">
									<img src="/local/images/medic-photo-1.jpg" alt="">
									<h3>Францман Ольга Ивановна</h3>
									<ul class="medic-info">
										<li class="medic-info__spec">Аллерголог-иммунолог</li>
										<li class="medic-info__prof">Врач 1 категории, кандидат м.н.</li>
										<li class="medic-info__exp">Отыт работы 10 лет</li>
										<li class="medic-info__city">г. Новосибирск</li>
									</ul>
									<a href="#" class="anim our-medics__item-more">Подробнее</a>
									<button class="our-medics__item-cons anim">Запись на консультацию</button>
							    </div>
							</div>
							<div class="slider__item">
								<div class="our-medics__item">
									<img src="/local/images/medic-photo-2.jpg" alt="">
									<h3>Алтшилер Лана Леоновна</h3>
									<ul class="medic-info">
										<li class="medic-info__spec">Аллерголог-иммунолог</li>
										<li class="medic-info__prof">Врач 1 категории, кандидат м.н.</li>
										<li class="medic-info__exp">Отыт работы 5 лет</li>
										<li class="medic-info__city">г. Москва</li>
									</ul>
									<a href="#" class="anim our-medics__item-more">Подробнее</a>
									<button class="our-medics__item-cons anim">Запись на консультацию</button>
							    </div>
							</div>
							<div class="slider__item">
								<div class="our-medics__item">
									<img src="/local/images/medic-photo-1.jpg" alt="">
									<h3>Францман Ольга Ивановна</h3>
									<ul class="medic-info">
										<li class="medic-info__spec">Аллерголог-иммунолог</li>
										<li class="medic-info__prof">Врач 1 категории, кандидат м.н.</li>
										<li class="medic-info__exp">Отыт работы 10 лет</li>
										<li class="medic-info__city">г. Новосибирск</li>
									</ul>
									<a href="#" class="anim our-medics__item-more">Подробнее</a>
									<button class="our-medics__item-cons anim">Запись на консультацию</button>
							    </div>
							</div>
							<div class="slider__item">
								<div class="our-medics__item">
									<img src="/local/images/medic-photo-2.jpg" alt="">
									<h3>Алтшилер Лана Леоновна</h3>
									<ul class="medic-info">
										<li class="medic-info__spec">Аллерголог-иммунолог</li>
										<li class="medic-info__prof">Врач 1 категории, кандидат м.н.</li>
										<li class="medic-info__exp">Отыт работы 5 лет</li>
										<li class="medic-info__city">г. Москва</li>
									</ul>
									<a href="#" class="anim our-medics__item-more">Подробнее</a>
									<button class="our-medics__item-cons anim">Запись на консультацию</button>
							    </div>
							</div>
							<div class="slider__item">
								<div class="our-medics__item">
									<img src="/local/images/medic-photo-1.jpg" alt="">
									<h3>Францман Ольга Ивановна</h3>
									<ul class="medic-info">
										<li class="medic-info__spec">Аллерголог-иммунолог</li>
										<li class="medic-info__prof">Врач 1 категории, кандидат м.н.</li>
										<li class="medic-info__exp">Отыт работы 10 лет</li>
										<li class="medic-info__city">г. Новосибирск</li>
									</ul>
									<a href="#" class="anim our-medics__item-more">Подробнее</a>
									<button class="our-medics__item-cons anim">Запись на консультацию</button>
							    </div>
							</div>
							<div class="slider__item">
								<div class="our-medics__item">
									<img src="/local/images/medic-photo-2.jpg" alt="">
									<h3>Алтшилер Лана Леоновна</h3>
									<ul class="medic-info">
										<li class="medic-info__spec">Аллерголог-иммунолог</li>
										<li class="medic-info__prof">Врач 1 категории, кандидат м.н.</li>
										<li class="medic-info__exp">Отыт работы 5 лет</li>
										<li class="medic-info__city">г. Москва</li>
									</ul>
									<a href="#" class="anim our-medics__item-more">Подробнее</a>
									<button class="our-medics__item-cons anim">Запись на консультацию</button>
							    </div>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-lg-12">
						<div class="our-medics__all">
							<div class="col-md-12 col-lg-12 anim"><a href="#">Все врачи</a></div>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="our-questions">
			<div class="container" id="ourQuestions">
				<h2>Вопросы, которые нам часто задают</h2>
				<div class="row">
					<div class="col-md-12 col-lg-12">
						<div class="our-questions__item">
							<div class="our-questions__item-header anim">
								<i class="question-item-header__icon anim glyphicon glyphicon-menu-right"></i>
								<p class="question-item-header__text">Вы работаете с экстренными случаями?</p>
							</div>
							<div class="our-questions__item-body">
								<p>Ответ на вопрос тут</p>
							</div>
						</div>
						<div class="our-questions__item">
							<div class="our-questions__item-header anim">
								<i class="question-item-header__icon anim glyphicon glyphicon-menu-right"></i>
								<p class="question-item-header__text">Как получить интерпритацию анализов?</p>
							</div>
							<div class="our-questions__item-body">
								<p class="our-questions-item-body__text">Ответ на вопрос тут</p>
							</div>
						</div>
						<div class="our-questions__item">
							<div class="our-questions__item-header anim">
								<i class="question-item-header__icon anim glyphicon glyphicon-menu-right"></i>
								<p class="question-item-header__text">Как получить второе мнение по диагнозу?</p>
							</div>
							<div class="our-questions__item-body">
								<p class="our-questions-item-body__text">Ответ на вопрос тут</p>
							</div>
						</div>
						<div class="our-questions__item">
							<div class="our-questions__item-header anim">
								<i class="question-item-header__icon anim glyphicon glyphicon-menu-right"></i>
								<p class="question-item-header__text">Как подобрать нужную клинику для лечения?</p>
							</div>
							<div class="our-questions__item-body">
								<p class="our-questions-item-body__text">Ответ на вопрос тут</p>
							</div>
						</div>
						<div class="our-questions__item">
							<div class="our-questions__item-header anim">
								<i class="question-item-header__icon anim glyphicon glyphicon-menu-right"></i>
								<p class="question-item-header__text">Как получить мед.заключение от зарубежных врачей?</p>
							</div>
							<div class="our-questions__item-body">
								<p class="our-questions-item-body__text">Ответ на вопрос тут</p>
							</div>
						</div>
						<div class="our-questions__item">
							<div class="our-questions__item-header anim">
								<i class="question-item-header__icon anim glyphicon glyphicon-menu-right"></i>
								<p class="question-item-header__text">Как найти аналог лекарству?</p>
							</div>
							<div class="our-questions__item-body">
								<p class="our-questions-item-body__text">Ответ на вопрос тут</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12 col-lg-12 get-cons">
						<div class="container">
							<div class="get-cons-item">
								<p class="get-cons-item__text">Получите консультацию врача не выходя из дома</p>
								<a href="#" class="get-cons-item__btn anim">Заполнить заявку</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Футер -->
	<?
		if(file_exists($_SERVER['DOCUMENT_ROOT'].'/local/include/footer.php')) 
		{
			require_once($_SERVER['DOCUMENT_ROOT'].'/local/include/footer.php');
		}
	?>
	
	<!-- Модальные окна -->
	<?
		if(file_exists($_SERVER['DOCUMENT_ROOT'].'/local/include/modals.php')) 
		{
			require_once($_SERVER['DOCUMENT_ROOT'].'/local/include/modals.php');
		}
	?>
</body>
</html>
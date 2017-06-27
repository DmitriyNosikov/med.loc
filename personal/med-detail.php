<!DOCTYPE html>
<html lang="ru">
<head>
	<meta name="keywodrds" content="">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

	<link rel="stylesheet" href="/local/blocks/personal/personal.css">

	<!-- Bootstrap -->
	<link rel="stylesheet" href="/local/blocks/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="/local/blocks/bootstrap/bootstrap-theme.css">

	<!-- Slick Slider -->
	<link rel="stylesheet" href="/local/blocks/slick/slick.css">
	<link rel="stylesheet" href="/local/blocks/slick/slick-theme.css">

	<!-- Ion Calendar -->
	<link rel="stylesheet" href="/local/blocks/ion.calendar/ion.calendar.css">

	<!-- Main scripts -->
	<script src="/local/blocks/jquery/jquery-3.2.1.js"></script>
	<script src="/local/blocks/bootstrap/bootstrap.js"></script>
	<script src="/local/blocks/main/main.js"></script>
	<script src="/local/blocks/personal/personal.js"></script>

	<!-- Masked Input -->
	<script src="/local/blocks/maskedInput/jquery.maskedinput.js"></script>

	<!-- Slick Slider -->
	<script src="/local/blocks/slick/slick.js"></script>

	<!-- Ion Calendar -->
	<script src="/local/blocks/ion.calendar/moment-with-locales.min.js"></script>
	<script src="/local/blocks/ion.calendar/ion.calendar.js"></script>

	<title>Медицинские эксперты</title>
</head>
<body>
	<!-- Хэдер -->
	<?
		if(file_exists($_SERVER['DOCUMENT_ROOT'].'/local/include/header_personal.php')) 
		{
			require_once($_SERVER['DOCUMENT_ROOT'].'/local/include/header_personal.php');
		}
	?>

	<div class="tab-panel">
		<!-- Header таб-панели с основной информацией о выбранном враче -->
		<div class="tab-header">
			<div class="container">
				<div class="col-md-12">
					<div class="med-detail__info">
						<h1 class="med-detail__name">Алтшилер Лана Леоновна</h1>
						<div class="med-detail__spec">Педиатр, Гастроэнтеролог, Диетолог</div>
						<p class="med-detail__desc">Врач 1 категории, кандидат м.н., опыт работы 5 лет</p>
						<div class="med-detail__profile">
							<div class="med-detail__profile-item anim">Консультант</div>
							<div class="med-detail__profile-item med-detail__profile-item_active anim">Эксперт</div>
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="med-detail__tabs">
						<div data-tab-target=".tab__med-detail" class="med-detail__tabs-item med-detail__tabs-item-left anim med-detail__tabs-item_active">Информация о враче</div>
						<div data-tab-target=".tab__med-time" class="med-detail__tabs-item med-detail__tabs-item-right anim">Расписание врача</div>
					</div>
				</div>
			</div>
		</div>
		<!--Таб с детальной информацией о медике-->
		<div class="tab tab__med-detail tab-active">
			<section class="med-detail">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="med-detail__about">
								<img src="/local/images/medic-photo-2.jpg" alt="Алтшилер Лана Леоновна" class="med-detail__about-img">
								<p class="med-detail__about-text">Имеется большой практический опыт лечебной и профилактической работы с детьми всех возрастных групп. Владение диагностикой 
								и лечением болезней детского возраста, вопросами вакцинации, в том числе вакцинацией по индивидуальному календарю. Консультации по вопросам ухода, вскармливания и введения прикорма у детей раннего возраста.</p>
								<div class="med-detail__about-price">
									<p class="about-price__text">Стоимость консультации</p>
									<span class="about-price__price">800 &#8381;</span>
									<a href="#" class="about-price__get-cons anim">Запись на консультацию</a>
								</div>
							</div>
						</div>
						<div class="col-md-8">
							<div class="med-detail__exp">
								<div class="med-detail__exp-item">
									<h2 class="med-detail__exp-title">Опыт работы</h2>
									<p class="med-detail__exp-text">2009 г. - н. в.  — участковый врач-педиатр  ДГП N 7 г. Москва<br> 
									2006 г. - 2009 г.  — врач-педиатр МУЗ ДГП N 4 г. Белгород<br> 
									1992 г. - 2006 г. — врач-педиатр участка больницы N 1 г. Белгород<br></p>
								</div>
								<div class="med-detail__exp-item">
									<h2 class="med-detail__exp-title">Образование</h2>
									<p class="med-detail__exp-text">1991 г.-1992 г. — клиническая интернатура по педиатрии г. Иркутск<br>
									1991 г. — окончание Иркутского ГМИ по специальности "Педиатрия"<br></p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="med-detail__diplomas">
								<h3 class="med-detail__diplomas-title">Сертификаты и дипломы</h3>
								<img src="/local/images/diploma-1.jpg" class="med-detail__diplomas-item">
								<img src="/local/images/diploma-2.jpg" class="med-detail__diplomas-item">
							</div>
						</div>
						<div class="col-md-12 block-delimmiter"></div>
					</div>
				</div>
			</section>

			<section>
				<div class="our-medics">
					<div class="container" id="ourMedics">
						<h1>Другие врачи</h1>
						<div class="row">
							<div class="col-md-12">
								<div class="regular slider">
									<div class="slider__item">
										<div class="our-medics__item">
											<img src="/local/images/medic-photo-1.jpg" alt="">
											<h3>Францман Ольга Ивановна</h3>
											<ul class="medic-info">
												<li class="medic-info__spec">Аллерголог-иммунолог</li>
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
											</ul>
											<a href="#" class="anim our-medics__item-more">Подробнее</a>
											<button class="our-medics__item-cons anim">Запись на консультацию</button>
									    </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>

		<!--Таб с расписанием медика-->
		<div class="tab tab__med-time">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="tab__med-time_info">Выберете удобную дату и время консультации (время населённого пункта: <span>Москва</span>. <a href="#">Выбрать другой</a>)</div>
					</div>
					<div class="col-md-6">
						<div class="tab__med-time_calendar"></div>
					</div>
					<div class="col-md-6">
						<div class="tab__med-time_time">
							<div class="time-header">12 мая</div>
							<div class="time-body">
								<div class="time-body__item">Нет рабочих часов</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

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
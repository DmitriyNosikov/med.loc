<!DOCTYPE html>
<html lang="ru">
<head>
	<meta name="keywodrds" content="">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

	<link rel="stylesheet" href="/local/blocks/personal/personal.css">

	<!-- Bootstrap -->
	<link rel="stylesheet" href="/local/blocks/bootstrap/bootstrap.css">
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
	<header class="header_in_lk">
	<!-- <header> -->
		<div class="main-menu">
			<div class="container-fluid">
				<div class="row">
					<div class="container">
						<div class="row">
							<div class="header-line">
								<div class="col-md-3">
									<div class="logo">
										<a href="/">
											<img src="/local/images/logo.png" alt="Сайт онлайн консультаций медецинских экспертов">
										</a>
									</div>
								</div>
								<div class="col-md-3">
									<div class="header-prone">
										<img class="header-phone__icon" src="/local/icon/phone.png" alt="">
										<a href="tel:88004567899" class="header-phone__text">8 800 456 7899</a>
									</div>
								</div>
								<div class="col-md-6">
									<noindex>
										<div class="header-action">
											<a class="header-action__enter anim" href="#">Войти</a>
											<a class="header-action__reg anim" href="#">Зарегистрироваться</a>
											<a class="header-action__feedback header-action__feedback-green anim" href="#">Оставить заявку</a>
										</div>
									</noindex>	
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="header-menu">
						<nav class="navbar navbar-default" role="navigation">
							<div class="container">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-menu">
										<span class="sr-only">Главное меню</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
								<div class="collapse navbar-collapse" id="main-menu">
									<ul class="nav navbar-nav">
										<li><a href="#aboutService" class="anim anchorLink">О сервисе</a></li>
										<li><a href="#ourServices" class="anim anchorLink">Услуги</a></li>
										<li><a href="#ourMedics" class="anim anchorLink">Врачи</a></li>
										<li><a href="#ourQuestions" class="anim anchorLink">Вопросы</a></li>
									</ul>
								</div>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</header>

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

	<footer>
		<div class="container-fluid">
		<div class="row">
			<div class="container">
				<div class="footer">
					<div class="row">
						<div class="col-md-6">
							<a href="#" class="footer__item-link" target="__blank">Правила оказания услуг Медицинские эксперты</a>
						</div>
						<div class="col-md-6">
							<a href="#" class="footer__item-link footer__item-link_right" target="__blank">Соглашение о персональных данных</a>
						</div>
						<div class="col-md-7">
							<img src="/local/icon/uniteller-logo.png" alt="Платежная система Uniteller" class="footer-item__pay-logo">
							<p class="footer-item__pay-text">Способ оплаты банковской картой через систему UNITELLER<br> Комиссия: 0р</p>
						</div>
						<div class="col-md-5 footer__item-soc_right">
							<a href="#" class="footer__item-soc footer__item-soc-vk anim" title="Мы в ВКонтакте">
								<img src="/local/icon/vk.png" alt="Мы в ВКонтакте">
							</a>
							<a href="#" class="footer__item-soc footer__item-soc-fb anim" title="Мы в Facebook">
								<img src="/local/icon/fb.png" alt="Мы в Facebook">
							</a>
							<a href="#" class="footer__item-soc footer__item-soc-inst anim" title="Мы в Instagram">
								<img src="/local/icon/inst.png" alt="Мы в Instagram">
							</a>
						</div>
						</div>
						<div class="col-md-12">
							<p class="footer-item__pay-info">
								Оплата услуг сервиса «Медицинские эксперты» производится с помощью предложенных методов оплат через платежный сервис компании Uniteller. После подтверждения заказа вы будете перенаправлены на защищенную платежную страницу Uniteller, где необходимо будет ввести данные для оплаты заказа. После успешной оплаты на указанную в форме оплаты электронную почту будет направлен электронный чек с информацией о заказе и данными по произведенной оплате.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</footer>
	<div class="modal-container fixed-top">
		<!-- Модальное окно Входа -->
		<div class="modal-form modal-container__enter">
			<a href="#" class="modal-container__close-btn anim"></a>
			<div class="modal-container__header anim">Вход</div>
			<form action="" method="POST">
				<input type="text" name="user-login" placeholder="E-mail или телефон" class="modal-container__enter-login">
				<div class="form-group">
					<input type="password" name="user-password" placeholder="Пароль" class="modal-container__enter-pass">
					<div class="modal-container__enter-remember-block">
						<input type="checkbox" name="user-remember" id="remember-me" class="modal-container__enter-remember">
						<label for="remember-me">
							<img src="/local/icon/slider-numb-bg.png" alt="Запомнить мои данные" class="anim">
							<span>Запомнить</span>
						</label>
					</div>
				</div>
				<a href="#" class="modal-container__enter-forgot">Напомнить пароль</a>
				<input type="submit" name="go-enter" value="Войти" class="modal-container__enter-go-enter anim">
				<a href="#" class="modal-container__enter-reg anim">Регистрация</a>
			</form>
		</div>

		<!-- Модальное окно регистрации -->
		<div class="modal-form modal-container__reg">
			<a href="#" class="modal-container__close-btn anim"></a>
			<div class="modal-container__header anim">Регистрация</div>
			<form action="" method="POST">
				<input type="text" name="user-name" placeholder="Имя" class="modal-container__reg-name">
				<input type="text" name="user-name" placeholder="E-mail" class="modal-container__reg-mail">
				<input type="password" name="user-password" placeholder="Пароль" class="modal-container__reg-pass">
				<input type="password" name="user-confirm-password" placeholder="Повторите пароль" class="modal-container__reg-conf-pass">
				<div class="modal-form__phone_group">
					<select name="modal-form__phone-code">
						<option value="+7">+7</option>
						<option value="+8">+8</option>
					</select>
					<input type="text" name="user-phone" placeholder="Ваш телефон" class="modal-container__user-phone maskedPhone">
				</div>
				<div class="modal-container__reg-remember-block">
					<div class="confirm-phone">
						<span>На этот номер придет СМС с кодом подтверждения</span>
						<input type="hidden" name="confirm-code-id" value="1" class="confirm-phone__id">
						<input type="text" name="user-confirm=code" placeholder="Код подтверждения из СМС" class="confirm-phone__user-code">
					</div>
				</div>

				<div class="modal-container__reg-accept-all">
					<input type="checkbox" name="user-remember" id="i-agree-with-all" class="modal-container__reg-agree">
					<label for="i-agree-with-all">
						<img src="/local/icon/slider-numb-bg.png" alt="Запомнить мои данные" class="anim">
						<span>Я принимаю условия <a href="#">пользовательского соглашения</a></span>
					</label>
				</div>
				<input type="submit" name="go-reg" value="Зарегистрироваться" class="modal-container__reg-go-reg anim">
			</form>
		</div>

		<!-- Модальное окно заявки -->
		<div class="modal-form modal-container__cons">
			<a href="#" class="modal-container__close-btn anim"></a>
			<div class="modal-container__header anim">Оставить заявку</div>
			<form action="" method="POST">
				<input type="text" name="user-name" placeholder="Ваше имя" class="modal-container__enter-login">
				<div class="modal-form__phone_group">
					<select name="modal-form__phone-code">
						<option value="+7">+7</option>
						<option value="+8">+8</option>
					</select>
					<input type="text" name="user-phone" placeholder="Ваш телефон" class="modal-container__user-phone maskedPhone">
				</div>
				<a href="#" class="modal-container__go-cons anim">Оставить заявку</a>
			</form>
		</div>
		<div class="modal-bg"></div>
	</div>
</body>
</html>
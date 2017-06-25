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

	<!-- Main scripts -->
	<script src="/local/blocks/jquery/jquery-3.2.1.js"></script>
	<script src="/local/blocks/bootstrap/bootstrap.js"></script>
	<script src="/local/blocks/main/main.js"></script>
	<script src="/local/blocks/personal/personal.js"></script>

	<!-- Masked Input -->
	<script src="/local/blocks/maskedInput/jquery.maskedinput.js"></script>

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

	<section class="operator-cons">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Консультация дежурного врача</h1>
					<h2>Один из наших лучших врачей примет Вас в течение нескольких минут</h2>
				</div>
				<div class="col-md-6">
					<div class="operator-cons__item operator-cons__item-one">
						<h3 class="operator-cons__item-title">Врач терапевт</h3>
						<p class="operator-cons__item-text">Занимается диагностикой, лечением и профилактикой заболеваний внутренних органов. Это первый специалист, к которому обращаются люди с любой проблемой, возникшей с их здоровьем.</p>
						<a href="#" class="operator-cons__item-btn anim">Получить консультацию терапевта</a>
						<span class="operator-cons__item-price">Стоимость консультации 800 &#8381;</span>
					</div>
				</div>
				<div class="col-md-6">
					<div class="operator-cons__item operator-cons__item-two">
						<h3 class="operator-cons__item-title">Врач педиатр</h3>
						<p class="operator-cons__item-text">Специализируется на диагностике, лечении и профилактике заболеваний у детей с рождения и до достижения ими 18 лет.</p>
						<a href="#" class="operator-cons__item-btn anim">Получить консультацию терапевта</a>
						<span class="operator-cons__item-price">Стоимость консультации 800 &#8381;</span>
					</div>
				</div>
				<div class="col-md-12">
					<div class="operator-cons__item-more">
						<span class="operator-cons__item-or">или</span>
						<a href="#" class="operator-cons__item-prof">Записаться к профильному специалисту</a>
					</div>
				</div>
				<div class="col-md-6"></div>
			</div>
		</div>
	</section>

	<section class="our-medics">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Наши врачи</h1>
				</div>
				<div class="col-md-12">
					<div class="our-medics__filter">
						<a href="#" class="our-medics__filter-item our-medics__filter-item-active">Все врачи</a>
						<a href="#" class="our-medics__filter-item">Для взрослых</a>
						<a href="#" class="our-medics__filter-item">Для детей</a>
						<a href="#" class="our-medics__filter-item">Медицинский юрист</a>
						<div class="filter-item__spec-block">
							<label>
								<span>Специальность:</span>
								<select name="medic-spec" class="our-medics__filter-item-spec">
									<option value="0">любая</option>
									<option value="1">педиатр</option>
									<option value="2">терапевт</option>
									<option value="3">дерматолог</option>
								</select>
							</label>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="our-medics__list">
					<div class="col-md-12">
						<div class="our-medics__list-item">
							<div class="medic-photo">
								<img class="medic-photo__img" src="/local/images/medic-photo-1.jpg" alt="Францман Ольга Ивановна">
								<a href="#" class="medic-photo__more anim">Подробнее</a>
							</div>
							<div class="medic-info">
								<h2>Францман Ольга Ивановна</h2>
								<ul class="medic-info-list">
									<li class="medic-info-list__spec">Аллерголог-иммунолог</li>
									<li class="medic-info-list__prof">Врач 1 категории, кандидат м.н.</li>
									<li class="medic-info-list__exp">Отыт работы 5 лет</li>
									<li class="medic-info-list__city">г. Москва</li>
								</ul>
							</div>
							<div class="medic-cons">
								<p class="medic-cons__text">Стоимость консультации</p>
								<span class="medic-cons__price">800 &#8381;</span>
								<a href="#" class="medic-cons__get-cons anim">Запись на консультацию</a>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="our-medics__list-item">
							<div class="medic-photo">
								<img class="medic-photo__img" src="/local/images/medic-photo-1.jpg" alt="Францман Ольга Ивановна">
								<a href="#" class="medic-photo__more anim">Подробнее</a>
							</div>
							<div class="medic-info">
								<h2>Францман Ольга Ивановна</h2>
								<ul class="medic-info-list">
									<li class="medic-info-list__spec">Аллерголог-иммунолог</li>
									<li class="medic-info-list__prof">Врач 1 категории, кандидат м.н.</li>
									<li class="medic-info-list__exp">Отыт работы 5 лет</li>
									<li class="medic-info-list__city">г. Москва</li>
								</ul>
							</div>
							<div class="medic-cons">
								<p class="medic-cons__text">Стоимость консультации</p>
								<span class="medic-cons__price">800 &#8381;</span>
								<a href="#" class="medic-cons__get-cons anim">Запись на консультацию</a>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="our-medics__list-item">
							<div class="medic-photo">
								<img class="medic-photo__img" src="/local/images/medic-photo-1.jpg" alt="Францман Ольга Ивановна">
								<a href="#" class="medic-photo__more anim">Подробнее</a>
							</div>
							<div class="medic-info">
								<h2>Францман Ольга Ивановна</h2>
								<ul class="medic-info-list">
									<li class="medic-info-list__spec">Аллерголог-иммунолог</li>
									<li class="medic-info-list__prof">Врач 1 категории, кандидат м.н.</li>
									<li class="medic-info-list__exp">Отыт работы 5 лет</li>
									<li class="medic-info-list__city">г. Москва</li>
								</ul>
							</div>
							<div class="medic-cons">
								<p class="medic-cons__text">Стоимость консультации</p>
								<span class="medic-cons__price">800 &#8381;</span>
								<a href="#" class="medic-cons__get-cons anim">Запись на консультацию</a>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="our-medics__list-item">
							<div class="medic-photo">
								<img class="medic-photo__img" src="/local/images/medic-photo-1.jpg" alt="Францман Ольга Ивановна">
								<a href="#" class="medic-photo__more anim">Подробнее</a>
							</div>
							<div class="medic-info">
								<h2>Францман Ольга Ивановна</h2>
								<ul class="medic-info-list">
									<li class="medic-info-list__spec">Аллерголог-иммунолог</li>
									<li class="medic-info-list__prof">Врач 1 категории, кандидат м.н.</li>
									<li class="medic-info-list__exp">Отыт работы 5 лет</li>
									<li class="medic-info-list__city">г. Москва</li>
								</ul>
							</div>
							<div class="medic-cons">
								<p class="medic-cons__text">Стоимость консультации</p>
								<span class="medic-cons__price">800 &#8381;</span>
								<a href="#" class="medic-cons__get-cons anim">Запись на консультацию</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

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
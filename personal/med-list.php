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
	<!-- Хэдер -->
	<?
		if(file_exists($_SERVER['DOCUMENT_ROOT'].'/local/include/header_personal.php')) 
		{
			require_once($_SERVER['DOCUMENT_ROOT'].'/local/include/header_personal.php');
		}
	?>

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
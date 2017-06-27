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

	<section class="personal-page">
		<div class="hidden-xs personal-page__menu">
			<div class="container-fluid">
				<div class="row">
					<div class="container">
						<div class="personal-page__header">
							<div class="row">
								<div class="col-md-3 col-lg-3">Мои данные</div>
								<div class="col-md-3 col-lg-3">Баланс</div>
								<div class="col-md-3 col-lg-3">Мои консультации</div>
								<div class="col-md-3 col-lg-3">Документы</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="personal-page__info">
			<div class="container-fluid">
				<div class="row">
					<div class="container">
						<div class="personal-page__body">
							<div class="row">
								<div class="col-xs-12 col-md-3 col-lg-3">
									<div class="hidden-md hidden-lg hidden-col-header">Мои данные</div>
									<div class="user-personal-info">
										<form action="" name="user-information" method="POST" enctype="multipart/form-data">
											<div class="personal-page__user-photo">
												<img src="/local/icon/avatar.png" alt="Ваш Аватар">
												<label>
													<span>Загрузить фотографию</span>
													<input type="file" name="user-upload-photo" class="user-upload-new-photo">
												</label>
											</div>
											<div class="personal-page__user-info">
												<div class="user-info__name">
													<span class="input-label">Имя</span>
													<!-- <input type="text" name="user-name" value="Долинская Дарья Александровна"> -->
													<textarea name="user-name">Долинская Дарья Александровна</textarea>
												</div>
												<div class="user-info__phone">
													<span class="input-label">Номер телефона</span>
													<div class="phone-group">
														<select name="user-phone-code">
															<option value="">+7</option>
															<option value="">+8</option>
														</select>
														<input type="text" name="user-phone" placeholder="Ваш телефон" value="9620044118">
													</div>
												</div>
											</div>
											<input type="submit" name="user-info-save" class="anim" value="Сохранить">
										</form>
									</div>
									<div class="personal-page__user-pass">
										<h2>Смена пароля:</h2>
										<form action="" name="user-change-pass" method="POST">
											<span class="input-label">Текущий пароль</span>
											<input type="text" name="user-cur-pass" value="" placeholder="---">
											<span class="input-label">Новый пароль</span>
											<input type="text" name="user-new-pass" value="">
											<span class="input-label">Повторите новый пароль</span>
											<input type="text" name="user-new-pass-conf" value="">
											<input type="submit" name="user-save-pass" class="anim" value="Сохранить новый пароль">
										</form>
									</div>
								</div>
								<div class="col-xs-12 col-md-3 col-lg-3">
									<div class="hidden-md hidden-lg hidden-col-header">Баланс</div>
									<div class="user-balance">
										<span class="user-balance__val">0 &#8381;</span>
										<a href="#" class="user-balanse__add anim">Пополнить баланс</a>
									</div>
								</div>
								<div class="col-xs-12 col-md-3 col-lg-3">
									<div class="hidden-md hidden-lg hidden-col-header">Мои консультации</div>
									<div class="user-cons__item">
										<div class="user-cons__item-date">12.05.2017</div>
										<div class="user-cons__item-fio">Богданова Людмила Петровна</div>
									</div>
									<div class="user-cons__item">
										<div class="user-cons__item-date">12.05.2017</div>
										<div class="user-cons__item-fio">Богданова Людмила Петровна</div>
									</div>
									<div class="user-cons__item">
										<div class="user-cons__item-date">12.05.2017</div>
										<div class="user-cons__item-fio">Богданова Людмила Петровна</div>
									</div>
								</div>
								<div class="col-xs-12 col-md-3 col-lg-3">
									<div class="hidden-md hidden-lg hidden-col-header">Документы</div>
									<div class="user-documents__form">
										<form action="" method="POST" name="user-documents__upload">
											<label>
												<span class="anim">Загрузить документ</span>
												<input type="file" name="user-documents__upload-btn">
											</label>
										</form>
									</div>
									<div class="user-documents__list">
										<div class="user-documents__list-item">
											<a href="#" class="anim">Результаты анализов Богданова С.А.pdf</a>
										</div>
										<div class="user-documents__list-item">
											<a href="#" class="anim">Результаты анализов Богданова С.А.pdf</a>
										</div>
										<div class="user-documents__list-item">
											<a href="#" class="anim">Результаты анализов Богданова С.А.pdf</a>
										</div>
										<div class="user-documents__list-item">
											<a href="#" class="anim">Результаты анализов Богданова С.А.pdf</a>
										</div>
										<div class="user-documents__list-item">
											<a href="#" class="anim">Результаты анализов Богданова С.А.pdf</a>
										</div>
									</div>
								</div>
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
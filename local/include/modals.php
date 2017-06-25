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
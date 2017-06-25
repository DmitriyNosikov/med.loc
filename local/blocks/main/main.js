$(function(){
	$(document).ready(function(){
		//Init main flicker slider
		var fliskerSlider = $('.flicker-example');
		if(typeof(fliskerSlider) !== 'undefined' && fliskerSlider.length > 0)
		{
			$('.flicker-example').flicker();
		}
	});

	//Задаем маску для поля телефона
	// $('#maskedPhone').mask("(999)-999-99-99");
	$('.maskedPhone').mask("(999)9999999");
	$('.maskedPhone').mask("(999)9999999");

	//Обработка кликов по ответам на вопросы	
	$('.our-questions__item').bind('click', function(){
		var $this = $(this),
			parent = $this.parents('.our-questions'),
			thisQuestionHead = $this.find('.our-questions__item-header'),
			thisQuestionAnsw = $this.find('.our-questions__item-body'),
			activeQuestionHead = parent.find('.our-questions__item-header-active'),
			activeQuestionParent = activeQuestionHead.parents('.our-questions__item'),
			activeQuestionAnsw = activeQuestionParent.find('.our-questions__item-body');

		//Если кликаем по уже открытому элементу - закрываем его
		if(thisQuestionHead.hasClass('our-questions__item-header-active'))
		{
			thisQuestionHead.removeClass('our-questions__item-header-active');
			thisQuestionAnsw.hide(150);
		}
		else
		{
			//Скрываем все активные ответы
			if(activeQuestionHead.length > 0)	
			{
				activeQuestionHead.removeClass('our-questions__item-header-active');
				activeQuestionAnsw.hide(150);
			}

			//Активируем тот ответ, по которому кликнули
			if(thisQuestionHead.length > 0)
			{
				thisQuestionHead.addClass('our-questions__item-header-active');
				thisQuestionAnsw.show(150);
			}
		}
	});

	//Прокрутка по странице к якорям
	$('a.anchorLink').on('click', function(){
		$("html, body").animate({
			scrollTop: $($(this).attr("href")).offset().top + "px"
		}, 400);
		return false;
	});

	//Закрытие модалок входа, регистрации и заявки
	$('.modal-container__close-btn').on('click', function(e){
		closeModal(e);
	});
	
	$('.modal-bg').on('click', function(e){
		closeModal(e);
	});

	function closeModal(e)
	{
		var $this = $(e),
			activeModal = $('.modal-active'),
			activeModalBG = $('.modal-bg-active')
			activeModalContainer = $('.modal-container-active');

		if(activeModal.length > 0)
		{
			activeModal.removeClass('modal-active');
			activeModalBG.removeClass('modal-bg-active');
			activeModalContainer.removeClass('modal-container-active');

			activeModal.fadeOut(200);
			activeModalBG.fadeOut(50)
			activeModalContainer.fadeOut();
		}
	}

	//Открытие модалки входа
	$('.header-action__enter').on('click', function(){
		openModal('.modal-container__enter');
	});

	//Открытие модалки регистрации
	$('.header-action__reg').on('click', function(){
		openModal('.modal-container__reg');
	});

	//Открытие модалки на отправку заявки
	$('.header-action__feedback').on('click', function(){
		openModal('.modal-container__cons');
	});

	$('.get-cons-item__btn').on('click', function(){
		openModal('.modal-container__cons');
	});

	function openModal(target)
	{
		var target = $(target),
			modalBG = $('.modal-bg'),
			modalContainer = $('.modal-container');

		if(target.length > 0)
		{
			target.addClass('modal-active');
			modalBG.addClass('modal-bg-active');
			modalContainer.addClass('modal-container-active');

			target.fadeIn(200);
			modalBG.fadeIn(50);
			modalContainer.fadeIn();
		}
	}

	//Init main slick slider
	var slickSlider = $(".regular"),
		clientWidth = window.innerWidth,
		slidesPerPage = 2,
		sliderHTML = $('.our-medics .regular').html(),
		addNewSlider = false;

	//Данное решение сделано для адаптации слайдера, т.к. стандартными
	//CSS средствами это сделать не получается полноценно.
	//Если разрешение экрана > 770, показываем и листаем по 1 слайду соответственно
	if(clientWidth < 770)
	{
		slidesPerPage = 1;
		addNewSlider = true;
	}

	function initSlickSlider(){
		if(addNewSlider) return false;

		clientWidth = window.innerWidth;

		console.log(clientWidth);

		if(clientWidth < 770)
		{
			slidesPerPage = 1;
			addNewSlider = true;

			$('.our-medics .regular').empty();
			$('.our-medics .regular').attr('class', 'regular');
			$('.our-medics .regular').html(sliderHTML);

			$(".regular").slick({
				dots: true,
				arrows: true,
				infinite: true,
				slidesToShow: slidesPerPage,
				slidesToScroll: slidesPerPage
			});
		}
	};

	window.onresize = function(){
		initSlickSlider();
	};

	if(typeof(slickSlider) !== 'undefined' && slickSlider.length > 0)
	{
		$(".regular").slick({
			dots: true,
			arrows: true,
			infinite: true,
			slidesToShow: slidesPerPage,
			slidesToScroll: slidesPerPage
		});
	}
});
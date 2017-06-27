$(function(){
	//Динамическое отслеживание изменения инпута для загрузки фото
	$('.user-upload-new-photo').on('change', function(){
		var $this = $(this),
			file = this.files[0];

		if(typeof(file.name) !== 'undefined')
		{
			var formData = new FormData();
			formData.append('userNewPhoto', file);
		}
	});

	//Календарь с расписанием врача
	$(".tab__med-time_calendar").ionCalendar({
	    lang: "ru",
	    sundayFirst: false,
	    years: "80",
	    format: "DD.MM.YYYY",
	    onClick: function(date){
	        console.log('Selected Date: ' + date);
	    }
	});

	//Табы с детальной информацией о враче и расписанием его работы
	$('.med-detail__tabs-item').on('click', function(){
		var $this = $(this),
			curOpenedTab = $('.med-detail__tabs-item_active'),
			curOpenedTabWindow = $('.tab-active'),
			target = $this.data('tab-target'),
			targetTab = $(target);

		if(targetTab.length > 0)
		{
			if(curOpenedTab.length > 0) curOpenedTab.removeClass('med-detail__tabs-item_active');
			if(curOpenedTabWindow.length > 0) curOpenedTabWindow.removeClass('tab-active');

			$this.addClass('med-detail__tabs-item_active');
			targetTab.addClass('tab-active');
		}
	});
});
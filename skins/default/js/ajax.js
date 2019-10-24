$(document).ready(function () {
	$('#submit-id').on('click', function () {
		if ($.trim($('#login').val()) === '') {
			$('#error-login').html('Вы не ввели Имя!');
			return false;
		} else {
			$('#error-login').html(' ');
		}
		if ($.trim($('#email').val()) === '') {
			$('#error-email').html('Вы не ввели e-mail!');
			return false;
		} else {
			var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
			var address = $.trim($('#email').val());
			if(!reg .test(address)) {
				$('#error-email').html('Не верный e-mail!');
				return false;
			} else {
				$('#error-email').html(' ');
			}
		}

		if ($.trim($('#text').val()) === '') {
			$('#error-text').html('Вы не ввели текст сообщения!');
			return false;
		} else {
			$('#error-text').html(' ');
		}
		$('#submit-id').prop('disabled', true);

		$.ajax({
			url: 'http://mysite/comments/main_ajax?ajax=1',
			method: 'POST',
			data: {login: $('#login').val(),
				email: $('#email').val(),
				comment: $('#text').val()}
		}).done(function (data) {
			$('#comment_ajax').html(data);
			$('#submit-id').prop('disabled', false);
			$('#login').val('');
			$('#email').val('');
			$('#text').val('');
			$('#info').html('Комментарий успешно добавлен!')
			window.scrollTo(0,0);
		});
	})
});

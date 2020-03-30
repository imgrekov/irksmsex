$(function () {

	// Константы для счетчика сообщений
	PRICE = 20;
	PRICE_VIP = 85;
	MULT = 1; // Количество смс
	CUR_PRICE = PRICE; // 
	COST_VAR = CUR_PRICE;
	errorCash = false;

	// Задаем события на элементы
	btnFormLogin = $('input[name=submit_login]');
	btnFormReg = $('input[name=submit_reg]');
	btnFormVerify = $('input[name=submit_verify]');
	btnExitAccaunt = $('.btn-accaunt-exit');
	btnConstructSms = $('#btn-open-add-sms');

	if ($('input.construct-sms__submit.hidden-submit-one').css('display') === "block") {
		btnSubmitAddsms = $('input.construct-sms__submit.hidden-submit-one');
	} else {
		btnSubmitAddsms = $($('input.construct-sms__submit')[1]);
	}


	btnSubmitAddMoney = $('input[name=submit_money]');
	btnSubmitAutoUp = $('input[name=submit_autoup]');
	btnSubmitGold = $('input[name=submit_gold]');
	btnSubmitSmsUp = $('input[name=submit_smsup]');
	btnSubmitSmsDel = $('input[name=submit_smsdel]');
	btnSubmitPassRecovery = $('input[name=submit_recovery]');
	btnSubmitSmsdelup = $('input[name=submit_smsdelup]');

	// var ua = navigator.userAgent;
	// var event = (ua.match(/iPad/i)) ? 'touchstart' : 'click'; 

	// *** AJAX ЗАПРОСЫ *** //

	// Запрос для авторизации
	btnFormLogin.on('click', handlerFormLogin);

	function handlerFormLogin(event) {
		if (event) {
			btnSubmit = this;
			btnSubmit.setAttribute("disabled", "true");
		}

		// Подготовка данных для запроса
		urlHandler = 'accaunt.ajax.php';
		action = 'log';
		login = $('input[name=login_log]').val();
		password = $('input[name=password_log]').val();
		captcha = $('input[name=captcha]').val();

		// Запрос на вход
		if (password != '' && login != '' && captcha != '') {
			data = {
				'login': login,
				'password': password,
				'action': action,
				'captcha': captcha
			};
			$.ajax({
				url: urlHandler,
				type: 'POST',
				data: data,
				beforeSend: function () {},
			}).done(function (data) {
				data = JSON.parse(data);
				if (data) {
					if (data['request'] === true) {
						msg(data['error'], btnSubmit);
						window.location.reload();
					} else {
						msg(data['error'], btnSubmit);
						// Очищаем форму и обновляем капчу
						clear_form($('form'), data['captcha']);
					}

				} else {
					msg(data['error'], btnSubmit);
					// Очищаем форму и обновляем капчу
					clear_form($('form'), data['captcha']);
				}
			});
		} else {
			msg('Пожалуйста заполните все поля', btnSubmit);
		}

		return false;
	}


	// Запрос для регистрации
	btnFormReg.on('click', function () {
		btnSubmit = this;
		btnSubmit.setAttribute("disabled", "true");

		// Подготовка данных для запроса
		urlHandler = 'accaunt.ajax.php';
		action = 'reg';
		login = $('input[name=login_reg]').val();
		password = $('input[name=password_reg]').val();
		repPassword = $('input[name=rep_password_reg]').val();
		captcha = $('input[name=captcha]').val();

		// Запрос на регистрации
		if (password !== '' && login !== '' && repPassword !== '' && captcha !== '') {
			data = {
				'login': login,
				'password': password,
				'repPassword': repPassword,
				'action': action,
				'captcha': captcha
			};
			$.ajax({
				url: urlHandler,
				type: 'POST',
				data: data,
				beforeSend: function () {},
			}).done(function (data) {
				data = JSON.parse(data);
				if (data) {
					if (data['request'] === true) {
						msg(data['error'], btnSubmit);
						document.location.href = "/accaunt.php?act=verify";
					} else {
						msg(data['error'], btnSubmit);
						// Очищаем форму и обновляем капчу
						clear_form($('form'), data['captcha']);
					}
				} else {
					msg(data['error'], btnSubmit);
					// Очищаем форму и обновляем капчу
					clear_form($('form'), data['captcha']);
				}
			});
		} else {
			msg('Пожалуйста заполните все поля', btnSubmit);
		}
		msg('', btnSubmit)
		return false;
	});

	// Запрос для разавторизации
	btnExitAccaunt.on('click', handlerExitAccaunt);

	function handlerExitAccaunt(event) {
		if (event) {
			btnSubmit = this;
			btnSubmit.setAttribute("disabled", "true");
		}


		// Подготовка данных для запроса
		urlHandler = 'accaunt.ajax.php';
		action = 'exit';

		data = {
			'action': action
		};
		$.ajax({
			url: urlHandler,
			type: 'POST',
			data: data,
		}).done(function (data) {
			document.location.href = "/accaunt.php";
		});
		return false;
	}


	// Подтвержение номера телефона
	btnFormVerify.on('click', function () {
		btnSubmit = this;
		btnSubmit.setAttribute("disabled", "true");

		// Подготовка данных для запроса
		urlHandler = 'accaunt.ajax.php';
		action = 'verify';
		key = $('input[name=key]').val();
		login = $.cookie('phone_verify');

		// Запрос на регистрации
		if (key != '' && login != '') {
			data = {
				'login': login,
				'key': key,
				'action': action
			};
			$.ajax({
				url: urlHandler,
				type: 'POST',
				data: data,
				beforeSend: function () {},
			}).done(function (data) {
				data = JSON.parse(data);
				if (data['request'] === true) {
					msg(data['error'], btnSubmit);
					$.removeCookie("phone_verify");
					document.location.href = "/accaunt.php";
				} else {
					msg(data['error'], btnSubmit);
				}
			});
		} else {
			msg('Пожалуйста заполните все поля', btnSubmit);
		}

		return false;
	});

	// Добавление сообщения
	btnSubmitAddsms.on('click', function () {
		btnSubmit = this;
		btnSubmit.setAttribute("disabled", "true");

		// Подготовка данных для запроса
		urlHandler = 'accaunt.ajax.php';
		action = 'addsms';

		// Получаем логин аккаунта
		infoAccaunt = $.cookie('info-accaunt');
		if (infoAccaunt) {
			infoAccaunt = JSON.parse(infoAccaunt);
		} else {
			// Куки устарели, либо не существуют
			// Отправляем на перезаход в аккаунт
			handlerExitAccaunt();
		}
		login = infoAccaunt['login'];
		token = infoAccaunt['token'];

		// Получаем тип сообщения
		typeSms = false;
		for (i = 0; i < $('input[name=type-sms]').length; i++) {
			if ($('input[name=type-sms]')[i].checked) {
				typeSms = $($('input[name=type-sms]')[i]).val();
			}
		}

		// Получаем категорию меню
		categories = $('select[name=categories]').val();

		// Получаем сообщение
		message = $('textarea.message').val();

		// Получаем цену сообщения
		costSms = $('#cost').val();

		// Получаем тип оплаты
		payment = false;
		for (i = 0; i < $('input[name=payment]').length; i++) {
			if ($('input[name=payment]')[i].checked) {
				payment = $($('input[name=payment]')[i]).val();
			}
		}

		// Получаем значение капчи
		captcha = $('input[name=captcha]').val();

		// Проверяем введенные данные
		if (typeSms) {
			if (categories) {
				if (message) {
					if (costSms) {
						if (payment) {
							if (cashErr) {
								if (captcha) {

									// Формируем данные для отправки
									data = {
										'login': login,
										'typeSms': typeSms,
										'categories': categories,
										'message': message,
										'payment': payment,
										'costSms': costSms,
										'captcha': captcha,
										'token': token,
										'action': action
									};
									$.ajax({
										url: urlHandler,
										type: 'POST',
										data: data,
										beforeSend: function () {},
									}).done(function (data) {
										data = JSON.parse(data);
										if (data['request'] === true) {

											if (data['url']) {
												setTimeout(function () {
													window.location.replace(data['url']);
												}, 1500)
												handlerOpenConstructSms();
												clear_form($('form.construct-sms'), data['captcha']);
												msg(data['error'], false);
											} else {
												// Выводим отчет
												msg(data['error'], false);
												// Обновляем баланс
												$('#accaunt-line_cash').html(data['cash']);
												// Закрываем окно добавления сообщения
												handlerOpenConstructSms();
												// Очищаем форму
												clear_form($('form.construct-sms'), data['captcha']);
												// Обновляем сообщения
												var date = data['date'];

												if (payment !== 'phone') {
													refreshSmsLk();
												}
											}


										} else {
											msg(data['error'], btnSubmit);
											handlerOpenConstructSms();
											clear_form($('form.construct-sms'), data['captcha']);
										}
									});


								} else {
									msg('Введите проверочный код', btnSubmit);
									clear_form($('form.construct-sms'), data['captcha']);
								}
							} else {
								msg("Не достаточно средств на счету,<br>пополнить можете <a href='/accaunt.php?act=pay'>здесь</a>", btnSubmit);
							}
						} else {
							msg('Выберите тип оплаты', btnSubmit);
						}
					} else {
						// Ошибка данных, выкидываем из аккаунта
						handlerExitAccaunt();
					}
				} else {
					msg('Введите пожалуйста текст сообщения', btnSubmit);
				}
			} else {
				msg('Выберите пожалуйста категорию', btnSubmit);
			}
		} else {
			msg('Выберите пожалуйста тип сообщения', btnSubmit);
		}




		return false;
	})

	// Пополнить баланс
	btnSubmitAddMoney.on('click', function () {





		btnSubmit = this;
		btnSubmit.setAttribute("disabled", "true");

		// Получаем значение капчи
		captcha = $('input[name=captcha]').val();

		// Получаем тип оплаты
		payment = false;
		for (i = 0; i < $('input[name=payment]').length; i++) {
			if ($('input[name=payment]')[i].checked) {
				payment = $($('input[name=payment]')[i]).val();
			}
		}

		// Получаем значение суммы пополнения
		money = Math.round($('input[name=money]').val());

		if (captcha) {
			if (money > 1) {
				if (String(money).length <= 4) {
					if (String(money).length != 1) {
						urlHandler = 'accaunt.ajax.php';
						action = 'pay';
						// Получаем логин аккаунта
						infoAccaunt = $.cookie('info-accaunt');
						if (infoAccaunt) {
							infoAccaunt = JSON.parse(infoAccaunt);
						} else {
							// Куки устарели, либо не существуют
							// Отправляем на перезаход в аккаунт
							handlerExitAccaunt();
						}
						login = infoAccaunt['login'];
						token = infoAccaunt['token'];
						money = String(money);

						data = {
							'login': login,
							'action': action,
							'money': money,
							'captcha': captcha,
							'payment': payment
						}

						$.ajax({
							url: urlHandler,
							type: 'POST',
							data: data,
							beforeSend: function () {},
						}).done(function (data) {
							data = JSON.parse(data);
							if (data['request'] === true) {
								if (data['url'] !== '') {
									window.location.replace(data['url']);
									msg(data['error'], btnSubmit);
									clear_form($('form'), data['captcha']);
								} else {
									msg(data['error'], btnSubmit);
									clear_form($('form'), data['captcha']);
								}
							} else {
								msg(data['error'], btnSubmit);
								clear_form($('form'), data['captcha']);
							}
						});
					} else {
						msg('Минимальная сумма 10 рублей', btnSubmit);
					}

				} else {
					msg('Число больше 9999', btnSubmit);
				}
			} else {
				msg('Введите корректное число', btnSubmit);
			}
		} else {
			msg('Введите проверочный код', btnSubmit);
		}

		return false;
	})

	// Включить настройку автоподнятия
	btnSubmitAutoUp.on('click', headlerAutoUp)

	function headlerAutoUp(event) {
		if (event) {
			btnSubmit = this;
			btnSubmit.setAttribute("disabled", "true");
			var hours = $('.accaunt-form__item_config > input[name=hours]').val();
			var minuts = $('.accaunt-form__item_config > input[name=min]').val();
		} else {
			// Для выключения настройки
			var hours = 0;
			var minuts = 0;
		}


		// Получаем логин аккаунта
		infoAccaunt = $.cookie('info-accaunt');
		if (infoAccaunt) {
			infoAccaunt = JSON.parse(infoAccaunt);
		} else {
			// Куки устарели, либо не существуют
			// Отправляем на перезаход в аккаунт
			handlerExitAccaunt();
		}

		var login = infoAccaunt['login'];
		var smsid = $('.smsid').val();
		var urlHandler = 'accaunt.ajax.php';
		var action = 'autoup';



		// Время в секундах
		/*hours = Number(hours) * 60 * 60;*/
		minuts = Number(minuts) * 60;


		/*var timeInterval = Number(hours) + Number(minuts);*/
		var timeInterval = Number(minuts);
		if (!timeInterval) {
			timeInterval = 0;
		}
		if (timeInterval < 86400) {
			// Подготовка данных для запроса
			data = {
				'timeInterval': timeInterval,
				'action': action,
				'smsid': smsid,
				'login': login,
			}

			$.ajax({
				url: urlHandler,
				type: 'POST',
				data: data,
				beforeSend: function () {},
			}).done(function (data) {
				data = JSON.parse(data);
				if (data['request'] === true) {
					msg(data['error'], btnSubmit);

					// Добавляем кнопку выключения
					if (timeInterval === 0) {

						$('.on_config').html('<span class="on_config" style="color: #c54100; display: block; padding: 10px 0 0 0;">Настройка выключена</span>');
						$('.accaunt-form__submit_config').find('input.submit_autoup_off').remove();
						$('.interval_time_config').remove();

					} else {
						intevalTime = refreshInteval();
						$('.on_config').remove();
						$('.accaunt-form_title').append('<span class="on_config" style="color: #6c64e2; display: block; padding: 10px 0 0 0;">Настройка включена</span>');
						$('.interval_time_config').remove();
						$('.on_config').after('<span class="interval_time_config">Интервал ' + intevalTime + '</span>');

						if ($('.accaunt-form__submit_config')[0].childElementCount == 1) {
							$('.accaunt-form__submit_config').append('<input type="submit" value="Выключить" name="submit_autoup_off" class="btn-submit submit_autoup_off">')
							$('input[name=submit_autoup_off]').on('click', headlerAutoUp);
						}
					}
					clear_form($('form'), data['captcha']);
				} else {
					msg(data['error'], btnSubmit);
					clear_form($('form'), data['captcha']);
				}
			});
		} else {
			msg('Ваше сообщение удалиться, прежде чем поднимется, так как суммарное время, которое вы задали, больше 24 часов', btnSubmit);
			clear_form($('form'));
		}
		return false;
	}

	// Выделить сообщение
	btnSubmitGold.on('click', function () {
		// Выключаем кнопку отправить
		if (event) {
			btnSubmit = this;
			btnSubmit.setAttribute("disabled", "true");
		}

		// Получаем логин аккаунта
		infoAccaunt = $.cookie('info-accaunt');
		if (infoAccaunt) {
			infoAccaunt = JSON.parse(infoAccaunt);
		} else {
			// Куки устарели, либо не существуют
			// Отправляем на перезаход в аккаунт
			handlerExitAccaunt();
		}
		// Подготавлеваем данные
		var urlHandler = 'accaunt.ajax.php';
		var action = 'markGold';
		var smsid = $('.smsid').val();
		var login = infoAccaunt['login'];
		var captcha = $('input#captcha').val();
		// Получаем тип оплаты
		payment = false;
		for (i = 0; i < $('input[name=payment]').length; i++) {
			if ($('input[name=payment]')[i].checked) {
				payment = $($('input[name=payment]')[i]).val();
			}
		}

		data = {
			'login': login,
			'smsid': smsid,
			'action': action,
			'captcha': captcha,
			'payment': payment
		}

		$.ajax({
			url: urlHandler,
			type: 'POST',
			data: data,
			beforeSend: function () {},
		}).done(function (data) {
			data = JSON.parse(data);
			if (data['request'] === true) {
				// Обновляем баланс
				$('#accaunt-line_cash').html(data['cash']);
				msg(data['error'], btnSubmit);
				clear_form($('form'), data['captcha'])

			} else {
				msg(data['error'], btnSubmit);
				clear_form($('form'), data['captcha'])
			}
		});

		return false;
	})

	// Поднять сообщение
	btnSubmitSmsUp.on('click', function () {
		// Выключаем кнопку отправить
		if (event) {
			btnSubmit = this;
			btnSubmit.setAttribute("disabled", "true");
		}

		// Получаем логин аккаунта
		infoAccaunt = $.cookie('info-accaunt');
		if (infoAccaunt) {
			infoAccaunt = JSON.parse(infoAccaunt);
		} else {
			// Куки устарели, либо не существуют
			// Отправляем на перезаход в аккаунт
			handlerExitAccaunt();
		}
		// Подготавлеваем данные
		var urlHandler = 'accaunt.ajax.php';
		var action = 'smsup';
		var smsid = $('.smsid').val();
		var login = infoAccaunt['login'];
		var captcha = $('input#captcha').val();
		// Получаем тип оплаты
		payment = false;
		for (i = 0; i < $('input[name=payment]').length; i++) {
			if ($('input[name=payment]')[i].checked) {
				payment = $($('input[name=payment]')[i]).val();
			}
		}
		if (captcha != '') {
			data = {
				'login': login,
				'smsid': smsid,
				'action': action,
				'captcha': captcha,
				'payment': payment
			}

			$.ajax({
				url: urlHandler,
				type: 'POST',
				data: data,
				beforeSend: function () {},
			}).done(function (data) {
				data = JSON.parse(data);
				if (data['request'] === true) {
					// Обновляем баланс
					$('#accaunt-line_cash').html(data['cash']);
					msg(data['error'], btnSubmit);
					clear_form($('form'), data['captcha'])

				} else {
					msg(data['error'], btnSubmit);
					clear_form($('form'), data['captcha'])
				}
			});
		} else {
			msg('Введите проверочный код', btnSubmit);
		}
		return false;
	})

	// Удалить сообщение
	btnSubmitSmsDel.on('click', function (event) {
		// Выключаем кнопку отправить
		if (event) {
			btnSubmit = this;
			btnSubmit.setAttribute("disabled", "true");
		}

		// Получаем логин аккаунта
		infoAccaunt = $.cookie('info-accaunt');
		if (infoAccaunt) {
			infoAccaunt = JSON.parse(infoAccaunt);
		} else {
			// Куки устарели, либо не существуют
			// Отправляем на перезаход в аккаунт
			handlerExitAccaunt();
		}
		// Подготавлеваем данные
		var urlHandler = 'accaunt.ajax.php';
		var action = 'smsdel';
		var smsid = $('.smsid').val();
		var login = infoAccaunt['login'];
		var captcha = $('input#captcha').val();
		// Получаем тип оплаты
		payment = false;
		for (i = 0; i < $('input[name=payment]').length; i++) {
			if ($('input[name=payment]')[i].checked) {
				payment = $($('input[name=payment]')[i]).val();
			}
		}

		if (captcha != '') {
			data = {
				'login': login,
				'smsid': smsid,
				'action': action,
				'captcha': captcha,
				'payment': payment
			}

			$.ajax({
				url: urlHandler,
				type: 'POST',
				data: data,
				beforeSend: function () {},
			}).done(function (data) {
				data = JSON.parse(data);
				if (data['request'] === true) {
					// Обновляем баланс
					$('#accaunt-line_cash').html(data['cash']);
					msg(data['error'], btnSubmit);
					clear_form($('form'), data['captcha'])



				} else {
					msg(data['error'], btnSubmit);
					clear_form($('form'), data['captcha'])
				}
			});
		} else {
			msg('Введите проверочный код', btnSubmit);
		}
		return false;
	})

	// Восстановление пароля
	btnSubmitPassRecovery.on('click', function () {
		if (event) {
			btnSubmit = this;
			btnSubmit.setAttribute("disabled", "true");
		}




		// Подготовка данных для запроса
		var urlHandler = 'accaunt.ajax.php';
		var action = 'passRecovery';
		var login = $('input[name=login_log]').val();
		var captcha = $('input[name=captcha]').val();

		if (login !== "" && captcha !== "") {
			data = {
				'action': action,
				'login': login,
				'captcha': captcha
			};

			$.ajax({
				url: urlHandler,
				type: 'POST',
				data: data,
			}).done(function (data) {
				data = JSON.parse(data);
				if (data['request'] === true) {
					msg(data['error'], btnSubmit);
					clear_form($('form'), data['captcha'])
				} else {
					msg(data['error'], btnSubmit);
					clear_form($('form'), data['captcha'])
				}
			});

		} else {
			msg('Не все поля заполнены', btnSubmit);
		}


		return false;
	})

	// Объявить объявление заного
	btnSubmitSmsdelup.on('click', function (event) {
		if (event) {
			btnSubmit = this;
			btnSubmit.setAttribute("disabled", "true");
		}

		// Получаем логин аккаунта
		infoAccaunt = $.cookie('info-accaunt');
		if (infoAccaunt) {
			infoAccaunt = JSON.parse(infoAccaunt);
		} else {
			// Куки устарели, либо не существуют
			// Отправляем на перезаход в аккаунт
			handlerExitAccaunt();
		}


		// Подготовка данных для запроса
		var urlHandler = 'accaunt.ajax.php';
		var action = 'smsdelup';
		var smsid = $('.smsid').val();
		var captcha = $('input[name=captcha]').val();
		var login = infoAccaunt['login'];
		// Получаем тип оплаты
		payment = false;
		for (i = 0; i < $('input[name=payment]').length; i++) {
			if ($('input[name=payment]')[i].checked) {
				payment = $($('input[name=payment]')[i]).val();
			}
		}

		if (captcha != '') {
			data = {
				'smsid': smsid,
				'action': action,
				'captcha': captcha,
				'payment': payment,
				'login': login
			}

			$.ajax({
				url: urlHandler,
				type: 'POST',
				data: data,
				beforeSend: function () {},
			}).done(function (data) {
				data = JSON.parse(data);
				if (data['request'] === true) {
					// Обновляем баланс
					$('#accaunt-line_cash').html(data['cash']);
					msg(data['error'], btnSubmit);
					clear_form($('form'), data['captcha']);

				} else {
					msg(data['error'], btnSubmit);
					clear_form($('form'), data['captcha'])
				}
			});
		} else {
			msg('Введите проверочный код', btnSubmit);
		}

		return false;
	})

	// *** МЕЛКИЕ ФУНКЦИИ *** //
	// Текстовое оповещение об ошибке
	function msg(msg, btnSubmit) {
		if (msg != '') {
			inputMsg = $('#msg');
			inputMsg[0].innerHTML = '<div>' + msg + '</div>';
		}
		if (btnSubmit) {
			// Разблокирует кнопку отправить
			$(btnSubmit).removeAttr("disabled");
		}
	};

	// Открыть окно добавления объявлений
	btnConstructSms.on('click', handlerOpenConstructSms);

	function handlerOpenConstructSms(event) {
		containerForm = $('.construct-sms')
		if (containerForm.css('display') == 'none') {
			containerForm.slideToggle('200');
		} else {
			containerForm.slideUp('200');
		}
	}

	// Выбор обычного сообщения + перерасчет
	$('.type-sms_basic').click(function (event) {
		CUR_PRICE = PRICE;
		//$("#cost").html(CUR_PRICE * MULT);
		refresh_cost();
	});
	// Выбор вип сообщения + перерасчет
	$('.type-sms_vip').click(function (event) {
		CUR_PRICE = PRICE_VIP;
		//$("#cost").html(CUR_PRICE * MULT);
		refresh_cost();
	});
	// Ввод сообщения + перерасчет
	$('textarea.message').keyup(function (event) {
		refresh_cost();
	});

	// Оплата с личного кабинета
	$('.payment_lk').on('click', function () {
		if ($('textarea.message')[0]) {
			refresh_cost();
		}
	});
	// Оплата по номеру телефона
	$('.payment_phone').on('click', function () {
		if ($('textarea.message')[0]) {
			refresh_cost();
		}
	})

	$('input[name=submit_autoup_off]').on('click', headlerAutoUp);


	// Перерасчёт стоимости сообщения
	function refresh_cost() {
		len = $('textarea.message').val().length;
		MULT = Math.floor((len - 1) / 70) + 1;

		$('#text-sms_count-symbol').html(70 - len + ((MULT - 1) * 70));
		$('#text-sms_count-sms').html(MULT);

		COST_VAR = CUR_PRICE * MULT;
		$('#cost').html(COST_VAR);
		$('#cost').val(COST_VAR);

		if (COST_VAR > cash && $('.payment_lk')[0].checked === true) {
			msg("Не достаточно средств на счету,<br>пополнить можете <a href='/accaunt.php?act=pay'>здесь</a>");
			cashErr = false;
			btnSubmitAddsms[0].setAttribute("disabled", "true");
		} else {
			msg(' ');
			cashErr = true;
			btnSubmitAddsms.removeAttr("disabled");
		}
	}

	// Очищает поля форм
	function clear_form(form, captchaValue) {
		form[0].reset();
		refreshCaptcha(captchaValue);
	}

	// Обновляем последнее сообщение
	function refreshSmsLk() {

		// Получаем логин аккаунта
		infoAccaunt = $.cookie('info-accaunt');
		if (infoAccaunt) {
			infoAccaunt = JSON.parse(infoAccaunt);
		} else {
			// Куки устарели, либо не существуют
			// Отправляем на перезаход в аккаунт
			handlerExitAccaunt();
		}
		login = infoAccaunt['login'];

		urlHandler = 'accaunt.ajax.php';
		data = {
			'action': 'lastMessage',
			'login': login
		};
		$.ajax({
			url: urlHandler,
			type: 'POST',
			data: data,
			cache: false,
			beforeSend: function () {},
		}).done(function (data) {
			if (data) {
				data = JSON.parse(data);

				if (data['vip'] == '0') {
					message = '<li class="last-sms"><div class="sms"><div style="text-align: right;padding: 10px 10px 10px 0;color: #c54100;" >Пароль для фото: ' + data['passw'] + '</div><a id="' + data['id'] + '"></a><span class="timehead">' + data['date'] + '</span><br>' + data['msg'] + '<br><!--noindex--><div class="menu"><a rel="nofollow" href="accaunt.php?act=smsdel&amp;id=' + data['id'] + '">Удалить</a> | <a rel="nofollow" href="action.php?act=1&amp;id=' + data['id'] + '">Добавить фото</a> | <a rel="nofollow" href="action.php?act=2&amp;id=' + data['id'] + '">Ответить</a><!--/noindex--><span>№: ' + data['id'] + '</span></div></div></li>';
				} else {
					message = '<li class="last-sms"><div class="sms"><div style="text-align: right;padding: 10px 10px 10px 0;color: #c54100;" >Пароль для фото: ' + data['passw'] + '</div><a id="' + data['id'] + '"></a><img alt="знакомства по смс" src="/img/vip.png">  ' + data['msg'] + '<br><!--noindex--><div class="menu"><a rel="nofollow" style="color: #004BF5; font-size: 14px; font-weight: bold;" href="accaunt.php?act=smsup&id=' + data['id'] + '">Поднять</a> | <a rel="nofollow" href="accaunt.php?act=gold&id=' + data['id'] + '">Выделить</a> | <a rel="nofollow" href="accaunt.php?act=autoup&id=' + data['id'] + '">Автоподнятие - <span style="color: #c54100; font-size: 13px;">выкл.</span></a> | <a rel="nofollow" href="accaunt.php?act=smsdel&amp;id=' + data['id'] + '">Удалить</a> | <a rel="nofollow" href="action.php?act=1&amp;id=' + data['id'] + '">Фото</a><!--/noindex--><span>№: ' + data['id'] + '</span></div></div></li>';
				}
				if ($('.sms-content > li')[0]) {
					$($('.sms-content > li')[0]).before(message);
				} else {
					$('.sms').before('<ul class="sms-content"></ul>');
					$('.sms').remove();
					$($('.sms-content')[0]).append(message);
				}
				setTimeout(function () {
					$($('.last-sms')[0]).toggle(300);
				}, 600);

			}


		});
	}

	// Обновляем интервал
	function refreshInteval() {
		// Подготовка данных для запроса
		var urlHandler = 'accaunt.ajax.php';
		var action = 'outItervalTime';
		var smsid = $('.smsid').val();

		data = {
			'action': action,
			'smsid': smsid,
		}

		$.ajax({
			url: urlHandler,
			type: 'POST',
			data: data,
			async: false,
			beforeSend: function () {},
		}).done(function (data) {
			data = JSON.parse(data);
			if (data['request'] === true) {
				intervalTime = data['intervalTime'];
			}
		});
		return intervalTime;
	}

	// Обновляем капчу
	function refreshCaptcha(value) {
		$('input[name=captcha]').attr('placeholder', value);
	}


});
<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

?>
			
</main>
	
	
<footer class="footer">
			<div class="footer__container">
				<div class="footer__top">
					<div class="footer__menu">
						<a href="/services/" class="footer__link">Услуги печати</a>
						<a href="" class="footer__link">Подготовка макета</a>
						<a href="/application/" class="footer__link">Способы нанесения</a>
						<a href="" class="footer__link">Наши работы</a>
						<a href="" class="footer__link">Стоимость</a>
						<a href="" class="footer__link">О компании</a>
						<a href="" class="footer__link">Блог</a>
						<a href="" class="footer__link">Контакты</a>
						<a href="" class="footer__link">Доставка и оплата</a>
					</div>
					<div class="footer__contacts">
						<a href="tel:+79332008077" class="footer__contact-item">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/icons/footer-phone.svg" alt="">
							<span>+7 933 200 80 77</span>
						</a>
						<a href="mailto:ilkinao@24-spec.ru" class="footer__contact-item">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/icons/footer-mail.svg" alt="">
							<span>ilkinao@24-spec.ru</span>
						</a>
						<div class="footer__contact-item">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/icons/footer-map-pin.svg" alt="">
							<span>Красноярск, ул. Джамбульская, д.16, стр. 2, оф.3-50, этаж 3</span>
						</div>
					</div>
				</div>
				<div class="footer__bottom copyright">
					<div class="copyright__wrapper">
						<div class="copyright__body">
							<div class="copyright__item">
								<span class="js-copyright-year">2023</span>
								© 24ЛОГО
								<script>
									window.onload = function() {
										document.querySelector('.js-copyright-year').innerText = new Date().getFullYear()
									};
								</script>
							</div>
							<a href="" class="copyright__item">Политика конфиденциальности</a>
							<a href="" class="copyright__item">Согласие на обработку персональных данных</a>
							<a href="https://websalt.ru" target="_blank" class="copyright__item">Создание сайта
								<svg class="copyright__svg">
									<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons/icons.svg#logo_salt"></use>
								</svg>
							</a>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js?_v=20240410182221" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	    <script src="<?=SITE_TEMPLATE_PATH?>/js/app.min.js"></script>
		<div id="callback" aria-hidden="true" class="popup">
			<div class="popup__wrapper">
				<div class="popup__content">
					<div class="popup__header">
						<div class="popup__title">Заказ звонка</div>
						<button data-close type="button" class="popup__close">
							<svg class="">
								<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons/icons.svg#icon_close-modal"></use>
							</svg>
						</button>
					</div>
					<div class="popup__main">
						<div class="popup__text">Оставьте контактные данные и мы вам перезвоним</div>
						<div class="popup__form">
							<form action="" data-parsley-validate data-parsley-trigger="change" required="" class="form">
								<div class="form__line">
									<label for="p-callback-2.1" class="form__label">Ваше имя</label>
									<input id="p-callback-2.1" type="text" class="form__input">
									<svg class="form__clear-svg">
										<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons/icons.svg#input_clear"></use>
									</svg>
								</div>
								<div class="form__line">
									<label for="p-callback-2.2" class="form__label">Телефон *</label>
									<input required id="p-callback-2.2" type="tel" class="form__input js_phone">
									<svg class="form__clear-svg">
										<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons/icons.svg#input_clear"></use>
									</svg>
								</div>
								<div class="form__line">
									<label for="p-callback-2.3" class="form__label">Комментарий</label>
									<textarea id="p-callback-2.3" autocomplete="off" name="" placeholder="" class="form__input"></textarea>
									<svg class="form__clear-svg">
										<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons/icons.svg#input_clear"></use>
									</svg>
								</div>
								<div class="form__footer">
									<button type="submit" class="form__button btn btn_red">Отправить</button>
									<div class="form__consent">Отправляя данные, я даю свое <a href="" class="form__consent-link">согласие на обработку перс. данных</a></div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="thanks" aria-hidden="true" class="popup">
			<div class="popup__wrapper">
				<div class="popup__content">
					<div class="popup__header">
						<div class="popup__title">Спасибо</div>
						<button data-close type="button" class="popup__close">
							<svg class="popup__close-svg">
								<use xlink:href="img/icons/icons.svg#icon_close-modal"></use>
							</svg>
						</button>
					</div>
					<div class="popup__main">
						<div class="popup__text">Мы свяжемся с вами в ближайшее время для уточнения информации</div>
						<button data-close type="button" class="popup__close">
							Ok
						</button>
						<div class="popup__icon">
							<img src="img/icons/popup__icon.svg" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>


/* События отправки форм */
document.addEventListener('submit', function (evt) {
	let form = evt.target.id;
	if (form != "bx-soa-order-form" || form != "bx-search") {
		submitForms(evt);
	}
})

function submitForms(e) {
    	let form = e.target;
	/* Проверяем есь ли в форме скрытый инпут action */
	if (e.target[0].name != 'action')
		return true;
	e.preventDefault();
    let isFormValid = true;

    // Ищем все поля, которые могут иметь правила валидации
    let validationFields = form.querySelectorAll('[data-rule]');

    // Проходим по полям и проверяем условия
    validationFields.forEach(field => {
        // Получаем значение правила
        let rule = field.getAttribute('data-rule');
        // Проверка требуемого условия
        if (rule.includes('required')) {
            if (!field.value.trim()) {
                isFormValid = false;
                
            } 
        }
    });

    // Если форма не валидна, прерываем выполнение функции
    if (!isFormValid) return false;

    // Если все обязательные поля заполнены, продолжаем отправку формы
    let data = new FormData(form);
	let modal;
    fetch('/local/ajax/feedback.php', {
        method: 'post',
        body: data
    })
	.then(response => response.text())
	.then(commits => {
		console.log(commits);
		if (commits == 'true') {
			/* Ответ с feedback.php тут можно включать модалку спасибо */
       
			form.reset();
			// modal=document.querySelector('.popup--is-show');
			// if(modal){
			// 	modalHidden(document.querySelector('.popup--is-show'));
			// }
			// setTimeout(function () {
			// 	if (form.id == "subscribe_footer") {
			// 		openModal(document.querySelector('.popup--thank--subscribe'));
			// 	}else{
			// 		openModal(document.querySelector('.popup--thank'));
			// 	}
				
			// 	// body
			// }, 500);
			//  modules_flsModules.popup.close()               
			//  setTimeout(function(){ modules_flsModules.popup.open('#thanks') }, 500);
		}
		if (commits == '"active"') {
			$(".form-footer__form").hide()
			$(".footer__newsletter").append( '<div class="massage_js parsley-errors-list filled" ><span class="error" style="font-size: 18px; color:white;">Вы уже подписаны!</span></div>');
			setTimeout(function () {
				$(".massage_js").remove();
				$(".form-footer__form").show();
			}, 4000);
		}
	});
}




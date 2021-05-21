/*$(function(){ 
  $("#phone").mask("+7(999) 999-9999");
});
/*
var form = document.forms.namedItem("orderForm");
//var servResponse = document.querySelector('#response');
form.addEventListener('submit', function(ev) {
	ev.preventDefault();	
	var formData = new FormData(form);
	var request = new XMLHttpRequest();
	request.open("POST", "/order");	
	
	request.onload = function() {
	if (request.status >= 200 && request.status < 400) {
	json = JSON.parse(this.response); // Для internet explorer 11
    	console.log(json);
        
    	// ЗДЕСЬ УКАЗЫВАЕМ ДЕЙСТВИЯ В СЛУЧАЕ УСПЕХА ИЛИ НЕУДАЧИ
    	if (json.result == "success") {
    		// Если сообщение отправлено
    		$('#orderModalCenter').modal('show');
    	} else {
    		// Если произошла ошибка
    		alert("Ошибка при отправке");
    	}
    // Если не удалось связаться с php файлом
    } else {alert("Ошибка сервера. Номер: "+request.status);}}; 

// Если не удалось отправить запрос. Стоит блок на хостинге
request.onerror = function() {alert("Ошибка отправки запроса");};    
	request.send(formData);		
  
}, false);
*/

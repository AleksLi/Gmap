
function getResponseJSON() {
    var xhr = new XMLHttpRequest();
    var arrUsers;
    // Объект XMLHttpRequest (или, сокращенно, XHR) дает возможность браузеру 
    // делать HTTP-запросы к серверу без перезагрузки страницы.

    // onreadystatechange проверяет состояние запроса
    xhr.onreadystatechange = function() {
        if(xhr.readyState == 4) {
            if(xhr.status == 200) {
            // xhr.responseText получаем текст из  response.php
            // JSON.parse превращаем строку в js объект
            arrUsers = JSON.parse(xhr.responseText);
            // document.getElementById('uploadedImg').innerHTML = xhr.responseText;
            }
console.log(arrUsers);
        }
    }


    xhr.open("POST", "response.php", true); // aсинхронный запрос -> true
    xhr.send(); // ничего не отсылаем 

}


    ymaps.ready(init);
    var myMap, myPlacemark;

    function init(){

        myMap = new ymaps.Map("map", {
                center: [50.00, 36.24], 
                zoom: 10
            });

        myPlacemark = new ymaps.Placemark([50.00, 36.24], { 
            hintContent:'Харьков', 
            balloonContent: 'Моё жилище'
        });

        myMap.geoObjects.add(myPlacemark);


       getResponseJSON();
    }




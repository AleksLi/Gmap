<?php

// для работы с картой
$params = array(
    'geocode' => 'Москва, ул. Льва Толстого, 16', // адрес
    'format'  => 'json',                          // формат ответа
    'results' => 1,                               // количество выводимых результатов
    'key'     => '...',                           // ваш api key
);
$response = json_decode(file_get_contents('http://geocode-maps.yandex.ru/1.x/?' . http_build_query($params, '', '&')));
 
if ($response->response->GeoObjectCollection->metaDataProperty->GeocoderResponseMetaData->found > 0)
{
    echo $response->response->GeoObjectCollection->featureMember[0]->GeoObject->Point->pos;
}
else
{
    echo 'Ничего не найдено';
}

// -----------------------------------// --------------




?>
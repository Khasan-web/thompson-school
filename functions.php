<?

function debug($arr) {
    echo '<pre style="background: #fff; z-index: 9999; position: relative">' . print_r($arr, true) . '</pre>';
}

function getLang($key) {
    return $key . '_' . Yii::$app->language;
}

function priceWithSpaces($price) {
    $price = intval($price);
    return number_format($price, 0, ',', ' ');
}

?>
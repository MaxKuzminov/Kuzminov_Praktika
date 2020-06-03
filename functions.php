<?php
$is_auth = rand(0, 1);

$user_name = 'Kuzminov'; // укажите здесь ваше имя
$Categories_list = [
    "boards" => "Доски и лыжи",
    "mounts" => "Крепления",
    "boots" => "Ботинки",
    "clothes" => "Одежда",
    "about" => "Разное"];
$Announcement_list
    = [
    [
        "name" => "2014 Rossignol District Snowboard",
        "category" => "boards",
        "price" => 10999,
        "picture" => "img/lot-1.jpg"


    ],
    [
        "name" => "DC Ply Mens 2016/2017 Snowboard",
        "category" => "boards",
        "price" => 159999,
        "picture" => "img/lot-2.jpg"

    ],
    [
        "name" => "Крепления Union Contact Pro 2015 года размер L/XL",
        "category" => "mounts",
        "price" => 8000,
        "picture" => "img/lot-3.jpg"

    ],
    [
        "name" => "Ботинки для сноуборда DC Mutiny Charocal",
        "category" => "boots",
        "price" => 10999,
        "picture" => "img/lot-4.jpg"

    ],

    [
        "name" => "Куртка для сноуборда DC Mutiny Charocal",
        "category" => "clothes",
        "price" => 7500,
        "picture" => "img/lot-5.jpg"

    ],
    [
        "name" => "Маска Oakley Canopy",
        "category" => "about",
        "price" => 5400,
        "picture" => "img/lot-6.jpg"

    ]






];

function SplitNum($num1, $rub=true)
{
    $num1=ceil($num1);
    if ($num1>=1000)

        $num2=number_format($num1, 0, ',', ' ');
    else
        $num2=$num1;

    if ($rub==true)
        return ($num2)."<b class=\"rub\">р</b>";
    else
        return $num2;



}
Function Timer($final)
{

    $now=strtotime("now");
    $tommorow=strtotime($final);
    $difference=$tommorow-$now;
    $hour=floor($difference/(3600));
    $minute=floor(($difference-$hour*(3600))/60);
    $timer=sprintf("%d:%d",$hour,$minute);

    return $timer;
}
function include_template($name, $data)
{

    $name = 'templates/' . $name;
    $result = '';

    if (!file_exists($name)) {
        return "404";
    }
    else {
        ob_start();
        extract($data);
        require($name);

        $result = ob_get_clean();

        return $result;
    }

}

?>

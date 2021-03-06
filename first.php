<?php
// задачка поинтереснее: подсчитать кол-во слов и повторяющихся слов в тексте

$str = 'Снег ложится на землю - зима пришла. Машу ругают - она  не отвечает. Дети катают снег, взрослые  помогают лепить снеговиков. Шагаю по снегу, он хрустит под каблуками моих сапог. У нас выпал первый снег, мне захотелось поскорей взять его в руки. Анфиса  выбежала во  двор и увидела : снег покрыл всю землю перед домом пушистым ковром. Первый снег белым ковром покрыл землю, на сердце стало спокойней. Чудесный снег  ложился на поляну, я просто  не мог оторвать глаз от этого прекрасного зрелища. Катя  шла по парку, на её  пальто  падали затейливые снежинки. Ночью весь асфальт был белым , утром  люди с улыбкой шли на работу. Выпал первый снег - улица стала нарядной. Я знаю: ты хочешь бежать из  дома.';

// выводим сам текст

echo $str ."<br><br>"; 

// разбиваем на слова, модификатор u используется для юникод строки
$words = preg_split("~[\pP\h]+~u", $str, -1, 1);


// считаем какие из слов сколько встречаются раз
foreach($words as $word)
{
    $arr[$word] = substr_count($str, $word);
}
// сортируем, оставляя ключи массива
arsort($arr);

// выводим слова, если они повторяются больше одного раза
// не волнуйтесь, в счётчик общего количества слов они включены

foreach ($arr as $city => $count)
{
	if ($count > 1) {
    echo $city.' - '.$count.'<br>';
	}
}

// считаем и выводим сумму всех слов в тексте


echo "<br>Количество слов в тексте: " .array_sum($arr);


?>

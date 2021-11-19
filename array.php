<pre>
<?php
// массивы: задание 1

$cities = ['Нью-Йорк'=>8175133, 'Лос-Анжелес, шт. Калифорния'=>3792621, 'Чикаго, шт. Иллинойс'=>2695598, 'Хьюстон, шт. Техас'=>2100263, 'филадельфия'=>1526006, 'Даллас, шт. Техас'=>1197816];

print '<table>';
foreach ($cities as $key=>$value) {
    print "<tr><td>$key<td><td>$value</td></tr>";
}
print'</table>';

echo '<br>';

$sum = array_sum($cities);
echo "Общая численность $sum человек. <br>";

// массивы: задание 2
ksort($cities);
print '<table>';
foreach ($cities as $key=>$value) {
    print "<tr><td>$key<td><td>$value</td></tr>";
}
print'</table>';

echo '<br>';

asort($cities);
print '<table>';
foreach ($cities as $key=>$value) {
    print "<tr><td>$key<td><td>$value</td></tr>";
}
print'</table>';

echo '<br>';
// массивы: задание 3 (умнее пока не придумала)

$Texas=['Хьюстон'=>2100263,'Даллас'=>1197816];
$CA=['Лос-Анжелес'=>3792621,'Сан-Диего' => 130740];
$sumTexas = array_sum($Texas);
$sumCA = array_sum($CA);

$states=[
    [
        'Техас'=>$sumTexas,
        'Хьюстон'=>2100263,
        'Даллас'=>1197816,
    ],
    [
        'Калифорния'=>$sumCA,
        'Лос-Анжелес'=>3792621,
        'Сан-Диего' => 130740,
    ],
    ];
print '<table>';
    foreach ($states as $state){
        foreach ($state as $key=>$value){
                print "<tr><td>$key<td><td>$value</td></tr>";
        }
    }
print'</table>';
    
echo '<br>';

// массивы: задание 4

$sklad=[
    [
        'eggs'=>50,
        'bread'=>100,
        'milk'=>80,
    ],
    [
        'paper'=>5,
        'books'=>75,
        'pens'=>100,
    ],
    [
        'hats'=>3,
        'dresses'=>1,
        'shirts'=>7,
    ],
];

var_dump($sklad);

$schoolDinner=[
    [
        'day'=>'monday',
        'drink'=>'juice',
        'salad'=>'carrot',
        'dishes'=>'fish',
        'cost'=>5,
    ],
    [
        'day'=>'tuesday',
        'drink'=>'water',
        'salad'=>'tomato',
        'dishes'=>'sausage',
        'cost'=>4,
    ],
    [
        'day'=>'friday',
        'drink'=>'tea',
        'salad'=>'cabbage',
        'dishes'=>'steak',
        'cost'=>4,
    ],
];

var_dump($schoolDinner);


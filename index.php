<?php


function maximumPathSum(array $triangle)
{
    $n = count($triangle);
    // Начинаем с предпоследнего уровня треугольника и двигаемся вверх
    for ($i = $n - 2; $i >= 0; $i--) {
        for ($j = 0; $j <= $i; $j++) {
            // Обновляем значения элементов на текущем уровне
            $triangle[$i][$j] += max($triangle[$i + 1][$j], $triangle[$i + 1][$j + 1]);
        }
    }
    // Верхний элемент будет содержать максимальную сумму пути
    return $triangle[0][0];
}


$first_triangle = [
    [7],
    [2,3],
    [3,3,1],
    [3,1,5,4],
    [3,1,3,1,3],
    [2,2,2,2,2,2],
    [5,6,4,5,6,4,3]
];

$second_triangle = [
    [1],
    [2,1],
    [1,2,1],
    [1,2,1,1],
    [1,2,1,1,1],
    [1,2,1,1,1,1],
    [1,2,1,1,1,9,1]
];



echo maximumPathSum($first_triangle)."\n"; //Вывод: 29
echo maximumPathSum($second_triangle);     //Вывод: 17


<?php
$people = [
    ['name' => 'A' , 'age' => 23],
    ['name' => 'B' , 'age' => 3],
    ['name' => 'C' , 'age' => 40],
    ['name' => 'D' , 'age' => 22],
    ['name' => 'E' , 'age' => 18],
    ['name' => 'F' , 'age' => 10],
    ['name' => 'G' , 'age' => 20],
    ['name' => 'H' , 'age' => 78],
    ['name' => 'I' , 'age' => 56],
    ['name' => 'J' , 'age' => 28],
    ['name' => 'K' , 'age' => 25],
];

$countAdult = 0;
$countChild = 0;
$canapplyforjob = 0;

foreach($people as $person){
    $age = $person['age'];  
    if ($age >= 18) {
        $countAdult++;
        if ($age >=22 && $age <= 30) {
            $canapplyforjob++;
        }
    } else {
        $countChild++;
    }
    
}
echo "The number of Adults are $countAdult".PHP_EOL;
echo "<br>";
echo "The number of Adults are $countChild".PHP_EOL;
echo "<br>";
echo "The list of candidates can apply for job $canapplyforjob";

?>

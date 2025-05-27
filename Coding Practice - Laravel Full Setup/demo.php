<?php
// Odd or Even
// $num = readline("Enter a number: ");
// $result = "Even";
// if ($num % 2 != 0) {
//     $result = "Odd";
// }
// echo "The number is: {$result}";

// //Prime Number
// function isPrimeNumber($number){
//     if ($number< 2) {
//         return "{$number} is not prime\n";
//     }
//     if ($number == 2) {
//         return "{$number} is prime\n";
//     }
//     if ($number == 0) {
//         return "{$number} is not prime\n";
//     }
//     $sqrtNumber = sqrt($number);
//     for($i=3; $i <= $sqrtNumber; $i+=2){
//         if ($number % $i == 0){
//             echo "{$number} is not prime\n";
//         }
//     }
//     return "{$number} is prime\n";
// }

// $number = readline("Enter a number: ");
// if (!is_numeric($number)) {
//     echo "Invalid Input.";
//     exit;
// }
// $number = (int)$number;
// for($ctr=0; $ctr<=$number; $ctr++) {
//     echo isPrimeNumber($ctr);
// }

require __DIR__ . '/vendor/autoload.php';
use Cocur\Slugify\Slugify;
use Ramsey\Uuid\Uuid;

$slugify = new Slugify();
echo $slugify->slugify("This is the new title") . "\n";

$uuid = Uuid::uuid4();
echo $uuid->toString()  . "\n";

$faker = Faker\Factory::create();
echo $faker->name() . "\n";
echo $faker->email() . "\n";
echo $faker->phoneNumber() . "\n";
echo $faker->text() . "\n";
<?php
require 'vendor/autoload.php';

$faker = Faker\Factory::create('en_PH'); 

echo "<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet'>";
echo "<div class='container mt-5'>";
echo "<h1 class='text-center mb-4'>Fake User Profiles (Philippines)</h1>";
echo "<table class='table table-bordered table-striped'>";
echo "<thead class='thead-dark'><tr><th>#</th><th>Full Name</th><th>Email</th><th>Phone Number</th><th>Address</th><th>Birthdate</th><th>Job Title</th></tr></thead>";
echo "<tbody>";

for ($i = 1; $i <= 5; $i++) { 
    $fullName = $faker->name;
    $email = $faker->email;
    $phoneNumber = '+63 ' . $faker->numerify('9#########');
    $address = $faker->address . ', ' . $faker->province . ', ' . $faker->city;
    $birthdate = $faker->date('Y-m-d');
    $jobTitle = $faker->jobTitle;

    echo "<tr>";
    echo "<td>{$i}</td>";
    echo "<td>{$fullName}</td>";
    echo "<td>{$email}</td>";
    echo "<td>{$phoneNumber}</td>";
    echo "<td>{$address}</td>";
    echo "<td>{$birthdate}</td>";
    echo "<td>{$jobTitle}</td>";
    echo "</tr>";
}

echo "</tbody></table></div>";
?>

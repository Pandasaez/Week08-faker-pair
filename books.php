<?php
require 'vendor/autoload.php';

$faker = Faker\Factory::create();


$genres = ['Fantasy', 'Mystery', 'Thriller', 'Romance', 'Non-Fiction', 'Historical Fiction', 'Horror'];

echo "<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet'>";
echo "<div class='container mt-5'>";
echo "<h1 class='text-center mb-4'>Fake Books Table</h1>";
echo "<table class='table table-bordered table-striped'>";
echo "<thead class='thead-dark'><tr><th>#</th><th>Title</th><th>Author</th><th>Genre</th><th>Publication Year</th><th>ISBN</th><th>Summary</th></tr></thead>";
echo "<tbody>";

for ($i = 1; $i <= 15; $i++) { 
    $title = $faker->sentence(2); 
    $author = $faker->name; 
    $genre = $genres[array_rand($genres)]; 
    $publicationYear = $faker->numberBetween(1900, 2024); 
    $isbn = $faker->isbn13; 
    $summary = $faker->paragraph; 

    echo "<tr>";
    echo "<td>{$i}</td>";
    echo "<td>{$title}</td>";
    echo "<td>{$author}</td>";
    echo "<td>{$genre}</td>";
    echo "<td>{$publicationYear}</td>";
    echo "<td>{$isbn}</td>";
    echo "<td>{$summary}</td>";
    echo "</tr>";
}

echo "</tbody></table></div>";
?>

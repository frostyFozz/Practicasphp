<!DOCTYPE html>
<html lang="en">

<head>
</head>
<style>
    body {
        display: grid;
        place-items: center;
        height: 100vh;
        margin: 0;
        font-family: sans-serif;
    }
</style>

<body>
    <?php
    $name = "Dark Matter";
    $read = true;

    if ($read) {
        $message = "You Have read  $name";
    } else {
        $message = "You have not read $name";
    }
    ?>

    <h1>
        <? $message; ?>
    </h1>
    <h2> Libros Recomendados </h2>

    <?php $libros = [
        [
            "name" => "Sueñan los androides con obejas electricas",
            "autor" => "Philip K. Dick",
            "releaseYear" => "1968",
            "purchaseUrl" => "https://www.amazon.com/-/es/Philip-K"

        ],

        [
            "name" => "Neuromante",
            "autor" => "William Gibson",
            "releaseYear" => "1984",
            "purchaseUrl" => "https://www.amazon.com/-/es/William-Gibson"
        ],

        [
            "name" => "Snow Crash",
            "autor" => "Neal Stephenson",
            "releaseYear" => "1992",
            "purchaseUrl" => "https://www.amazon.com/-/es/Neal-Stephenson"
        ],
        [
            "name" => "Conde Cero  ",
            "autor" => "William Gibson",
            "releaseYear" => "1986",
            "purchaseUrl" => "https://www.amazon.com/-/es/William-Gibson"
        ]
    ];
    ?>


    <?php function filterByAutor($libros, $autor )
        {
        $filteredbooks = [];

        foreach ($libros as $libro) {

            if ($libro['autor'] === $autor) {

                $filteredbooks[] = $libro;
            }
         } 
         

         return $filteredbooks;
        }
    ?>

    <ul>
        <?PHP foreach( filterByAutor($libros, 'William Gibson') as $libro): ?>
        <li>
            <a href="<?php echo $libro['purchaseUrl']; ?>">
                <?php echo $libro['name']; ?> - by <?php echo $libro['autor']; ?> - <?php echo $libro["releaseYear"] ?>
            </a>
        </li>
        <?php endforeach; ?>

    </ul>



</body>

</html>

</html>
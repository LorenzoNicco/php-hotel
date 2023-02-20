<?php
    // Array degli hotel
    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- collegamento bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
        <title>PHP Hotel</title>
    </head>
    <body>
        <!-- tabella bootstrap -->
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <?php
                        foreach ($hotels as $hotel) {
                            echo '<th scope="col">'.$hotel["name"].'</th>';
                        } 
                    ?>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Description</th>
                    <?php
                        foreach ($hotels as $hotel) {
                            echo '<td scope="col">'.$hotel["description"].'</td>';
                        } 
                    ?>
                </tr>
                <tr>
                    <th scope="row">Parking</th>
                    <?php
                        foreach ($hotels as $hotel) {
                            if ($hotel["parking"] == true) {
                                echo '<td scope="col">Yes</td>';
                            }
                            else {
                                echo '<td scope="col">No</td>';
                            }
                        } 
                    ?>
                </tr>
                <tr>
                    <th scope="row">Vote</th>
                    <?php
                        foreach ($hotels as $hotel) {
                            echo '<td scope="col">'.$hotel["vote"].'</td>';
                        } 
                    ?>
                </tr>
                <tr>
                    <th scope="row">Distance to center</th>
                    <?php
                        foreach ($hotels as $hotel) {
                            echo '<td scope="col">'.$hotel["distance_to_center"].'</td>';
                        } 
                    ?>
                </tr>
            </tbody>
        </table>
    </body>
</html>
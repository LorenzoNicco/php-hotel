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

    $parkingOption = $_GET['parking-option'] ?? 'notSpecified';
    $starsOption = $_GET['stars-option'] ?? 'notSpecified';
    $starsNumber = (int) $starsOption;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- collegamento bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
        <title>PHP Hotel Bonus</title>
    </head>
    <body>
        <main class="bg-dark p-3" style="height: 100vh;">
            <!-- form -->
            <div class="container mb-3">
                <div class="row">
                    <form action="" method="GET" class="col-4 offset-4 d-flex">
                        <select class="form-select" aria-label="Default select example" name="parking-option">
                            <option selected>Posto auto</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>

                        <select class="form-select" aria-label="Default select example" name="stars-option">
                            <option selected>Valutazione</option>
                            <option value="1">1 Stella</option>
                            <option value="2">2 Stelle</option>
                            <option value="3">3 Stelle</option>
                            <option value="4">4 Stelle</option>
                            <option value="5">5 Stelle</option>
                        </select>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>

            <!-- tabella bootstrap -->
            <table class="table table-dark table-striped">
                <tbody>
                    <?php
                        if ($parkingOption == "notSpecified" && $starsOption == "notSpecified") {
                            foreach ($hotels as $hotel) {
                                echo '<tr>
                                    
                                    <th scope="col">'.$hotel["name"].'</th>
        
                                    <td scope="col">'.$hotel["description"].'</td>
                                    <td scope="col">'.$hotel["vote"].' Stelle</td>
                                    <td scope="col">'.$hotel["distance_to_center"].' km</td>
        
                                </tr>';
                            }
                        }
                        elseif ($parkingOption =="yes" && $starsOption != "notSpecified") {
                            foreach ($hotels as $hotel) {
                                if ($hotel["parking"] == true && $hotel["vote"] >= $starsNumber) {
                                    echo '<tr>
                                        
                                        <th scope="col">'.$hotel["name"].'</th>
            
                                        <td scope="col">'.$hotel["description"].'</td>
                                        <td scope="col">'.$hotel["vote"].' Stelle</td>
                                        <td scope="col">'.$hotel["distance_to_center"].' km</td>
            
                                    </tr>';
                                }

                            }
                        }
                        elseif ($parkingOption =="no") {
                            foreach ($hotels as $hotel) {
                                if ($hotel["parking"] == false && $hotel["vote"] >= $starsNumber) {
                                    echo '<tr>
                                        
                                        <th scope="col">'.$hotel["name"].'</th>
            
                                        <td scope="col">'.$hotel["description"].'</td>
                                        <td scope="col">'.$hotel["vote"].' Stelle</td>
                                        <td scope="col">'.$hotel["distance_to_center"].' km</td>
            
                                    </tr>';
                                }

                            }
                        }
                    ?>
                </tbody>
            </table>
        </main>
    </body>
</html>
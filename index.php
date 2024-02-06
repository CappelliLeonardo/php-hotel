<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- FONTAWESOME -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- BOOTSTRAP -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <!-- FRAMEWORK A COLONNE -->

    <!-- <link rel="stylesheet" href="css/12col.css"> -->

    <!-- CSS -->

    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php
$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];
?>



    <header>
        <div class="container">
            <h1>
                PHP-HOTEL
            </h1>
        </div>
    </header>

    <main>
        <div class="container">

        <!-- <div class="form-check" action="" method="GET">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
            <label class="form-check-label" for="exampleRadios1">
                Avaiable parking
            </label>
            </div>
            <div class="form-check" action="" method="GET">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
            <label class="form-check-label" for="exampleRadios2">
                Not avaible parking
            </label>
        </div> -->

        <!-- <form action="" method="GET">
            <div>
                <textarea name="inputUser" id="" cols="30" rows="10"></textarea>
            </div>
            <div>
                <input type="text" name="badWords">
            </div>
            <button>
                Invia
            </button>
        </form> -->

            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Parking</th>
                    <th scope="col">Vote</th>
                    <th scope="col">Distance to center</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($hotels as $hotel) {
                    ?>
                        <tr>
                            <th scope="row"> <?php echo $hotel['name'];?> </th>
                            <td><?php echo $hotel['description'];?></td>
                            <td><?php
                                // if ($inputUser == 'option2') {
                                    
                                // }
                                
                                if($hotel['parking'] == true){
                                    echo 'avaiable';
                                }
                                else{
                                    echo 'not avaiable';
                                }
                                ?></td>
                            <td><?php echo $hotel['vote']. '<i class="fa-solid fa-star"></i>';?></td>
                            <td><?php echo $hotel['distance_to_center'].' km';?></td>
                        </tr>
                    <?php
                        }
                    ?> 
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>
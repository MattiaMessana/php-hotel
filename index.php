<?php

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
    // var_dump($hotels);

    // foreach($hotels as $list_hotel => $cur_hotel) {
    //     echo "<div> <h2>{$cur_hotel['name']}</h2>";
    //         echo "<ul>";
    //             echo "<li>";
    //                 echo "{$cur_hotel['description']}";
    //             echo "</li>";

    //             echo "<li>";
    //                 echo " parcheggio: {$cur_hotel['parking']}";
    //             echo "</li>";

    //             echo "<li>";
    //                 echo " stelle: {$cur_hotel['vote']}";
    //             echo "</li>";

    //             echo "<li>";
    //                 echo "distanza dal centro: {$cur_hotel['distance_to_center']} km";
    //             echo "</li>";
    //         echo "</ul>";
        // var_dump($cur_hotel['name']);
        
    //     echo "</div>";
    // }
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($hotels as $list_hotel => $cur_hotel) { ?>
        <div>
            <h3><?php echo $cur_hotel['name'] ?></h3>
            <ul>
                <li> descrizione: <?php echo $cur_hotel['description'] ?></li>
                <li> percheggio: <?php echo $cur_hotel['parking'] ?></li>
                <li> distanza dal centro: <?php echo $cur_hotel['distance_to_center'] ?> km</li>
                <li> stelle: <?php echo $cur_hotel['vote'] ?></li>
            </ul>
        </div>
    <?php } ?>
</body>
</html>
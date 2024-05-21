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
// var_dump($cur_hotel['name']);
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

//     echo "</div>";
// }

// $si = $_GET['si'];
// $no = $_GET['no'];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- style-->
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <form action="./parking.php" method="get">
        <select id="">
            <option value=""> -- cerca per parcheggio-- </option>
            <option name="si">si</option>
            <option name="no">no</option>
        </select>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Decrizione</th>
                <th scope="col">Parcheggio</th>
                <th scope="col">Distanza dal centro</th>
                <th scope="col">Stelle</th>
            </tr>
        </thead>
        <?php foreach ($hotels as $list_hotel => $cur_hotel) { ?>
            <tbody>
                <tr>
                    <th scope="row"><?php echo ($list_hotel += 1); ?></th>
                    <td><?php echo $cur_hotel['name']; ?></td>
                    <td><?php echo $cur_hotel['description']; ?></td>
                    <td>
                        <?php
                            if ($cur_hotel['parking'] === true) {
                                echo $cur_hotel['parking'] = '<i class="fa-solid fa-check text-bg-success rounded-circle  p"></i>';
                            } else {
                                echo $cur_hotel['parking'] = '<i class="fa-solid fa-xmark text-bg-danger rounded-circle px-1 _my_p"></i>';
                            }
                        ?>
                    </td>
                    <td><?php echo $cur_hotel['distance_to_center']; ?> km</td>
                    <td>
                        <!-- stelle -->
                        <?php
                            for ($i = 0; $i < $cur_hotel['vote']; $i++) {
                                $cur_star = $cur_hotel['vote'];
                                echo $cur_star = '<i class="fa-solid fa-star text-warning"></i>';
                            }
                        ?>
                        <?php
                            for ($i = 0; $i <  5 - $cur_hotel['vote']; $i++) {
                                $cur_star = $cur_hotel['vote'];
                                echo $cur_star = '<i class="fa-regular fa-star"></i>';
                            }
                        ?>
                        <!-- /stelle -->
                    </td>
                </tr>
            </tbody>
        <?php } ?>
    </table>



</body>

</html>
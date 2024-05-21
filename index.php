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

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!-- <?php foreach ($hotels as $list_hotel => $cur_hotel) { ?>
        <div>
            <h3><?php echo $cur_hotel['name'] ?></h3>
            <ul>
                <li> descrizione: <?php echo $cur_hotel['description'] ?></li>
                <li> percheggio: <?php echo $cur_hotel['parking'] ?></li>
                <li> distanza dal centro: <?php echo $cur_hotel['distance_to_center'] ?> km</li>
                <li> stelle: <?php echo $cur_hotel['vote'] ?></li>
            </ul>
        </div>
    <?php } ?> -->

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
        <td><?php echo $cur_hotel['name'];?></td>
        <td><?php echo $cur_hotel['description'];?></td>
        <td><?php echo $cur_hotel['parking'];?></td>
        <td><?php echo $cur_hotel['distance_to_center'];?> km</td>
        <td><?php echo $cur_hotel['vote'];?></td>
        </tr>
    </tbody>

  <?php } ?>

</table>
</body>

</html>
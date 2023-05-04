<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'img' => 'https://www.italiaconvention.it/wp-content/uploads/2016/11/AC-MILANO_ingresso_628x474.jpg',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'img' => 'https://www.milanocittastato.it/wp-content/uploads/2017/03/Grand-hotel.jpg',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'img' => 'https://www.milanocittastato.it/wp-content/uploads/2017/03/Grand-hotel.jpg',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'img' => './img/bellavista.png',
            'description' => 'Hotel Bellavista: Situato a soli 50 m dalle spiagge pubbliche del centro storico di Monopoli, il B&B Bellavista offre suite con vasca idromassaggio. La terrazza con vista mare vanta una piscina a sfioro con idromassaggio.
            Questo edificio del XIV secolo è stato completamente ristrutturato per offrire suite uniche, tutte dotate di aria condizionata, TV a schermo piatto con canali pay-per-view e connessione Wi-Fi gratuita. Tutte le sistemazioni vantano un balcone o l accesso diretto alla terrazza. Ogni alloggio vanta pareti in pietra e una vasca idromassaggio.
            
            La colazione continentale viene servita direttamente nel comfort della vostra suite o, nella bella stagione, sulla terrazza.
            
            Il Bellavista B&B sorge in una zona pedonale di Monopoli, a 200 m dal parcheggio pubblico più vicino. Come ospiti del Bellavista potrete usufruire di sconti presso stabilimenti balneari e ristoranti privati.',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'img' => './img/milan.png',
            'description' => 'Hotel Milano: Ubicato a soli 2 minuti a piedi dalla Stazione Centrale di Milano e dalla metropolitana, lHotel Central Station offre sistemazioni semplici con TV, in alcuni casi dotate di bagni privati.
            I servizi dellhotel includono il WiFi e un frigorifero con bevande.
            Situato a 2,5 km dal centro storico di Milano, il Central Station Hotel si trova a 4 fermate di metropolitana dal Duomo e dal Palazzo Reale.',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

$filterHotels = $hotels;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Trivago</title>
</head>

<body>
    <h1 class="text-center text-uppercase text-primary">trivago</h1>
    <div class="container bg-primary text-white wh-100">
        <table class="table text-white w-100">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Vista/Zona</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Parcheggio</th>
                    <th scope="col">Stelle</th>
                    <th scope="col">Distanza dal centro</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($filterHotels as $hotel) { ?>
                    <tr>
                        <td><?php echo $hotel["name"]?></td>
                        <td><?php echo $hotel["img"]?></td>
                        <td><?php echo $hotel["description"] ?></td>
                        <td><?php echo ($hotel["parking"] ? 'Siamo abilitati al parcheggio' : 'Non siamo abilitati al parcheggio') ?></td>
                        <td><?php echo $hotel["vote"] ?> <img class="w-25" src="./img/nl.png" alt="star"></td>
                        <td><?php echo $hotel["distance_to_center"] ?> km</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'img' => './img/belvedere.png',
            'description' => 'Hotel Belvedere: Situato tra Castelnuovo e Peschiera del Garda, il Belvedere Village offre 182 appartamenti immersi in un parco con 3 piscine a laguna e un parcheggio gratuito.
            Tutte le unità abitative del Belvedere Village presentano interni climatizzati e una terrazza o un balcone con tavolo e sedie. A vostra disposizione anche un ristorante.
            Il Belvedere Village dista 500 metri da una fermata dell autobus, 1,5 km da Castelnuovo Del Garda e 10 minuti di auto dal parco divertimenti Gardaland.',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'img' => './img/futuro.png',
            'description' => 'Hotel Futuro: Con centro spa e benessere, più una terrazza, il Futurotel Malagueta Beach si trova nel centro di Malaga, a 1 minuto dalla spiaggia. A breve distanza figurano attrazioni come il Museo Picasso, la Cattedrale di Malaga e il Museo del vetro e del cristallo. Sono disponibili una reception attiva 24 ore su 24 e il servizio in camera.
            ',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'img' => './img/rivamare.png',
            'description' => 'Hotel Rivamare: Situato ad Agropoli, a 2,3 km dalla spiaggia di Lido Azzurro, il Rivamare - Agropoli offre una piscina stagionale all aperto, un parcheggio privato gratuito, un giardino e una terrazza. Dotata di un bar, la struttura si trova a 2,3 km dal Lungo Mare San Marco. Potrete, inoltre, usufruire del WiFi gratuito e del servizio concierge.
            Le sistemazioni dell’affittacamere includono un armadio. Le camere del RivaMare - Agropoli sono dotate di bagno privato con bidet e set di cortesia, TV a schermo piatto e aria condizionata, e alcune offrono un balcone. Lenzuola e asciugamani sono inclusi.',
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
    //$filterHotels = [];

    if (!empty($_GET['parking'])) {
        foreach ($hotels as $hotel) {
            if ($hotel['parking']) {
                $filterHotels[] = $hotel;
            }
        }
    }
    else {
        $filterHotels = $hotels;
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Booleavago</title>
</head>

<body>
    <div class="container bg-primary text-white wh-100">
    <h1 class="text-center text-uppercase text-white m-2 mt-3">Booleavago</h1>
    <h4 class="text-center text-uppercase text-white m-2 mt-3">scegli la tua prossima meta </h4>
    <h6 class="text-center text-uppercase text-white m-2 mt-3"> affidati a noi&troverai le migliori offerte a prezzi mai visti</h6>
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
                        <td><img class="w-75" src="<?php echo $hotel["img"]?>" /></td>
                        <td><?php echo $hotel["description"] ?></td>
                        <td><?php echo ($hotel["parking"] ? 'Siamo abilitati al parcheggio' : 'Non siamo abilitati al parcheggio') ?></td>
                        <td><?php echo $hotel["vote"] ?> <img class="w-25" src="./img/nl.png" alt="star"></td>
                        <td><?php echo $hotel["distance_to_center"] ?> km</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    <form class="d-flex align-items-center text-center justify-content-center" method="GET" action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <button name="parking" value="true" type="submit" class="btn btn-warning text-white mt-5 text-uppercase">hotel con parcheggio</button>
    </form>
    <p class="text-end text-uppercase text-white m-2 mt-3">Classe#92 with Love.  </p>
    </div>
</body>

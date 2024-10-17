@extends('layouts.app')
@section('content')
    <h1>Alle auto's</h1>
    @foreach ($cars as $car)
        <div>
            <h2><?php echo $car['make']; ?> <?php echo $car['model']; ?></h2>
            <p>Prijs: <?php echo $car['price']; ?></p>
            <p>Kilometerstand: <?php echo $car['mileage']; ?> km</p>
            <p>Zitplaatsen: <?php echo $car['seats']; ?></p>
            <p>Deuren: <?php echo $car['doors']; ?></p>
            <p>Bouwjaar: <?php echo $car['productionyear']; ?></p>
            <p>Gewicht: <?php echo $car['weight']; ?> kg</p>
            <p>Kleur: <?php echo $car['color']; ?></p>
            <img src="<?php echo $car['image']; ?>">
            <p><?php echo $car['views']; ?> <?php if ($car['views'] >= 1) {
                echo 'keren bekeken';
            } else {
                echo 'keer bekeken';
            } ?></p>
        </div>
    @endforeach
@endsection

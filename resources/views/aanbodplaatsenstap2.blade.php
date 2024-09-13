@extends('layouts.app')

@section('content')
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        main {
            padding: 20px;
        }

        h1 {
            margin-bottom: 20px;
        }

        form {
            display: grid;
            gap: 10px;
            max-width: 500px;
        }

        label {
            font-weight: bold;
        }

        input,
        button {
            padding: 5px;
        }

        .row {
            display: flex;
            gap: 10px;
        }

        .row input {
            flex: 1;
        }
    </style>


    <h1>Nieuw aanbod</h1>
    <form action="{{ route('home') }}" method="POST">
        <div class="form-control">
            <label for="kentekenId">Kenteken</label>
            <input type="text" id="kentekenId" name="kentekenId" class="form-input" readonly value="<?php echo $_GET['kenteken']; ?>">
        </div>
        <div class="form-control">
            <label for="merk">Merk</label>
            <input type="text" id="merk" name="merk" placeholder="TOYOTA">
        </div>
        <div class="form-control">
            <label for="model">Model</label>
            <input type="text" id="model" name="model" placeholder="AURIS">
        </div>
        <div class="form-control">
            <label for="zitplaatsen">Zitplaatsen</label>
            <input type="number" id="zitplaatsen" name="zitplaatsen" placeholder="5">
        </div>
        <div class="form-control">
            <label for="deuren">Aantal deuren</label>
            <input type="number" id="deuren" name="deuren" placeholder="4">
        </div>
        <div class="form-control">
            <label for="massa">Massa rijklaar</label>
            <input type="number" id="massa" name="massa" placeholder="1225">
        </div>
        <div class="form-control">
            <label for="jaar">Jaar van productie</label>
            <input type="number" id="jaar" name="jaar" placeholder="2015">
        </div>
        <div class="form-control">
            <label for="kleur">Kleur</label>
            <input type="text" id="kleur" name="kleur" placeholder="BLAUW">
        </div>
        <div class="form-control">
            <label for="kilometers">Kilometerstand</label>
            <input type="number" id="kilometers" name="kilometers"> km
        </div>
        <div class="form-control">
            <label for="vraagprijs">Vraagprijs</label>
            <input type="number" id="vraagprijs" name="vraagprijs">
        </div>
        <button type="submit">Aanbod afronden</button>
    </form>
@endsection

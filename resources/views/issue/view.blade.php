@extends('layouts.main')

@section('title', 'Melding Zorgvlietstraat')

@section('middlebreadcrumbs')
<!--
    Enter breadcrumbs that will show between application name (De Zonnebloem) and page title (see above) in this format:
-->
<li>Melding</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-4">
            <p><strong>Beschrijving:</strong></p>
            <p>{{ $issue->description }}</p>

            <p><strong>Adres:</strong></p>
            <p>{{ $issue->streetName }}</p>

            <p><strong>Postcode:</strong></p>
            <p>{{ $issue->postalCode }}</p>

            <p><strong>Stad:</strong></p>
            <p>{{ $issue->place }}</p>

            <p><strong>Regio:</strong></p>
            <p>{{ $issue->region }}</p>

            <p><strong>Aangemaakt op:</strong></p>
            <p>{{ $issue->dateCreated }}</p>

            <p><strong>Opgelost op:</strong></p>
            <p>{{ $issue->dateCreated }}</p>

            <p><strong>Status:</strong></p>
            <p>{{ $issue->status }}</p>

            <img class="detail-img" src="{{ asset('/resources/dist/img/reports/example_map.png') }}"/>
            <p><strong>Coördinaten</strong></p>
            <p>Breedtegraad: {{$issue->latitude}} <br/>
               Lengtegraad: {{$issue->longitude}}</p>

            <div style="width:50%">
                <button href="#" type="button" class="btn btn-block btn-success">Goedkeuren</button>
                <button href="#" type="button" class="btn btn-block btn-danger">Afkeuren</button>
            </div>
        </div>
    </div>
@endsection
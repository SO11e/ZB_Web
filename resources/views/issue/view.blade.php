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
            <p>{{ $issue->region->name }}</p>

            <p><strong>Aangemaakt op:</strong></p>
            <p>{{ $issue->dateCreated }}</p>

            <p><strong>Opgelost op:</strong></p>
            <p>{{ $issue->dateCreated }}</p>

            <p><strong>Status:</strong></p>
            <p>{{ $issue->status }}</p>

            <p><strong>Map:</strong></p>
            <div id="map"></div>

            <p><strong>Coördinaten</strong></p>
            <p>Breedtegraad: {{$issue->latitude}} <br/>
               Lengtegraad: {{$issue->longitude}}</p>

            <div style="width:50%">
                <button href="{{ route('issue.edit', $issue->id) }}" type="button" class="btn btn-block btn-warning">Bewerken&nbsp;<i class="fa fa-pencil"></i> </button>
            </div>
        </div>
    </div>
    <script>
        function initMap() {
            var uluru = {lat: -25.363, lng: 131.044};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 4,
                center: uluru
            });
            var marker = new google.maps.Marker({
                position: uluru,
                map: map
            });
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDoUwgXg80a8EC-ECXU4lEMuvAjRtaI9IQ&callback=initMap"></script>
@endsection
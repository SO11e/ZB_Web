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
            <div class="box box-warning">
                <div class="box-header">
                    <h3 class="box-title">
                        Melding
                    </h3>
                    <div class="box-tools">
                        <a href="{{ route('issue.edit', $issue->id) }}" type="button" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Bewerken</a>
                    </div>
                </div>
                <div class="box-body no-padding">
                    <table class="table table-striped">
                        <tr>
                            <td class="text-bold">Beschrijving:</td>
                            <td>{{ $issue->description != null ? $issue->description : 'Onbekend' }}</td>
                        </tr>
                        <tr>
                            <td class="text-bold">Straat:</td>
                            <td>{{ $issue->streetName != null ? $issue->streetName : 'Onbekend' }}</td>
                        </tr>
                        <tr>
                            <td class="text-bold">Postcode:</td>
                            <td>{{ $issue->postalCode != null ? $issue->postalCode : 'Onbekend' }}</td>
                        </tr>
                        <tr>
                            <td class="text-bold">Stad:</td>
                            <td>{{ $issue->city != null ? $issue->city : 'Onbekend' }}</td>
                        </tr>
                        <tr>
                            <td class="text-bold">Breedtegraad:</td>
                            <td>{{ $issue->latitude != null ? $issue->latitude : 'Onbekend' }}</td>
                        </tr>
                        <tr>
                            <td class="text-bold">Lengtegraad:</td>
                            <td>{{ $issue->longitude != null ? $issue->longitude : 'Onbekend' }}</td>
                        </tr>
                        <tr>
                            <td class="text-bold">Regio:</td>
                            <td>{{ $issue->region != null && $issue->region->name != null ? $issue->region->name : 'Onbekend' }}</td>
                        </tr>
                        <tr>
                            <td class="text-bold">Aangemaakt op:</td>
                            <td>{{ $issue->dateCreated != null ? date("d-m-Y H:i:s", strtotime($issue->dateCreated)) : 'Onbekend' }}</td>
                        </tr>
                        <tr>
                            <td class="text-bold">Opgelost op:</td>
                            <td>{{ $issue->dateResolved != null ? date("d-m-Y H:i:s", strtotime($issue->dateResolved)) : 'Onbekend' }}</td>
                        </tr>
                        <tr>
                            <td class="text-bold">Status:</td>
                            <td>{{ $issue->status != null ? $issue->status : 'Onbekend' }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box box-warning">
                <div class="box-header">
                    <h3 class="box-title">
                        Kaart
                    </h3>
                </div>
                <div class="box-body no-padding">
                    <div id="map" class="img-responsive"></div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box box-warning">
                <div class="box-header">
                    <h3 class="box-title">
                        Afbeelding
                    </h3>
                </div>
                <div class="box-body no-padding">
                    @if(isset($issue->image))
                        <img src="{{ $issue->image }}" class="img-responsive"/>
                    @else
                        Geen afbeelding
                    @endif
                </div>
            </div>
        </div>
    </div>
    <script>
        function initMap() {
            var lat = <?php echo $issue->latitude; ?>;
            var long = <?php echo $issue->longitude; ?>;

            var uluru = {lat: lat, lng: long};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 16,
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
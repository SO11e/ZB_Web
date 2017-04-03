@extends('layouts.main')

@section('title', 'Melding Zorgvlietstraat')

@section('middlebreadcrumbs')
<!--
    Enter breadcrumbs that will show between application name (De Zonnebloem) and page title (see above) in this format:
-->
<li>MiddleBreadcrumb</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-4">
            <p><strong>Adres:</strong></p>
            <p>Zorgvlietstraat 491</p>

            <p><strong>Postcode:</strong></p>
            <p>4834 NH Breda</p>

            <p><strong>Stad/regio:</strong></p>
            <p>Breda</p>

            <p><strong>Aangemaakt op:</strong></p>
            <p>20-02-2017</p>

            <p><strong>Status:</strong></p>
            <p>Nog niet bekeken door de administrator</p>

            <p><strong>Aangemaakt door:</strong></p>
            <p>Jan van Dam</p>

            <img class="detail-img" src="{{ asset('/resources/dist/img/reports/example_map.png') }}"/>
            <div style="width:50%">
                <button href="http://google.com" type="button" class="btn btn-block btn-success">Goedkeuren</button>
                <button href="http://google.com" type="button" class="btn btn-block btn-danger">Afkeuren</button>
            </div>
        </div>
        <div class="col-md-8">
            <img class="detail-img" src="{{ asset('/resources/dist/img/reports/zorgvlietstraat.png') }}"/>
        </div>
    </div>
@endsection
@extends('layouts.main')

@section('title', 'Dashboard')
    
@section('middlebreadcrumbs')
<!--
        Enter breadcrumbs that will show between application name (De Zonnebloem) and page title (see above) in this format:
    -->
@endsection

@section('content')
<div class="row">
    <div class="col-md-3 col-md-offset-3">
        <div class="box box-default">
            <div class="box-header">
                <h3 class="box-title">Uw gegevens</h3>
            </div>
            <div class="box-body no-padding">
                <table class="table">
                    <tr>
                        <td>Voornaam:</td>
                        <td>{{ $userdata->firstname != '' ? $userdata->firstname : 'Onbekend' }}</td>
                    </tr>
                    <tr>
                        <td>Achternaam:</td>
                        <td>{{ $userdata->lastname != '' ? $userdata->lastname : 'Onbekend' }}</td>
                    </tr>
                    <tr>
                        <td>Adres:</td>
                        <td>{{ $userdata->street != '' && $userdata->housenumber != '' ? $userdata->street . ' ' . $userdata->housenumber : 'Onbekend' }}</td>
                    </tr>
                    <tr>
                        <td>Postcode:</td>
                        <td>{{ $userdata->zipcode != '' ? $userdata->zipcode : 'Onbekend' }}</td>
                    </tr>
                    <tr>
                        <td>Woonplaats:</td>
                        <td>{{ $userdata->city != '' ? $userdata->city : 'Onbekend' }}</td>
                    </tr>
                    <tr>
                        <td>Rol:</td>
                        <td>
                            <?php 
                                switch($userdata->role) {
                                    case 'user':
                                        echo 'Gebruiker';
                                        break;
                                    case 'admin':
                                        echo 'Beheeder';
                                        break;
                                    default:
                                        echo 'Onbekend';
                                        break;
                                }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Emailadres:</td>
                        <td>{{ $userdata->email }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-default">
                    <div class="box-header">
                        <h3 class="box-title">Meldingen</h3>
                    </div>
                    <div class="box-body no-padding">
                        <table class="table">
                            <tr>
                                <td>Nieuwe meldingen:</td>
                                <td>{{ $issuecount }}</td>
                            </tr>
                            <tr>
                                <td>Nieuwe rapportages:</td>
                                <td>{{ $createdreports }}</td>
                            </tr>
                            <tr>
                                <td>Verstuurde rapportages:</td>
                                <td>{{ $sentreports }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">&nbsp;</div>
        <div class="row">
            <div class="col-md-12">
                <div class="box box-default">
                    <div class="box-header">
                        <h3 class="box-title">Sneltoets menu</h3>
                    </div>
                    <div class="box-body">
                        <div class="btn-group btn-group-sm">
                            <a class="btn btn-warning" href="{{ route('user.add') }}"><i class="fa fa-plus"></i> Voeg gebruiker toe</a>
                            <a class="btn btn-warning" href="{{ route('region.add') }}"><i class="fa fa-plus"></i> Voeg regio toe</a>
                            <a class="btn btn-warning" href="{{ route('issue.list') }}"><i class="fa fa-plus"></i> Maak rapportage</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
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
                        <td>[Not implemented]</td>
                    </tr>
                    <tr>
                        <td>Achternaam:</td>
                        <td>[Not implemented]</td>
                    </tr>
                    <tr>
                        <td>Woonplaats:</td>
                        <td>[Not implemented]</td>
                    </tr>
                    <tr>
                        <td>Straatnaam:</td>
                        <td>[Not implemented]</td>
                    </tr>
                    <tr>
                        <td>Postcode:</td>
                        <td>[Not implemented]</td>
                    </tr>
                    <tr>
                        <td>Rol:</td>
                        <td>
                            <?php 
                                switch($user->roles) {
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
                        <td>Email Adres:</td>
                        <td>{{ $user->email }}</td>
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
                                <td>[Not implemented]</td>
                            </tr>
                            <tr>
                                <td>Nieuwe geaccepteerde rapportages:</td>
                                <td>[Not implemented]</td>
                            </tr>
                            <tr>
                                <td>Nieuwe geweigerde rapportages:</td>
                                <td>[Not implemented]</td>
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
                            <button class="btn btn-warning"><i class="fa fa-plus"></i> Maak rapportage</button>
                            <button class="btn btn-warning"><i class="fa fa-plus"></i> Voeg gebruiker toe</button>
                            <button class="btn btn-warning"><i class="fa fa-plus"></i> Voeg regio toe</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
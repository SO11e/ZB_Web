@extends('layouts.main')

@section('title', 'Dashboard')
    
@section('middlebreadcrumbs')
<!--
        Enter breadcrumbs that will show between application name (De Zonnebloem) and page title (see above) in this format:
    -->
@endsection

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Gebruiker
            </div>
            <div class="panel-body">
                <table class="table">
                    <tr>
                        <td>Voornaam:</td>
                        <td>Test</td>
                    </tr>
                    <tr>
                        <td>Achternaam:</td>
                        <td>Test</td>
                    </tr>
                    <tr>
                        <td>Woonplaats:</td>
                        <td>Breda</td>
                    </tr>
                    <tr>
                        <td>Straatnaam:</td>
                        <td>Zonnestraat 123</td>
                    </tr>
                    <tr>
                        <td>Postcode:</td>
                        <td>1234AB</td>
                    </tr>
                    <tr>
                        <td>Rol:</td>
                        <td>Administrator</td>
                    </tr>
                    <tr>
                        <td>Email Adres:</td>
                        <td>Test@zonnebloem.nl</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
            Meldingen
            </div>
            <div class="panel-body">
                <table class="table">
                    <tr>
                        <td>Nieuwe meldingen:</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>Nieuwe geaccepteerde rapportages:</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>Nieuwe geweigerde rapportages:</td>
                        <td>2</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
            Sneltoets menu
            </div>
            <div class="panel-body">
                <button class="btn btn-primary">Maak melding</button>
                <button class="btn btn-primary">Maak rapportage</button>
                <button class="btn btn-primary">Voeg gebruiker toe</button>
            </div>
        </div>
    </div>
</div>
@endsection
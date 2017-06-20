<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Rapportage </title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="http://localhost/resources/bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="http://localhost/resources/dist/css/theme.css">
    
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="wrapper">
            <div class="row">
                <div class="col-xs-12">
                    <h2>Rapportage</h2>
                    <hr/>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-2">
                    <img src="https://www.zonnebloem.nl/Resources/Images/logo-staand.png" style="height: 125px; width: auto;"/>
                </div>
                <div class="col-xs-3">
                    <h5>Stichting De Zonnebloem<br/>
                        Zorgvlietstraat 491<br/>
                        4834 NH Breda<br/><br/>
                        <i class="fa fa-phone"></i> 076-5646464<br/>
                        <i class="fa fa-globe"></i> www.zonnebloem.nl</h5>
                </div>
               <div class="col-xs-3">&nbsp;</div>
                <div class="col-xs-4">
                    <h5><b>Rapport #:</b> {{ $report->id }}<br/>
                        <b>Datum aangemaakt:</b> {{ date('d-m-Y H:i:s', strtotime($report->dateCreated)) }}<br/>
                        <b>Aantal meldingen:</b> {{ count($report->issues) }}<br/><br/>
                        <b>Beschrijving:</b><br/>
                        {{ $report->description }}</h5>
                </div>
            </div>
            <hr/>
            <div class="row">
                <div class="col-xs-12">
                    <table class="table table-striped">
                        <tr class="text-bold">
                            <td>Foto</td>
                            <td>Adresgegevens</td>
                            <td>Coordinaten (lat./lng.)</td>
                            <td>Datum gemeld</td>
                            <td>Opmerking</td>
                        </tr>
                        @foreach($report->issues as $issue)
                            <tr>
                                <td>
                                    @if(isset($issue->thumbnail))
                                        <img src="{{ $issue->thumbnail }}" style="height: 125px; width: auto;"/>
                                    @else
                                        Geen afbeelding
                                    @endif
                                </td>
                                <td>{{ isset($issue->streetName, $issue->postalCode, $issue->city) ? $issue->streetName . ', ' . $issue->postalCode . ', ' . $issue->city : 'Onbekend' }}</td>
                                <td>{{ isset($issue->latitude, $issue->longitude) ? $issue->latitude . ', ' . $issue->longitude : 'Onbekend' }}</td>
                                <td>{{ isset($issue->dateCreated) ? date('d-m-Y H:i:s', strtotime($issue->dateCreated)) : 'Onbekend' }}</td>
                                <td>{{ isset($issue->description) ? $issue->description : 'Onbekend' }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
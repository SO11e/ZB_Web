@extends('layouts.main')

@section('title', 'Overzicht meldingen')

@section('middlebreadcrumbs')
<!--
    Enter breadcrumbs that will show between application name (De Zonnebloem) and page title (see above) in this format:
-->
<li>MiddleBreadcrumb</li>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
    <div class="box">
        <!-- /.box-header -->
        <div class="box-body no-padding">
            <table class="table table-striped">
                <tbody><tr>
                    <th style="width: 10px">#</th>
                    <th>Naam</th>
                    <th>Adres</th>
                    <th>Postcode</th>
                    <th>Stad</th>
                    <th>Datum toegevoegd</th>
                    <th>Datum opgelost</th>
                    <th>&nbsp;</th>
                </tr>
                <tr>
                    <td>1.</td>
                    <td>Melding Zorgvlietstraat</td>
                    <td>Zorgvlietstraat 491</td>
                    <td>4834 NH Breda</td>
                    <td>Breda</td>
                    <td>20-02-2017</td>
                    <td>-</td>
                    <td><a href="/meldingen/1" type="button" class="btn btn-block btn-warning btn-sm">Bekijk meer &nbsp;<i class="fa fa-arrow-right"></i></a></td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Melding Chasseveld</td>
                    <td>Chasseveld</td>
                    <td>4811 DH Breda</td>
                    <td>Breda</td>
                    <td>29-09-2016</td>
                    <td>04-01-2017</td>
                    <td><a href="http://google.com" type="button" class="btn btn-block btn-warning btn-sm">Bekijk meer &nbsp;<i class="fa fa-arrow-right"></i></a></td>
                </tr>
                </tbody></table>
        </div>
        <!-- /.box-body -->
        </div>
    </div>
</div>
@endsection

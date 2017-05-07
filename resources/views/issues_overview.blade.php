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
                <tbody>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Beschrijving</th>
                    <th>Adres</th>
                    <th>Postcode</th>
                    <th>Stad</th>
                    <th>Datum toegevoegd</th>
                    <th>Datum opgelost</th>
                    <th>&nbsp;</th>
                </tr>
                @foreach($issues as $issue)
                <tr>
                    <td>{{ $issue->id }}</td>
                    <td>{{ $issue->description }}</td>
                    <td>{{ $issue->streetName }} &nbsp; {{ $issue->houseNumber }}</td>
                    <td>{{ $issue->postalCode }}</td>
                    <td>{{ $issue->place }}</td>
                    <td>{{ $issue->dateCreated }}</td>
                    <td>{{ $issue->dateResolved }}</td>
                    <td><a href="/meldingen/{{$issue->id}}" type="button" class="btn btn-block btn-warning btn-sm">Bekijk meer &nbsp;<i class="fa fa-arrow-right"></i></a></td>
                </tr>
                @endforeach
                </tbody></table>
        </div>
        <!-- /.box-body -->
        </div>
    </div>
</div>
@endsection

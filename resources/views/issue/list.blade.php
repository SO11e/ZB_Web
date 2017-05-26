@extends('layouts.main')

@section('title', 'Overzicht meldingen')

@section('middlebreadcrumbs')
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
                    <th>Beschrijving</th>
                    <th>Adres</th>
                    <th>Postcode</th>
                    <th>Stad</th>
                    <th>Regio</th>
                    <th>Datum toegevoegd</th>
                    <th>Datum opgelost</th>
                    <th>Status</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                </tr>
                @foreach($issues as $issue)
                <tr>
                    <td>{{ $issue->description != null ? $issue->description : 'Onbekend' }}</td>
                    <td>{{ $issue->streetName != null && $issue->houseNumber != null ? $issue->streetName . ' ' . $issue->houseNumber : 'Onbekend' }}</td>
                    <td>{{ $issue->postalCode != null ? $issue->postalCode : 'Onbekend' }}</td>
                    <td>{{ $issue->place != null ? $issue->place : 'Onbekend' }}</td>
                    <td>{{ $issue->region != null && $issue->region->name != null ? $issue->region->name : 'Onbekend' }}</td>
                    <td>{{ $issue->dateCreated != null ? date("d-m-Y H:i:s", strtotime($issue->dateCreated)) : 'Onbekend' }}</td>
                    <td>
                        {{ $issue->dateResolved != null ? date("d-m-Y H:i:s", strtotime($issue->dateResolved)) : 'Onbekend' }}</td>
                    <td>{{ $issue->status != null ? $issue->status : 'Onbekend' }}</td>
                    <td><a href="{{ route('issue.view', $issue->id) }}" type="button" class="btn btn-block btn-warning btn-sm">Bekijk meer &nbsp;<i class="fa fa-arrow-right"></i></a></td>
                    <td><a href="{{ route('issue.edit', $issue->id) }}" type="button" class="btn btn-block btn-warning btn-sm">Bewerken &nbsp; <i class="fa fa-pencil"></i></a></td>
                </tr>
                @endforeach
                </tbody></table>
        </div>
        <!-- /.box-body -->
        </div>
    </div>
</div>
@endsection

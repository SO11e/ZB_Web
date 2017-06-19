@extends('layouts.main')

@section('title', 'Overzicht Rapporten')

@section('middlebreadcrumbs')
@endsection

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="box box-default">
            <div class="box-header">
                <h3 class="box-title">Rapportages</h3>
                <div class="box-tools">
                    <a href="#" class="btn btn-warning btn-xs"><i class="fa fa-plus"></i> Nieuwe rapportage</a>
                </div>
            </div>
            <div class="box-body no-padding table-horizontalscroll">
                <table id="reports-table" class="table table-striped">
                    <thead>
                    <tr class="text-bold">
                        <td width="125px">Beschrijving</td>
                        <td width="100px">Status</td>
                        <td width="200px">Datum aangemaakt</td>
                        <td width="75px">Datum aangepast</td>
                        <td width="100px">Gemaakt door</td>
                        <td width="175px">Aantal meldingen</td>
                        <td width="150px">Acties</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($reports as $report)
                        <tr>
                            <td>{{ $report->description != null ? $report->description : 'Onbekend' }}</td>
                            <td>{{ $report->status != null ? $report->status : 'Onbekend' }}</td>
                            <td>{{ $report->dateCreated != null ? date("d-m-Y H:i:s", strtotime($report->dateCreated)) : 'Onbekend'}}</td>
                            <td>{{ $report->dateUpdated != null ? date("d-m-Y H:i:s", strtotime($report->dateUpdated)) : 'Onbekend'}}</td>
                            <td>{{ $report->createBy != null ? $report->createBy->name : 'Onbekend'}}</td>
                            <td>{{ $report->issues != null ? count($report->issues) : '0' }}</td>
                            <td>
                                <div class="btn-group btn-group-xs" width="100%">
                                    <a href="#" class="btn btn-warning btn-xs"><i class="fa fa-arrow-circle-o-right"></i> Bekijken</a>
                                    <a href="{{ route('report.edit', $report->id) }}" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i> Bewerken</a>
                                    <a href="{{ route('report.delete', $report->id) }}" class="btn btn-warning btn-xs" onclick="return confirm('Weet u zeker dat u deze melding wilt verwijderen? Dit kan niet ongedaan gemaakt worden.')"><i class="fa fa-trash"></i> Verwijderen</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

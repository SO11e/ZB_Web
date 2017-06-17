@extends('layouts.main')

@section('title', 'Rapport bewerken')

@section('middlebreadcrumbs')
@endsection

@section('content')
<div class="row">
        <div class="col-md-3 col-md-offset-4">
            <div class="box box-warning">
                <div class="box-header">
                    <h3 class="box-title">
                        Rapport aanpassen
                    </h3>
                </div>
                <div class="box-body">
                    <form id="editReportForm" method="POST" action="{{ route('report.edit.submit') }}'">
                        <input type="hidden" name="id" value="{{$report->id}}">
                        <div class="form-group">
                            <label>Beschrijving:</label>
                            <textarea class="form-control" name="description">{{$report->description}}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Status:</label>
                            <select class="form-control" name="status">
                                <option{{ $report->status == 'created' ? ' selected' : '' }} value="created">Recent aangemaakt</option>
                                <option{{ $report->status == 'send' ? ' selected' : '' }} value="send">Verzonden</option>
                                <option{{ $report->status == 'closed' ? ' selected' : '' }} value="closed">Gesloten</option>
                            </select>
                        </div>
                        <div class="form-group text-right">
                            <button class="btn btn-success" onclick="document.getElementById('editReportForm').submit()"><i class="fa fa-check"></i> Opslaan</button>
                            <a href="{{ route('report.list') }}" class="btn btn-sm btn-danger"><i class="fa fa-close"></i> Annuleren</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.main')

@section('title', 'Melding aanpassen')

@section('middlebreadcrumbs')
    <li><a href="{{ route('issue.list') }}">Meldingen</a></li>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-3 col-md-offset-4">
            <div class="box box-warning">
                <div class="box-header">
                    <h3 class="box-title">
                        Melding aanpassen
                    </h3>
                </div>
                <div class="box-body">
                    <form id="editIssueForm" method="POST" action="{{ route('issue.edit.submit') }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $issue->id }}">
                        <input type="hidden" name="region" value="{{ $issue->region->id }}">
                        <div class="form-group">
                            <label>Beschrijving:</label>
                            <textarea class="form-control" name="description">{{ $issue->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Datum opgelost</label>
                            <input class="form-control" type="date" name="dateResolved" value="{{ $issue->dateResolved }}" placeholder="YYYY-MM-DD">
                            <span><strong>* niet invullen indien niet van toepassing</strong></span>
                        </div>
                        <div class="form-group">
                            <label>Status:</label>
                            <select class="form-control" name="status">
                                <option{{ $issue->status == 'open' ? ' selected' : '' }} value="open">Open</option>
                                <option{{ $issue->status == 'accepted' ? ' selected' : '' }} value="accepted">Geaccepteerd</option>
                                <option{{ $issue->status == 'refused' ? ' selected' : '' }} value="refused">Geweigerd</option>
                                <option{{ $issue->status == 'closed' ? ' selected' : '' }} value="closed">Gesloten</option>
                            </select>
                        </div>
                        <div class="form-group text-right">
                            <button class="btn btn-success" onclick="document.getElementById('editIssueForm').submit()"><i class="fa fa-check"></i> Opslaan</button>
                            <a href="{{ route('issue.list') }}" class="btn btn-sm btn-danger"><i class="fa fa-close"></i> Annuleren</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
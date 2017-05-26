@extends('layouts.main')

@section('title', 'Melding aanpassen')

@section('middlebreadcrumbs')
    <li><a href="{{ route('issue.list') }}">Issue</a></li>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-3 col-md-offset-4">
            <div class="box box-warning">
                <div class="box-header">
                    <h3 class="box-title">
                        Nieuwe regio
                    </h3>
                </div>
                <div class="box-body">
                    <form id="editIssueForm" method="POST" action="{{ route('issue.edit.submit') }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{$issue->id}}">
                        <div class="form-group">
                            <label>Beschrijving:</label>
                            <textarea class="form-control" name="description">{{ $issue->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Probleem opgelost</label>
                            <input class="form-control" type="date" name="dateResolved" value="{{ $issue->dateResolved }}">
                            <span><strong>* niet invullen indien niet van toepassing</strong></span>
                        </div>
                        <div class="form-group">
                            <label>Status:</label>
                            <select class="form-control" name="status">
                                <option value="open">Open</option>
                                <option value="accepted">Geaccepteerd</option>
                                <option value="refused">Geweigerd</option>
                                <option value="closed">Gesloten</option>
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
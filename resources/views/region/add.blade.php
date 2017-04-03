@extends('layouts.main')

@section('title', 'Nieuwe regio')

@section('middlebreadcrumbs')
    <li>Regio</li>
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
                    <div class="form-group">
                        <label>Naam:</label>
                        <input class="form-control" type="text" placeholder="Naam regio">
                    </div>
                    <div class="form-group">
                        <label>Beheerder:</label>
                        <select class="form-control" name="manager">
                            <option selected disabled>Kies een beheerder</option>
                            <option value="0">Pieter Derkse</option>
                            <option value="0">Petra Dijkstra</option>
                            <option value="0">Johan de Jong</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="active" checked/>
                        <label>Actief</label>
                    </div>
                    <div class="form-group">
                        <label>Postcodes (kommagescheiden):</label>
                        <textarea class="form-control" name="zipcodes" placeholder="1234AA,1234AB,1234AC"></textarea>
                    </div>
                    <div class="form-group text-right">
                        <a href="{{ route('region.list') }}" class="btn btn-sm btn-success"><i class="fa fa-save"></i> Opslaan</a>
                        <a href="{{ route('region.list') }}" class="btn btn-sm btn-danger"><i class="fa fa-close"></i> Annuleren</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

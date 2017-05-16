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
                    <form id="newregionform" method="POST" action="{{ route('region.add.submit') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Naam:</label>
                            <input class="form-control" type="text" name="name" placeholder="Naam regio">
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="isActive" checked/>
                            <label>Actief</label>
                        </div>
                        <div class="form-group">
                            <label>Postcodes (kommagescheiden):</label>
                            <textarea class="form-control" name="postalCodes" placeholder="1234AA,1234AB,1234AC"></textarea>
                        </div>
                        <div class="form-group text-right">
                            <button class="btn btn-success" onclick="document.getElementById('newregionform').submit()"><i class="fa fa-check"></i> Opslaan</button>
                            <a href="{{ route('region.list') }}" class="btn btn-sm btn-danger"><i class="fa fa-close"></i> Annuleren</a>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
@endsection

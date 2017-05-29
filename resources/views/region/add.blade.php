@extends('layouts.main')

@section('title', 'Nieuwe regio')

@section('middlebreadcrumbs')
    <li>Regio</li>
@endsection

@section('content')
    @if (count($errors) > 0)
        <div class="row">
            <div class="col-md-3 col-md-offset-4">
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-exclamation-triangle"></i> Foutmelding</h4>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    @endif
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
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label>Naam:</label>
                            <input class="form-control" type="text" name="name" placeholder="Naam regio" value="{{ old('name') }}">
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="isActive" checked/>
                            <label>Regio actief</label>
                        </div>
                        <div class="form-group{{ $errors->has('manager') ? ' has-error' : '' }}">
                            <label>Beheerder:</label>
                            <select class="form-control" name="manager">
                                @foreach($users as $user)
                                    @if($user->fullname != ' ')
                                        <option{{ old('manager') == $user->id ? ' selected' : '' }} value="{{ $user->id }}">{{ $user->fullname }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group{{ $errors->has('postalCodes') ? ' has-error' : '' }}">
                            <label>Postcodes (kommagescheiden):</label>
                            <textarea class="form-control" name="postalCodes" placeholder="1234AA,1234AB,1234AC"></textarea>
                        </div>
                        <div class="form-group text-right">
                            <button class="btn btn-success" onclick="document.getElementById('newregionform').submit()"><i class="fa fa-save"></i> Opslaan</button>
                            <a href="{{ route('region.list') }}" class="btn btn-danger"><i class="fa fa-close"></i> Annuleren</a>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
@endsection

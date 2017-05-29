@extends('layouts.main')

@section('title', 'Gebruiker bewerken')

@section('middlebreadcrumbs')
    <li>Gebruiker</li>
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
                        Gebruiker bewerken
                    </h3>
                </div>
                <div class="box-body">
                    <form id="newuserform" method="POST" action="{{ route('user.edit.submit') }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $user->id }}"/>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                                    <label>Voornaam:</label>
                                    <input class="form-control" type="text" name="firstname" placeholder="Voornaam" value="{{ old('firstname') != '' ? old('firstname') : $user->firstname }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                                    <label>Achternaam:</label>
                                    <input class="form-control" type="text" name="lastname" placeholder="Achternaam" value="{{ old('lastname') != '' ? old('lastname') : $user->lastname }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label>Emailadres:</label>
                                    <input class="form-control" type="text" name="email" placeholder="Emailadres" value="{{ old('email') != '' ? old('email') : $user->email }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group{{ $errors->has('street') ? ' has-error' : '' }}">
                                    <label>Straat:</label>
                                    <input class="form-control" type="text" name="street" placeholder="Straat" value="{{ old('street') != '' ? old('street') : $user->street }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group{{ $errors->has('housenumber') ? ' has-error' : '' }}">
                                    <label>Huisnr.:</label>
                                    <input class="form-control" type="text" name="housenumber" placeholder="Huisnr." value="{{ old('housenumber') != '' ? old('housenumber') : $user->housenumber }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('zipcode') ? ' has-error' : '' }}">
                                    <label>Postcode:</label>
                                    <input class="form-control" type="text" name="zipcode" placeholder="Postcode" value="{{ old('zipcode') != '' ? old('zipcode') : $user->zipcode }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                                    <label>Plaats:</label>
                                    <input class="form-control" type="text" name="city" placeholder="Plaats" value="{{ old('city') != '' ? old('city') : $user->city }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
                                    <label>Rol:</label>
                                    <select class="form-control" name="role">
                                        <option {{ $user->role == 'user' ? 'selected ' : '' }}value="user">Gebruiker</option>
                                        <option {{ $user->role == 'admin' ? 'selected ' : '' }}value="admin">Beheerder</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group{{ $errors->has('region') ? ' has-error' : '' }}">
                                    <label>Regio:</label>
                                    <select class="form-control" name="region">
                                        @foreach($regions as $region)
                                            <option {{ $user->region->id == $region->id ? 'selected ' : '' }}value="{{ $region->id }}">{{ $region->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group text-right">
                                    <a href="javascript:document.getElementById('newuserform').submit()" class="btn btn-sm btn-success"><i class="fa fa-save"></i> Opslaan</a>
                                    <a href="{{ route('user.list') }}" class="btn btn-sm btn-danger"><i class="fa fa-close"></i> Annuleren</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

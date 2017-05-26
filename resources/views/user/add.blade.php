@extends('layouts.main')

@section('title', 'Nieuwe gebruiker')

@section('middlebreadcrumbs')
    <li>Gebruiker</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-3 col-md-offset-4">
            <div class="box box-warning">
                <div class="box-header">
                    <h3 class="box-title">
                        Nieuwe gebruiker
                    </h3>
                </div>
                <div class="box-body">
                    <form id="newuserform" method="POST" action="{{ route('user.add.submit') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Voornaam:</label>
                            <input class="form-control" type="text" name="firstname" placeholder="Voornaam">
                        </div>
                        <div class="form-group">
                            <label>Achternaam:</label>
                            <input class="form-control" type="text" name="lastname" placeholder="Achternaam">
                        </div>
                        <div class="form-group">
                            <label>Emailadres:</label>
                            <input class="form-control" type="text" name="email" placeholder="Emailadres">
                        </div>
                        <div class="form-group">
                            <label>Rol:</label>
                            <select class="form-control" name="role">
                                <option selected disabled>Kies een rol</option>
                                <option value="user">Gebruiker</option>
                                <option value="admin">Beheerder</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Regio:</label>
                            <select class="form-control" name="region">
                                <option selected disabled>Kies een regio</option>
                                <option value="">Geen regio</option>
                            </select>
                        </div>
                        <div class="form-group text-right">
                            <a href="javascript:document.getElementById('newuserform').submit()" class="btn btn-sm btn-success"><i class="fa fa-save"></i> Opslaan</a>
                            <a href="{{ route('user.list') }}" class="btn btn-sm btn-danger"><i class="fa fa-close"></i> Annuleren</a>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.main') 

@section('title', 'Gebruikers') 
 
@section('content')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="box box-default">
            <div class="box-header">
                <h3 class="box-title">Gebruikers</h3>
                <div class="box-tools">
                    <a href="{{ route('user.add') }}" class="btn btn-warning btn-xs"><i class="fa fa-plus"></i> Nieuwe gebruiker</a>
                </div>
            </div>
            <div class="box-body no-padding table-horizontalscroll">
                <table class="table table-striped">
                    <thead>
                    <tr class="text-bold">
                        <td width="125px">Volledige naam</td>
                        <td width="200px">Emailadres</td>
                        <td width="75px">Rol</td>
                        <td width="100px">Regio</td>
                        <td width="175px">Acties</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->fullname != ' ' ? $user->fullname : 'Onbekend' }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role }}</td>
                            <td>{{ $user->region->name }}</td>
                            <td>
                                <div class="btn-group btn-group-xs" width="100%">
                                    <a href="#" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i> Bewerken</a>
                                    <a href="#" class="btn btn-warning btn-xs"><i class="fa fa-trash"></i> Verwijderen</a>
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
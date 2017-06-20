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
                <input type="text" class="searchInput" id="myInput" onkeyup="filterTable('myInput', 'table-users', 0)" placeholder="Zoek op volledige naam">
                <table id="table-users" class="table table-striped">
                    <thead>
                    <tr class="text-bold">
                        <th width="125px">Volledige naam</th>
                        <th width="100px">Woonplaats</th>
                        <th width="200px">Emailadres</th>
                        <th width="75px">Rol</th>
                        <th width="100px">Regio</th>
                        <th width="175px">Acties</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->fullname != ' ' ? $user->fullname : 'Onbekend' }}</td>
                            <td>{{ $user->city != null ? $user->city : 'Onbekend' }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role }}</td>
                            <td>{{ $user->region->name }}</td>
                            <td>
                                <div class="btn-group btn-group-xs" width="100%">
                                    <a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i> Bewerken</a>
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
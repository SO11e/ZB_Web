@extends('layouts.main')

@section('title', 'Wachtwoord wijzigen')

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
            <div class="box box-default">
                <div class="box-header">
                    <h3 class="box-title">Wachtwoord wijzigen</h3>
                </div>
                <div class="box-body">
                    <form method="POST" action="{{ route('auth.changepassword.submit') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('currentpass') ? ' has-error' : '' }}">
                            <label>Huidig wachtwoord:</label>
                            <input class="form-control" type="password" name="currentpass"/>
                        </div>
                        <div class="form-group{{ $errors->has('newpass') ? ' has-error' : '' }}">
                            <label>Nieuw wachtwoord:</label>
                            <input class="form-control" type="password" name="newpass"/>
                        </div>
                        <div class="form-group{{ $errors->has('repeatpass') ? ' has-error' : '' }}">
                            <label>Herhaal nieuw wachtwoord:</label>
                            <input class="form-control" type="password" name="repeatpass"/>
                        </div>
                        <p><i>Let op! Na het wijzigen van uw wachtwoord zult u opnieuw moeten inloggen!</i></p>
                        <div class="form-group text-right">
                            <button class="btn btn-success" type="submit"><i class="fa fa-key"></i> Wachtwoord wijzigen</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.main')

@section('title', 'Overzicht meldingen')

@section('middlebreadcrumbs')
@endsection

@section('content')
<div class="row">

    <div class="col-md-12">
    <div class="box">
        <!-- /.box-header -->
        <div class="box-body no-padding">
            <form method="post" action="" onsubmit="showContents(); return false;">
                
                <table class="table table-striped">
                    <tbody>
                    <tr>
                        <th></th>
                        <th>Beschrijving</th>
                        <th>Adres</th>
                        <th>Postcode</th>
                        <th>Stad</th>
                        <th>Regio</th>
                        <th>Datum toegevoegd</th>
                        <th>Datum opgelost</th>
                        <th>Status</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                    </tr>
                    @foreach($issues as $issue)
                        <tr>
                            <td>
                                <input type="checkbox" onchange="dochange(this);" value="{{ $issue->id }}"/>
                                <input type="checkbox" onchange="dochange(this);" name="selected[]" value="{{ $issue->id . '1' }}"/>
                                <input type="checkbox" onchange="dochange(this);" name="selected[]" value="{{ $issue->id . '2' }}"/>
                            </td>
                            <td>{{ $issue->description != null ? $issue->description : 'Onbekend' }}</td>
                            <td>{{ $issue->streetName != null && $issue->houseNumber != null ? $issue->streetName . ' ' . $issue->houseNumber : 'Onbekend' }}</td>
                            <td>{{ $issue->postalCode != null ? $issue->postalCode : 'Onbekend' }}</td>
                            <td>{{ $issue->place != null ? $issue->place : 'Onbekend' }}</td>
                            <td>{{ $issue->region != null && $issue->region->name != null ? $issue->region->name : 'Onbekend' }}</td>
                            <td>{{ $issue->dateCreated != null ? date("d-m-Y H:i:s", strtotime($issue->dateCreated)) : 'Onbekend' }}</td>
                            <td>
                                {{ $issue->dateResolved != null ? date("d-m-Y H:i:s", strtotime($issue->dateResolved)) : 'Onbekend' }}</td>
                            <td>{{ $issue->status != null ? $issue->status : 'Onbekend' }}</td>
                            <td><a href="{{ route('issue.view', $issue->id) }}" type="button" class="btn btn-block btn-warning btn-sm">Bekijk meer &nbsp;<i class="fa fa-arrow-right"></i></a></td>
                            <td><a href="{{ route('issue.edit', $issue->id) }}" ><i class="fa fa-pencil"></i></a></td>
                            <td><a href="{{ route('issue.delete', $issue->id) }}" onclick="return confirm('Weet u zeker dat u deze melding wilt verwijderen? Dit kan niet ongedaan gemaakt worden.')"><i style="color:#dd4b39" class="fa fa-remove"></i></a></td>
                        </tr>
                    @endforeach
                    </tbody></table>
                <input type="submit" value="okdoei"/>
            </form>
            
        </div>
        <!-- /.box-body -->
        </div>
    </div>
</div>
    <script>
        var selected = [];
        
        function dochange(cb) {
            if(cb.checked){
                selected[selected.length] = cb.value;
            }else{
                for(var i = 0; i < selected.length; i++){
                    if(selected[i] === cb.value) {
                        selected.splice(i, 1);
                    } 
                }
            }
            
        }
        function showContents() {
            console.log(this.selected);
            
        }        
    </script>
@endsection

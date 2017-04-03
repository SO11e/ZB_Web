@extends('layouts.main')

@section('title', 'Regio bewerken')

@section('middlebreadcrumbs')
    <li>Regio</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-3 col-md-offset-4">
            <div class="box box-warning">
                <div class="box-header">
                    <h3 class="box-title">
                        Regio bewerken
                    </h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label>Naam:</label>
                        <input class="form-control" type="text" placeholder="Naam regio" value="{{ $region['name'] }}">
                    </div>
                    <div class="form-group">
                        <label>Beheerder:</label>
                        <select class="form-control" name="manager">
                            <option value="0"{{ $region['manager'] == 'Pieter Derkse' ? ' selected' : '' }}>Pieter Derkse</option>
                            <option value="0"{{ $region['manager'] == 'Petra Dijkstra' ? ' selected' : '' }}>Petra Dijkstra</option>
                            <option value="0"{{ $region['manager'] == 'Johan de Jong' ? ' selected' : '' }}>Johan de Jong</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="active"{{ $region['active'] ? ' checked' : '' }}/>
                        <label>Actief</label>
                    </div>
                    <div class="form-group">
                        <label>Postcodes (kommagescheiden):</label>
                        <?php
                        $first = true;
    
                        $string = '';
                        foreach($region['zipcodes'] as $zipcode){
                            if($first){
                                $string += $zipcode;
                                $first = false;
                            }else{
                                $string = $string . ',' . $zipcode;
                            }
                        }
                        ?>
                        <textarea class="form-control" name="zipcodes" placeholder="1234AA,1234AB,1234AC">{{ $string }}</textarea>
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
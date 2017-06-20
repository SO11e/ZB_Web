@extends('layouts.main')

@section('title', 'Overzicht regios\'s')

@section('middlebreadcrumbs')
    <li>Regio</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="box box-warning">
                <div class="box-header">
                    <h3 class="box-title">
                        Overzicht regio's
                    </h3>
                    <div class="box-tools">
                        <a href="{{ route('region.add') }}" class="btn btn-xs btn-warning"><i class="fa fa-plus"></i> Nieuwe regio</a>
                    </div>
                </div>
                <div class="box-body no-padding">
                    <input type="text" class="searchInput" id="myInput" onkeyup="filterTable('myInput', 'table-regions', 0)" placeholder="Zoek op naam">
                    <input type="text" class="searchInput" id="zipCode" onkeyup="filterTable('zipCode', 'table-regions', 3)" placeholder="Zoek op postcode">
                    <br/>
                    <span style="margin-left:8px">* Combinerend zoeken <strong>niet</strong> mogelijk</span>
                    <table id="table-regions" class="table table-striped">
                        <thead>
                        <tr class="text-bold">
                            <td width="125px">Naam</td>
                            <td width="150px">Beheerder</td>
                            <td width="100px">Status</td>
                            <td>Postcodes</td>
                            <td width="100px">Acties</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($regions as $region)
                            <tr>
                                <td>{{ $region->name }}</td>
                                <td>{{ $region->manager->fullname }}</td>
                                <td>{{ $region->isActive ? 'Actief' : 'Non-actief' }}</td>
                                <td>
                                    <?php $first = true; ?>
                                    @foreach($region->postalCodes as $zipcode)
                                        @if($first)
                                            {{ $zipcode }}
                                            <?php $first = false; ?>
                                        @else
                                            {{ ', ' . $zipcode }}
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                    <div class="btn-group-xs">
                                        <a href="{{ route('region.edit', $region->id) }}" class="btn btn-xs btn-warning"><i class="fa fa-edit"></i> Bewerken</a>
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

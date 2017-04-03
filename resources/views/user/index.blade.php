@extends('layouts.main') @section('title', 'Gebruikers') @section('middlebreadcrumbs')
<!--
        Enter breadcrumbs that will show between application name (De Zonnebloem) and page title (see above) in this format:
    -->
@endsection @section('content')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <table class="table table-striped">
                <tr>
                    <th>Gebruikersnaam</th>
                    <th>Email</th>
                    <th>Rol</th>
                    <th>Voornaam</th>
                    <th>Achternaam</th>
                    <th>Woonplaats</th>
                    <th>Straatnaam</th>
                    <th>Postcode</th>
                    <th>Acties</th>
                </tr>
                <tr>
                    <td>Test</td>
                    <td>Test@zonnebloem.nl</td>
                    <td>Administrator</td>
                    <td>Meneer</td>
                    <td>Test</td>
                    <td>Teststad</td>
                    <td>Teststraat 15</td>
                    <td>1234AB</td>
                    <td><button class="btn btn-default btn-sm">Wijzigen</button><button class="btn btn-default btn-sm">Verwijderen</button></td>
                </tr>
                <tr>
                    <td>Test2</td>
                    <td>Test2@zonnebloem.nl</td>
                    <td>Gebruiker</td>
                    <td>Mevrouw</td>
                    <td>Test</td>
                    <td>Teststad</td>
                    <td>Teststraat 16</td>
                    <td>1234AC</td>
                    <td><button class="btn btn-default btn-sm">Wijzigen</button><button class="btn btn-default btn-sm">Verwijderen</button></td>
                </tr>
            </table>
            <div class="panel-body">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Gebruiker toevoegen</button>
            </div>
        </div>
    </div>
    <!--<div class="col-md-12">
        <div class="panel panel-default">
            <table id="users" class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Gebruikersnaam</th>
                        <th>Rol</th>
                        <th>Voornaam</th>
                    </tr>
                </thead>
            </table>
            <script type="text/javascript">
            $(document).ready(function() {
                oTable = $('#users').DataTable({
                    "processing": true,
                    "serverSide": true,
                    "ajax": "{{ route('app.getusers') }}",
                    "columns": [
                        {data: 'id', name: 'id'},
                        {data: 'gebruikersnaam', name: 'gebruikersnaam'},
                        {data: 'rol', name: 'rol'},
                        {data: 'tag', name: 'tag'}
                    ]
                });
            });
</script>
        </div>-->
</div>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
                <table class="table">
                    <tr>
                        <td>Gebruikersnaam</td>
                        <td><input type="text" name="username" placeholder="Gebruikersnaam" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="text" name="email" placeholder="Email" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Rol</td>
                        <td><select class="form-control" id="role">
                                <option>Gebruiker</option>
                                <option>Administrator</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Voornaam</td>
                        <td><input type="text" name="firstname" placeholder="Voornaam" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Achternaam</td>
                        <td><input type="text" name="lastname" placeholder="Achternaam" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Woonplaats</td>
                        <td><input type="text" name="town" placeholder="Woonplaats" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Straatnaam</td>
                        <td><input type="text" name="street" placeholder="Straatnaam" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Postcode</td>
                        <td><input type="text" name="postalcode" placeholder="Postcode" class="form-control"></td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
@endsection
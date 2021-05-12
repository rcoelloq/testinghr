@extends('includes.dash')

@section('contenido')

<div class="content-wrapper">


    <div class="container p-3">
        <div class="row-center">
                <div class="card card-body">
                    <h3>Empresa</h3>
                    <p>Aquí puedes encontrar información de tu empresa</p>
                </div>
        </div>
    </div>

    <div class="container p-3">
        <div class="row-center">
            <div class="col-md-5.5">
                <div class="card card-body">

                    <form>
                        <div class="form-row">

                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Nombre de la Empresa</label>
                                <input type="text" class="form-control" id="inputEmail4" value="HR" disabled>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Agencia matriz</label>
                                <input type="text" class="form-control" id="inputEmail4" value="MATRIZ" disabled>
                            </div>

                        </div>


                        <div class="form-row">

                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Ciudad</label>
                                <input type="text" class="form-control" id="inputEmail4" value="Guayaquil" disabled>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Dirección</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="Ingrese la dirección">
                            </div>

                        </div>


                        <div class="form-row">

                            <div class="form-group col-md-4">
                                <label for="inputEmail4">Identificación|RUC|DNI</label>
                                <input type="text" class="form-control" id="inputEmail4" value="1825587441" disabled>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="inputEmail4">Agencias</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="Ingrese agencias">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="inputEmail4">Departamentos</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="Ingrese departamentos">
                            </div>

                        </div>

                        <div class="form-row">

                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Correo</label>
                                <input type="text" class="form-control" id="inputEmail4" value="hrsolution@gmail.com" disabled>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Teléfono</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="Ingrese telefono">
                            </div>

                        </div>


                        <div class="form-row">

                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Logotipo (Correo)</label>
                                <input type="text" class="form-control" id="inputEmail4" value="hrsolution@gmail.com" disabled>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Logotipo Job</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="Ingrese Logotipo">
                            </div>

                        </div>

                        </div>
                        <button type="submit" class="btn btn-primary">Agregar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection


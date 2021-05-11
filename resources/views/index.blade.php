@extends('includes.dash')

@section('contenido')

<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 align="right">IMAGENES</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>


        <div class="container p-4">
            <div class="row-center">
                <div class="col-md-5.5">
                    <div class="card card-body">
                        <form name="formWordpress" id="formWordpress" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                    Ingresa el archivo:
                                    <input name="imagen" type="file" accept="image/png, image/jpeg"/>
                            </div>


                           <div class="form-group">
                                <select id="id_combo" name="id_combo" class="form-control">
                                    <option id = "option1" value="select" selected>- Seleccione en que lugar ira la imagen -</option>
                                </select>
                            </div>

                            <div id="obj3" class="form-group">
                                <input type="text" name="texto_footer" class="form-control"
                                    placeholder="Recuerde que el texto ingresado será de color blanco" autofocus>
                            </div>

                            <div class="form-group">
                                <select id="primary" name="contexto" class="form-control">
                                    <option value="1">Interno</option>
                                    <option value="2">Externo</option>
                                </select>
                            </div>

                            <div id="obj1" class="form-group">
                                <select id="secundary" name="secundary" class="form-control">
                                    <option id = "option1" value="select" selected>- Seleccione categoria de la imagen -</option>
                                </select>
                            </div>

                            <input type="button"  class="btn btn-success btn-block" name="save_task"
                                   id="save_task" value="Guardar">
                        </form>

                    </div>
                </div>
            </div>
        </div>
</div>

@endsection


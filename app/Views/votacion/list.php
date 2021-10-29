<!-- Front end General, se listan los clientes por medio de una tabla -->
<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ miga de pan ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Opciones de Respuesta</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('inicio'); ?>"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Listado</a></li>
                            <li class="breadcrumb-item"><a href="#!">General</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
         <!-- [ miga de pan ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- customar project  start -->
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-sm-6">
                            </div>
                            <div class="col-sm-6 text-right">
                                <button class="btn btn-success btn-sm btn-round has-ripple"  onclick="location.href='registrar'"><i class="feather icon-plus"></i> Registrar</button>
                            </div>
                        </div>
                        <div>                      
                        <?= $pregunta[0]["text"];?>
                        </div>
                        <div class="table-responsive">
                            <table id="report-table" class="table table-bordered table-striped mb-0">
                            <!-- Encabezado de la tabla -->
                                <thead>
                                    <tr>
										<th>Ocion</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <!-- Fin del encabezado de la tabla -->
                                <tbody>
                                <!-- Ciclo que recorre el arreglo que trae los datos de la BD -->
                                <?php for ($i=0; $i < count($lista); $i++): ?> 
                                <?php 
                                //  Asignacion de variables para luego pintarlas en la tabla 
                                  
                                    $texto = $lista[$i]["text"];//texto
                                    $id = $lista[$i]['id'];//id
                                ?>
                                    <tr>
                                        <td><?= $texto;?></td>
                                        <td>
                                        <!-- Aqui se manda el id del cliente por medio de la URL -->
                                            <a class="btn btn-info btn-sm" href="<?php echo base_url()."/Pregunta/registrar?idByUrl=".$id;?>"><i class="feather icon-edit" ></i>Editar</a>
                                            <button type="button" class="btn btn-danger btn-sm" onclick="eliminar(<?= $id;?>)">
                                                <i class="feather icon-trash-2"></i>&nbsp;Eliminar
                                            </button>
                                            
                                        </td>
                                    </tr>
                                <?php endfor; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- customar project  end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
  
<?php require_once("../Templete/header.php"); ?>
<body>
    <main class="container">
        <div class="row shadow-none p-3 mb-5 bg-light rounded justify-content-center">  
            <div class="col-md-9">
                <div class="tile">
                    <h3 class="tile-title text-center">Lista de Usuarios</h3>
                    <div class="row justify-content-between p-2">   
                        <div class="col-sm-25">
                            <a href="#" class="btn btn-info">Registrar Usuario <i class="fa-solid fa-user-plus"></i></a>
                        </div>    
                    </div>  
                    <table class="table table-striped table-bordered hadow-sm p-3 mb-5 bg-white rounded">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Nombre(s)</th>
                                <th>Apellidos</th>
                                <th>Telefono</th>
                                <th>Correo Electronico</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</body>
<?php require_once("../Templete/footer.php"); ?>
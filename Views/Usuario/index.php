<?php require_once("../Templete/header.php"); ?>
<body>
    <main class="container">
        <div class="row shadow-none p-3 mb-5 bg-light rounded justify-content-center">  
            <div class="col-md-9">
                <div class="tile">
                    <h3 class="tile-title text-center">Lista de Usuarios</h3>
                    <div class="row justify-content-between p-2">   
                        <div class="col-sm-25">
                            <a href="<?= BASE_URL?>Views/Usuario/crear_usuario.php" class="btn btn-info">Registrar Usuario <i class="fa-solid fa-user-plus"></i></a>
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
                         <tr>
                          <th scope="row">1</th>
                          <td>Octavio</td>
                          <td>Villafranco</td>
                          <td>5511343084</td>
                          <td>ovillafrancot@gmai.com</td>
                          <td>
                            <a class="btn btn-warning btn-sm" href="<?= BASE_URL ?>Views/Usuario/actualizar_usuario.php?id=1"><i class="fas fa-user-edit fa-xs"></i></a>
                             <button class="btn btn-danger btn-sm" onclick="fntDelusuario(1)">
                                <i class="fas fa-user-minus fa-sm"></i></button>
                         </td>
                     </tr>
                 </tbody>
             </table>
         </div>
     </div>
 </div>
</main>
</body>
<?php require_once("../Templete/footer.php"); ?>
<?php
  include_once 'templates/header.php'; 
  include_once 'templates/barra.php';
  include_once 'templates/navegacion.php';

?> 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>
                Crear administrador 
                <h6>Llena el formulario para crear un nuevo administrador</h6>
            </h1>
          </div>
          <div class="col-sm-6">
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <div class="row">
        <div class="col-md-8">
            <div class="content">

            <!-- Main content -->
            <section class="content">

            <!-- Default box -->
            <div class="card">
            <div class="card-header">
                <h3 class="card-title">Crear administrador</h3>

            </div>
            <div class="card-body">
                
                <!-- form start -->
                <form role="form" name="crear-admin" id="crear-admin" method="post" action="insertar-admin.php">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="usuario">Usuario:</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name="usuario" placeholder="Usuario">
                        </div>

                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name="nombre" placeholder="Nombre completo">
                        </div>

                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
                        </div>
                        
                        
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Añadir</button>
                    </div>
                    </form>


            </div>
            <!-- /.card-body -->
            
            </div>
            <!-- /.card -->

            </section>
            <!-- /.content -->

            </div>
        </div>
    </div>

    
  </div>
  <!-- /.content-wrapper -->

<?php
  include_once 'templates/footer.php';

?>

<?php include_once 'includes/templates/header.php'; ?>

<section class="seccion contenedor">
    <h2>Resumen Registro</h2>

    <?php 
                $resultado = $_GET['exito'];
                $paymentId = $_GET['paymentId'];
                $id_pago = (int) $_GET['id_pago'];

                if($resultado === "true"){
                    echo "<div class='resultado correcto'>";
                    echo "El pago se realizo correctamente <br/>";
                    echo "El id del pago es: {$paymentId}";
                    echo "</div>";

                    
                    require_once('includes/funciones/bd_conexion.php');
                    //faltaba el campo de pagado en la base de datos, se adiciono y se coloco como bool = 0 por defecto y funciono
                    $stmt = $conn->prepare('UPDATE registrados SET pagado = ? WHERE ID_registrado = ?');
                    $pagado = 1;
                    $stmt->bind_param( 'ii', $pagado, $id_pago );
                    $stmt->execute();
                    $stmt->close();
                    $conn->close();
                    
                } else {
                    echo "<div class='resultado error'>";
                    echo "El pago no se realizo";
                    echo "</div>";
                }

              ?>

</section>

<?php include_once 'includes/templates/footer.php'; ?>
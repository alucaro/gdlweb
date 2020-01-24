<?php include_once 'includes/templates/header.php'; ?>
  <section class="seccion contenedor">
    <h2>La mejor conferencia de diseño web en español</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam dicta velit, in voluptates ipsam nam, consequuntur modi eos, voluptatum architecto cum. Non minima minus quaerat quasi commodi a modi accusamus.Aliquam voluptatibus rem cupiditate fuga ex explicabo, expedita ut a dolorem facere quisquam voluptas itaque eaque ducimus, illo omnis porro quaerat sunt ullam dolorum. Harum ab nisi quas eos eaque.</p>
  </section>

  <section class="programa">
    <div class="contenedor-video">
      <video autoplay loop poster="img/bg-talleres.jpg">
        <source src="video/video.mp4" type="video/mp4">
        <source src="video/video.webm" type="video/webm">
        <source src="video/video.ogv" type="video/ogv">
      </video>
    </div><!--contenedor video-->

    <div class="contenido-programa">
      <div class="contenedor">
        <div class="programa-evento">
          <h2>Programa del evento</h2>

          <?php 
            try {
              require_once('includes/funciones/bd_conexion.php');//inicia la conexion a la base de datos
              $sql = "SELECT * FROM `categoria_evento` ";   
              $resultado = $conn->query($sql);
            }catch (Exception $e) {
              echo $e->getMessage();
            }
          ?>

            <nav class="menu-programa">
              <?php while($cat = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
                <?php $categoria = $cat['cat_evento']; ?>
                <a href="#<?php echo strtolower($categoria) ?>">
                  <i class="fa <?php echo $cat['icono'] ?>" aria-hidden="true"></i> <?php echo $categoria ?>
                </a>
              <?php } ?>  
            </nav>

            <?php 
              try {
                require_once('includes/funciones/bd_conexion.php');//inicia la conexion a la base de datos
                $sql = "SELECT `evento_id`, `nombre_evento`, `fecha_evento`, `hora_evento`, `cat_evento`, `icono`, `nombre_invitado`, `apellido_invitado` ";//simpre dejar un espacio antes de cerrar las comillas
                $sql .= "FROM `eventos` ";
                $sql .= "INNER JOIN `categoria_evento` ";
                $sql .= "ON eventos.id_cat_evento = categoria_evento.id_categoria ";
                $sql .= "INNER JOIN `invitados` ";
                $sql .= "ON eventos.id_inv=invitados.invitado_id ";
                $sql .= "AND eventos.id_cat_evento = 1 ";
                $sql .= "ORDER BY `evento_id` LIMIT 2;";
                $sql .= "SELECT `evento_id`, `nombre_evento`, `fecha_evento`, `hora_evento`, `cat_evento`, `icono`, `nombre_invitado`, `apellido_invitado` ";//simpre dejar un espacio antes de cerrar las comillas
                $sql .= "FROM `eventos` ";
                $sql .= "INNER JOIN `categoria_evento` ";
                $sql .= "ON eventos.id_cat_evento = categoria_evento.id_categoria ";
                $sql .= "INNER JOIN `invitados` ";
                $sql .= "ON eventos.id_inv=invitados.invitado_id ";
                $sql .= "AND eventos.id_cat_evento = 2 ";
                $sql .= "ORDER BY `evento_id` LIMIT 2;";
                $sql .= "SELECT `evento_id`, `nombre_evento`, `fecha_evento`, `hora_evento`, `cat_evento`, `icono`, `nombre_invitado`, `apellido_invitado` ";//simpre dejar un espacio antes de cerrar las comillas
                $sql .= "FROM `eventos` ";
                $sql .= "INNER JOIN `categoria_evento` ";
                $sql .= "ON eventos.id_cat_evento = categoria_evento.id_categoria ";
                $sql .= "INNER JOIN `invitados` ";
                $sql .= "ON eventos.id_inv=invitados.invitado_id ";
                $sql .= "AND eventos.id_cat_evento = 3 ";
                $sql .= "ORDER BY `evento_id` LIMIT 2;";
                

              }catch (\Exception $e) {
                echo $e->getMessage();
              }
            ?>

            <?php $conn->multi_query($sql) ?>

            <?php 
              do {
                $resultado = $conn->store_result();
                $row = $resultado->fetch_all(MYSQLI_ASSOC); ?>

                <?php $i = 0; ?>
                  <?php foreach($row as $evento): ?>
                    <?php if($i %2 == 0) { ?>
                      <div id="<?php echo strtolower($evento['cat_evento']) ?>" class="info-curso ocultar clearfix">
                    <?php } ?>
                        <div class="detalle-evento">
                          <h3><?php echo utf8_encode($evento['nombre_evento']) ?></h3>
                          <p><i class="fa fa-clock" aria-hidden="true"></i><?php echo $evento['hora_evento']; ?></p>
                          <p><i class="fa fa-calendar" aria-hidden="true"></i><?php echo $evento['fecha_evento']; ?></p>
                          <p><i class="fa fa-user" aria-hidden="true"></i><?php echo $evento['nombre_invitado'] . " " . $evento['apellido_invitado']; ?></p>
                        </div>
                    
                    <?php if($i %2 == 1): ?>
                        <a href="calendario.php" class="button float-rigth">Ver todos</a>
                      </div> <!--talleres-->
                    <?php endif; ?>
                    <?php $i++; ?>
                <?php endforeach; ?>
                <?php $resultado->free(); ?>


              <?php } while ($conn->more_results() && $conn->next_result()); ?>
          

        </div><!--programa evento-->
      </div><!--contenedor-->
    </div><!--contenido-programa-->
  </section><!--programa-->

  <?php include_once 'includes/templates/invitados.php'; ?>

  <div class="contador parallax">
    <div class="contenedor">
      <ul class="resumen-evento clearfix">
        <li><p class="numero">0</p>Invitados</li>
        <li><p class="numero">0</p>Talleres</li>
        <li><p class="numero">0</p>Dias</li>
        <li><p class="numero">0</p>Conferencias</li>
      </ul>
    </div>
  </div>

  <section class="precios seccion">
    <h2>Precios</h2>
    <div class="contenedor">
      <ul class="lista-precios clearfix">
        <li>

          <div class="tabla-precio">
            <h3>Pase por dia</h3>
            <p class="numero">30</p>
            <ul>
              <li>Bocadillos gratis</li>
              <li>Todas las conferencias</li>
              <li>Todos los talleres</li>
            </ul>
            <a href="#" class="button hollow">Comprar</a>
          </div>

        </li>

        <li>

          <div class="tabla-precio">
            <h3>Todos los dias</h3>
            <p class="numero">50</p>
            <ul>
              <li>Bocadillos gratis</li>
              <li>Todas las conferencias</li>
              <li>Todos los talleres</li>
            </ul>
            <a href="#" class="button">Comprar</a>
          </div>

        </li>

        <li>

          <div class="tabla-precio">
            <h3>Pase por 2 dias</h3>
            <p class="numero">45</p>
            <ul>
              <li>Bocadillos gratis</li>
              <li>Todas las conferencias</li>
              <li>Todos los talleres</li>
            </ul>
            <a href="#" class="button hollow">Comprar</a>
          </div>

        </li>
      </ul>
    </div>
  </section>

  <div class="mapa" id="mapa"></div>

  <section class="seccion">

    <h2>Testimoniales</h2>
    <div class="testimoniales contenedor clearfix">
      <div class="testimonial">
        <blockquote>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo placeat maiores nesciunt veritatis cupiditate illo ipsa in. Eveniet impedit animi excepturi autem assumenda aliquid ad. Iure sed minima animi magni!</p>
          <footer class="info-testimonial clearfix">
            <img src="img/testimonial.jpg" alt="imagen testimonial">
            <cite>Oswaldo Aponte Escobedo <span>Diseñador @prisma</span></cite>
          </footer>
        </blockquote>
      </div><!--testimonial-->

      <div class="testimonial">
        <blockquote>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo placeat maiores nesciunt veritatis cupiditate illo ipsa in. Eveniet impedit animi excepturi autem assumenda aliquid ad. Iure sed minima animi magni!</p>
          <footer class="info-testimonial clearfix">
            <img src="img/testimonial.jpg" alt="imagen testimonial">
            <cite>Oswaldo Aponte Escobedo <span>Diseñador @prisma</span></cite>
          </footer>
        </blockquote>
      </div><!--testimonial-->

      <div class="testimonial">
        <blockquote>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo placeat maiores nesciunt veritatis cupiditate illo ipsa in. Eveniet impedit animi excepturi autem assumenda aliquid ad. Iure sed minima animi magni!</p>
          <footer class="info-testimonial clearfix">
            <img src="img/testimonial.jpg" alt="imagen testimonial">
            <cite>Oswaldo Aponte Escobedo <span>Diseñador @prisma</span></cite>
          </footer>
        </blockquote>
      </div><!--testimonial-->
    </div><!--testimoniales contenedor-->

  </section>

  <div class="newsletter parallax">
    <div class="contenido contenedor">
      <p>Registrarte al newsletter</p>
      <h3>GDLwebcamp</h3>
      <a href="#mc_embed_signup" class="boton_newsletter button transparente">Registro</a>
    </div><!--contenido-->
  </div><!--contenido newsletter-->

  <section class="seccion">
    <h2>Faltan</h2>
    <div class="cuenta-regresiva contenedor">
      <ul class="clearfix">
        <li><p class="numero" id="dias"></p> dias</li>
        <li><p class="numero" id="horas"></p> horas</li>
        <li><p class="numero" id="minutos"></p> minutos</li>
        <li><p class="numero" id="segundos"></p> segundos</li>
      </ul>
    </div><!--cuenta-regresiva-->
  </section>

  <?php include_once 'includes/templates/footer.php'; ?>
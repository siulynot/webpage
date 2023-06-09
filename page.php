<?php get_header(); ?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="/wp-content/themes/fhcci/style.css"> 


<body <?php body_class(); ?>>
 <nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="#">
      <img class="navbar-logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="First Home Care Center, Inc.">
      <span class="brand-text">First Home Care Center, Inc.</span>
    </a>
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNavDropdown">
       <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a class="nav-link" href="/">Inicio</a></li>
          <li class="nav-item"><a class="nav-link" href="#servicios">Servicios</a></li>
        <li class="nav-item"><a class="nav-link" href="#requisitos">Requisitos</a></li>
        <li class="nav-item"><a class="nav-link" href="#sobre-nosotros">Sobre Nosotros</a></li>
        <li class="nav-item"><a class="nav-link" href="#sobre-nosotros">Contacto</a></li>
       </ul>
    </div>
</nav>


<div style="background-color: #c7dee5;">
    <div class="row no-margin-padding">
 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo get_template_directory_uri(); ?>/images/image1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-sm-block fade-in-on-load">
        <h5>SERVICIOS DE SALUD EN EL HOGAR</h5>
        <p> Una agencia sin fines de lucro, dedicada a ofrecer servicios de salud de calidad en la comodidad de tu hogar o lugar de residencia. Nos enorgullece estar certificados por el Departamento de Salud del Estado Libre Asociado de Puerto Rico y el Seguro Social Federal, lo que significa que puedes confiar en nosotros para proporcionar servicios de atención médica excepcionales.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo get_template_directory_uri(); ?>/images/image2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-sm-block fade-in-on-load">
        <h5>CUIDADO PERSONALIZADO</h5>
        <p>Nuestro objetivo es brindar servicios de salud personalizados y adaptados a las necesidades individuales de cada paciente. Si eres beneficiario de "Medicare" y "Medicare Advantage" y cumples con los requisitos establecidos, podemos ayudarte a obtener los servicios de atención médica que necesitas sin tener que salir de casa..</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo get_template_directory_uri(); ?>/images/image3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-sm-block fade-in-on-load">
        <h5>ATENCIÓN MÉDICA DE CALIDAD</h5>
        <p>En First Home Care Center, Inc., creemos que todos merecen acceso a atención médica de calidad en la comodidad de su hogar. Déjanos ser tu socio en tu camino hacia una vida más saludable y feliz. ¡Contáctanos hoy mismo para obtener más información sobre nuestros servicios!</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<section id="servicios" class="container mt-5 animate-on-scroll">
    <div class="row">
        <div class="col-12">
            <h2>Servicios</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-4 shadow animate-on-scroll">
                <div class="card-body">
                    <h5 class="card-title">Enfermería</h5>
                    <ul>
                        <li>Curación de Úlceras</li>
                        <li>Manejo de Dolor</li>
                        <li>Cuidado Post Quirúrgico</li>
                        <li>Manejo de Medicamentos</li>
                        <li>Asistencia de Salud en el Hogar</li>
                        <li>Nutricionista</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-4 shadow animate-on-scroll">
                <div class="card-body">
                    <h5 class="card-title">Terapias</h5>
                    <ul>
                        <li>Terapia Física</li>
                        <li>Terapia del Habla</li>
                        <li>Terapia Ocupacional</li>
                        <li>Manejo de Dolor Crónico</li>
                        <li>Rehabilitación Cardiaca</li>
                        <li>Rehabilitación Post Quirúrgica</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

</div>

<div id="requisitos" class="requisitos-section">
  <section>
    <h1>Servicios de Salud en el Hogar</h1>
    <p>First Home Care Center, Inc. es una agencia sin fines de lucro certificada por el Departamento de Salud del Estado Libre Asociado de Puerto Rico y por el Seguro Social Federal. Nuestro propósito es proveer servicios de salud de calidad en el hogar o lugar de residencia a pacientes beneficiarios de "Medicare" y  "Medicare Advantage", que cumplan con los requisitos establecidos.</p>
  </section>

  <section>
    <h2>¿Cómo obtener nuestros servicios?</h2>
    <p>Su médico de cabecera lo refiere a nuestra agencia si considera que amerita cualquiera de nuestros servicios. La agencia suple los formularios necesarios para el plan de tratamiento y realiza una visita de evaluación para determinar si es elegible o no para nuestros servicios. Para cualificar necesita cumplir con los requisitos de participación establecidos por CMS (Center for Medicare Services). Se le hará una notificación escrita a su médico sobre la determinación de su caso. En los casos de “Medicare Advantage”, es necesario solicitar aprobación del plan médico para los distintos servicios.</p>
  </section>

  <section>
    <h2>¿Qué servicios ofrece First Home Care Center, Inc.?</h2>
    <p>En First Home Care Center, Inc. ofrecemos servicios de:</p>
    <ul>
      <li>Enfermería Profesional</li>
      <li>Asistencia de Salud</li>
      <li>Terapia Física, Ocupacional y del Habla</li>
      <li>Trabajo Médico Social</li>
      <li>Consultoría de Nutrición</li>
    </ul>
    <p>Además, ofrecemos todos los procedimientos de Enfermería de acuerdo a la Ley Reguladora de la Profesión de Enfermería y las políticas de Medicare. El alquiler de equipo médico es ofrecido a pacientes que así lo ameriten en coordinación con el doctor de cabecera y otras agencias suplidoras de equipo médico de la comunidad. Siempre se requerirá la orden del médico a cargo del paciente para cualquier servicio.</p>
  </section>

  <section>
    <h2>¿Quién paga por nuestros servicios?</h2>
    <p>Cualquiera de los planes “Medicare” o “Medicare Advantage” pagan o ayudan a pagar los servicios que se ofrecen a los beneficiarios de estos seguros. Nosotros nos encargamos de facturar directamente a estos planes por los servicios ofrecidos.</p>
    <h3>Aceptamos los siguientes planes médicos:</h3>
<div class="row">
    <!-- Medical Plan 1 -->
    <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
        <div class="card">
            <img src="/wp-content/themes/fhcci/images/mmm.png" class="card-img-top" alt="mmm">
        </div>
    </div>
   <!-- Medical Plan 2 -->
<div class="col-sm-6 col-md-4 col-lg-3 mb-4">
        <div class="card">
            <img src="/wp-content/themes/fhcci/images/ssbv.png" class="card-img-top" alt="ssbv">
        </div>
    </div>
    <!-- Continue adding more cards for more plans -->
         <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
        <div class="card">
            <img src="/wp-content/themes/fhcci/images/medicare.png" class="card-img-top" alt="medicare">
        </div>
    </div>
       <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
        <div class="card">
            <img src="/wp-content/themes/fhcci/images/humana.png" class="card-img-top" alt="humana">
        </div>
    </div>
 
      <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
        <div class="card">
            <img src="/wp-content/themes/fhcci/images/pmc.png" class="card-img-top" alt="pmc">
        </div>
    </div>
     
           <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
        <div class="card">
            <img src="/wp-content/themes/fhcci/images/prossam.png" class="card-img-top" alt="prossam">
        </div>
    </div>
</div>


    <h3>Ofrecemos nuestros servicios en las siguientes regiones:</h3>
    


<div class="container my-5">
  <div class="card-deck">
    <div class="card mb-4 shadow">
      <div class="card-body">
        <h5 class="card-title">Oeste</h5>
        <li>Aguada</li>
        <li>Aguadilla</li>
        <li>Añasco</li>
        <li>Cabo Rojo</li>
        <li>Hormigueros</li>
        <li>Isabela</li>
        <li>Lajas</li>
        <li>Las Marías</li>
        <li>Maricao</li>
        <li>Mayagüez</li>
        <li>Moca</li>
        <li>Rincón</li>
        <li>Sabana Grande</li>
        <li>San Germán</li>
        <li>San Sebastián</li>
      </div>
    </div>

    <div class="card mb-4 shadow">
      <div class="card-body">
        <h5 class="card-title">Sur</h5>
        <li>Adjuntas</li>
        <li>Arroyo</li>
        <li>Coamo</li>
        <li>Guayama</li>
        <li>Guayanilla</li>
        <li>Guánica</li>
        <li>Jayuya</li>
        <li>Juana Díaz</li>
        <li>Patillas</li>
        <li>Ponce</li>
        <li>Peñuelas</li>
        <li>Salinas</li>
        <li>Santa Isabel</li>
        <li>Villalba</li>
        <li>Yauco</li>
      </div>
    </div>

    <div class="card mb-4 shadow">
      <div class="card-body">
        <h5 class="card-title">Norte</h5>
        <li>Arecibo</li>
        <li>Barceloneta</li>
        <li>Camuy</li>
        <li>Ciales</li>
        <li>Florida</li>
        <li>Hatillo</li>
        <li>Lares</li>
        <li>Manatí</li>
        <li>Morovis</li>
        <li>Quebradillas</li>
        <li>Utuado</li>
        <li>Vega Baja</li>
      </div>
    </div>
  </div>
</div>
</section>

</div>


<div style="background-color: #5c9abe;">
<section id="sobre-nosotros" class="container my-5 animate-on-scroll py-5 requisitos-section" style="background-color: #5c9abe;">
    <div class="row">
        <div class="col-12">
            <h2 class="mt-4">Sobre Nosotros</h2>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-12">
            <p>Bienvenidos a First Home Care, una organización sin ánimo de lucro, dedicada al bienestar de nuestra comunidad. Contamos con la acreditación del Departamento de Salud del Estado Libre Asociado de Puerto Rico y del Seguro Social Federal, reflejando nuestro compromiso con los más altos estándares de cuidado. Nuestro principal objetivo es brindar servicios de atención médica de alta calidad en el hogar o lugar de residencia a los pacientes beneficiarios de “Medicare” y  “Medicare Advantage”, siempre respetando y cumpliendo con los requisitos establecidos.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-4 shadow">
                <div class="card-body">
                    <h5 class="card-title">Contacto</h5>
                    <p class="card-text">
                      First Home Care Center, Inc.<br>
                      #96 Oeste, Calle de la Candelaria<br>
                      Mayagüez, 00680<br>
                      Teléfono: 787-834-2295<br>
                      Fax: 787-265-7090<br>
                      Email: admin@fhcpr.org
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3790.15558375304!2d-67.14784742403374!3d18.20277277880308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c02b24a643a98c9%3A0xd2d508cf8063a935!2sFirst%20Home%20Care%20Center!5e0!3m2!1sen!2spr!4v1684716821354!5m2!1sen!2spr" width="450" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>

</div>
</div>




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>

<?php wp_footer(); ?>

<?php get_footer(); ?>
</div>
</div>
</body>
</html>

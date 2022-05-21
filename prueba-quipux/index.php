<?php include('layout/header.php') ?>
<?php include('layout/side-bar.php') ?>

<main>
    <section class="search-container container">
        <h1> ¿Qué quieres buscar?</h1>
        <span>Encuentra la información que desees consultar ...</span>
        <div class="input-group mb-3 col-7" >
            <button class="btn btn-outline-secondary dropdown-toggle btn-1" type="button" data-bs-toggle="dropdown" aria-expanded="false">Todos los servicios</button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Acción 1</a></li>
                <li><a class="dropdown-item" href="#">Acción 2</a></li>
                <li><a class="dropdown-item" href="#">Acción 3</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
            </ul>
            <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Que servicio quires consultar">
            <button type="button" class="btn btn-primary"><i class="fas fa-search"></i></button>
        </div>
        <div class="benefits container">
            <div class="col-4">
                <h3>Certificado</h3>
                <p>Conoce los beneficios que teremos para ti al registrarte</p>
                <button type="button" class="btn btn-outline-success">+ beneficios</button>
            </div>
            <div class="col-4">
                <h3>Crear cuenta</h3>
                <p>Conocé los beneficios que teremos para ti al registrarte</p>
                <button type="button" class="btn btn-outline-success">Ver todo</button>
            </div>
            <div class="col-4">
                <h3>Top trámites</h3>
                <p>Conoce los trámites más solicitados</p>
                <button type="button" class="btn btn-outline-success">Ver todo</button>
            </div>
        </div>
    </section>
    <img src="./assets/img/resource-1.png" alt="Image woman" class="woman">
    <section class="services-container container col-5">
        <div class="services">
            <h2>SERVICIOS QUIPUX</h2>
        </div>
        <div class="services-text">
            <h3>Trámites en tu mano</h3>
            <p>Ahora podrás hacer todos tus trámites desde la comodidad de tu casa, desde cualquier dispositivo computadora, tablet o móvil.</p>
            <div class="progress-bar_container">
                <div class="numeros col-1">
                    <p>< <span class="num-1">1</span>/<span class="num-2">4</span> ></p>
                </div>
                <div class="progress-bar col-7"></div>
            </div>
            </div>
        </div>
    </section>
</main>

<?php include('layout/footer.php') ?>
<body>
    <header class="head-container">
        <a href="https://www.unam.mx/" target="_blank" >
            <img src="img/Logo-UNAM.png" alt="">
        </a>
        <a href="https://www.acatlan.unam.mx/" target="_blank" >
            <img src="img/logo_fesa.png" alt="logo FES Acatlán">
        </a>
    </header>
    <nav class="main-nav">
        <!-- <ul>
            <a href="#">
                <li> 
                    Inicio
                </li>
            </a>
            <a href="#">
                <li> 
                     Alumnos
              </li>
            </a>
        </ul> -->
    </nav>
    <!-- Trigger/Open The Modal -->
            <!-- <button id="myBtn">Open Modal</button>  -->

    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="form-confir" id="formRes">
        <i class="fab fa-linux" title="¡Soy Tux!" ></i>
        <h1> Confirmación de Inscripción</h1>
        <input type="text" name="accountNum" placeholder="Introduce tu numero de cuenta: " id="accNum">
        <input type="submit" name="sub" value="Verificar" id="myBtn" class="btn-su">
    </form>

    <?php if ($cuenta != '' && $cuenta == $results[0]): ?>

    <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content" onload="resetear()">
            <span class="close">&times;</span>
            <p>EL alumno: <br> <?php echo $results['nombre']; ?> <br> esta registrado correctamente</p>
        </div>

    </div>

    <?php elseif($cuenta != '' && $cuenta != $results[0]): ?>

    <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <p>El número de cuenta: <?php echo $cuenta; ?> no se encuentra inscrito.</p>
        </div>

    </div>

    <?php endif ?>
<?php include("header1.php"); ?>
<!-- Dialogo para agregar recurso -->
<body class="bodyQuienes">
    <p><h1>== DIALOGO AGREGAR ==</h1></p>
    <form id="agregarrecurso">
        <p id="tNombre">Nombre: </p><input type="text" id="iNombre">
        <p id="tCorreo">Correo: </p><input type="text" id="iCorreo">
        <p id="tCorreo">Password: </p><input type="password" id="iPassword">        
        <p id="tCategoria">Categoria: </p>
        <select id="iCategoria">
            <option value="volvo">CategoriaA</option>
            <option value="saab">CategoriaB</option>        
        </select>
        <p id="tTipo">Tipo: </p>
        <select id="iTipo">
            <option value="volvo">TipoA</option>
            <option value="saab">TipoB</option>        
        </select> 
        <button id="fireagregarrecurso">agregar recurso</button>
    </form>


    <p><h1>== BUSQUEDA ==</h1></p>
    <form id="buscarrecurso">
        <p id="tNombre">Nombre: </p><input type="text" id="iNombre">    
        <button id="fireagregarrecurso">buscar recurso</button>
    </form>   

    <p><h1>== RECURSOS ==</h1></p>

    <?php
    $recursos = cadministrarcontenido::obtenerRecursos();
    print_r($recursos);
    for ($i = 0; $i < count($recursos); $i++) {
        ?>

    <p>---</p>
    <p>Nombre:</p>
    <p><?php echo $recursos[$i]->Nombre; ?></p>
    <p>Correo:</p>
    <p><?php echo $recursos[$i]->Correo; ?></p>
    <p>Password:</p>
    <p><?php echo $recursos[$i]->Password; ?></p>
    <p>---</p>

        <?php
    }
    ?>

</body>
<?php include("footer1.php"); ?>
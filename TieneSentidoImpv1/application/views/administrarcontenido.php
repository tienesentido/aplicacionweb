<?php include("header1.php"); ?>
<!-- Dialogo para agregar recurso -->
<body class="bodyQuienes">

    <form id="agregarrecurso">
        <p id="tNombre">Nombre: </p><input type="text" id="iNombre">
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


    <form id="buscarrecurso">
        <p id="tNombre">Nombre: </p><input type="text" id="iNombre">    
        <button id="fireagregarrecurso">buscar recurso</button>
    </form>
</body>
<?php include("footer1.php"); ?>
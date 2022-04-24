<?php include('templates/header.html'); ?>

<body>
    <h1>Plataforma de Gestión Operativa de Vuelos </h1>

    <form action="queries/pregunta1.php" method="post">
        <h3>Vuelos pendientes de ser aprobados por la DGAC </h3>
        <input type="submit" name="Buscar" value="Ver">
    </form>

    <br>

    <form action="queries/pregunta2.php" method="post">
        <h3>Propuestas de Vuelo</h3>
        <br>
        <p><b>Aerodromo Inicial</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Aerodromo Destino</b></p>
        <input type="text" name="Inicio">
        &nbsp;&nbsp;&nbsp;
        <input type="text" name="Destino">
        &nbsp;&nbsp;
        <input type="submit" name="Buscar" value="Buscar">
    </form>

    <br>

    <form action="queries/pregunta3.php" method="post">
        <h3>Seleccione una fecha para ver pilotos con licencia vigente:</h3>
        <input type="date" name="fecha-licencia" value="2022-05-13" min="2018-01-01" max="2022-12-31">
        &nbsp;&nbsp;&nbsp;
        <input type="submit" name="Buscar" value="Buscar">
    </form>

    <br>

    <form action="queries/pregunta4.php" method="post">
        <h3>Bloques Horarios con más afluencia de pasajeros en todos los aeródromos </h3>
        <input type="submit" name="Buscar" value="Mostrar">
    </form>

    <br>

    <form action="queries/pregunta5.php" method="post">
        <h3>Aeronaves que realizaron vuelos entre:</h3>
        <p><b>Fecha de Inicio</b>&nbsp;&nbsp;&nbsp;&nbsp;<b>Fecha de Fin</b></p>
        <br>
        <input type="date" name="fecha-inicio" value="2022-05-13" min="2018-01-01" max="2022-12-31">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="date" name="fecha-final" value="2022-05-13" min="2018-01-01" max="2022-12-31">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="submit" name="Buscar" value="Mostrar">
    </form>

    <br>

    <form action="queries/pregunta6.php" method="post">
        <h3>Piloto-Copiloto que no han realizado ningún vuelo juntos</h3>
        <input type="submit" name="Buscar" value="Ver">
    </form>



































</body>
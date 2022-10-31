<head>

    <link rel="stylesheet" href="../styles/tipificacion/report.css">

</head>

<section class="section--one">

    <h1>Descargar Reportes</h1>

    <form action="../reports/descargarTipificaciones.php" method="POST">

        <input type="text" name="accion" id="accion" value="descargarReporte" hidden>

        <div class="div--form">

            <label for="">Fecha Inicial:</label>
            <input type="datetime-local" name="fechaInicialGestion" id="fechaIncialGestion">

            <label for="">Fecha Final:</label>
            <input type="datetime-local" name="fechaFinalGestion" id="fechaFinalGestion">

        </div>

        <input class="button--download" type="submit" value="Descargar Reporte">

    </form>

</section>
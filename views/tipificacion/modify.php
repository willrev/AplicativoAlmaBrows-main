<head>

    <link rel="stylesheet" href="../styles/tipificacion/modify.css">

</head>

<main>

    <section class="section--one">

        <h1>Tipificación en Detalle</h1>

            <!--<form action="usuarioController.php" method="POST">-->

                <?php foreach($tipificaciones as $tipificacion) : ?>

                    <h2>IDTipificacion</h2>
                    <p><?=$tipificacion->idTipificacion?></p>

                    <h2>Nombre Asesor</h2>
                    <p><?=$tipificacion->nombreUsuario?></p>

                    <h2>Fecha Inicial de Gestión</h2>
                    <p><?=$tipificacion->fechaGestion?></p>

                    <h2>Fecha Final de Gestión</h2>
                    <p><?=$tipificacion->fechaFinGestion?></p>

                    <h2>Embudo de Origen</h2>
                    <p><?=$tipificacion->embudoOrigen?></p>

                    <h2>Red Social</h2>
                    <p><?=$tipificacion->redSocial?></p>

                    <h2>Nombre Cliente</h2>
                    <p><?=$tipificacion->nombreCliente?></p>

                    <h2>Teléfono Cliente</h2>
                    <p><?=$tipificacion->telefonoCliente?></p>

                    <h2>Estado Tipificación</h2>
                    <p><?=$tipificacion->estadoTipificacion?></p>

                    <h2>Observaciones</h2>
                    <p><?=$tipificacion->observaciones?></p>

                    <h2>Motivo de No Interes</h2>
                    <p><?=$tipificacion->motivoNoInteres?></p>

                    <h2>Fecha Check de Calidad</h2>
                    <p><?=$tipificacion->fechaCheckCalidad?></p>

                    <h2>Tipo de Agendamiento:</h2>
                    <p><?=$tipificacion->tipoAgendamiento?></p>

                    <h2>Fecha de Agendamiento:</h2>
                    <p><?=$tipificacion->fechaAgendamiento?></p>

                    <h2>Fecha Volver a Llamar:</h2>
                    <p><?=$tipificacion->fechaVolverLlamar?></p>

                    <h2>Fecha Agenda Modelo:</h2>
                    <p><?=$tipificacion->fechaAgendaModelo?></p>

                    <h2>Fecha Pago Agenda Modelo:</h2>
                    <p><?=$tipificacion->fechaPagoAgendaModelo?></p>

                    <h2>Fecha Cancelar Agenda:</h2>
                    <p><?=$tipificacion->fechaCancelarAgenda?></p>

                    <h2>Motivo de Cancelación de Agenda:</h2>
                    <p><?=$tipificacion->motivoCancelaAgenda?></p>

                    <h2>Fecha Asiste:</h2>
                    <p><?=$tipificacion->fechaAsiste?></p>

        <?php endforeach; ?>

        <!-- </form> -->


    </section>

</main>



<?php

    date_default_timezone_set("Europe/Madrid");

?>

<head>

    <link rel="stylesheet" href="../styles/tipificacion/create.css">

</head>

<script src="../scripts/tipificacion/create.js"></script>

<main>

    <section class="section--one">

        <h1>Añadir Tipificación</h1>

        <form action="tipificacionController.php" method="POST">

            <input type="text" id="accion" name="accion" value="insertarTipificacion" hidden>

            <div class="div--form">

                <input type="datetime-local" id="fechaGestion" name="fechaGestion" value="<?=date("Y-m-d\TH:i:s");?>" hidden>

            </div>

            <div class="div--form">

                <label for="embudoOrigen">Embudo de Origen</label>
                <select name="embudoOrigen" id="embudoOrigen" value="" required onchange="getSelectValue2();"
                
                    <?php if($_GET['accion'] == "verRecordatorio"){ echo "disabled"; }?>
                
                >

                    <option value=""></option>

                    <option 

                        <?php if($tipificaciones[0]->embudoOrigen == "Lead Nuevo"){ echo "selected"; }?>
                    
                    value="Lead Nuevo">
                    
                        Lead Nuevo
                
                    </option>

                    <option 

                        <?php if($tipificaciones[0]->embudoOrigen == "OT - Over Task"){ echo "selected"; }?>
                    
                    value="OT - Overtask">
                    
                        OT - Overtask
                
                    </option>

                    <option 

                        <?php if($tipificaciones[0]->embudoOrigen == "Pusher"){ echo "selected"; }?>
                    
                    value="Pusher">
                    
                        Pusher
                
                    </option>

                </select>

            </div>

            <div class="div--form div--conditional" id="div--tipoOT">

                <label for="tipoOT">Tipo OT</label>
                <select name="tipoOT" id="tipoOT" value="" 
                
                    <?php if($_GET['accion'] == "verRecordatorio"){ echo "disabled"; }?>

                >

                    <option value=""></option>

                    <option 

                        <?php if($tipificaciones[0]->embudoOrigen == "Ignora"){ echo "selected"; }?>
                    
                    value="Ignora">
                    
                        Ignora

                    </option>

                    <option 

                        <?php if($tipificaciones[0]->embudoOrigen == "Cancela"){ echo "selected"; }?>
                    
                    value="Cancela">
                    
                        Cancela

                    </option>

                    <option 

                        <?php if($tipificaciones[0]->embudoOrigen == "Basura"){ echo "selected"; }?>
                    
                    value="Basura">
                    
                        Basura

                    </option>

                </select>

                </div>

            <div class="div--form">

                <label for="">Red Social</label>
                <select name="redSocial" id="redSocial"
                
                    <?php if($_GET['accion'] == "verRecordatorio"){ echo "disabled"; }?>

                >

                    <option value=""></option>

                    <option 
                        
                        <?php if($tipificaciones[0]->redSocial == "WhatssApp"){ echo "selected"; }?>

                    value="WhatssApp">
                    
                        WhatssApp
                
                    </option>

                    <option 
                        
                        <?php if($tipificaciones[0]->redSocial == "Facebook"){ echo "selected"; }?>

                    value="Facebook">
                    
                        Facebook
                
                    </option>

                    <option 
                        
                        <?php if($tipificaciones[0]->redSocial == "Instagram"){ echo "selected"; }?>

                    value="Instagram">
                    
                        Instagram
                
                    </option>

                    <option 
                        
                        <?php if($tipificaciones[0]->redSocial == "Web"){ echo "selected"; }?>

                    value="Web">
                    
                        Web
                
                    </option>

                    <option 
                        
                        <?php if($tipificaciones[0]->redSocial == "Tap Link"){ echo "selected"; }?>

                    value="Tap Link">
                    
                        Tap Link
                
                    </option>

                </select>

            </div>

            <div class="div--form">

                <label for="">Nombre Cliente</label>
                <input type="text" id="nombreCliente" name="nombreCliente" 
                
                    value="<?php if(isset($tipificaciones[0]->nombreCliente)){ echo $tipificaciones[0]->nombreCliente; }?>" 
                    
                    <?php if($_GET['accion'] == "verRecordatorio"){ echo "readonly"; }?>
                    
                required>

            </div>

            <div class="div--form">

                <label for="">Teléfono Cliente</label>
                <input type="text" id="telefonoCliente" name="telefonoCliente" value="<?php if(isset($tipificaciones[0]->telefonoCliente)){ echo $tipificaciones[0]->telefonoCliente; }?>" pattern="[0-9]+" maxlength="18" required 
                
                    <?php if($_GET['accion'] == "verRecordatorio"){ echo "readonly"; }?>
                
                >

            </div>

            <div class="div--form">

                <label for="">Estado Tipificación</label>
                <select name="estadoTipificacion" id="estadoTipificacion" required onchange="getSelectValue();"
                
                    <?php if($_GET['accion'] == "verRecordatorio"){ echo "disabled"; }?>
                
                >

                    <option value=""></option>

                    <option 
                        
                        <?php if($tipificaciones[0]->estadoTipificacion == "Éxito"){ echo "selected"; }?>

                        value="Éxito">
                    
                        Éxito
                
                    </option>

                    <option 
                        
                        <?php if($tipificaciones[0]->estadoTipificacion == "Confirmado"){ echo "selected"; }?>

                        value="Confirmado">
                    
                        Confirmado
                
                    </option>

                    <option 
                        
                        <?php if($tipificaciones[0]->estadoTipificacion == "Cancelar Cita"){ echo "selected"; }?>

                        value="Cancelar Cita">
                    
                        Cancelar Cita
                
                    </option>

                    <option disabled></option>

                    <option 
                        
                        <?php if($tipificaciones[0]->estadoTipificacion == "Asiste - No Compra"){ echo "selected"; }?>

                        value="Asiste - No Compra">
                    
                        Asiste - No Compra
                
                    </option>

                    <option 
                        
                        <?php if($tipificaciones[0]->estadoTipificacion == "No Contesta"){ echo "selected"; }?>

                        value="No Contesta">
                    
                        No Contesta
                
                    </option>

                    <option 
                        
                        <?php if($tipificaciones[0]->estadoTipificacion == "No Le Interesa"){ echo "selected"; }?>

                        value="No Le Interesa">
                    
                        No Le Interesa
                
                    </option>

                    <option disabled></option>

                    <option 
                        
                        <?php if($tipificaciones[0]->estadoTipificacion == "Número Equivocado"){ echo "selected"; }?>

                        value="Número Equivocado">
                    
                        Número Equivocado
                
                    </option>

                    <option 
                        
                        <?php if($tipificaciones[0]->estadoTipificacion == "Reagendamiento"){ echo "selected"; }?>

                        value="Reagendamiento">
                    
                        Reagendamiento
                
                    </option>

                    <option 
                        
                        <?php if($tipificaciones[0]->estadoTipificacion == "Vacaciones"){ echo "selected"; }?>

                        value="Vacaciones">
                    
                        Vacaciones
                
                    </option>

                    <option disabled></option>

                    <option 
                        
                        <?php if($tipificaciones[0]->estadoTipificacion == "Volver a Llamar"){ echo "selected"; }?>

                        value="Volver a Llamar">
                    
                        Volver a Llamar
                
                    </option>

                    <option 
                        
                        <?php if($tipificaciones[0]->estadoTipificacion == "Ya Gestionado"){ echo "selected"; }?>

                        value="Ya Gestionado">
                    
                        Ya Gestionado
                
                    </option>

                    <option 
                        
                        <?php if($tipificaciones[0]->estadoTipificacion == "Cliente Habla Otro Idioma"){ echo "selected"; }?>

                        value="Cliente Habla Otro Idioma">
                    
                        Cliente Habla Otro Idioma
                
                    </option>

                    <option disabled></option>

                    <option disabled>

                        Agendas

                    </option>

                    <option 
                        
                        <?php if($tipificaciones[0]->estadoTipificacion == "Agenda Check Calidad"){ echo "selected"; }?>

                        value="Agenda Check Calidad">
                    
                        Agenda Check Calidad
                
                    </option>

                    <option 
                        
                        <?php if($tipificaciones[0]->estadoTipificacion == "Agenda Modelo"){ echo "selected"; }?>

                        value="Agenda Modelo">
                    
                        Agenda Modelo
                
                    </option>

                    <option 
                        
                        <?php if($tipificaciones[0]->estadoTipificacion == "Agenda Incumplida"){ echo "selected"; }?>

                        value="Agenda Incumplida">
                    
                        Agenda Incumplida
                
                    </option>
                
                    <option disabled></option>

                    <option disabled> 

                        Valoraciones

                    </option>

                    <option 
                        
                        <?php if($tipificaciones[0]->estadoTipificacion == "Valoración"){ echo "selected"; }?>

                        value="Valoración">
                    
                        Valoración
                
                    </option>

                    <option 
                        
                        <?php if($tipificaciones[0]->estadoTipificacion == "Valoración Gratuita"){ echo "selected"; }?>

                        value="Valoración Gratuita">
                    
                        Valoración Gratuita
                
                    </option>

                    <option 
                        
                        <?php if($tipificaciones[0]->estadoTipificacion == "Valoración Virtual"){ echo "selected"; }?>

                        value="Valoración Virtual">
                    
                        Valoración Virtual
                
                    </option>

                    <option disabled></option>

                </select>

            </div>

            <div class="div--form div--conditional" id="div--agendaIncumplida">

                <label for="agendaIncumplida">Motivo Agenda Incumplida</label>
                <select name="agendaIncumplida" id="agendaIncumplida"

                    <?php if($_GET['accion'] == "verRecordatorio"){ echo "disabled"; }?>

                >

                    <option value=""></option>

                    <option 
                        
                        <?php if($tipificaciones[0]->agendaIncumplida == "Reagendada"){ echo "selected"; }?>

                        value="Reagendada">
                    
                        Reagendada
                
                    </option>

                    <option 
                        
                        <?php if($tipificaciones[0]->agendaIncumplida == "Volver a Llamar"){ echo "selected"; }?>

                        value="Volver a Llamar">
                    
                        Volver a llamar
                
                    </option>

                    <option 
                        
                        <?php if($tipificaciones[0]->agendaIncumplida == "No Quiere Reprogramar"){ echo "selected"; }?>

                        value="No Quiere Reprogramar">
                    
                        No quiere reprogramar
                
                    </option>

                    <option 
                        
                        <?php if($tipificaciones[0]->agendaIncumplida == "No Contesta para Reagendar"){ echo "selected"; }?>

                        value="No Contesta para Reagendar">
                    
                        No contesta para reagendar
                
                    </option>

                    <option 
                        
                        <?php if($tipificaciones[0]->agendaIncumplida == "No Vino a Consulta por Tercera Vez"){ echo "selected"; }?>

                        value="No Vino a Consulta por Tercera Vez">
                    
                        No vino a consulta por tercera vez
                
                    </option>

                    <option 
                        
                        <?php if($tipificaciones[0]->agendaIncumplida == "Cancela Cita"){ echo "selected"; }?>

                        value="Cancela Cita">
                    
                        Cancela cita
                
                    </option>

                    <option 
                        
                        <?php if($tipificaciones[0]->agendaIncumplida == "Basura"){ echo "selected"; }?>

                        value="Basura">
                    
                        Basura
                
                    </option>

                    <option 
                        
                        <?php if($tipificaciones[0]->agendaIncumplida == "Vive en Murcia"){ echo "selected"; }?>

                        value="Vive en Murcia">
                    
                        Vive en murcia
                
                    </option>

                    <option 
                        
                        <?php if($tipificaciones[0]->agendaIncumplida == "Tiene que Trabajar"){ echo "selected"; }?>

                        value="Tiene que Trabajar">
                    
                        Tiene que trabajar
                
                    </option>

                    <option 
                        
                        <?php if($tipificaciones[0]->agendaIncumplida == "No tiene Tiempo"){ echo "selected"; }?>

                        value="No tiene Tiempo">
                    
                        No tiene tiempo
                
                    </option>

                    <option 
                        
                        <?php if($tipificaciones[0]->agendaIncumplida == "No vino a Consulta"){ echo "selected"; }?>

                        value="No vino a Consulta">
                    
                        No vino a consulta
                
                    </option>

                    <option 
                        
                        <?php if($tipificaciones[0]->agendaIncumplida == "Motivos de Trabajo"){ echo "selected"; }?>

                        value="Motivos de Trabajo">
                    
                        Motivos de trabajo
                
                    </option>

                    <option 
                        
                        <?php if($tipificaciones[0]->agendaIncumplida == "Llego tarde, no la quisieron atender"){ echo "selected"; }?>

                        value="Llego tarde, no la quisieron atender">
                    
                        Llego tarde, no la quisieron atender
                
                    </option>

                    <option 
                        
                        <?php if($tipificaciones[0]->agendaIncumplida == "Le toco trabajar por baja de una compañera"){ echo "selected"; }?>

                        value="Le toco trabajar por baja de una compañera">
                    
                        Le toco trabajar por baja de una compañera
                
                    </option>

                </select>

            </div>
            <!-- Hasta aca entendi -->

            <div class="div--form div--conditional" id="div--cancelaCita">

                <label for="cancelaCita">Motivo Cancelación de Cita</label>
                <select name="cancelaCita" id="cancelaCita"

                    <?php if($_GET['accion'] == "verRecordatorio"){ echo "disabled"; }?>

                >

                    <option value=""></option>

                    <option 
                        
                        <?php if($tipificaciones[0]->cancelaCita == "Falta de Tiempo"){ echo "selected"; }?>

                        value="Falta de Tiempo">
                    
                        Falta de Tiempo
                
                    </option>

                    <option 
                        
                        <?php if($tipificaciones[0]->cancelaCita == "No Contesta"){ echo "selected"; }?>

                        value="No Contesta">
                    
                        No Contesta
                
                    </option>

                    <option 
                        
                        <?php if($tipificaciones[0]->cancelaCita == "Cuelga Llamada"){ echo "selected"; }?>

                        value="Cuelga Llamada">
                    
                        Cuelga Llamada
                
                    </option>

                    <option 
                        
                        <?php if($tipificaciones[0]->cancelaCita == "Disponibilidad de Llamada"){ echo "selected"; }?>

                        value="Disponibilidad de Llamada">
                    
                        Disponibilidad de Llamada
                
                    </option>

                    <option 
                        
                        <?php if($tipificaciones[0]->cancelaCita == "Volver a Llamar"){ echo "selected"; }?>

                        value="Volver a Llamar">
                    
                        Volver a Llamar
                
                    </option>

                </select>

            </div>

                 <!-- si se selecciona: 'no le interesa'

                mostrara el siguiente select: 'No interesado' -->

            <div class="div--form div--conditional" id="div--noInteresado">

                <label for="noInteresado">No Interesado</label>
                <select name="noInteresado" id="noInteresado"

                    <?php if($_GET['accion'] == "verRecordatorio"){ echo "disabled"; }?>
                
                >

                    <option value=""></option>

                    <option 
                        
                        <?php if($tipificaciones[0]->noInteresado == "Genero Tratamiento con Otra Empresa"){ echo "selected"; }?>

                        value="Genero Tratamiento con Otra Empresa">
                    
                        Genero Tratamiento con Otra Empresa
                
                    </option>

                    <option 
                        
                        <?php if($tipificaciones[0]->noInteresado == "Fuera de Barcelona"){ echo "selected"; }?>

                        value="Fuera de Barcelona">
                    
                        Fuera de Barcelona
                
                    </option>

                    <option 
                        
                        <?php if($tipificaciones[0]->noInteresado == "Inconformidad con el Servicio"){ echo "selected"; }?>

                        value="Inconformidad con el Servicio">
                    
                        Inconformidad con el Servicio
                
                    </option>

                    <option 
                        
                        <?php if($tipificaciones[0]->noInteresado == "Desconfia del Proceso"){ echo "selected"; }?>

                        value="Desconfia del Proceso">
                    
                        Desconfia del Proceso
                
                    </option>

                    <option 
                        
                        <?php if($tipificaciones[0]->noInteresado == "Desempleado"){ echo "selected"; }?>

                        value="Desempleado">
                    
                        Desempleado
                
                    </option>

                    <option 
                        
                        <?php if($tipificaciones[0]->noInteresado == "Disponibilidad de Tiempo"){ echo "selected"; }?>

                        value="Disponibilidad de Tiempo">
                    
                        Disponibilidad de Tiempo
                
                    </option>

                    <option 
                        
                        <?php if($tipificaciones[0]->noInteresado == "Incapacitada"){ echo "selected"; }?>

                        value="Incapacitada">
                    
                        Incapacitada
                
                    </option>

                    <option 
                        
                        <?php if($tipificaciones[0]->noInteresado == "Motivos Personales"){ echo "selected"; }?>

                        value="Motivos Personales">
                    
                        Motivos Personales
                
                    </option>

                    <option 
                        
                        <?php if($tipificaciones[0]->noInteresado == "No Informa Motivo"){ echo "selected"; }?>

                        value="No Informa Motivo">
                    
                        No Informa Motivo
                
                    </option>

                    <option 
                        
                        <?php if($tipificaciones[0]->noInteresado == "Costo del Procedimiento"){ echo "selected"; }?>

                        value="Costo del Procedimiento">
                    
                        Costo del Procedimiento
                
                    </option>

                    <option 
                        
                        <?php if($tipificaciones[0]->noInteresado == "Cuelga"){ echo "selected"; }?>

                        value="Cuelga">
                    
                        Cuelga
                
                    </option>

                </select>

            </div>

            

            <div class="div--form div--conditional" id="div--fechaCheckCalidad">

                <label for="fechaCheckCalidad">Fecha Check Calidad</label>
                <input type="datetime-local" name="fechaCheckCalidad" id="fechaCheckCalidad"
                
                    value="<?=$tipificaciones[0]->fechaCheckCalidad?>"

                    <?php if($_GET['accion'] == "verRecordatorio"){ echo "readonly"; }?>
                
                >

            </div>

            <div class="div--form div--conditional" id="div--costoModelo">

                <label for="costoModelo">Costo Modelo</label>
                <input type="text" name="costoModelo" id="costoModelo"
                
                    value="<?=$tipificaciones[0]->costoModelo?>"

                    <?php if($_GET['accion'] == "verRecordatorio"){ echo "readonly"; }?>
                
                >

            </div>

            <div class="div--form div--conditional" id="div--fechaPagoModelo">

                <label for="fechaPagoModelo">Fecha Pago Modelo</label>
                <input type="datetime-local" name="fechaPagoModelo" id="fechaPagoModelo"

                    <?php if($_GET['accion'] == "verRecordatorio"){ echo "disabled"; }?>
                    
                    value="<?=$tipificaciones[0]->fechaPagoModelo?>"
                
                >

            </div>

            <div class="div--form div--conditional" id="div--fechaMantenimientoGratis">

                <label for="fechaMantenimientoGratis">Fecha Mantenimiento Gratis</label>
                <input type="datetime-local" name="fechaMantenimientoGratis" id="fechaMantenimientoGratis"

                    <?php if($_GET['accion'] == "verRecordatorio"){ echo "readonly"; }?>
                    
                    value="<?=$tipificaciones[0]->fechaMantenimientoGratis?>"
                
                >

            </div>

            <div class="div--form div--conditional" id="div--fechaValoracionGratis">

                <label for="fechaValoracionGratis">Fecha Valoración Gratuita</label>
                <input type="datetime-local" name="fechaValoracionGratis" id="fechaValoracionGratis"
                
                    value="<?=$tipificaciones[0]->fechaValoracionGratis?>"

                    <?php if($_GET['accion'] == "verRecordatorio"){ echo "disabled"; }?>
                
                >

            </div>

            <div class="div--form div--conditional" id="div--fechaValoracionPresencial">

                <label for="fechaValoracionPresencial">Fecha Valoración</label>
                <input type="datetime-local" name="fechaValoracionPresencial" id="fechaValoracionPresencial"

                    value="<?=$tipificaciones[0]->fechaValoracionPresencial?>"

                    <?php if($_GET['accion'] == "verRecordatorio"){ echo "readonly"; }?>
                
                >

            </div>

            <div class="div--form div--conditional" id="div--fechaValoracionVirtual">

                <label for="fechaValoracionVirtual">Fecha Valoración Virtual</label>
                <input type="datetime-local" name="fechaValoracionVirtual" id="fechaValoracionVirtual"
                
                    value="<?=$tipificaciones[0]->fechaValoracionVirtual?>"

                    <?php if($_GET['accion'] == "verRecordatorio"){ echo "readonly"; }?>
                
                >

            </div>

            <div class="div--form div--conditional" id="div--fechaVolverALlamar">

                <label for="fechaVolverALlamar">Fecha Volver a Llamar</label>
                <input type="datetime-local" name="fechaVolverALlamar" id="fechaVolverALlamar"
                
                    value="<?=$tipificaciones[0]->fechaVolverALlamar?>"

                    <?php if($_GET['accion'] == "verRecordatorio"){ echo "readonly"; }?>
                
                >

            </div>

            <!-- Otro select -->

            <div class="div--form div--conditional" id="div--exito">

                <label for="noInteresado">Éxito</label>
                <select name="exito" id="exito"

                    <?php if($_GET['accion'] == "verRecordatorio"){ echo "disabled"; }?>

                >

                    <option value=""></option>

                    <option 
                        
                        <?php if($tipificaciones[0]->noInteresado == "Éxito - Valoración"){ echo "selected"; }?>

                        value="Éxito - Valoración">
                    
                        Éxito - Valoración
                
                    </option>

                    <option 
                        
                        <?php if($tipificaciones[0]->noInteresado == "Éxito - Modelo"){ echo "selected"; }?>

                        value="Éxito - Modelo">
                    
                        Éxito - Modelo
                
                    </option>

                    <option 
                        
                        <?php if($tipificaciones[0]->noInteresado == "Éxito - Check"){ echo "selected"; }?>

                        value="Éxito - Check">
                    
                        Éxito - Check
                
                    </option>

                </select>

            </div>

            <div class="div--form">

                <label for="">Observaciones</label>
                <textarea name="observaciones" id="observaciones" cols="30" rows="10"
                
                    <?php if($_GET['accion'] == "verRecordatorio"){ echo "readonly"; }?>
                
                ><?=$tipificaciones[0]->observaciones?></textarea>

            </div>    

              

            <div class="div--form">

                <label for="">Recordatorio</label>

                <div class="div--checkbox">

                    <input type="checkbox" name="recordatorio" id="recordatorio"
                    
                        <?php if($tipificaciones[0]->recordatorio == "on"){ echo "checked"; }?>

                        <?php if($_GET['accion'] == "verRecordatorio"){ echo "disabled"; }?>
                    
                    >

                </div>

            </div>

            <?php if($_GET['accion']!='verRecordatorio'):?>

                <div class="div--form">

                    <button type="submit">Tipificar</button>

                </div>  

            <?php endif;?>

            <?php if($_GET['accion']=='verRecordatorio'):?>

                <a href="tipificacionController.php?accion=verRecordatorios" class="a--volver">Volver</a>

            <?php endif;?>

        </form>

    </section>

</main>

<script>

    getSelectValue();

</script>
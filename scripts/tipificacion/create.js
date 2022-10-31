function getSelectValue(){

    estadoTipificacion = document.getElementById('estadoTipificacion').value;

    switch (estadoTipificacion) {

        case "Agenda Check Calidad":

            document.getElementById('div--agendaIncumplida').style.display = "none";
            document.getElementById('agendaIncumplida').removeAttribute("required","");
            document.getElementById('div--cancelaCita').style.display = "none";
            document.getElementById('cancelaCita').removeAttribute("required","");
            document.getElementById('div--noInteresado').style.display = "none";
            document.getElementById('noInteresado').removeAttribute("required","");
            document.getElementById('div--fechaCheckCalidad').style.display = "flex";
            document.getElementById('fechaCheckCalidad').setAttribute("required","");
            document.getElementById('div--costoModelo').style.display = "none";
            document.getElementById('costoModelo').removeAttribute("required","");
            document.getElementById('div--fechaPagoModelo').style.display = "none";
            document.getElementById('fechaPagoModelo').removeAttribute("required","");
            document.getElementById('div--fechaMantenimientoGratis').style.display = "none";
            document.getElementById('fechaMantenimientoGratis').removeAttribute("required","");
            document.getElementById('div--fechaValoracionGratis').style.display = "none";
            document.getElementById('fechaValoracionGratis').removeAttribute("required","");
            document.getElementById('div--fechaValoracionPresencial').style.display = "none";
            document.getElementById('fechaValoracionPresencial').removeAttribute("required","");
            document.getElementById('div--fechaValoracionVirtual').style.display = "none";
            document.getElementById('fechaValoracionVirtual').removeAttribute("required","");
            document.getElementById('div--fechaVolverALlamar').style.display = "none";
            document.getElementById('fechaVolverALlamar').removeAttribute("required","");
            document.getElementById('div--fechaVolverALlamarInteresado').style.display = "none";
            document.getElementById('fechaVolverALlamarInteresado').removeAttribute("required","");
            document.getElementById('div--exito').style.display = "none";
            document.getElementById('exito').removeAttribute("required","");
    
        break;

        case "Agenda Incumplida":

            document.getElementById('div--agendaIncumplida').style.display = "flex";
            document.getElementById('agendaIncumplida').setAttribute("required","");
            document.getElementById('div--cancelaCita').style.display = "none";
            document.getElementById('cancelaCita').removeAttribute("required","");
            document.getElementById('div--noInteresado').style.display = "none";
            document.getElementById('noInteresado').removeAttribute("required","");
            document.getElementById('div--fechaCheckCalidad').style.display = "none";
            document.getElementById('fechaCheckCalidad').removeAttribute("required","");
            document.getElementById('div--costoModelo').style.display = "none";
            document.getElementById('costoModelo').removeAttribute("required","");
            document.getElementById('div--fechaPagoModelo').style.display = "none";
            document.getElementById('fechaPagoModelo').removeAttribute("required","");
            document.getElementById('div--fechaMantenimientoGratis').style.display = "none";
            document.getElementById('fechaMantenimientoGratis').removeAttribute("required","");
            document.getElementById('div--fechaValoracionGratis').style.display = "none";
            document.getElementById('fechaValoracionGratis').removeAttribute("required","");
            document.getElementById('div--fechaValoracionPresencial').style.display = "none";
            document.getElementById('fechaValoracionPresencial').removeAttribute("required","");
            document.getElementById('div--fechaValoracionVirtual').style.display = "none";
            document.getElementById('fechaValoracionVirtual').removeAttribute("required","");
            document.getElementById('div--fechaVolverALlamar').style.display = "none";
            document.getElementById('fechaVolverALlamar').removeAttribute("required","");
            document.getElementById('div--fechaVolverALlamarInteresado').style.display = "none";
            document.getElementById('fechaVolverALlamarInteresado').removeAttribute("required","");
            document.getElementById('div--exito').style.display = "none";
            document.getElementById('exito').removeAttribute("required","");
    
        break;

        case "Agenda Modelo":

            document.getElementById('div--agendaIncumplida').style.display = "none";
            document.getElementById('agendaIncumplida').removeAttribute("required","");
            document.getElementById('div--cancelaCita').style.display = "none";
            document.getElementById('cancelaCita').removeAttribute("required","");
            document.getElementById('div--noInteresado').style.display = "none";
            document.getElementById('noInteresado').removeAttribute("required","");
            document.getElementById('div--fechaCheckCalidad').style.display = "none";
            document.getElementById('fechaCheckCalidad').removeAttribute("required","");
            document.getElementById('div--costoModelo').style.display = "flex";
            document.getElementById('costoModelo').setAttribute("required","");
            document.getElementById('div--fechaPagoModelo').style.display = "flex";
            document.getElementById('fechaPagoModelo').setAttribute("required","");
            document.getElementById('div--fechaMantenimientoGratis').style.display = "none";
            document.getElementById('fechaMantenimientoGratis').removeAttribute("required","");
            document.getElementById('div--fechaValoracionGratis').style.display = "none";
            document.getElementById('fechaValoracionGratis').removeAttribute("required","");
            document.getElementById('div--fechaValoracionPresencial').style.display = "none";
            document.getElementById('fechaValoracionPresencial').removeAttribute("required","");
            document.getElementById('div--fechaValoracionVirtual').style.display = "none";
            document.getElementById('fechaValoracionVirtual').removeAttribute("required","");
            document.getElementById('div--fechaVolverALlamar').style.display = "none";
            document.getElementById('fechaVolverALlamar').removeAttribute("required","");
            document.getElementById('div--fechaVolverALlamarInteresado').style.display = "none";
            document.getElementById('fechaVolverALlamarInteresado').removeAttribute("required","");
            document.getElementById('div--exito').style.display = "none";
            document.getElementById('exito').removeAttribute("required","");
    
        break;

        case "Cancelar Cita":

            document.getElementById('div--agendaIncumplida').style.display = "none";
            document.getElementById('agendaIncumplida').removeAttribute("required","");
            document.getElementById('div--cancelaCita').style.display = "flex";
            document.getElementById('cancelaCita').setAttribute("required","");
            document.getElementById('div--noInteresado').style.display = "none";
            document.getElementById('noInteresado').removeAttribute("required","");
            document.getElementById('div--fechaCheckCalidad').style.display = "none";
            document.getElementById('fechaCheckCalidad').removeAttribute("required","");
            document.getElementById('div--costoModelo').style.display = "none";
            document.getElementById('costoModelo').removeAttribute("required","");
            document.getElementById('div--fechaPagoModelo').style.display = "none";
            document.getElementById('fechaPagoModelo').removeAttribute("required","");
            document.getElementById('div--fechaMantenimientoGratis').style.display = "none";
            document.getElementById('fechaMantenimientoGratis').removeAttribute("required","");
            document.getElementById('div--fechaValoracionGratis').style.display = "none";
            document.getElementById('fechaValoracionGratis').removeAttribute("required","");
            document.getElementById('div--fechaValoracionPresencial').style.display = "none";
            document.getElementById('fechaValoracionPresencial').removeAttribute("required","");
            document.getElementById('div--fechaValoracionVirtual').style.display = "none";
            document.getElementById('fechaValoracionVirtual').removeAttribute("required","");
            document.getElementById('div--fechaVolverALlamar').style.display = "none";
            document.getElementById('fechaVolverALlamar').removeAttribute("required","");
            document.getElementById('div--fechaVolverALlamarInteresado').style.display = "none";
            document.getElementById('fechaVolverALlamarInteresado').removeAttribute("required","");
            document.getElementById('div--exito').style.display = "none";
            document.getElementById('exito').removeAttribute("required","");
    
        break;

        case "Mantenimiento Gratis":
    
            document.getElementById('div--agendaIncumplida').style.display = "none";
            document.getElementById('agendaIncumplida').removeAttribute("required","");
            document.getElementById('div--cancelaCita').style.display = "none";
            document.getElementById('cancelaCita').removeAttribute("required","");
            document.getElementById('div--noInteresado').style.display = "none";
            document.getElementById('noInteresado').removeAttribute("required","");
            document.getElementById('div--fechaCheckCalidad').style.display = "none";
            document.getElementById('fechaCheckCalidad').removeAttribute("required","");
            document.getElementById('div--costoModelo').style.display = "none";
            document.getElementById('costoModelo').removeAttribute("required","");
            document.getElementById('div--fechaPagoModelo').style.display = "none";
            document.getElementById('fechaPagoModelo').removeAttribute("required","");
            document.getElementById('div--fechaMantenimientoGratis').style.display = "flex";
            document.getElementById('fechaMantenimientoGratis').setAttribute("required","");
            document.getElementById('div--fechaValoracionGratis').style.display = "none";
            document.getElementById('fechaValoracionGratis').removeAttribute("required","");
            document.getElementById('div--fechaValoracionPresencial').style.display = "none";
            document.getElementById('fechaValoracionPresencial').removeAttribute("required","");
            document.getElementById('div--fechaValoracionVirtual').style.display = "none";
            document.getElementById('fechaValoracionVirtual').removeAttribute("required","");
            document.getElementById('div--fechaVolverALlamar').style.display = "none";
            document.getElementById('fechaVolverALlamar').removeAttribute("required","");
            document.getElementById('div--fechaVolverALlamarInteresado').style.display = "none";
            document.getElementById('fechaVolverALlamarInteresado').removeAttribute("required","");
            document.getElementById('div--exito').style.display = "none";
            document.getElementById('exito').removeAttribute("required","");
    
        break;

        case "No Le Interesa":
    
            document.getElementById('div--agendaIncumplida').style.display = "none";
            document.getElementById('agendaIncumplida').removeAttribute("required","");
            document.getElementById('div--cancelaCita').style.display = "none";
            document.getElementById('cancelaCita').removeAttribute("required","");
            document.getElementById('div--noInteresado').style.display = "flex";
            document.getElementById('noInteresado').setAttribute("required","");
            document.getElementById('div--fechaCheckCalidad').style.display = "none";
            document.getElementById('fechaCheckCalidad').removeAttribute("required","");
            document.getElementById('div--costoModelo').style.display = "none";
            document.getElementById('costoModelo').removeAttribute("required","");
            document.getElementById('div--fechaPagoModelo').style.display = "none";
            document.getElementById('fechaPagoModelo').removeAttribute("required","");
            document.getElementById('div--fechaMantenimientoGratis').style.display = "none";
            document.getElementById('fechaMantenimientoGratis').removeAttribute("required","");
            document.getElementById('div--fechaValoracionGratis').style.display = "none";
            document.getElementById('fechaValoracionGratis').removeAttribute("required","");
            document.getElementById('div--fechaValoracionPresencial').style.display = "none";
            document.getElementById('fechaValoracionPresencial').removeAttribute("required","");
            document.getElementById('div--fechaValoracionVirtual').style.display = "none";
            document.getElementById('fechaValoracionVirtual').removeAttribute("required","");
            document.getElementById('div--fechaVolverALlamar').style.display = "none";
            document.getElementById('fechaVolverALlamar').removeAttribute("required","");
            document.getElementById('div--fechaVolverALlamarInteresado').style.display = "none";
            document.getElementById('fechaVolverALlamarInteresado').removeAttribute("required","");
            document.getElementById('div--exito').style.display = "none";
            document.getElementById('exito').removeAttribute("required","");
    
        break;

        case "Valoración Gratuita":
    
            document.getElementById('div--agendaIncumplida').style.display = "none";
            document.getElementById('agendaIncumplida').removeAttribute("required","");
            document.getElementById('div--cancelaCita').style.display = "none";
            document.getElementById('cancelaCita').removeAttribute("required","");
            document.getElementById('div--noInteresado').style.display = "none";
            document.getElementById('noInteresado').removeAttribute("required","");
            document.getElementById('div--fechaCheckCalidad').style.display = "none";
            document.getElementById('fechaCheckCalidad').removeAttribute("required","");
            document.getElementById('div--costoModelo').style.display = "none";
            document.getElementById('costoModelo').removeAttribute("required","");
            document.getElementById('div--fechaPagoModelo').style.display = "none";
            document.getElementById('fechaPagoModelo').removeAttribute("required","");
            document.getElementById('div--fechaMantenimientoGratis').style.display = "none";
            document.getElementById('fechaMantenimientoGratis').removeAttribute("required","");
            document.getElementById('div--fechaValoracionGratis').style.display = "flex";
            document.getElementById('fechaValoracionGratis').setAttribute("required","");
            document.getElementById('div--fechaValoracionPresencial').style.display = "none";
            document.getElementById('fechaValoracionPresencial').removeAttribute("required","");
            document.getElementById('div--fechaValoracionVirtual').style.display = "none";
            document.getElementById('fechaValoracionVirtual').removeAttribute("required","");
            document.getElementById('div--fechaVolverALlamar').style.display = "none";
            document.getElementById('fechaVolverALlamar').removeAttribute("required","");
            document.getElementById('div--fechaVolverALlamarInteresado').style.display = "none";
            document.getElementById('fechaVolverALlamarInteresado').removeAttribute("required","");
            document.getElementById('div--exito').style.display = "none";
            document.getElementById('exito').removeAttribute("required","");
    
        break;

        case "Valoración":
    
            document.getElementById('div--agendaIncumplida').style.display = "none";
            document.getElementById('agendaIncumplida').removeAttribute("required","");
            document.getElementById('div--cancelaCita').style.display = "none";
            document.getElementById('cancelaCita').removeAttribute("required","");
            document.getElementById('div--noInteresado').style.display = "none";
            document.getElementById('noInteresado').removeAttribute("required","");
            document.getElementById('div--fechaCheckCalidad').style.display = "none";
            document.getElementById('fechaCheckCalidad').removeAttribute("required","");
            document.getElementById('div--costoModelo').style.display = "none";
            document.getElementById('costoModelo').removeAttribute("required","");
            document.getElementById('div--fechaPagoModelo').style.display = "none";
            document.getElementById('fechaPagoModelo').removeAttribute("required","");
            document.getElementById('div--fechaMantenimientoGratis').style.display = "none";
            document.getElementById('fechaMantenimientoGratis').removeAttribute("required","");
            document.getElementById('div--fechaValoracionGratis').style.display = "none";
            document.getElementById('fechaValoracionGratis').removeAttribute("required","");
            document.getElementById('div--fechaValoracionPresencial').style.display = "flex";
            document.getElementById('fechaValoracionPresencial').setAttribute("required","");
            document.getElementById('div--fechaValoracionVirtual').style.display = "none";
            document.getElementById('fechaValoracionVirtual').removeAttribute("required","");
            document.getElementById('div--fechaVolverALlamar').style.display = "none";
            document.getElementById('fechaVolverALlamar').removeAttribute("required","");
            document.getElementById('div--fechaVolverALlamarInteresado').style.display = "none";
            document.getElementById('fechaVolverALlamarInteresado').removeAttribute("required","");
            document.getElementById('div--exito').style.display = "none";
            document.getElementById('exito').removeAttribute("required","");
    
        break;

        case "Valoración Virtual":

            document.getElementById('div--agendaIncumplida').style.display = "none";
            document.getElementById('agendaIncumplida').removeAttribute("required","");
            document.getElementById('div--cancelaCita').style.display = "none";
            document.getElementById('cancelaCita').removeAttribute("required","");
            document.getElementById('div--noInteresado').style.display = "none";
            document.getElementById('noInteresado').removeAttribute("required","");
            document.getElementById('div--fechaCheckCalidad').style.display = "none";
            document.getElementById('fechaCheckCalidad').removeAttribute("required","");
            document.getElementById('div--costoModelo').style.display = "none";
            document.getElementById('costoModelo').removeAttribute("required","");
            document.getElementById('div--fechaPagoModelo').style.display = "none";
            document.getElementById('fechaPagoModelo').removeAttribute("required","");
            document.getElementById('div--fechaMantenimientoGratis').style.display = "none";
            document.getElementById('fechaMantenimientoGratis').removeAttribute("required","");
            document.getElementById('div--fechaValoracionGratis').style.display = "none";
            document.getElementById('fechaValoracionGratis').removeAttribute("required","");
            document.getElementById('div--fechaValoracionPresencial').style.display = "none";
            document.getElementById('fechaValoracionPresencial').removeAttribute("required","");
            document.getElementById('div--fechaValoracionVirtual').style.display = "flex";
            document.getElementById('fechaValoracionVirtual').setAttribute("required","");
            document.getElementById('div--fechaVolverALlamar').style.display = "none";
            document.getElementById('fechaVolverALlamar').removeAttribute("required","");
            document.getElementById('div--fechaVolverALlamarInteresado').style.display = "none";
            document.getElementById('fechaVolverALlamarInteresado').removeAttribute("required","");
            document.getElementById('div--exito').style.display = "none";
            document.getElementById('exito').removeAttribute("required","");
    
        break;

        case "Volver a Llamar":
    
            document.getElementById('div--agendaIncumplida').style.display = "none";
            document.getElementById('agendaIncumplida').removeAttribute("required","");
            document.getElementById('div--cancelaCita').style.display = "none";
            document.getElementById('cancelaCita').removeAttribute("required","");
            document.getElementById('div--noInteresado').style.display = "none";
            document.getElementById('noInteresado').removeAttribute("required","");
            document.getElementById('div--fechaCheckCalidad').style.display = "none";
            document.getElementById('fechaCheckCalidad').removeAttribute("required","");
            document.getElementById('div--costoModelo').style.display = "none";
            document.getElementById('costoModelo').removeAttribute("required","");
            document.getElementById('div--fechaPagoModelo').style.display = "none";
            document.getElementById('fechaPagoModelo').removeAttribute("required","");
            document.getElementById('div--fechaMantenimientoGratis').style.display = "none";
            document.getElementById('fechaMantenimientoGratis').removeAttribute("required","");
            document.getElementById('div--fechaValoracionGratis').style.display = "none";
            document.getElementById('fechaValoracionGratis').removeAttribute("required","");
            document.getElementById('div--fechaValoracionPresencial').style.display = "none";
            document.getElementById('fechaValoracionPresencial').removeAttribute("required","");
            document.getElementById('div--fechaValoracionVirtual').style.display = "none";
            document.getElementById('fechaValoracionVirtual').removeAttribute("required","");
            document.getElementById('div--fechaVolverALlamar').style.display = "flex";
            document.getElementById('fechaVolverALlamar').setAttribute("required","");
            document.getElementById('div--fechaVolverALlamarInteresado').style.display = "none";
            document.getElementById('fechaVolverALlamarInteresado').removeAttribute("required","");
            document.getElementById('div--exito').style.display = "none";
            document.getElementById('exito').removeAttribute("required","");
    
        break;

        case "Éxito":

            document.getElementById('div--agendaIncumplida').style.display = "none";
            document.getElementById('agendaIncumplida').removeAttribute("required","");
            document.getElementById('div--cancelaCita').style.display = "none";
            document.getElementById('cancelaCita').removeAttribute("required","");
            document.getElementById('div--noInteresado').style.display = "none";
            document.getElementById('noInteresado').removeAttribute("required","");
            document.getElementById('div--fechaCheckCalidad').style.display = "none";
            document.getElementById('fechaCheckCalidad').removeAttribute("required","");
            document.getElementById('div--costoModelo').style.display = "none";
            document.getElementById('costoModelo').removeAttribute("required","");
            document.getElementById('div--fechaPagoModelo').style.display = "none";
            document.getElementById('fechaPagoModelo').removeAttribute("required","");
            document.getElementById('div--fechaMantenimientoGratis').style.display = "none";
            document.getElementById('fechaMantenimientoGratis').removeAttribute("required","");
            document.getElementById('div--fechaValoracionGratis').style.display = "none";
            document.getElementById('fechaValoracionGratis').removeAttribute("required","");
            document.getElementById('div--fechaValoracionPresencial').style.display = "none";
            document.getElementById('fechaValoracionPresencial').removeAttribute("required","");
            document.getElementById('div--fechaValoracionVirtual').style.display = "none";
            document.getElementById('fechaValoracionVirtual').removeAttribute("required","");
            document.getElementById('div--fechaVolverALlamar').style.display = "none";
            document.getElementById('fechaVolverALlamar').removeAttribute("required","");
            document.getElementById('div--fechaVolverALlamarInteresado').style.display = "none";
            document.getElementById('fechaVolverALlamarInteresado').removeAttribute("required","");
            document.getElementById('div--exito').style.display = "flex";
            document.getElementById('exito').setAttribute("required","");

        break;

        default:

            document.getElementById('div--agendaIncumplida').style.display = "none";
            document.getElementById('agendaIncumplida').removeAttribute("required","");
            document.getElementById('div--cancelaCita').style.display = "none";
            document.getElementById('cancelaCita').removeAttribute("required","");
            document.getElementById('div--noInteresado').style.display = "none";
            document.getElementById('noInteresado').removeAttribute("required","");
            document.getElementById('div--fechaCheckCalidad').style.display = "none";
            document.getElementById('fechaCheckCalidad').removeAttribute("required","");
            document.getElementById('div--costoModelo').style.display = "none";
            document.getElementById('costoModelo').removeAttribute("required","");
            document.getElementById('div--fechaPagoModelo').style.display = "none";
            document.getElementById('fechaPagoModelo').removeAttribute("required","");
            document.getElementById('div--fechaMantenimientoGratis').style.display = "none";
            document.getElementById('fechaMantenimientoGratis').removeAttribute("required","");
            document.getElementById('div--fechaValoracionGratis').style.display = "none";
            document.getElementById('fechaValoracionGratis').removeAttribute("required","");
            document.getElementById('div--fechaValoracionPresencial').style.display = "none";
            document.getElementById('fechaValoracionPresencial').removeAttribute("required","");
            document.getElementById('div--fechaValoracionVirtual').style.display = "none";
            document.getElementById('fechaValoracionVirtual').removeAttribute("required","");
            document.getElementById('div--fechaVolverALlamar').style.display = "none";
            document.getElementById('fechaVolverALlamar').removeAttribute("required","");
            /* document.getElementById('div--fechaVolverALlamarInteresado').style.display = "none";
            document.getElementById('fechaVolverALlamarInteresado').removeAttribute("required",""); */
            document.getElementById('div--exito').style.display = "none";
            document.getElementById('exito').removeAttribute("required","");

        break;
    
    }

}


function getSelectValue2(){

    tipoOT = document.getElementById('embudoOrigen').value;

    switch (tipoOT) {
        
        case 'OT - Overtask':
            
                document.getElementById('div--tipoOT').style.display = "flex";
                document.getElementById('tipoOT').setAttribute("required","");

            break;
    
        default:
            break;

    }

}
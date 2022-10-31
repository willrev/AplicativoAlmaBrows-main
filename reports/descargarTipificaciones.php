<?php

    require '../vendor/autoload.php';
    require '../controllers/db.php';

    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\IOFactory;

    $fechaInicialSF = $_POST["fechaInicialGestion"];
    $fechaFinalSF = $_POST["fechaFinalGestion"];

    $fechaInicialCF = "";
    $fechaFinalCF = "";

    for ($i=0; $i < strlen($fechaInicialSF); $i++) { 
        
        if($i == 10){

            $fechaInicialCF .= " ";

        }else{

            $fechaInicialCF .= $fechaInicialSF[$i];

        }

    }

    for ($i=0; $i < strlen($fechaFinalSF); $i++) { 
        
        if($i == 10){

            $fechaFinalCF .= " ";

        }else{

            $fechaFinalCF .= $fechaFinalSF[$i];

        }

    }

    $fechaFinalCF .= ":00";
    $fechaInicialCF .= ":00";

    try{

        $DBConnector = new DBConnector();
        $connection = $DBConnector->getConnection();

        $preparedStatement = $connection->prepare("SELECT * FROM tipificacion WHERE fechaGestion BETWEEN ? AND ?;");
        $preparedStatement->execute([$fechaInicialCF,$fechaFinalCF]);

        $tipificaciones = $preparedStatement->fetchAll(PDO::FETCH_OBJ);

    }catch(Exception $e){

        $e->getMessage();

    }

    $spreadSheet = new SpreadSheet();

    $activeSheet = $spreadSheet->getActiveSheet();

    /*Formato del Archivo en Excel*/
    
    $activeSheet->setTitle("Tipificaciones");

    $activeSheet->getColumnDimension('A')->setWidth(20);
    $activeSheet->getColumnDimension('B')->setWidth(40);
    $activeSheet->getColumnDimension('C')->setWidth(30);
    $activeSheet->getColumnDimension('D')->setWidth(30);
    $activeSheet->getColumnDimension('E')->setWidth(50);
    $activeSheet->getColumnDimension('F')->setWidth(30);
    $activeSheet->getColumnDimension('G')->setWidth(40);
    $activeSheet->getColumnDimension('H')->setWidth(20);
    $activeSheet->getColumnDimension('I')->setWidth(40);
    $activeSheet->getColumnDimension('J')->setWidth(50);
    $activeSheet->getColumnDimension('K')->setWidth(50);
    $activeSheet->getColumnDimension('L')->setWidth(30);
    $activeSheet->getColumnDimension('M')->setWidth(30);
    $activeSheet->getColumnDimension('N')->setWidth(30);
    $activeSheet->getColumnDimension('O')->setWidth(30);
    $activeSheet->getColumnDimension('P')->setWidth(30);
    $activeSheet->getColumnDimension('Q')->setWidth(30);
    $activeSheet->getColumnDimension('R')->setWidth(30);
    $activeSheet->getColumnDimension('S')->setWidth(50);
    $activeSheet->getColumnDimension('T')->setWidth(30);
    $activeSheet->getColumnDimension('U')->setWidth(30);
    $activeSheet->getColumnDimension('V')->setWidth(30);
    $activeSheet->getColumnDimension('W')->setWidth(30);

    $activeSheet->setCellValue('A1','ID Tipificación');
    $activeSheet->setCellValue('B1','Nombre del Asesor');
    $activeSheet->setCellValue('C1','Inicio de Gestion');
    $activeSheet->setCellValue('D1','Fin de Gestion');
    $activeSheet->setCellValue('E1','Embudo de Origen');
    $activeSheet->setCellValue('F1','Red Social');
    $activeSheet->setCellValue('G1','Nombre Cliente');
    $activeSheet->setCellValue('H1','Teléfono Cliente');
    $activeSheet->setCellValue('I1','Estado Tipificacion');
    $activeSheet->setCellValue('J1','Agenda Incumplida');
    $activeSheet->setCellValue('K1','Cancela Cita');
    $activeSheet->setCellValue('L1','No Interesado');
    $activeSheet->setCellValue('M1','Éxito');
    $activeSheet->setCellValue('N1','Fecha Check Calidad');
    $activeSheet->setCellValue('O1','Costo Modelo');
    $activeSheet->setCellValue('P1','Fecha Pago Modelo');
    $activeSheet->setCellValue('Q1','Fecha Mantenimiento Gratis');
    $activeSheet->setCellValue('R1','Fecha Valoracion Gratis');
    $activeSheet->setCellValue('S1','Fecha Valoracion Presencial');
    $activeSheet->setCellValue('T1','Fecha Valoracion Virtual');
    $activeSheet->setCellValue('U1','Fecha Volver a Llamar');
    $activeSheet->setCellValue('V1','Fecha Volver a Llamar Interesado');
    $activeSheet->setCellValue('W1','Observaciones');
    
    $row = 2;

    foreach ($tipificaciones as $tipificacion) {

        $activeSheet->setCellValue('A'.$row,$tipificacion->idTipificacion);
        $activeSheet->setCellValue('B'.$row,$tipificacion->nombreUsuario);
        $activeSheet->setCellValue('C'.$row,$tipificacion->fechaGestion);
        $activeSheet->setCellValue('D'.$row,$tipificacion->fechaFinGestion);
        $activeSheet->setCellValue('E'.$row,$tipificacion->embudoOrigen);
        $activeSheet->setCellValue('F'.$row,$tipificacion->redSocial);
        $activeSheet->setCellValue('G'.$row,$tipificacion->nombreCliente);
        $activeSheet->setCellValue('H'.$row,$tipificacion->telefonoCliente);
        $activeSheet->setCellValue('I'.$row,$tipificacion->estadoTipificacion);
        $activeSheet->setCellValue('J'.$row,$tipificacion->agendaIncumplida);
        $activeSheet->setCellValue('K'.$row,$tipificacion->cancelaCita);
        $activeSheet->setCellValue('L'.$row,$tipificacion->noInteresado);
        $activeSheet->setCellValue('M'.$row,$tipificacion->exito);
        $activeSheet->setCellValue('N'.$row,$tipificacion->fechaCheckCalidad);
        $activeSheet->setCellValue('O'.$row,$tipificacion->costoModelo);
        $activeSheet->setCellValue('P'.$row,$tipificacion->fechaPagoModelo);
        $activeSheet->setCellValue('Q'.$row,$tipificacion->fechaMantenimientoGratis);
        $activeSheet->setCellValue('R'.$row,$tipificacion->fechaValoracionGratis);
        $activeSheet->setCellValue('S'.$row,$tipificacion->fechaValoracionPresencial);
        $activeSheet->setCellValue('T'.$row,$tipificacion->fechaValoracionVirtual);
        $activeSheet->setCellValue('U'.$row,$tipificacion->fechaVolverALlamar);
        $activeSheet->setCellValue('V'.$row,$tipificacion->fechaVolverALlamarInteresado);
        $activeSheet->setCellValue('W'.$row,$tipificacion->observaciones);

        $row++;

    }

    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="Reporte-Tipificaciones-Alma.xls"');
    header('Cache-Control: max-age=0');

    $writer = IOFactory::createWriter($spreadSheet, 'Xls');
    $writer->save('php://output');

?>
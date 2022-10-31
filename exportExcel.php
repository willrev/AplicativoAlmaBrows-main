<?php

    require 'vendor/autoload.php';
    require 'controllers/db.php';

    use PhpOffice\PhpSpreadsheet\{SpreadSheet, IOFactory};

    $DBConnector = new DBConnector();
    $connection = $DBConnector->getConnection();

    $preparedStatement = $connection->prepare("SELECT * FROM usuario;");
    $preparedStatement->execute();

    $usuarios = $preparedStatement->fetchAll(PDO::FETCH_OBJ);

    $spreadSheet = new SpreadSheet();

    $activeSheet = $spreadSheet->getActiveSheet();

    /*Formato del Archivo en Excel*/
    
    $activeSheet->setTitle("Usuarios");

    $activeSheet->setCellValue('A1','ID');
    $activeSheet->setCellValue('B1','Nombre de Usuario');
    $activeSheet->setCellValue('C1','Contraseña');
    $activeSheet->setCellValue('D1','Id Tipo de Usuario');

    $row = 2;

    foreach ($usuarios as $usuario) {
        
        $activeSheet->setCellValue('A'.$row, $usuario->idUsuario);
        $activeSheet->setCellValue('B'.$row, $usuario->nombreUsuario);
        $activeSheet->setCellValue('C'.$row, $usuario->claveUsuario);

        switch ($usuario->idTipoUsuario) {
                                
            case '1':
                $activeSheet->setCellValue('D'.$row, 'Administrador');
                break;

            case '2':
                $activeSheet->setCellValue('D'.$row, 'Supervisor');
                break;
            
            case '3':
                $activeSheet->setCellValue('D'.$row, 'Asesor');
                break;

            default:
                echo 'Error';
                break;

        }

        $row++;

    }

    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="reporteTipificacion.xls"');
    header('Cache-Control: max-age=0');

    $writer = IOFactory::createWriter($spreadSheet, 'Xls');
    $writer->save('php://output');

?>
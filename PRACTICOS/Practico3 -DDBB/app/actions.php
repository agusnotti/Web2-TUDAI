<link rel="stylesheet" href="style.css">

<?php

require_once 'deudas.php';

function showHome(){
    echo "Pagina deudas";
}

function showDeudas(){
    $pagos = getPagos();

    //var_dump($pagos);
    $html = '<h1>Tabla de Pagos</h1>';

    $html .= '<table>
            <tr>
                <th> Deudor </th>
                <th> Cuota </th>
                <th> Valor </th>
                <th> Fecha Pago </th>
            </tr>';

    foreach ($pagos as $pago){
        $html.= '<tr>
                    <td>'. $pago->deudor .'</td>
                    <td>'. $pago->cuota .'</td>
                    <td>'. $pago->cuota_capital .'</td>
                    <td>'. $pago->fecha_pago .'</td>
                </tr>';
    }

    $html.= '</table>';

    return $html;
}
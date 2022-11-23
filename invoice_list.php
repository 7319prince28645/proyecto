<?php
session_start();
include('inc/header.php');
include 'Invoice.php';
$invoice = new Invoice();
$invoice->checkLoggedIn();
?>
<title>SISTEMA FACTURACION - GRUPO 1</title>
<script src="js/invoice.js"></script>
<link href="css/style.css" rel="stylesheet">
<?php include('inc/container.php'); ?>
<div class="container">
  <h2 class="title">SISTEMA FACTURACION - GRUPO 1</h2>
  <img src="https://scontent.flim1-1.fna.fbcdn.net/v/t39.30808-6/293862205_5218714128177975_7793823943975478663_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=e3f864&_nc_ohc=JAX-27f4N1QAX-kg34m&_nc_ht=scontent.flim1-1.fna&oh=00_AfBrP1CTHVxRD7KRLel7ACBmOvfMYivC2NmPoBvQKtRVlQ&oe=6383108A" class="title1" alt="mateo">
  <?php include('menu.php'); ?>
  <table id="data-table" class="table table-condensed table-striped">
    <thead>
      <tr>
        <th># Factura</th>
        <th>Fecha Creación</th>
        <th>Nombre del Cliente</th>
        <th>Total Facturado</th>
        <th>Imprimir</th>
        <th>Editar</th>
        <th>Eliminar</th>
      </tr>
    </thead>
    <?php
    $invoiceList = $invoice->getInvoiceList();
    foreach ($invoiceList as $invoiceDetails) {
      $invoiceDate = date("d/M/Y, H:i:s", strtotime($invoiceDetails["order_date"]));
      echo '
              <tr>
                <td>' . $invoiceDetails["order_id"] . '</td>
                <td>' . $invoiceDate . '</td>
                <td>' . $invoiceDetails["order_receiver_name"] . '</td>
                <td>' . $invoiceDetails["order_total_after_tax"] . '</td>
                <td><a href="print_invoice.php?invoice_id=' . $invoiceDetails["order_id"] . '" title="Imprimir Factura"><span class="glyphicon glyphicon-print"></span></a></td>
                <td><a href="edit_invoice.php?update_id=' . $invoiceDetails["order_id"] . '"  title="Editar Factura"><span class="glyphicon glyphicon-edit"></span></a></td>
                <td><a href="#" id="' . $invoiceDetails["order_id"] . '" class="deleteInvoice"  title="Eliminar Factura"><span class="glyphicon glyphicon-remove"></span></a></td>
              </tr>
            ';
    }
    ?>
  </table>
</div>
<?php include('inc/footer.php'); ?>
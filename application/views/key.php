<?php
require_once('<?= base_url() ?>key/tcpdf/tcpdf.php');

$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);

$info = array(
	'Name' => 'TCPDF'
);

$certificate = 'file://'.realpath('<?= base_url() ?>key/cert.crt');
$primaryKey =  'file://'.realpath('<?= base_url() ?>key/key.pem');

$pdf->AddPage();

$pdf->writeHTML('Este es un <b color="#FF0000">documento firmado digitalmente</b> usando TCPDF', true, 0, true, 0);

$pdf->setSignature($certificate, $primaryKey, '123456', '', 2, $info);

$pdf->Output('example.pdf', 'D');

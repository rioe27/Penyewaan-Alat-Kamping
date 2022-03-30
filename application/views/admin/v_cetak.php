<?php
    $pdf = new Pdf('L', 'mm', 'A4', true, 'UTF-8', false);
    $pdf->SetTitle('Diaz Adventure');
    $pdf->SetTopMargin(20);
    $pdf->setFooterMargin(20);
    $pdf->SetAutoPageBreak(true);
    $pdf->SetAuthor('Author');
    $pdf->SetDisplayMode('real', 'default');
    $pdf->AddPage();
    $pdf->Write(5, 'Diaz Adventure');
    $pdf->Output('contoh1.pdf', 'I');
?>
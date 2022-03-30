<?php
	echo $content;
	die();
            $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
            $pdf->SetTitle('DIAZ ADVENTURE');
            $pdf->SetHeaderMargin(30);
            $pdf->SetTopMargin(20);
            $pdf->setFooterMargin(20);
            $pdf->SetAutoPageBreak(true);
            $pdf->SetAuthor('Author');
            $pdf->SetDisplayMode('real', 'default');
			$pdf->setPrintHeader(false);
            $pdf->AddPage();
            $i=0;
            $html= $content;
            $pdf->writeHTML($html, true, false, true, false, '');
            $pdf->Output($namafile.'.pdf', 'I');
?>
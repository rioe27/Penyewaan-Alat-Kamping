<?php
            $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
            $pdf->SetTitle('DIAZ ADVENTURE');
            $pdf->SetHeaderMargin(30);
            $pdf->SetTopMargin(20);
            $pdf->setFooterMargin(20);
            $pdf->SetAutoPageBreak(true);
            $pdf->SetAuthor('Author');
            $pdf->SetDisplayMode('real', 'default');
            $pdf->AddPage();
            $i=0;
            $html='<h3>Diaz ADVENTURE</h3>
                    <table cellspacing="1" bgcolor="#666666" cellpadding="2">
                        <tr bgcolor="#ffffff">
                            <th width="5%" align="center">No</th>
                            <th width="10%" align="center">Nama </th>
                            <th width="10%" align="center">No Tlpn</th>
                            <th width="20%" align="center">Alamat</th>
							<th width="25%" align="center">Nama Alat</th>
							<th width="10%" align="center">Tgl Penyewaan</th>
							<th width="10%" align="center">Tgl Pengembalian</th>
							<th width="10%" align="center">Biaya Sewa</th>
                        </tr>';
            foreach ($penyewaan as $row) 
                {
                    $i++;
                    $html.='<tr bgcolor="#ffffff">
                            <td align="center">'.$i.'</td>
                            <td>'.$row['nama'].'</td>
							<td>'.$row['no_tlpn'].'</td>
							<td>'.$row['alamat'].'</td>
                            <td>'.$row['nama_alat'].'</td>
							<td>'.$row['tgl_penyewaan'].'</td>
							<td>'.$row['tgl_pengembalian'].'</td>
                            <td align="right">'.number_format($row['biaya_sewa'],0,",",",").'</td>
                        </tr>';
                }
            $html.='</table>';
            $pdf->writeHTML($html, true, false, true, false, '');
            $pdf->Output('daftar_produk.pdf', 'I');
?>
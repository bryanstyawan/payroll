<?php
    if ($list != 0) {
        # code...
        for ($i=0; $i < count($list); $i++) { 
            # code...
?>
            <tr>
                <td>
                    <a href="<?php echo site_url();?>home/slip_gaji/<?=$list[$i]->pegawai_nip;?>/<?=$period;?>" target="_blank" class="btn btn-primary">Slip Gaji</a>
                    <a href="<?php echo site_url();?>home/detail/<?=$list[$i]->pegawai_nip;?>" class="btn btn-primary">Detail</a>                                        
                </td>
                <td><?=$list[$i]->pegawai_nama;?></td>
                <td><?=$list[$i]->pegawai_nip;?></td>
                <td><?=$list[$i]->str_1;?></td>
                <td><?=$list[$i]->str_2;?></td>
                <td><?=$list[$i]->str_3;?></td>                                
                <td><?=$list[$i]->tgl_mulai_kerja;?></td>                
                <td><?=$period;?></td>
                <td><?=number_format($list[$i]->gaji_pokok);?></td>
                <td><?=number_format($list[$i]->tunjangan_jabatan);?></td>
                <td><?=number_format($list[$i]->tunjangan_kehadiran);?></td>
                <td><?=number_format($list[$i]->upah_lembur);?></td>
                <td><?=number_format($list[$i]->potongan_keterlambatan_absensi);?></td>
                <td><?=number_format($list[$i]->potongan_iuran_bpjs_kesehatan);?></td>
                <td><?=number_format($list[$i]->potongan_iuran_bpjs_tk);?></td>
                <td><?=number_format($list[$i]->potongan_pph21);?></td>
                <td><?=number_format($list[$i]->gaji_temp);?></td>
                <td><?=number_format($list[$i]->total_potongan);?></td>
                <td><?=number_format($list[$i]->slip_gaji);?></td>                                
            </tr>
<?php
        }
        
    }
?>
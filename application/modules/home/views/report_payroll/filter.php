<?php
    if ($list != 0) {
        # code...
        for ($i=0; $i < count($list); $i++) { 
            # code...
?>
            <tr>
                <td><?=$list[$i]->pegawai_nama;?></td>
                <td><?=$list[$i]->pegawai_nip;?></td>
                <td><?=$list[$i]->str_1;?></td>
                <td><?=$list[$i]->str_2;?></td>
                <td><?=$list[$i]->str_3;?></td>                                
                <td><?=$list[$i]->tgl_mulai_kerja;?></td>                
            </tr>
<?php
        }
        
    }
?>
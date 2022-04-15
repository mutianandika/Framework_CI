<div class="col-md-12">
    <h3>Daftar Dosen</h3>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>SKS</th>
                <th>Kode</th>
            </tr>
        </thead>
        <tbody>
           <?php
                $nomor=1;
                foreach($list_mtl as $mtl){
            ?>
            <tr>
                <td><?=$nomor?></td>
                <td><?=$dsn->kode?></td>
                <td><?=$dsn->nama?></td>
                <td><?=$dsn->SKS?></td>
            </tr> 
            <?php
                $nomor++;
                }
            ?> 
        </tbody>
    </table>
</div>


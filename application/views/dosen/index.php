<div class="col-md-12">
    <h3>Daftar Dosen</h3>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>NIMK</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Pendidikan</th>
            </tr>
        </thead>
        <tbody>
           <?php
                $nomor=1;
                foreach($list_dsn as $dsn){
            ?>
            <tr>
                <td><?=$nomor?></td>
                <td><?=$dsn->nim?></td>
                <td><?=$dsn->nama?></td>
                <td><?=$dsn->gender?></td>
                <td><?=$dsn->ipk?></td>
                <td><?=$dsn->Pendidikan?></td>
            </tr> 
            <?php
                $nomor++;
                }
            ?> 
        </tbody>
    </table>
</div>


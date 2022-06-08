<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Mahasiswa</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Mahasiswa</li>
            </ol>
        </div>
        </div>
    </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
        <h3 class="card-title">Mahasiswa</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
            </button>
        </div>
        </div>
        <div class="card-body">
        <?php echo '<pre>';
print_r($list_mahasiswa);
echo '</pre>'; ?>

<div class="col-md-12">
    <h3>
        Daftar Mahasiswa
    </h3>
    <table class="table" border="1">
        <thead>
            <tr>
                <th>#</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>IPK</th>
                <th>Prodi</th>
                <th>Predikat</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($list_mahasiswa as $mhs) {
            ?>
                <tr>
                    <td><?= $nomor ?></td>
                    <td><?= $mhs->nim ?></td>
                    <td><?= $mhs->nama ?></td>
                    <td><?= $mhs->gender ?></td>
                    <td><?= $mhs->ipk ?></td>
                    <td><?= $mhs->prodi ?></td>
                    <td><?= $mhs->predikat() ?></td>
                </tr>
                <a href = "<?= base_url()."mahasiswa/creat" ?>">Menuju From</a>
            <?php
                $nomor++;
            }
            ?>
        </tbody>
    </table>
</div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
        @mutyndk_
        </div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
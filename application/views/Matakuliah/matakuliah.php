<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Matakuliah</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Matakuliah</li>
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
        <h3 class="card-title">Matakuliah</h3>
        <div class="col-md-12">
</div>

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
        <h3>
        Daftar Matakuliah
        </h3>
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
                <td><?=$mtl->nama?></td>
                <td><?=$mtl->SKS?></td>
                <td><?=$mtl->kode?></td>
            </tr> 
            <?php
                $nomor++;
                }
            ?> 
        </tbody>
    </table>
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
<!-- /.content-wrapper -->


 <!-- Main content -->
 <div class="content">
     <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan') ?>"> </div>
     <div class="nama-menu" data-namamenu="<?php echo $this->session->flashdata('nama_menu')  ?>"></div>

     <div class="container-fluid">
         <div class="row">
             <div class="col-lg-12">
                 <!-- batas atas -->
                 <div class="row">
                     <div class="col-12">
                     <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title"> Filter Duplikat Akta Cerai</h3>
                            </div>
                            <div class="card-body">
                                <form class="form-inline">
                                    <div class="form-group mb-2">
                                        <label for="tahun" class="">Tahun : </label>
                                        <select name="tahun" class="form-control ml-3 mr-3">
                                            <option value="">-- Pilih Tahun --</option>
                                            <?php foreach ($tahun as $hasil) { ?>
                                                <option value="<?php echo $hasil['tahun_hasil']; ?>"><?php echo $hasil['tahun_hasil']; ?> </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <?php
                                    if ((isset($_GET['tahun']) && $_GET['tahun'] != '')) {
                                        $tahun      = $_GET['tahun'];
                                    } else {
                                        $tahun   = date('Y');
                                    }
                                    ?>
                                    <button type="submit" class="btn btn-success mb-2 ml-auto"><i class="fas fa-eye"></i> Tampilkan Data</button>
                                    <a href="<?php echo base_url('duplikat/excelLaporan?tahun=' . $tahun) ?>" class="btn btn-warning mb-2 ml-2"><i class="fas fa-download"></i> Download Excel</a>
                                    <a href="<?php echo base_url('duplikat/data_dup/add') ?>" class="btn btn-primary mb-2 ml-2 "><i class="fas fa-plus"></i> Tambah Data</a>
                                    
                                </form>
                            </div>
                        </div>
                         <div class="card">
                             <div class="card-header">
                                 <h3 class="card-title"> Tabel Pemohon Duplikat Akta Cerai Tahun <b><?php echo $tahun; ?></b></h3>
                             </div>
                             <div class="card-body">
                                 <table class="table table-bordered table-sm" id="example1">
                                     <thead>
                                         <tr>
                                             <th scope="col">No</th>
                                             <th scope="col">ID</th>
                                             <th scope="col">Timestamp</th>
                                             <th scope="col">Nama</th>
                                             <th scope="col">NIP</th>
                                             <th scope="col">Satuan Kerja</th>
                                             <th scope="col">Posisi Yang Dipilih</th>
                                             <th scope="col">Bahasa Pemrograman</th>
                                             <th scope="col">Framework</th>
                                             <th scope="col">Database</th>
                                             <th scope="col">Tools</th>
                                             <th scope="col">Mobile Apps</th>
                                             <th scope="col">Detail Attribut</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         <?php
                                            $no = 1;
                                            foreach ($data as $hasil) :
                                            ?>
                                            <?php 

                                            ?>
                                             <tr>
                                                 <td width="20px"><?php echo $no++ ?></td>
                                                 <td><?php echo $hasil['id']; ?></td>
                                                 <td><?php echo $hasil['timestamp']; ?></td>
                                                 <td><?php echo $hasil['nama']; ?></td>
                                                 <td><?php echo $hasil['nip']; ?></td>
                                                 <td><?php echo $hasil['satuan_kerja']; ?></td>
                                                 <td><?php echo $hasil['posisi_yang_dipilih']; ?></td>
                                                 <td><?php echo $hasil['bahasa_pemrograman_yang_dikuasai']; ?></td>
                                                 <td><?php echo $hasil['framework_bahasa_pemrograman_yang_dikuasai']; ?></td>
                                                 <td><?php echo $hasil['database_yang_dikuasai']; ?></td>
                                                 <td><?php echo $hasil['tools_yang_dikuasai']; ?></td>
                                                 <td><?php echo $hasil['pernah_membuat_mobile_apps']; ?></td>
                                                 <td width="150px">
                                                     <a href="<?php echo base_url('seleksi/attribut/' . $hasil['id']) ?>" class="btn btn-warning btn-sm" title="Detail"><i class="fas fa-eye"></i></a>
                                                 </td>
                                                 <!-- <td width="150px">
                                                     <a data-toggle="modal" data-target="#hapus-data<?= $hasil['id_dup']; ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                                     <a href="<?php echo base_url('duplikat/data_dup/edit/' . $hasil['id_dup']) ?>" class="btn btn-success btn-sm" title="Edit Data"><i class="fas fa-edit"></i></a>
                                                     <a href="<?php echo base_url('duplikat/data_dup/view/' . $hasil['id_dup']) ?>" class="btn btn-primary btn-sm" title="View Data"><i class="fas fa-eye"></i></a>
                                                 </td> -->
                                             </tr>
                                         <?php endforeach; ?>
                                     </tbody>
                                 </table>
                             </div>
                         </div>

                         <!-- /.card -->
                     </div>
                     <!-- /.col -->
                 </div>
                 <!-- batas bawah -->
             </div>
         </div>
         <!-- /.row -->
     </div><!-- /.container-fluid -->
 </div>
 <!-- /.content -->
 <?php foreach ($data_dup as $hasil) : ?>
     <div class="modal fade" id="hapus-data<?= $hasil['id_dup']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
             <div class="modal-content">
                 <div class="modal-header bg-danger">
                     <h6><i class="fas fa-trash"></i> Hapus Data Permohonan Duplikat</h6>
                 </div>
                 <form class="form-horizontal" action="<?php echo site_url('duplikat/hapus_data/' . $hasil['id_dup']); ?>" method="post" enctype="multipart/form-data" role="form">
                     <div class="modal-body">
                         <p>Apakah Anda Ingin Menghapus Data <strong><?= $hasil['reg_dup']; ?></strong> ?</p>
                     </div>
                     <div class="modal-footer justify-content-between">
                         <button class="btn btn-danger btn-lg" type="submit"><i class="fas fa-trash"></i></button>
                         <button type="button" class="btn btn-success btn-lg" data-dismiss="modal"><i class="fas fa-window-close"></i></button>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 <?php endforeach;  ?>
 <!-- Modal Update-->
 <?php foreach ($data_dup as $hasil) : ?>
     <div class="modal fade" id="update-data<?= $hasil['id_dup']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
             <div class="modal-content">
                 <div class="modal-body">
                     <div class="d-flex justify-content-center">
                         <!-- <embed type="application/pdf" src="<?php echo base_url('uploads/') . $hasil['file_upload']; ?>" width="450" height="400"></embed> -->
                         <img src="<?php echo base_url('uploads/') . $hasil['file_upload']; ?>" alt="Gambar" width="350" height="500">
                     </div>
                 </div>
             </div>
         </div>
     </div>
 <?php endforeach;  ?>
 <!-- Modal -->
 <!-- Modal Update-->
 <?php foreach ($data_dup as $hasil) : ?>
     <div class="modal fade" id="kwitansi-data<?= $hasil['id_dup']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
             <div class="modal-content">
                 <div class="modal-body">
                     <div class="d-flex justify-content-center">
                         <!-- <embed type="application/pdf" src="<?php echo base_url('uploads/') . $hasil['file_kwitansi']; ?>" width="450" height="400"></embed> -->
                         <img src="<?php echo base_url('uploads/') . $hasil['file_kwitansi']; ?>" alt="Gambar" width="350" height="500">
                     </div>
                 </div>
             </div>
         </div>
     </div>
 <?php endforeach;  ?>
 <!-- Modal -->
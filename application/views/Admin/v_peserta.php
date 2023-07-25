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
                        </div>
                         <div class="card">
                             <div class="card-header">
                                 <h3 class="card-title"> Tabel Peserta Seleksi</b></h3>
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
                                                 <td><?php if(isset($hasil['framework_bahasa_pemrograman_yang_dikuasai'])){echo $hasil['framework_bahasa_pemrograman_yang_dikuasai'];}  ?></td>
                                                 <td><?php echo $hasil['database_yang_dikuasai']; ?></td>
                                                 <td><?php echo $hasil['tools_yang_dikuasai']; ?></td>
                                                 <td><?php echo $hasil['pernah_membuat_mobile_apps']; ?></td>
                                                 <td width="150px">
                                                     <a href="<?php echo base_url('seleksi/attribut/' . $hasil['id']) ?>" class="btn btn-warning btn-sm" title="Detail"><i class="fas fa-eye"></i></a>
                                                 </td>
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
 
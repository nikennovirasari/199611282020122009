<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
     <div class="container-fluid">
         <div class="row">
             <div class="col-lg-12">
                 <!-- batas atas -->
                 <div class="card">
                     <div class="card-header" style="text-align: center;">
                         <h5>Detail Data Akta Cerai Berdasarkan QR Code</h5>
                         <img src="<?php echo base_url() ?>assets/img/logo.png" alt="AdminLTE Logo" class="brand-image" style="opacity: .8" height="200">
                         <h5>PENGADILAN AGAMA BOJONEGORO</h5>
                     </div>
                     <div class="card-body">
                         <div class="row">
                             <div class="col-sm-12">
                                 <table class="table table-bordered table-sm">
                                     <tbody>
                                         <tr>
                                             <th scope="col" style="width: 30%;">Nomor Seri</th>
                                             <th>:</th>
                                             <td><?= $hasil['no_seri_akta_cerai']; ?></td>
                                         </tr>
                                         <tr>
                                             <th scope="col">Tanggal Putusan</th>
                                             <th>:</th>
                                             <td><?= tanggal_indonesia_lengkap($hasil['tanggal_putusan']); ?></td>
                                         </tr>
                                         <tr>
                                             <th scope="col">Nomor Perkara</th>
                                             <th>:</th>
                                             <td><?= $hasil['nomor_perkara']; ?></td>
                                         </tr>
                                         <tr>
                                             <th scope="col">Nomor AC</th>
                                             <th>:</th>
                                             <td><?= $hasil['nomor_akta_cerai']; ?></td>
                                         </tr>
                                         <tr>
                                             <th scope="col">Tanggal Terbit Akta Cerai</th>
                                             <th>:</th>
                                             <td><?php 
                                             if($hasil['tgl_akta_cerai'] != NULL){ 
                                                echo tanggal_indonesia_lengkap($hasil['tgl_akta_cerai']);
                                            }else{
                                                echo '';
                                            }
                                             ?></td>
                                         </tr>
                                         <tr>
                                             <th scope="col">Nama P</th>
                                             <th>:</th>
                                             <td><?= $hasil['pihak1_text']; ?></td>
                                         </tr>
                                         <tr>
                                             <th scope="col">Nama T</th>
                                             <th>:</th>
                                             <td><?= $hasil['pihak2_text']; ?></td>
                                         </tr>
                                     </tbody>
                                 </table>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!-- batas bawah -->
             </div>
         </div>
         <!-- /.row -->
     </div><!-- /.container-fluid -->
 </div>
 <!-- /.content -->
</div>
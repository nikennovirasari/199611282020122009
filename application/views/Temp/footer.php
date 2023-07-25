 <!-- Control Sidebar -->
 <aside class="control-sidebar control-sidebar-dark">
     <!-- Control sidebar content goes here -->
     <div class="p-3">
         <h5>Title</h5>
         <p>Sidebar content</p>
     </div>
 </aside>
 <!-- /.control-sidebar -->

 <!-- Main Footer -->
 <footer  class="main-footer"style="color:#000000; background-color:#e56717; opacity:0.8;">
     <!-- To the right -->
     <div class="float-right d-none d-sm-inline">
         Aplikasi Cek Keaslian Akta Cerai dan/atau Duplikat Akta Cerai
     </div>
     <!-- Default to the left -->
     <strong>Copyright &copy; 2022 Pengadilan Agama Bojonegoro.</strong> Load Time : {elapsed_time}
 </footer>
 </div>
 
 <!-- ./wrapper -->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
 <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js" integrity="sha256-xH4q8N0pEzrZMaRmd7gQVcTZiFei+HfRTBPJ1OGXC0k=" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
 <!-- SweetAlert2 -->
 <script src="<?php echo base_url() ?>assets/plugins/sweetalert2/sweetalert2.all.js"></script>
 <!-- DataTables -->
 <script src="<?php echo base_url() ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
 <script src="<?php echo base_url() ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
 <script src="<?php echo base_url() ?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
 <script src="<?php echo base_url() ?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
 <script>
     $(function() {
         $("#example1").DataTable({
             "responsive": true,
             "autoWidth": false,
         });
         $('#example2').DataTable({
             "paging": true,
             "lengthChange": false,
             "searching": false,
             "ordering": true,
             "info": true,
             "autoWidth": false,
             "responsive": true,
         });
     });
     const flashData = $('.flash-data').data('flashdata');
     //console.log(flashData);
     if (flashData) {
         Swal.fire({
             icon: 'success',
             title: 'Matoh',
             text: 'Data Berhasil ' + flashData,
         });
     }

        function show_data() {
            $.ajax({
                url: "<?php echo base_url('akta/tambahProses'); ?>",
                type: "GET",
                dataType: "JSON",
                data: {
                    no_perkara : $('#no_perkara').val(),
                    tahun : $('#tahun').val(),
                    no_akta : $('#no_akta').val(),
                    tahun_akta : $('#tahun_akta').val()
                },
                success: function(x) {
                    if (x.status == true) {
                        $('.data-perkara').show();
                        $('.tidak-valid').hide();
                        $('#no_seri_akta_cerai').val(x.data.no_seri_akta_cerai);
                        $('#nomor_perkara').val(x.data.nomor_perkara);
                        $('#nomor_akta_cerai').val(x.data.nomor_akta_cerai);
                        $('#pihak1_text').val(x.data.pihak1_text);
                        $('#pihak2_text').val(x.data.pihak2_text);
                    }else if(x.status == false){
                        $('.tidak-valid').show();
                        $('.data-perkara').hide();
                    }
                }
            });
        }
 </script>

</body>

 </html>
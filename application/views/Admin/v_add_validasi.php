<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row-centered">
                <div class="col-centered">
                    <form method="post">
                        <div class="modal-body">
                            <div class="form-group row">
                                <label for="no_perkara" class="col-sm-2 col-2 col-form-label">Nomor Perkara</label>
                                <input type="text" class="form-control col-sm-2 col-2" id="no_perkara" name="no_perkara" placeholder="Nomor" required>
                                <input type="text" class="form-control col-sm-1 col-2" value="Pdt.G" disabled>
                                <select id="tahun" name="tahun" class="form-control col-sm-2 col-3">
                                    <?php $tahun = date('Y');
                                    for ($i = 2015; $i < $tahun + 1; $i++) {
                                    ?>
                                        <option value="<?php echo $i ?>" <?php if ($i == $tahun) {
                                                                                echo "selected";
                                                                            } ?> <?php ?>><?php echo $i ?></option>
                                    <?php } ?>
                                </select>
                                <input type="text" class="form-control col-sm-1 col-2" value="PA.Bjn" disabled>
                            </div>

                            <div class="form-group row">
                                <label for="no_akta" class="col-sm-2 col-2 col-form-label">Nomor Akta Cerai</label>
                                <input type="text" class="form-control col-sm-2 col-2" id="no_akta" name="no_akta" placeholder="Nomor" required>
                                <input type="text" class="form-control col-sm-1 col-2" value="AC" disabled>
                                <select id="tahun_akta" name="tahun_akta" class="form-control col-sm-2 col-3">
                                    <?php $tahun = date('Y');
                                    for ($i = 2015; $i < $tahun + 1; $i++) {
                                    ?>
                                        <option value="<?php echo $i ?>" <?php if ($i == $tahun) {
                                                                                echo "selected";
                                                                            } ?> <?php ?>><?php echo $i ?></option>
                                    <?php } ?>
                                </select>
                                <input type="text" class="form-control col-sm-1 col-2" value="PA.Bjn" disabled>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-success btn-lg" type="button" onclick="return show_data()" title="Validasi!" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-check"></i></button>
                            <a href="<?php echo base_url('akta') ?>" class="btn btn-danger btn-lg"><i class="fas fa-window-close"></i></a>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Hasil Validasi</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row-centered">
                                <div class="col-centered">
                                    <div class="data-perkara">
                                        <span style="color:green">Nomor Perkara & Nomor Akta Cerai Anda Cocok</span>
                                    </div>
                                    <div class="tidak-valid">
                                        <h4 style="color:red">Mohon Maaf Nomor Perkara & Nomor Akta Cerai Anda Tidak Cocok!</h4>
                                        <h6>Untuk Informasi Lebih Lanjut Silahkan Hubungi Kantor Pengadilan Agama Bojonegoro</h6>
                                        <span><strong>Telp:</strong> (0353) 881235</span>
                                        <span><strong>Email:</strong> pabojonegoro@gmail.com</span>
                                        <span><strong>Alamat:</strong> Jl. MH. Thamrin No.88, Kauman, Kec. Bojonegoro, Kabupaten Bojonegoro, Jawa Timur 62113</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Batas Modal -->
            <div class="row-centered">
                <div class="col-centered">
                    <div class="form-row">
                        <div class="form-group col-md-12 data-perkara">
                            <label for="no_seri_akta_cerai">No Seri Akta Cerai</label>
                            <input type="text" id="no_seri_akta_cerai" class="form-control form-control-sm" name="no_seri_akta_cerai" readonly>
                        </div>
                        <div class="form-group col-md-12 data-perkara">
                            <label for="nomor_perkara">Nomor Perkara</label>
                            <input type="text" id="nomor_perkara" class="form-control form-control-sm" name="nomor_perkara" readonly>
                        </div>
                        <div class="form-group col-md-12 data-perkara">
                            <label for="nomor_akta_cerai">Nomor Akta Cerai</label>
                            <input type="text" id="nomor_akta_cerai" class="form-control form-control-sm" name="nomor_akta_cerai" readonly>
                        </div>
                        <div class="form-group col-md-12 data-perkara">
                            <label for="pihak1_text">Penggugat/Pemohon</label>
                            <input type="text" id="pihak1_text" class="form-control form-control-sm" name="pihak1_text" readonly>
                        </div>
                        <div class="form-group col-md-12 data-perkara">
                            <label for="pihak2_text">Tergugat/Termohon</label>
                            <input type="text" id="pihak2_text" class="form-control form-control-sm" name="pihak2_text" readonly>
                        </div>
                        <div class="form-group col-md-12 data-perkara">
                            <label for="nomor_lc">Nomor Langit Cerah</label>
                            <input type="text" id="nomor_lc" class="form-control form-control-sm" name="nomor_lc" readonly>
                        </div>
                        <div class="form-group col-md-12 data-perkara">
                            <label for="file_upload">Bukti Penerimaan</label>
                            <input type="text" id="file_upload" class="form-control form-control-sm" name="file_upload" readonly>
                            <p id="file_upload"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
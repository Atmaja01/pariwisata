        <form id="quickForm" class="form-horizontal" action="<?= site_url('Admin/save_register_wisata'); ?>" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Wisata</label>
                    <input type="text" class="form-control" name="nama_wisata" placeholder="Masukan Nama wisata" value="<?= (isset($id_wisata['nama_wisata'])) ? ($id_wisata['nama_wisata']) : ''; ?>" />
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Harga Tiket</label>
                    <input type="number" class="form-control" name="harga_tiket" placeholder="Masukan Harga Tiket" value="<?= (isset($id_wisata['harga_tiket'])) ? ($id_wisata['harga_tiket']) : ''; ?>" />
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Jam Buka</label>
                    <input type="time" class="form-control" name="jam_buka" placeholder="Masukan Jam Buka" value="<?= (isset($id_wisata['jam_buka'])) ? ($id_wisata['jam_buka']) : ''; ?>" />
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Jam Tutup</label>
                    <input type="time" class="form-control" name="jam_tutup" placeholder="Masukan Jam Tutup" value="<?= (isset($id_wisata['jam_tutup'])) ? ($id_wisata['jam_tutup']) : ''; ?>" />
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Keterangan</label>
                    <input type="text" class="form-control" name="keterangan" placeholder="Masukan Keterangan" value="<?= (isset($id_wisata['keterangan'])) ? ($id_wisata['keterangan']) : ''; ?>" />
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Masukan Gambar</label>
                    <input type="file" class="file-styled" name="gambar">
                    <span class="help-block">Accepted formats: pdf, doc. Max file size 2Mb</span>
                  </div>
                  <div class="form-group mb-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                      <label class="custom-control-label" for="exampleCheck1">I agree to the <a href="#">terms of service</a>.</label>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
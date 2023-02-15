<section id="create">
  <div class="container p-2">
    <div class="header">
      <h2 class="tambah">EDIT DATA SET PRODUK</h2>
      <hr class="hrtitle">
    </div>
    <div class="content ">
      <div class="card-body">
        <form action="" method="">
          <div class="row">
            <div class="table-responsive">
              <div class="form border">
                <div class="form-header">
                  <h2 class="input">INPUT DATA SET</h2>
                </div>
                <div class="form-content">
                  <form>
                    <div class="form-group row p-4">
                      <label for="NamaSet" class="col-sm-2 col-form-label">Nama Set *</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="NamaSet" value="Produk Satu" placeholder="Masukkan Nama Set">
                      </div>
                    </div>
                    <hr class="hrdot">
                    <div class="form-group row p-4">
                      <label for="NamaSet" class="col-sm-2 col-form-label">Bahan Baku *</label>
                      <div class="col-sm-4">
                        <div class="p-1">
                          <select class="form-select mb-2" aria-label="Default select example">
                            <option selected hidden>Pilih Produk</option>
                            <option value="1">SPIRASAN PLUS 100A GR</option>
                            <option value="2">EGGBRO FORMULA 100 GR</option>
                            <option selected value="2">COLAMOX 100 GR</option>
                          </select>
                          <select class="form-select mb-2" aria-label="Default select example">
                            <option selected hidden>Pilih Produk</option>
                            <option selected value="1">SPIRASAN PLUS 100A GR</option>
                            <option value="2">EGGBRO FORMULA 100 GR</option>
                            <option value="2">COLAMOX 100 GR</option>
                          </select>
                          <select class="form-select" aria-label="Default select example">
                            <option selected hidden>Pilih Produk</option>
                            <option value="1">SPIRASAN PLUS 100A GR</option>
                            <option selected value="2">DOXERYN PLUS 250 GR</option>
                            <option value="2">EGGBRO FORMULA 100 GR</option>
                            <option value="2">COLAMOX 100 GR</option>
                          </select>
                        </div>
                      </div>
                      <label for="NamaSet" class="col-sm-2 col-form-label labeljumlah">Jumlah Digunakan*</label>
                      <div class="col-sm-2">
                        <input type="text" class="form-control dropdown-toggle" id="digunakan" placeholder="0" value="2">
                      </div>
                      <div class="col-sm-1">
                        <a href="#" id="plus" class="add" data-target="digunakan"><i class="fas fa-plus p-2"></i></a> 
                        <a href="#" id="min-digunakan" class="min" style="display: none;" data-target="digunakan"><i class="fas fa-minus p-2"></i></a> 
                      </div>
                    </div>
                    <hr class="hrdot">
                    <div class="form-group row p-4">
                      <label for="NamaSet" class="col-sm-2 col-form-label">Produk Jadi *</label>
                      <div class="col-sm-4">
                        <select class="form-select" aria-label="Default select example">
                          <option selected hidden>Pilih Produk</option>
                          <option value="1">OVL-005 | MEDIVAK ND AI EMULSION 500 DS</option>
                          <option selected value="1">OBT -123 | CAPRIMOX 100GR</option>
                        </select>
                      </div>
                      <label for="NamaSet" class="col-sm-2 col-form-label labeljumlah">Jumlah Dihasilkan*</label>
                      <div class="col-sm-2">
                        <input type="text" class="form-control dropdown-toggle" id="dihasilkan" placeholder="0" value="2">
                      </div>
                      <div class="col-sm-1">
                        <a href="#" id="plus" class="add" data-target="dihasilkan"><i class="fas fa-plus p-2"></i></a> 
                        <a href="#" id="min-dihasilkan" class="min" style="display: none;" data-target="dihasilkan"><i class="fas fa-minus p-2"></i></a> 
                      </div>
                    </div>
                    <br>
                  </form>
                </div>
              </div>
              <div class="actio mt-4">
                <div class="float-start">
                    <a href="<?= base_url('/'); ?>" class="btn" >Kembali</a>
                </div>
                <div class="float-end">
                    <button href="#" class="btn" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" >Simpan</button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title judulmodal" id="staticBackdropLabel">Set Baru Berhasil Ditambahkan</h5>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary btnok" data-bs-dismiss="modal">Ok</button>
        </div>
      </div>
    </div>
  </div>

</section>
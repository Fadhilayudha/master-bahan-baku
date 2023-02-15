<section id="create">
  <div class="container p-2">
    <div class="header">
      <h2 class="tambah">TAMBAH DATA SET PRODUK</h2>
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
                  <div class="form-group row p-3">
                    <label for="NamaSet" class="col-sm-2 col-form-label">Nama Set *</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="NamaSet" placeholder="Masukkan Nama Set">
                    </div>
                  </div>

                  <hr class="hrdot">

                  <div class="bahanbaku">
                    <div class="form-group row p-3">
                      <label for="NamaSet" class="col-sm-2 col-form-label">Bahan Baku*</label>
                        <div class="col-sm-4">
                            <select class="form-select" aria-label="Default select example">
                                <option selected hidden>Pilih Produk</option>
                                <option value="1">SPIRASAN PLUS 100A GR</option>
                                <option value="2">EGGBRO FORMULA 100 GR</option>
                            </select>
                        </div>
                        <label for="NamaSet" class="col-sm-2 col-form-label labeljumlah">Jumlah bahanbaku*</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control dropdown-toggle" id="bahanbaku" placeholder="0">
                        </div>
                        <div class="col-sm-1">
                          <a href="#" id="min-bahanbaku" class="min" style="display: none;" data-target="bahanbaku"><i class="fas fa-minus p-2"></i></a> 
                          <a href="#" id="add-bahanbaku" class="add" data-target="bahanbaku"><i class="fas fa-plus p-2"></i></a> 
                        </div>
                    </div>   
                  </div>

                  <hr class="hrdot">

                  <div class="produkjadi">
                    <div class="form-group row p-3">
                    <label for="NamaSet" class="col-sm-2 col-form-label">Produk Jadi *</label>
                        <div class="col-sm-4">
                        <select class="form-select" aria-label="Default select example">
                            <option selected hidden>Pilih Produk</option>
                            <option value="1">OVL-005 | MEDIVAK ND AI EMULSION 500 DS</option>
                        </select>
                        </div>
                        <label for="NamaSet" class="col-sm-2 col-form-label labeljumlah">Jumlah produkjadi*</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control dropdown-toggle" id="produkjadi" placeholder="0">
                        </div>
                        <div class="col-sm-1">
                          <a href="#" id="min-produkjadi" class="min" style="display: none;" data-target="produkjadi"><i class="fas fa-minus p-2"></i></a> 
                          <a href="#" id="add-produkjadi" class="add" data-target="produkjadi"><i class="fas fa-plus p-2"></i></a> 
                        </div>
                    </div>
                  </div>

                  <br>

                </div>
              </div>

              <div class="action mt-4">
                <div class="float-start">
                    <a href="<?= base_url('/'); ?>" class="btn" >Kembali</a>
                </div>
                <div class="float-end">
                    <button class="btn" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" >Simpan</button>
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
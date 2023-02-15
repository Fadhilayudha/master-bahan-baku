<section id="create">
  <div class="container p-2">
    <div class="header">
      <h2 class="tambah">Detail Master Bahan Baku</h2>
      <hr class="hrtitle">
    </div>
    <div class="content ">
      <div class="card-body">
        <div class="row">
          <div class="table-responsive">
            <div class="form border col-sm-7">
              <div class="form-header ">
                  <h2 class="input ">DETAIL MASTER BAHAN BAKU</h2>
              </div>
              <div class="form-content">
                <div class="form-group row p-4">
                  <div class="detail">
                    <b>Nama Set :</b>
                    <p>Produk Satu</p>
                  </div>
                  <div class="detail mb-3">
                    <b>Bahan Baku :</b> 
                      <li>COLAMOX 100 GR</li>
                      <li>SPIRASAN PLUS 100 GR</li>
                      <li>DOXERYN PLUS 250 GR</li> 
                  </div>
                  <div class="detail mb-3">
                    <b>Jumlah Unit Digunakan :</b> 
                      <li>1</li>
                      <li>2</li>
                      <li>3</li>
                  </div>
                  <div class="detail mb-3">
                    <b>Produk Jadi :</b> 
                      <li>OBT -123 | CAPRIMOX 100GR</li>
                      <li>OBT -123 | CAPRIMOX 100GR</li>
                  </div>
                  <div class="detail mb-3">
                    <b>Jumlah Unit Dihasilkan :</b> 
                      <li>1</li>
                      <li>2</li>
                  </div>
                </div>
              </div>
            </div>
            <div class="actio mt-4">
              <div class="float-start">
                  <a href="<?= base_url('/'); ?>" class="btn" >Kembali</a>
              </div>
            </div>
          </div>
        </div>
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
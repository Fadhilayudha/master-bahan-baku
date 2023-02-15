<section id="create">
  <div class="container p-2">
    <div class="header">
      <h2 class="tambah">Detail Konversi</h2>
      <hr class="hrtitle">
    </div>
    <div class="content">
      <div class="card-body">
        <div class="row">
          <div class="table-responsive">
            <div class="form border col-sm-7">
                <div class="form-header ">
                  <h2 class="input ">DETAIL CONVERSI</h2>
                </div>
                <div class="form-content ">
                    <div class="form-group row p-4">
                        <div class="detail">
                            <b>Nomor Referensi : </b>
                                <p>KNV.BGR.000004</p>
                        </div>
                        <div class="detail">
                            <b>Area :</b>
                                <p>Bandung</p>
                        </div>
                        <div class="detail">
                            <b>Gudang Area :</b> 
                                <p>GD - Bandung</p>
                        </div>
                        <div class="detail">
                            <b>Tanggal Konversi :</b> 
                                <p>12 / 01 / 2023</p>
                        </div>
                        <div class="detail">
                            <b>Nama Produk Set :</b> 
                                <p>Produk 1</p>
                        </div>
                        <div class="detail">
                            <b>Bahan Baku :</b> 
                                <p>EGGBRO FORMULA 100 GR</p>
                        </div>
                        <div class="detail">
                            <b>Produk Jadi :</b> 
                                <p>OVL-005 | MEDIVAK ND AI EMULSION 500 DS (250ML)</p>
                        </div>
                        <div class="detail">
                            <b>Harga Per Unit :</b> 
                                <p>Rp 200,000</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="actio mt-4">
              <div class="float-start">
                  <a href="<?= base_url('/conversi'); ?>" class="btn" >Kembali</a>
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
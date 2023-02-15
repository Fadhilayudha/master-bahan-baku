<section id="create">
    <div class="col-md-8 offset-2">
        <div class="container p-2 ">
            <div class="header">
                <h2 class="tambah">KONVERSI</h2>
                <hr class="hrtitle">
            </div>

            <div class="content">
                <div class="card-body">
                    <form action="" method="">
                        <div class="row mb-3">
                            <div class="table-responsive  mb-4">
                                <div class="form border">
                                    <div class="form-header">
                                        <h2 class="input">DATA KONVERSI</h2>
                                    </div>
                                    <div class="form-content">
                                        <div class="form-group row p-2">
                                        <label for="NamaSet" class="col-sm-2 col-form-label">Area*</label>
                                            <div class="col-sm-4">
                                                <select class="form-select mb-2" aria-label="Default select example">
                                                    <option selected hidden>Masukkan Area</option>
                                                    <option value="1">Bogor</option>
                                                    <option value="2">Jakarta</option>
                                                    <option value="3">Bandung</option>
                                                </select>
                                            </div>
                                            <label for="NamaSet" class="col-sm-3 col-form-label labeljumlah">Tanggal Konversi*</label>
                                            <div class="col-sm-2">
                                                <input type="date" class="form-control">
                                            </div>
                                        </div>
                                        <hr class="hrdot">
                                        <div class="form-group row p-2">
                                        <label for="NamaSet" class="col-sm-2 col-form-label">Gudang Area*</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="NamaSet" placeholder="Masukkan Gudang Area">
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input preset" id="preset">
                            <label class="form-check-label" for="exampleCheck1">Gunakan Preset</label>
                        </div>

                        <div class="hideset" style="display: none;">
                            <div class="table-responsive ">
                                <div class="form border col-sm-5">
                                    <div class="form-header">
                                        <h2 class="input">SET PRODUK</h2>
                                    </div>
                                    <div class="form-conten titlebahanbaku">
                                        <div class="p-2">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected hidden>Pilih Set Produk</option>
                                                <option value="1">Set Tupperware</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="d-flex">
                                <div class="col-sm-5 mb-4">
                                    <div class="form border ">
                                        <div class="form-header ">
                                            <h2 class="input ">BAHAN BAKU</h2>
                                        </div>
                                        <div class="form-content ">
                                            <div class="form-content p-2 titlebahanbaku">
                                                <div class="row ">
                                                    <label for="NamaSet" class="col-sm-6 col-form-label labelconversi">Bahan Baku</label>
                                                    <label for="NamaSet" class="col-sm-2 col-form-label labelconversi">Stok Tersedia</label>
                                                    <label for="NamaSet" class="col-sm-4 col-form-label labelconversi">Kuantitas Digunakan</label>
                                                </div>
                                            </div>

                                            <hr class="hrdot">

                                            <div class="exp" id="form-${a}}">
                                                <div class="form-group px-2 p-2" id="yuhu">
                                                    <div class="row">
                                                        <div class="col-sm-6 bahanbaku">
                                                            <select class="form-select  " aria-label="Default select example">
                                                                <option hidden>Pilih Produk Jadi</option>
                                                                <option value="1">EGGBRO FORMULA 100 GR</option>
                                                                <option value="2">SPIRASAN PLUS 100 GR</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <p class="stok-tersedia" >00</p>
                                                        </div>
                                                        <div class="col-sm-4 d-flex">
                                                            <div class="col-sm-5">
                                                                <input type="text" class="form-control dropdown-toggle" id="conversi" placeholder="0" value="">
                                                            </div>
                                                            <div class="col-sm-7">
                                                                <a href="#" id="add-conversi" class="add" data-target="conversi"><i class="fas fa-plus p-2"></i></a> 
                                                                <a href="#" id="min-conversi" class="min"  data-id='${a}'  data-target="conversi"><i class="fas fa-minus p-2"></i></a> 
                                                            </div> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <center>
                                        <i class="fas fa-arrow-right  arrow-right mt-3"></i>
                                    </center>
                                </div>
                                <div class=" mb-4 col-sm-5">
                                    <div class="form border ">
                                        <div class="form-header ">
                                            <h2 class="input">HASIL PRODUK</h2>
                                        </div>
                                        <div class="form-content titlebahanbaku">
                                            <div class="form-group row px-2  p-2">
                                                <label for="NamaSet" class="col-sm-6 col-form-label labelconversi">Produk Jadi</label>
                                                <label for="NamaSet" class="col-sm-3 col-form-label labelconversi">Kuantitas Dihasilkan</label>
                                                <label for="NamaSet" class="col-sm-3 col-form-label labelconversi">Harga <br> Per Unit</label>
                                            </div>
                                            <hr class="hrdot">
                                            <div class="form-group px-2  p-2">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <select class="form-select mb-2" aria-label="Default select example">
                                                            <option selected hidden>Pilih Produk Jadi</option>
                                                            <option value="1">OVL-005 | MEDIVAK ND AI EMULSION</option>
                                                            <option value="1">OBT -123 | CAPRIMOX 100GR</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <input type="text" value="00" class="form-control stok-tersedia"></input>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control dropdown-toggle" id="nominal" placeholder="Rp 00,000">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="hrdot">
                        <div class="action ">
                            <div class="float-start mb-4 mt-3">
                                <a href="<?= base_url('/conversi'); ?>" class="btn" >Kembali</a>
                            </div>
                            <div class="float-end mt-3">
                                <button href="#" class="btn" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" >Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title judulmodal" id="staticBackdropLabel">Data Konversi Berhasil Disimpan</h5>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary btnok" data-bs-dismiss="modal">Ok</button>
                </div>
            </div>
        </div>
    </div>
</section>
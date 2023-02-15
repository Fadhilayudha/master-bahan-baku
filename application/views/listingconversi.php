<section id="create">
  <div class="col-md-8 offset-2">
    <div class="container p-2 ">
      <div class="header">
          <h2 class="tambah">KONVERSI</h2>
          <hr class="hrtitle">
      </div>

      <div class="fitur">
        <div class="row">
          <div class="col-6">
            <a href="<?= base_url('/createconversi'); ?>" class=" btnconversi btn btn-primary "> <i class="fas fa-plus-square iconplus"></i> Tambah Data Konversi</a>
          </div>
        </div>            
      </div>

      <div class="content">
        <div class="card-body">
          <div class="row">
              <div class="table-responsive  mb-4">
                  <div class="form border">
                      <div class="form-header">
                          <h2 class="input">PENCARIAN DATA KONVERSI</h2>
                      </div>
                      <div class="form-content">
                          <div class="form-group row p-3">
                          <label for="NamaSet" class="col-sm-2 col-form-label">Pencarian</label>
                              <div class="col-sm-9">
                                  <input type="text" class="form-control" id="NamaSet" placeholder="Masukkan Nama Set atau produk jadi">
                              </div>
                          </div>
                      </div>
                      <hr class="hrdot">
                      <div class="form-group row p-3">
                        <label for="NamaSet" class="col-sm-2 col-form-label">Area</label>
                        <div class="col-sm-5">
                            <select class="form-select" aria-label="Default select example">
                                <option selected hidden>Pilih Area</option>
                                <option value="1">Bogor</option>
                                <option value="2">Jakarta</option>
                                <option value="3">Bandung</option>
                                <option value="4">Bekasi</option>
                                <option value="5">Malang </option>
                            </select>
                        </div>
                        <div class="mt-1 form-check col-sm-3 seluruharea">
                            <input type="checkbox" class="form-check-input " id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Seluruh Area</label>
                        </div>
                        <br>
                      </div>
                      <hr class="hrdot">
                      <div class="form-group row p-3">
                          <label for="NamaSet" class="col-sm-2 col-form-label">Tanggal Konversi*</label>
                          <div class="col-sm-2">
                              <input type="date" class="form-control">
                          </div>
                          <div class="sd col-sm-1">
                              <h6>s/d</h6>
                          </div>
                          <div class="col-sm-2">
                              <input type="date" class="form-control">
                          </div>
                          <div class="mt-1 form-check col-sm-3 seluruharea">
                              <input type="checkbox" class="form-check-input " id="exampleCheck1">
                              <label class="form-check-label" for="exampleCheck1">Seluruh Periode</label>
                          </div>
                          <br>
                      </div>
                  </div>
              </div>
          </div>

          <div class="action ">
              <div class="proses">
                  <button href="#" class="proses" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" >Proses</button>
              </div>
          </div>

          <br>

          <table class="table table-md mt-3">
            <thead class="thead text-center">
              <tr>
                <th>No</th>
                <th>Nomor Referensi</th>
                <th>Tanggal Konversi</th>
                <th>Area</th>
                <th>Nama Produk Set</th>
                <th>Produk Jadi</th>
                <th>Control</th>
              </tr>  
            </thead>
            <tbody class="text-center ">
              <!-- <tr>
                <td class="p-3" colspan="7"> Data Konversi Tidak Tersedia</td>
              </tr> -->
              <tr>
                <td class="p-3">1.</td>
                <td class="p-3">KNV.BGR.000004</td>
                <td class="p-3">12 / 01 / 2023</td>
                <td class="p-3">Bandung</td>
                <td class="p-3">Produk Satu</td>
                <td class="p-3">
                  <li class="mb-3">OBT -123 | CAPRIMOX 100GR</li>
                  <li>OBT -123 | CAPRIMOX 100GR</li>
                </td>
                <td>
                  <a class="btn btn-secondary  btnrespon" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-list"></i> Respon
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="<?= base_url('conversi/detail'); ?>">Lihat Detail</a></li>
                    <li><a class="dropdown-item" href="<?= base_url('conversi/edit'); ?>">Edit</a></li>
                    <li><a class="dropdown-item" href="#">Hapus</a></li>
                  </ul>
                </td>
              </tr>
              <tr>
                <td class="p-3">2.</td>
                <td class="p-3">KNV.BGR.000004</td>
                <td class="p-3">2 / 01 / 2023</td>
                <td class="p-3">Bandung</td>
                <td class="p-3">Produk Dua</td>
                <td class="p-3">
                  <li class="mb-3">OBT -123 | CAPRIMOX 100GR</li>
                  <li>OBT -123 | CAPRIMOX 100GR</li>
                </td>
                <td>
                  <a class="btn btn-secondary  btnrespon" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-list"></i> Respon
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="<?= base_url('conversi/detail'); ?>">Lihat Detail</a></li>
                    <li><a class="dropdown-item" href="<?= base_url('conversi/edit'); ?>">Edit</a></li>
                    <li><a class="dropdown-item" href="#">Hapus</a></li>
                  </ul>
                </td>
              </tr>
              <tr>
                <td class="p-3">3.</td>
                <td class="p-3">KNV.BGR.000004</td>
                <td class="p-3">6 / 01 / 2023</td>
                <td class="p-3">Bandung</td>
                <td class="p-3">Produk Tiga</td>
                <td class="p-3">
                  <li class="mb-3">OBT -123 | CAPRIMOX 100GR</li>
                  <li>OBT -123 | CAPRIMOX 100GR</li>
                </td>
                <td>
                  <a class="btn btn-secondary  btnrespon" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-list"></i> Respon
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="<?= base_url('conversi/detail'); ?>">Lihat Detail</a></li>
                    <li><a class="dropdown-item" href="<?= base_url('conversi/edit'); ?>">Edit</a></li>
                    <li><a class="dropdown-item" href="#">Hapus</a></li>
                  </ul>
                </td>
              </tr>
              <tr>
                <td class="p-3">4.</td>
                <td class="p-3">KNV.BGR.000004</td>
                <td class="p-3">8 / 01 / 2023</td>
                <td class="p-3">Bandung</td>
                <td class="p-3">Produk Satu</td>
                <td class="p-3">
                  <li class="mb-3">OBT -123 | CAPRIMOX 100GR</li>
                  <li>OBT -123 | CAPRIMOX 100GR</li>
                </td>
                <td>
                  <a class="btn btn-secondary  btnrespon" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-list"></i> Respon
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="<?= base_url('conversi/detail'); ?>">Lihat Detail</a></li>
                    <li><a class="dropdown-item" href="<?= base_url('conversi/edit'); ?>">Edit</a></li>
                    <li><a class="dropdown-item" href="#">Hapus</a></li>
                  </ul>
                </td>
              </tr>
              <tr>
                <td class="p-3">5.</td>
                <td class="p-3">KNV.BGR.000004</td>
                <td class="p-3">10 / 01 / 2023</td>
                <td class="p-3">Bandung</td>
                <td class="p-3">Produk Satu</td>
                <td class="p-3">
                  <li class="mb-3">OBT -123 | CAPRIMOX 100GR</li>
                  <li>OBT -123 | CAPRIMOX 100GR</li>
                </td>
                <td>
                  <a class="btn btn-secondary  btnrespon" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-list"></i> Respon
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="<?= base_url('conversi/detail'); ?>">Lihat Detail</a></li>
                    <li><a class="dropdown-item" href="<?= base_url('conversi/edit'); ?>">Edit</a></li>
                    <li><a class="dropdown-item" href="#">Hapus</a></li>
                  </ul>
                </td>
              </tr>
              <tr>
                <td class="p-3">6.</td>
                <td class="p-3">KNV.BGR.000004</td>
                <td class="p-3">12 / 01 / 2023</td>
                <td class="p-3">Bandung</td>
                <td class="p-3">Produk Satu</td>
                <td class="p-3">
                  <li class="mb-3">ROBT -123 | VOLVAC ND +1B <br> MASS MLV 1000DS</li>
                  <li>OBT -123 | CAPRIMOX 100GR</li>
                </td>
                <td>
                  <a class="btn btn-secondary  btnrespon" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-list"></i> Respon
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="<?= base_url('conversi/detail'); ?>">Lihat Detail</a></li>
                    <li><a class="dropdown-item" href="<?= base_url('conversi/edit'); ?>">Edit</a></li>
                    <li><a class="dropdown-item" href="#">Hapus</a></li>
                  </ul>
                </td>
              </tr>
              <tr>
                <td class="p-3">7.</td>
                <td class="p-3">KNV.BGR.000004</td>
                <td class="p-3">12 / 01 / 2023</td>
                <td class="p-3">Bandung</td>
                <td class="p-3">Produk Satu</td>
                <td class="p-3">
                  <li class="mb-3">OBT -123 | CAPRIMOX 100GR</li>
                  <li>OBT -123 | CAPRIMOX 100GR</li>
                </td>
                <td>
                  <a class="btn btn-secondary  btnrespon" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-list"></i> Respon
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="<?= base_url('conversi/detail'); ?>">Lihat Detail</a></li>
                    <li><a class="dropdown-item" href="<?= base_url('conversi/edit'); ?>">Edit</a></li>
                    <li><a class="dropdown-item" href="#">Hapus</a></li>
                  </ul>
                </td>
              </tr>
              <tr>
                <td class="p-3">8.</td>
                <td class="p-3">KNV.BGR.000004</td>
                <td class="p-3">12 / 01 / 2023</td>
                <td class="p-3">Bandung</td>
                <td class="p-3">Produk Satu</td>
                <td class="p-3">
                  <li class="mb-3">OBT -123 | CAPRIMOX 100GR</li>
                  <li>OBT -123 | CAPRIMOX 100GR</li>
                </td>
                <td>
                  <a class="btn btn-secondary  btnrespon" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-list"></i> Respon
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="<?= base_url('conversi/detail'); ?>">Lihat Detail</a></li>
                    <li><a class="dropdown-item" href="<?= base_url('conversi/edit'); ?>">Edit</a></li>
                    <li><a class="dropdown-item" href="#">Hapus</a></li>
                  </ul>
                </td>
              </tr>
              <tr>
                <td class="p-3">9.</td>
                <td class="p-3">KNV.BGR.000004</td>
                <td class="p-3">12 / 01 / 2023</td>
                <td class="p-3">Bandung</td>
                <td class="p-3">Produk Satu</td>
                <td class="p-3">
                  <li class="mb-3">OBT -123 | CAPRIMOX 100GR</li>
                  <li>OBT -123 | CAPRIMOX 100GR</li>
                </td>
                <td>
                  <a class="btn btn-secondary  btnrespon" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-list"></i> Respon
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="<?= base_url('conversi/detail'); ?>">Lihat Detail</a></li>
                    <li><a class="dropdown-item" href="<?= base_url('conversi/edit'); ?>">Edit</a></li>
                    <li><a class="dropdown-item" href="#">Hapus</a></li>
                  </ul>
                </td>
              </tr>
              <tr>
                <td class="p-3">10.</td>
                <td class="p-3">KNV.BGR.000004</td>
                <td class="p-3">12 / 01 / 2023</td>
                <td class="p-3">Bandung</td>
                <td class="p-3">Produk Satu</td>
                <td class="p-3">
                  <li class="mb-3">OBT -123 | CAPRIMOX 100GR</li>
                  <li>OBT -123 | CAPRIMOX 100GR</li>
                </td>
                <td>
                  <a class="btn btn-secondary  btnrespon" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-list"></i> Respon
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="<?= base_url('conversi/detail'); ?>">Lihat Detail</a></li>
                    <li><a class="dropdown-item" href="<?= base_url('conversi/edit'); ?>">Edit</a></li>
                    <li><a class="dropdown-item" href="#">Hapus</a></li>
                  </ul>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div aria-label="Page navigation pagination">
            <ul class="pagination float-end">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </div>
      </div>
    </div>
  </div>

    <!-- <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
    </div> -->
</section>
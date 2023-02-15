

    <section id="dashboard">
      <div class="container p-2">
        <div class="header">
          <h2>MASTER SET PRODUK</h2>
          <hr class="hrtitle">
        </div>
        <div class="fitur">
          <div class="row">
            <div class="col-3">
              <a href="<?= base_url('/createbahanbaku'); ?>" class="btn btn-primary btnplus"> <i class="fas fa-plus-square iconplus"></i> Tambah Data</a>
            </div>
            <div class="col-5">
              <a href="<?= base_url('/conversi'); ?>" class="btn btn-primary btnconversi">Konversi</a>
            </div>
            <form class="col-4">
              <input class="form-control text-align-center search" type="search" placeholder="Cari Produk Atau Bahan Baku" aria-label="Search">
              <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
            </form>
          </div>            
        </div>
        <div class="content">
          <div class="card-body">
            <div class="row">
              <div class="table-responsive">
                <table class="table table-md mt-3 ">
                  <thead class="thead">
                    <tr>
                      <th>No</th>
                      <th>Nama Set</th>
                      <th>Bahan Baku</th>
                      <th class="text-center">Jumlah Unit Digunakan</th>
                      <th class="text-center">Produk Jadi</th>
                      <th class="text-center">Jumlah Unit Dihasilkan</th>
                      <th class="text-center">Control</th>
                    </tr>  
                  </thead>
                  <tbody>
                    <tr>
                      <td class="p-3">1.</td>
                      <td class="p-3">Produk Satu</td>
                      <td class="p-3">
                        <li class="mb-3">COLAMOX 100 GR</li>
                        <li class="mb-3"  >SPIRASAN PLUS 100 GR</li>
                        <li>DOXERYN PLUS 250 GR</li>
                      </td>
                      <td class="text-center p-3">
                        <li class="mb-3">1</li>
                        <li class="mb-3">2</li>
                        <li>3</li>
                      </td>
                      <td class="p-3 text-center">
                        <li class="mb-3">OBT -123 | CAPRIMOX 100GR</li>
                        <li>OBT -123 | CAPRIMOX 100GR</li>
                      </td>
                      <td class="text-center p-3">
                        <li class="mb-3">1</li>
                        <li>2</li>
                      </td>
                      <td class="p-3">
                        <a class="btn btn-secondary  btnrespon" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fa fa-list"></i> Respon
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="<?= base_url('bahanbaku/detail'); ?>">Lihat Detail</a></li>
                          <li><a class="dropdown-item" href="<?= base_url('bahanbaku/edit'); ?>">Edit</a></li>
                          <li><a class="dropdown-item" href="#">Hapus</a></li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td class="p-3">2.</td>
                      <td class="p-3">Produk Dua</td>
                      <td class="p-3">
                        <li class="mb-3">EGGBRO FORMULA 100 GR</li>
                        <li>SPIRASAN PLUS 100 GR</li>
                      </td>
                      <td class="text-center p-3">
                        <li class="mb-3">1</li>
                        <li>2</li>
                      </td>
                      <td class="p-3 text-center">
                        <li>OBT -123 | CAPRIMOX 100GR</li>
                      </td>
                      <td class="text-center p-3">
                        <li>1</li>
                      </td>
                      <td class="p-3">
                        <a class="btn btn-secondary  btnrespon" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fa fa-list"></i> Respon
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="<?= base_url('bahanbaku/detail'); ?>">Lihat Detail</a></li>
                          <li><a class="dropdown-item" href="<?= base_url('bahanbaku/edit'); ?>">Edit</a></li>
                          <li><a class="dropdown-item" href="#">Hapus</a></li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td class="p-3">3.</td>
                      <td class="p-3">Kandang Ayam</td>
                      <td class="p-3">
                        <li class="mb-3">COLAMOX 100 GR</li>
                        <li>SPIRASAN PLUS 100 GR</li>
                      </td>
                      <td class="text-center p-3">
                        <li class="mb-3">2</li>
                        <li>2</li>
                      </td>
                      <td class="p-3 text-center">
                        <li>OBT -123 | CAPRIMOX 100GR</li>
                      </td>
                      <td class="text-center p-3">
                        <li>2</li>
                      </td>
                      <td class="p-3">
                        <a class="btn btn-secondary  btnrespon" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fa fa-list"></i> Respon
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="<?= base_url('bahanbaku/detail'); ?>">Lihat Detail</a></li>
                          <li><a class="dropdown-item" href="<?= base_url('bahanbaku/edit'); ?>">Edit</a></li>
                          <li><a class="dropdown-item" href="#">Hapus</a></li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td class="p-3">4.</td>
                      <td class="p-3">Vitamin Ayam</td>
                      <td class="p-3">
                        <li class="mb-3">COLAMOX 100 GR</li>
                        <li class="mb-3">SPIRASAN PLUS 100 GR</li>
                        <li>DOXERYN PLUS 250 GR</li>
                      </td>
                      <td class="text-center p-3">
                        <li class="mb-3">3</li>
                        <li class="mb-3">1</li>
                        <li>1</li>
                      </td>
                      <td class="p-3 text-center">
                        <li class="mb-3">OBT -123 | CAPRIMOX 100GR</li>
                        <li>OBT -123 | CAPRIMOX 100GR</li>
                      </td>
                      <td class="text-center p-3">
                        <li class="mb-3">3</li>
                        <li>1</li>
                      </td>
                      <td class="p-3">
                        <a class="btn btn-secondary  btnrespon" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fa fa-list"></i> Respon
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="<?= base_url('bahanbaku/detail'); ?>">Lihat Detail</a></li>
                          <li><a class="dropdown-item" href="<?= base_url('bahanbaku/edit'); ?>">Edit</a></li>
                          <li><a class="dropdown-item" href="#">Hapus</a></li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td class="p-3">5.</td>
                      <td class="p-3">Pakan Ayam</td>
                      <td class="p-3">
                        <li class="mb-3">EGGBRO FORMULA 100 GR</li>
                        <li>SPIRASAN PLUS 100 GR</li>
                      </td>
                      <td class="text-center p-3">
                        <li class="mb-3">2</li>
                        <li>2</li>
                      </td>
                      <td class="p-3 text-center">
                        <li>OBT -123 | CAPRIMOX 100GR</li>
                      </td>
                      <td class="text-center p-3">
                        <li>2</li>
                      </td>
                      <td class="p-3">
                        <a class="btn btn-secondary  btnrespon" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fa fa-list"></i> Respon
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="<?= base_url('bahanbaku/detail'); ?>">Lihat Detail</a></li>
                          <li><a class="dropdown-item" href="<?= base_url('bahanbaku/edit'); ?>">Edit</a></li>  
                          <li><a class="dropdown-item" href="#">Hapus</a></li>
                        </ul>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div aria-label="Page navigation ">
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
    </section>


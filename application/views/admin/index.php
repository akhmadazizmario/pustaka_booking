<div class="pagetitle">
  <h1><?= $judul; ?></h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item active"><?= $judul; ?></li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
  <div class="row">
    <!-- Left side columns -->
    <div class="col-lg-8">
      <div class="row">

        <!-- Sales Card -->
        <div class="col-xxl-4 col-md-6">
          <div class="card info-card sales-card">
            <div class="filter">
              <a class="icon" href="http://localhost/pustaka-booking/buku"><i class="bi bi-arrow-right-square-fill"></i></a>
            </div>
            <div class="card-body">
              <h5 class="card-title">Daftar Stok buku <span>|</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-book-half"></i>
                </div>
                <div class="ps-3">
                  <h6><?php
                      $where = ['stok != 0'];
                      $totalstok = $this->ModelBuku->total('stok', $where);
                      echo $totalstok;
                      ?></h6>
                  <span class="text-danger small pt-1 fw-bold">buku</span> <span class="text-muted small pt-2 ps-1">terdaftar</span>
                </div>
              </div>
            </div>

          </div>
        </div><!-- End Sales Card -->
        <div class="col-xxl-4 col-md-6">
          <div class="card info-card sales-card">
            <div class="filter">
              <a class="icon" href="http://localhost/pustaka-booking/pinjam"><i class="bi bi-arrow-right-square-fill"></i></a>
            </div>
            <div class="card-body">
              <h5 class="card-title">buku dipinjam <span>|</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-journal-bookmark"></i>
                </div>
                <div class="ps-3">
                  <h6><?= $this->ModelPinjam->getUserPinjam(['no_pinjam'])->num_rows(); ?></h6>
                  <span class="text-danger small pt-1 fw-bold">buku</span>
                </div>
              </div>
            </div>

          </div>
        </div><!-- End Sales Card -->
        <div class="col-xxl-4 col-md-6">
          <div class="card info-card sales-card">
            <div class="filter">
              <a class="icon" href="http://localhost/pustaka-booking/pinjam/bookingDetail"><i class="bi bi-arrow-right-square-fill"></i></a>
            </div>
            <div class="card-body">
              <h5 class="card-title">buku dibooking <span>|</span></h5>
              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi bi-cart-check"></i>
                </div>
                <div class="ps-3">
                  <h6><?= $this->ModelBooking->getUserBooking(['id'])->num_rows(); ?></h6>
                  <span class="text-danger small pt-1 fw-bold">buku</span>
                </div>
              </div>
            </div>

          </div>
        </div><!-- End Sales Card -->


        <!-- Recent Sales -->
        <div class="col-12">
          <div class="card recent-sales overflow-auto">

            <div class="card-body info-card sales-card">
              <h5 class="card-title">Data User <span>| Today</span></h5>
              <table class="table mt-3">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nama Anggota</th>
                    <th>Email</th>
                    <th>Role ID</th>
                    <th>Aktif</th>
                    <th>Member Sejak</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $i = 1;
                  foreach ($anggota as $a) { ?>
                    <tr>
                      <td><?= $i++; ?></td>
                      <td><?= $a['nama']; ?></td>
                      <td><?= $a['email']; ?></td>
                      <td><?= $a['role_id']; ?></td>
                      <td><?= $a['is_active']; ?></td>
                      <td><?= date('Y', $a['tanggal_input']); ?></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <!-- Top Selling -->
        <div class="col-12">
          <div class="card top-selling overflow-auto">
            <div class="card-body pb-0">
              <h5 class="card-title">Data Buku <span>| Today</span></h5>
              <table class="table mt-3">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Judul Buku</th>
                    <th>Pengarang</th>
                    <th>Penerbit</th>
                    <th>Tahun Terbit</th>
                    <th>ISBN</th>
                    <th>Stok</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $i = 1;
                  foreach ($buku as $b) { ?>
                    <tr>
                      <td><?= $i++; ?></td>
                      <td><?= $b['judul_buku']; ?></td>
                      <td><?= $b['pengarang']; ?></td>
                      <td><?= $b['penerbit']; ?></td>
                      <td><?= $b['tahun_terbit']; ?></td>
                      <td><?= $b['isbn']; ?></td>
                      <td><?= $b['stok']; ?></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>

          </div>
        </div><!-- End Top Selling -->

      </div>
    </div><!-- End Left side columns -->

    <!-- Right side columns -->
    <div class="col-lg-4">

      <!-- Recent Activity -->
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">PUSTAKA-BOOKING UBSI <span>| Admin</span></h5>

          <div class="activity">

            <img src="http://localhost/pustaka-booking/assets1/img/logo.png" width="327px" height="300px">

          </div>

        </div>
      </div><!-- End Recent Activity -->

      <!-- Budget Report -->
      <div class="card">
        <div class="card-body pb-0">
          <h5 class="card-title">TRAFIC WEBSITE <span>| This Month</span></h5>
          <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

          <script>
            document.addEventListener("DOMContentLoaded", () => {
              echarts.init(document.querySelector("#trafficChart")).setOption({
                tooltip: {
                  trigger: 'item'
                },
                legend: {
                  top: '5%',
                  left: 'center'
                },
                series: [{
                  name: 'Access From',
                  type: 'pie',
                  radius: ['40%', '70%'],
                  avoidLabelOverlap: false,
                  label: {
                    show: false,
                    position: 'center'
                  },
                  emphasis: {
                    label: {
                      show: true,
                      fontSize: '18',
                      fontWeight: 'bold'
                    }
                  },
                  labelLine: {
                    show: false
                  },
                  data: [{
                      value: 1048,
                      name: 'Search Engine'
                    },
                    {
                      value: 735,
                      name: 'whatsapp'
                    },
                    {
                      value: 580,
                      name: 'Email'
                    },
                    {
                      value: 484,
                      name: 'youtube'
                    },

                  ]
                }]
              });
            });
          </script>


        </div>
      </div><!-- End Budget Report -->
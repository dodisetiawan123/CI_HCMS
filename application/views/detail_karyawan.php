<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Human Capital Management System</title>
    <?php include 'layouts/head.php'; ?>

    <!-- DataTables -->
    <link href="<?php echo base_url('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css') ?>" />
    <link href="<?php echo base_url('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css') ?>" />

    <!-- Responsive datatable examples -->
    <link href="<?php echo base_url('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css') ?>" />

    <!-- twitter-bootstrap-wizard css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/libs/twitter-bootstrap-wizard/prettify.css') ?>">

    <?php include 'layouts/head-style.php'; ?>

</head>

<?php include 'layouts/body.php'; ?>

<!-- Begin page -->
<div id="layout-wrapper">

    <?php include 'layouts/horizontal-menu.php'; ?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Profil Karyawan</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Data karyawan</a></li>
                                    <li class="breadcrumb-item active">Profil karyawan</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <button type="button" class="btn btn-success waves-effect btn-label waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl"><i class="bx bx-user-circle label-icon"></i> Update Data Karyawan</button>
                                
                            </div>
                            <div>
                                    <!--  Extra Large modal example -->
                                    <div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="myExtraLargeModalLabel">Form Input Data Karyawan</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                     <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="card">
                                                                <div class="card-body">

                                                                    <div id="progrss-wizard" class="twitter-bs-wizard">
                                                                        <ul class="twitter-bs-wizard-nav nav nav-pills nav-justified">
                                                                            <li class="nav-item">
                                                                                <a href="#progress-seller-details" class="nav-link" data-toggle="tab">
                                                                                    <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Identitas Karyawan">
                                                                                        <i class="bx bx-user"></i>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a href="#progress-jabatan" class="nav-link" data-toggle="tab">
                                                                                    <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Jabatan">
                                                                                        <i class="bx bx-id-card"></i>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a href="#progress-company-document" class="nav-link" data-toggle="tab">
                                                                                    <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Renumerasi">
                                                                                        <i class="bx bx-money"></i>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a href="#progress-efisiensi" class="nav-link" data-toggle="tab">
                                                                                    <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Efisiensi">
                                                                                        <i class="bx bx-credit-card"></i>
                                                                                    </div>
                                                                                </a>
                                                                            </li>

                                                                            <li class="nav-item">
                                                                                <a href="#progress-bank-detail" class="nav-link" data-toggle="tab">
                                                                                    <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Pendidikan">
                                                                                        <i class="bx bx-book-bookmark"></i>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                        <!-- wizard-nav -->

                                                                        <div id="bar" class="progress mt-4">
                                                                            <div class="progress-bar bg-success progress-bar-striped progress-bar-animated"></div>
                                                                        </div>
                                                                        <div class="tab-content twitter-bs-wizard-tab-content">
                                                                            <div class="tab-pane" id="progress-seller-details">
                                                                                <div class="text-center mb-4">
                                                                                    <h5>IDENTITAS KARYAWAN</h5>
                                                                                    <p class="card-title-desc">Isi informasi identitas karyawan</p>
                                                                                </div>
                                                                                <form>
                                                                                    <div class="row">
                                                                                        <div class="col-lg-6">
                                                                                            <div class="mb-3">
                                                                                                <label for="progresspill-firstname-input">Nama Karyawan</label>
                                                                                                <input type="text" class="form-control" id="progresspill-firstname-input">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-6">
                                                                                            <div class="mb-3">
                                                                                                <label for="progresspill-lastname-input">NPK</label>
                                                                                                <input type="text" class="form-control" id="progresspill-lastname-input">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="row">
                                                                                        <div class="col-lg-6">
                                                                                            <div class="mb-3">
                                                                                                <label for="progresspill-phoneno-input">Tempat lahir</label>
                                                                                                <input type="text" class="form-control" id="progresspill-phoneno-input">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-6">
                                                                                            <div class="mb-3">
                                                                                                <label for="progresspill-email-input">Tanggal lahir</label>
                                                                                                <input type="email" class="form-control" id="progresspill-email-input">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-lg-6">
                                                                                            <div class="mb-3">
                                                                                                <label for="progresspill-phoneno-input">Jenis kelamin</label>
                                                                                                <input type="text" class="form-control" id="progresspill-phoneno-input">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-6">
                                                                                            <div class="mb-3">
                                                                                                <label for="progresspill-email-input">Agama</label>
                                                                                                <input type="email" class="form-control" id="progresspill-email-input">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-lg-6">
                                                                                            <div class="mb-3">
                                                                                                <label for="progresspill-phoneno-input">Status</label>
                                                                                                <input type="text" class="form-control" id="progresspill-phoneno-input">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-6">
                                                                                            <div class="mb-3">
                                                                                                <label for="progresspill-email-input">NIK</label>
                                                                                                <input type="email" class="form-control" id="progresspill-email-input">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-lg-12">
                                                                                            <div class="mb-3">
                                                                                                <label for="progresspill-address-input">Alamat sekarang</label>
                                                                                                <textarea id="progresspill-address-input" class="form-control" rows="2"></textarea>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-lg-6">
                                                                                            <div class="mb-3">
                                                                                                <label for="progresspill-phoneno-input">No Hp</label>
                                                                                                <input type="text" class="form-control" id="progresspill-phoneno-input">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-6">
                                                                                            <div class="mb-3">
                                                                                                <label for="progresspill-email-input">Email</label>
                                                                                                <input type="email" class="form-control" id="progresspill-email-input">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-lg-6">
                                                                                            <div class="mb-3">
                                                                                                <label for="progresspill-phoneno-input">Tgl. Masuk</label>
                                                                                                <input type="text" class="form-control" id="progresspill-phoneno-input">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-6">
                                                                                            <div class="mb-3">
                                                                                                <label for="progresspill-email-input">Tgl. Pengangkatan</label>
                                                                                                <input type="email" class="form-control" id="progresspill-email-input">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </form>
                                                                                <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                                                    <li class="next"><a href="javascript: void(0);" class="btn btn-primary" onclick="nextTab()">Next <i class="bx bx-chevron-right ms-1"></i></a></li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="tab-pane" id="progress-jabatan">
                                                                                <div>
                                                                                    <div class="text-center mb-4">
                                                                                        <h5>INFORMASI JABATAN</h5>
                                                                                        <p class="card-title-desc">Isi informasi jabatan karyawan</p>
                                                                                    </div>
                                                                                    <form>
                                                                                        <div class="row">
                                                                                             <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label class="form-label">Mulai Bekerja</label>
                                                                                                    <select class="form-select">
                                                                                                        <option selected>1</option>
                                                                                                        <option value="AE">2</option>
                                                                                                        <option value="VI">3</option>
                                                                                                        <option value="MC">4</option>
                                                                                                        <option value="DI">5</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-vatno-input" class="form-label">Jadi Karyawan Tetap</label>
                                                                                                    <input type="text" class="form-control" id="progresspill-vatno-input">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-cstno-input" class="form-label">Status Jabatan</label>
                                                                                                    <input type="text" class="form-control" id="progresspill-cstno-input">
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-servicetax-input" class="form-label">Nama Jabatan</label>
                                                                                                    <input type="text" class="form-control" id="progresspill-servicetax-input">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-companyuin-input" class="form-label">TMT Jabatan</label>
                                                                                                    <input type="text" class="form-control" id="progresspill-companyuin-input">
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-declaration-input" class="form-label">Satuan Organisasi</label>
                                                                                                    <input type="text" class="form-control" id="progresspill-declaration-input">
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-declaration-input" class="form-label">Bagian</label>
                                                                                                    <input type="text" class="form-control" id="progresspill-declaration-input">
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-declaration-input" class="form-label">Kategori Fungsi</label>
                                                                                                    <input type="text" class="form-control" id="progresspill-declaration-input">
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-declaration-input" class="form-label">Level Jabatan</label>
                                                                                                    <input type="text" class="form-control" id="progresspill-declaration-input">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </form>
                                                                                    <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                                                        <li class="previous"><a href="javascript: void(0);" class="btn btn-primary" onclick="nextTab()"><i class="bx bx-chevron-left me-1"></i> Previous</a></li>
                                                                                        <li class="next"><a href="javascript: void(0);" class="btn btn-primary" onclick="nextTab()">Next <i class="bx bx-chevron-right ms-1"></i></a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="tab-pane" id="progress-company-document">
                                                                                <div>
                                                                                    <div class="text-center mb-4">
                                                                                        <h5>RENUMERASI</h5>
                                                                                        <p class="card-title-desc">Isi informasi renumerasi karyawan</p>
                                                                                    </div>
                                                                                    <form>   
                                                                                        <div class="row">
                                                                                             <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label class="form-label">Grade</label>
                                                                                                    <select class="form-select">
                                                                                                        <option selected>1</option>
                                                                                                        <option value="AE">2</option>
                                                                                                        <option value="VI">3</option>
                                                                                                        <option value="MC">4</option>
                                                                                                        <option value="DI">5</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-vatno-input" class="form-label">Tgl Mulai</label>
                                                                                                    <input type="text" class="form-control" id="progresspill-vatno-input">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-cstno-input" class="form-label">Gaji Pokok Konversi(Rp)</label>
                                                                                                    <input type="text" class="form-control" id="progresspill-cstno-input">
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-servicetax-input" class="form-label">Tunjangan Kesejahteraan Konversi(Rp)</label>
                                                                                                    <input type="text" class="form-control" id="progresspill-servicetax-input">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-companyuin-input" class="form-label">Tunjangan Peralihan Upah Pokok(Rp)</label>
                                                                                                    <input type="text" class="form-control" id="progresspill-companyuin-input">
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-declaration-input" class="form-label">Tunjangan Peralihan Jabatan(Rp)</label>
                                                                                                    <input type="text" class="form-control" id="progresspill-declaration-input">
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-declaration-input" class="form-label">Tunjangan Peralihan(Rp)</label>
                                                                                                    <input type="text" class="form-control" id="progresspill-declaration-input">
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-declaration-input" class="form-label">Tunjangan Jabatan(Rp)</label>
                                                                                                    <input type="text" class="form-control" id="progresspill-declaration-input">
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-declaration-input" class="form-label">Upah Pokok Efisiensi(Rp)</label>
                                                                                                    <input type="text" class="form-control" id="progresspill-declaration-input">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-declaration-input" class="form-label">Tunjangan Penyesuaian(Rp)</label>
                                                                                                    <input type="text" class="form-control" id="progresspill-declaration-input">
                                                                                                </div>
                                                                                            </div>
                                                                                           
                                                                                        </div>
                                                                                    </form>
                                                                                    <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                                                        <li class="previous"><a href="javascript: void(0);" class="btn btn-primary" onclick="nextTab()"><i class="bx bx-chevron-left me-1"></i> Previous</a></li>
                                                                                        <li class="next"><a href="javascript: void(0);" class="btn btn-primary" onclick="nextTab()">Next <i class="bx bx-chevron-right ms-1"></i></a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="tab-pane" id="progress-efisiensi">
                                                                                <div>
                                                                                    <div class="text-center mb-4">
                                                                                        <h5>EFISIENSI</h5>
                                                                                        <p class="card-title-desc">Isi informasi upah efisiensi karyawan</p>
                                                                                    </div>
                                                                                    <form>  
                                                                                        <div class="row">
                                                                                           <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-declaration-input" class="form-label">Status Keaktifan</label>
                                                                                                    <input type="text" class="form-control" id="progresspill-declaration-input">
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-declaration-input" class="form-label">Status di rumahkan</label>
                                                                                                    <input type="text" class="form-control" id="progresspill-declaration-input">
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-declaration-input" class="form-label">Batch dirumahkan</label>
                                                                                                    <input type="text" class="form-control" id="progresspill-declaration-input">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-declaration-input" class="form-label">Tanggal dirumahkaan atau Aktif kembali</label>
                                                                                                    <input type="text" class="form-control" id="progresspill-declaration-input">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-declaration-input" class="form-label">Kode Organisasi</label>
                                                                                                    <input type="text" class="form-control" id="progresspill-declaration-input">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-declaration-input" class="form-label">Kode Bidang / Bagian</label>
                                                                                                    <input type="text" class="form-control" id="progresspill-declaration-input">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-declaration-input" class="form-label">Aktifitas (obsolete)</label>
                                                                                                    <input type="text" class="form-control" id="progresspill-declaration-input">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-declaration-input" class="form-label">Aktifitas 2022</label>
                                                                                                    <input type="text" class="form-control" id="progresspill-declaration-input">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-declaration-input" class="form-label">Sub Aktifitas</label>
                                                                                                    <input type="text" class="form-control" id="progresspill-declaration-input">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-declaration-input" class="form-label">Status Kepegawaian</label>
                                                                                                    <input type="text" class="form-control" id="progresspill-declaration-input">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-declaration-input" class="form-label">Teknik atau Non Teknik</label>
                                                                                                    <input type="text" class="form-control" id="progresspill-declaration-input">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-declaration-input" class="form-label">Golongan Pendidikan</label>
                                                                                                    <input type="text" class="form-control" id="progresspill-declaration-input">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </form>
                                                                                    <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                                                        <li class="previous"><a href="javascript: void(0);" class="btn btn-primary" onclick="nextTab()"><i class="bx bx-chevron-left me-1"></i> Previous</a></li>
                                                                                        <li class="next"><a href="javascript: void(0);" class="btn btn-primary" onclick="nextTab()">Next <i class="bx bx-chevron-right ms-1"></i></a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="tab-pane" id="progress-bank-detail">
                                                                                <div>
                                                                                    <div class="text-center mb-4">
                                                                                        <h5>PENDIDIKAN</h5>
                                                                                        <p class="card-title-desc">Isi informasi pendidikan karyawan</p>
                                                                                    </div>
                                                                                    <form>
                                                                                        <div class="row">
                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-namecard-input" class="form-label">Level Pendidikan</label>
                                                                                                    <input type="text" class="form-control" id="progresspill-namecard-input">
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label class="form-label">Jurusan</label>
                                                                                                    <select class="form-select">
                                                                                                        <option selected>Pilih Jurusan Pendidikan</option>
                                                                                                        <option value="AE">Teknik Industri</option>
                                                                                                        <option value="VI">Teknik Informatika</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-cardno-input" class="form-label">Institusi</label>
                                                                                                    <input type="text" class="form-control" id="progresspill-cardno-input">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-expiration-input" class="form-label">Tahun Lulus</label>
                                                                                                    <input type="text" class="form-control" id="progresspill-expiration-input">
                                                                                                </div>
                                                                                            </div>

                                                                                        </div>
                                                                                    </form>
                                                                                    <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                                                        <li class="previous"><a href="javascript: void(0);" class="btn btn-primary" onclick="nextTab()"><i class="bx bx-chevron-left me-1"></i> Previous</a></li>
                                                                                        <li class="float-end"><a href="javascript: void(0);" class="btn btn-primary" data-bs-toggle="modal" data-bs-target=".confirmModal">Save
                                                                                                Changes</a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- end card body -->
                                                            </div>
                                                            <!-- end card -->
                                                        </div>
                                                        <!-- end col -->
                                                    </div>
                                                    <!-- end row -->
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                                </div>
                            <div class="card-body">

                               <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm order-2 order-sm-1">
                                        <div class="d-flex align-items-start mt-3 mt-sm-0">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-xl me-3">
                                                    <img src="<?php echo base_url('assets/images/users/avatar-2.jpg') ?>" alt="" class="img-fluid rounded-circle d-block">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <div>
                                                    <h5 class="font-size-17 mb-1">Siti Maimunah</h5>
                                                    <p class="text-muted font-size-13 mb-1">Jabatan : General Manager</p><p class="text-muted font-size-13 mb-1">Satuan organisasi : Biro Sistem Manajement dan K3LH</p><p class="text-muted font-size-13 mb-1">Bagian : IT Support</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <ul class="nav nav-tabs-custom card-header-tabs border-top mt-4" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link px-3 active" data-bs-toggle="tab" href="#overview" role="tab">Identitas Karyawan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link px-3" data-bs-toggle="tab" href="#informasi" role="tab">Informasi Jabatan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link px-3" data-bs-toggle="tab" href="#about" role="tab">Renumerasi</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link px-3" data-bs-toggle="tab" href="#efisiensi" role="tab">Efisiensi</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link px-3" data-bs-toggle="tab" href="#post" role="tab">Pendidikan</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->

                        <div class="tab-content">
                            <div class="tab-pane active" id="overview" role="tabpanel">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Identitas Siti Maimunah</h5>
                                    </div>
                                    <div class="card-body">
                                        <div>
                                            <div class="pb-3">
                                                <div class="row">
                                                    <div class="col-xl-2">
                                                        <div>
                                                            <h5 class="font-size-15">Bio :</h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl">
                                                        <div class="text-muted">
                                                            <p class="mb-2">Hi I'm Phyllis Gatlin, Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages</p>
                                                            <p class="mb-0">It is a long established fact that a reader will be distracted by the readable content of a page when looking at it has a more-or-less normal distribution of letters</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="py-3">
                                                <div class="row">
                                                    <div class="col-xl-2">
                                                        <div>
                                                            <h5 class="font-size-15">Experience :</h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl">
                                                        <div class="text-muted">
                                                            <p>If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more simple and regular than the existing European languages. It will be as simple as Occidental; in fact, it will be Occidental. To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc</p>

                                                            <ul class="list-unstyled mb-0">
                                                                <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>Donec vitae sapien ut libero venenatis faucibus</li>
                                                                <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>Quisque rutrum aenean imperdiet</li>
                                                                <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>Integer ante a consectetuer eget</li>
                                                                <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>Phasellus nec sem in justo pellentesque</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->

                            </div>
                            <!-- end tab pane -->
                            <div class="tab-pane" id="informasi" role="tabpanel">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Identitas Siti Maimunah</h5>
                                    </div>
                                    <div class="card-body">
                                        <div>
                                            <div class="pb-3">
                                                <div class="row">
                                                    <div class="col-xl-2">
                                                        <div>
                                                            <h5 class="font-size-15">Bio :</h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl">
                                                        <div class="text-muted">
                                                            <p class="mb-2">Hi I'm Phyllis Gatlin, Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages</p>
                                                            <p class="mb-0">It is a long established fact that a reader will be distracted by the readable content of a page when looking at it has a more-or-less normal distribution of letters</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="py-3">
                                                <div class="row">
                                                    <div class="col-xl-2">
                                                        <div>
                                                            <h5 class="font-size-15">Experience :</h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl">
                                                        <div class="text-muted">
                                                            <p>If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more simple and regular than the existing European languages. It will be as simple as Occidental; in fact, it will be Occidental. To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc</p>

                                                            <ul class="list-unstyled mb-0">
                                                                <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>Donec vitae sapien ut libero venenatis faucibus</li>
                                                                <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>Quisque rutrum aenean imperdiet</li>
                                                                <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>Integer ante a consectetuer eget</li>
                                                                <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>Phasellus nec sem in justo pellentesque</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->

                            </div>
                            <!-- end tab pane -->

                            <div class="tab-pane" id="about" role="tabpanel">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Renumerasi Siti Maimunah</h5>
                                    </div>
                                    <div class="card-body">
                                        <div>
                                            <div class="pb-3">
                                                <h5 class="font-size-15">Bio :</h5>
                                                <div class="text-muted">
                                                    <p class="mb-2">Hi I'm Phyllis Gatlin, Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages</p>
                                                    <p class="mb-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at it has a more-or-less normal distribution of letters</p>
                                                    <p>It will be as simple as Occidental; in fact, it will be Occidental. To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages are members of the same family. Their separate existence is a myth.</p>

                                                    <ul class="list-unstyled mb-0">
                                                        <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>Donec vitae sapien ut libero venenatis faucibus</li>
                                                        <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>Quisque rutrum aenean imperdiet</li>
                                                        <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>Integer ante a consectetuer eget</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="pt-3">
                                                <h5 class="font-size-15">Experience :</h5>
                                                <div class="text-muted">
                                                    <p>If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more simple and regular than the existing European languages. It will be as simple as Occidental; in fact, it will be Occidental. To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc</p>

                                                    <ul class="list-unstyled mb-0">
                                                        <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>Donec vitae sapien ut libero venenatis faucibus</li>
                                                        <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>Quisque rutrum aenean imperdiet</li>
                                                        <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>Integer ante a consectetuer eget</li>
                                                        <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>Phasellus nec sem in justo pellentesque</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end tab pane -->

                            <div class="tab-pane" id="efisiensi" role="tabpanel">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Renumerasi Siti Maimunah</h5>
                                    </div>
                                    <div class="card-body">
                                        <div>
                                            <div class="pb-3">
                                                <h5 class="font-size-15">Bio :</h5>
                                                <div class="text-muted">
                                                    <p class="mb-2">Hi I'm Phyllis Gatlin, Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages</p>
                                                    <p class="mb-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at it has a more-or-less normal distribution of letters</p>
                                                    <p>It will be as simple as Occidental; in fact, it will be Occidental. To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages are members of the same family. Their separate existence is a myth.</p>

                                                    <ul class="list-unstyled mb-0">
                                                        <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>Donec vitae sapien ut libero venenatis faucibus</li>
                                                        <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>Quisque rutrum aenean imperdiet</li>
                                                        <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>Integer ante a consectetuer eget</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="pt-3">
                                                <h5 class="font-size-15">Experience :</h5>
                                                <div class="text-muted">
                                                    <p>If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more simple and regular than the existing European languages. It will be as simple as Occidental; in fact, it will be Occidental. To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc</p>

                                                    <ul class="list-unstyled mb-0">
                                                        <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>Donec vitae sapien ut libero venenatis faucibus</li>
                                                        <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>Quisque rutrum aenean imperdiet</li>
                                                        <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>Integer ante a consectetuer eget</li>
                                                        <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>Phasellus nec sem in justo pellentesque</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end tab pane -->

                            <div class="tab-pane" id="post" role="tabpanel">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Pendidikan Siti Maimunah</h5>
                                    </div>
                                    <div class="card-body">
                                        <div>
                                            <div class="row justify-content-center">
                                                <div class="col-xl-8">


                                                    <div class="mt-5">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="font-size-14 text-truncate"><a href="#" class="text-dark">Project discussion with team</a></h5>
                                                                <p class="font-size-13 text-muted mb-0">24 Mar, 2020</p>
                                                            </div>
                                                            <div class="flex-shrink-0 ms-2">
                                                                <div class="dropdown">
                                                                    <a class="btn btn-link text-muted font-size-16 p-1 py-0 dropdown-toggle shadow-none" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                        <i class="bx bx-dots-horizontal-rounded"></i>
                                                                    </a>
                                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="pt-3">
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item me-3">
                                                                    <a href="javascript: void(0);" class="text-muted">
                                                                        <i class="bx bx-purchase-tag-alt align-middle text-muted me-1"></i> Development
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item me-3">
                                                                    <a href="javascript: void(0);" class="text-muted">
                                                                        <i class="bx bx-comment-dots align-middle text-muted me-1"></i> 08 Comments
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                            <p class="text-muted">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>

                                                            
                                                        </div>
                                                    </div>
                                                    <!-- end post -->

                                                    <hr class="my-5">

                                                    <div>
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="font-size-14 text-truncate"><a href="#" class="text-dark">Beautiful Day with Friends</a></h5>
                                                                <p class="font-size-13 text-muted mb-0">10 Apr, 2020</p>
                                                            </div>
                                                            <div class="flex-shrink-0 ms-2">
                                                                <div class="dropdown">
                                                                    <a class="btn btn-link text-muted font-size-16 p-1 py-0 dropdown-toggle shadow-none" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                        <i class="bx bx-dots-horizontal-rounded"></i>
                                                                    </a>
                                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="position-relative mt-3">
                                                            <img src="assets/images/small/img-3.jpg" alt="" class="img-thumbnail">
                                                        </div>

                                                        <div class="pt-3">
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item me-3">
                                                                    <a href="javascript: void(0);" class="text-muted">
                                                                        <i class="bx bx-purchase-tag-alt align-middle text-muted me-1"></i> Project
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item me-3">
                                                                    <a href="javascript: void(0);" class="text-muted">
                                                                        <i class="bx bx-comment-dots align-middle text-muted me-1"></i> 12 Comments
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                            <p class="text-muted">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, aliquam quaerat voluptatem. Ut enim ad minima veniam, quis</p>

                                                          
                                                        </div>
                                                    </div>
                                                    <!-- end post -->

                                                    <hr class="my-5">

                                                    <div>
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="font-size-14 text-truncate"><a href="#" class="text-dark">Drawing a sketch</a></h5>
                                                                <p class="font-size-13 text-muted mb-0">20 Mar, 2020</p>
                                                            </div>
                                                            <div class="flex-shrink-0 ms-2">
                                                                <div class="dropdown">
                                                                    <a class="btn btn-link text-muted font-size-16 p-1 py-0 dropdown-toggle shadow-none" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                        <i class="bx bx-dots-horizontal-rounded"></i>
                                                                    </a>
                                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="pt-3">
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item me-3">
                                                                    <a href="javascript: void(0);" class="text-muted">
                                                                        <i class="bx bx-purchase-tag-alt align-middle text-muted me-1"></i> Project
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item me-3">
                                                                    <a href="javascript: void(0);" class="text-muted">
                                                                        <i class="bx bx-comment-dots align-middle text-muted me-1"></i> 12 Comments
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                            <p class="text-muted">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, aliquam quaerat voluptatem. Ut enim ad minima veniam, quis</p>

                                                            
                                                        </div>
                                                    </div>
                                                    <!-- end post -->
                                                </div>
                                                <!-- end col -->

                                            </div>
                                            <!-- end row -->

                                            <div class="row g-0 mt-4">
                                                <div class="col-sm-6">
                                                    <div>
                                                        <p class="mb-sm-0">Showing 1 to 10 of 57 entries</p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="float-sm-end">
                                                        <ul class="pagination mb-sm-0">
                                                            <li class="page-item disabled">
                                                                <a href="#" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                                                            </li>
                                                            <li class="page-item">
                                                                <a href="#" class="page-link">1</a>
                                                            </li>
                                                            <li class="page-item active">
                                                                <a href="#" class="page-link">2</a>
                                                            </li>
                                                            <li class="page-item">
                                                                <a href="#" class="page-link">3</a>
                                                            </li>
                                                            <li class="page-item">
                                                                <a href="#" class="page-link">4</a>
                                                            </li>
                                                            <li class="page-item">
                                                                <a href="#" class="page-link">5</a>
                                                            </li>
                                                            <li class="page-item">
                                                                <a href="#" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end row -->
                                        </div>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end tab pane -->
                        </div>
                        <!-- end tab content -->
                    </div>
                    <!-- end col -->

                   
                </div>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


        <?php include 'layouts/footer.php'; ?>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->


<!-- Right Sidebar -->
<?php include 'layouts/right-sidebar.php'; ?>
<!-- /Right-bar -->

<!-- JAVASCRIPT -->

<?php include 'layouts/vendor-scripts.php'; ?>

<!-- Required datatable js -->
<script src="<?php echo base_url('assets/libs/datatables.net/js/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>
<!-- Buttons examples -->
<script src="<?php echo base_url('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/jszip/jszip.min.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/pdfmake/build/pdfmake.min.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/pdfmake/build/vfs_fonts.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/datatables.net-buttons/js/buttons.html5.min.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/datatables.net-buttons/js/buttons.print.min.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/datatables.net-buttons/js/buttons.colVis.min.js') ?>"></script>

<!-- Responsive examples -->
<script src="<?php echo base_url('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') ?>"></script>

<!-- Datatable init js -->
<script src="<?php echo base_url('assets/js/pages/datatables.init.js') ?>"></script>

<!-- twitter-bootstrap-wizard js -->
<script src="<?php echo base_url('assets/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/twitter-bootstrap-wizard/prettify.js') ?>"></script>

<!-- form wizard init -->
<script src="<?php echo base_url('assets/js/pages/form-wizard.init.js') ?>"></script>


<script src="<?php echo base_url('assets/js/app.js') ?>"></script>

</body>

</html>
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

    <!-- choices css -->
    <link href="<?php echo base_url('assets/libs/choices.js/public/assets/styles/choices.min.css') ?>" rel="stylesheet" type="text/css" />
    <!-- datepicker css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/libs/flatpickr/flatpickr.min.css') ?>">
    <!-- Sweet Alert-->
    <link href="<?php echo base_url('assets/libs/sweetalert2/sweetalert2.min.css') ?>" rel="stylesheet" type="text/css" />

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
                            <div>
                                     <!--  Extra Large modal example -->
                                    <div class="modal fade bs-example-modal-xl" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="myExtraLargeModalLabel">Form Update Data Karyawan</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form enctype="multipart/form-data" name="karyawan" accept-charset="utf-8" method="post" action="<?php echo site_url('admin/insertdata') ?>" onsubmit="return validateForm()">
                                                     <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="card">
                                                                <div class="card-body">

                                                                    <div id="progrss-wizard" class="twitter-bs-wizard">
                                                                        <ul class="twitter-bs-wizard-nav nav nav-pills nav-justified">
                                                                            <li class="nav-item">
                                                                                <a href="#progress-personal-background" class="nav-link" data-toggle="tab">
                                                                                    <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Personal Background">
                                                                                        <i class="bx bx-user"></i>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a href="#progress-educational-background" class="nav-link" data-toggle="tab">
                                                                                    <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"     title="Educational Background">
                                                                                        <i class="bx bx-book-bookmark"></i>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a href="#progress-career" class="nav-link" data-toggle="tab">
                                                                                    <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Career">
                                                                                        <i class="bx bx-briefcase-alt-2"></i>
                                                                                    </div>
                                                                                </a>
                                                                            </li>

                                                                            <li class="nav-item">
                                                                                <a href="#progress-grade" class="nav-link" data-toggle="tab">
                                                                                    <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Grade">
                                                                                        <i class="bx bx-user-pin"></i>
                                                                                    </div>
                                                                                </a>
                                                                            </li>

                                                                            <li class="nav-item">
                                                                                <a href="#progress-upah-berlaku" class="nav-link" data-toggle="tab">
                                                                                    <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Upah Berlaku">
                                                                                        <i class="bx bx-money"></i>
                                                                                    </div>
                                                                                </a>
                                                                            </li>

                                                                            <li class="nav-item">
                                                                                <a href="#progress-upah-efisiensi" class="nav-link" data-toggle="tab">
                                                                                    <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Upah Efisiensi">
                                                                                        <i class="bx bx-bar-chart-square"></i>
                                                                                    </div>
                                                                                </a>
                                                                            </li>

                                                                            <li class="nav-item">
                                                                                <a href="#progress-efisiensi" class="nav-link" data-toggle="tab">
                                                                                    <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Efisiensi">
                                                                                        <i class="bx bx-bar-chart"></i>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                        <!-- wizard-nav -->

                                                                        <div id="bar" class="progress mt-4">
                                                                            <div class="progress-bar bg-success progress-bar-striped progress-bar-animated"></div>
                                                                        </div>
                                                                        <div class="tab-content twitter-bs-wizard-tab-content">
                                                                            <div class="tab-pane" id="progress-personal-background">
                                                                                <div class="text-center mb-4">
                                                                                    <h5>PERSONAL BACKGROUND</h5>
                                                                                    <p class="card-title-desc">Isi informasi identitas karyawan</p>
                                                                                </div>
                                                                                
                                                                                    <div class="row">
                                                                                        <div class="col-lg-6">
                                                                                            <div class="mb-3">
                                                                                                <label for="progresspill-nama-karyawan">Nama Karyawan</label>
                                                                                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama karyawan" value="<?php echo $personaldata['nama'] ?>">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-6">
                                                                                            <div class="mb-3">
                                                                                                <label for="progresspill-npk">NPK</label>
                                                                                                <input type="text" class="form-control" id="npk" name="npk" placeholder="NPK" maxlength="8" value="<?php echo $personaldata['npk'] ?>">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="row">
                                                                                        <div class="col-lg-6">
                                                                                            <div class="mb-3">
                                                                                                <label for="progresspill-tempat-lahir">Tempat Lahir</label>
                                                                                                <input type="text" class="form-control" id="tempatlahir" name="tempatlahir" placeholder="Tempat lahir" value="<?php echo $personaldata['tempatlahir'] ?>">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-6">
                                                                                            <div class="mb-3">
                                                                                                <label class="form-label">Tanggal Lahir</label>
                                                                                                <input type="text" class="form-control" id="datepicker-datetime-tanggallahir" name="tgllahir" placeholder="Tanggal lahir karyawan" value="<?php echo $personaldata['tgllahir'] ?>">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-lg-6">
                                                                                                  <div class="mb-3">
                                                                                                    <label for="choices-single-no-sorting" class="form-label ">Jenis Kelamin</label>
                                                                                                    <select class="form-control" name="jeniskelamin" id="jenis-kelamin" placeholder="Jenis kelamin">
                                                                                                        <option value="">Pilih jenis kelamin</option>
                                                                                                        <option value="LK" <?php if ($personaldata['jeniskelamin']=='LK') { echo "selected";} ?>>Laki-Laki</option>
                                                                                                        <option value="PR" <?php if ($personaldata['jeniskelamin']=='PR') { echo "selected";} ?>>Perempuan</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        <div class="col-lg-6">
                                                                                             <div class="mb-3">
                                                                                                    <label for="choices-single-no-sorting" class="form-label">Agama</label>
                                                                                                    <select class="form-control" name="agama" id="agama" placeholder="Pilih agama karyawan">
                                                                                                        <option value="">Pilih agama karyawan</option>
                                                                                                        <option value="ISLAM" <?php if ($personaldata['agama']=='ISLAM') { echo "selected";} ?>>ISLAM </option>
                                                                                                        <option value="HINDU" <?php if ($personaldata['agama']=='HINDU') { echo "selected";} ?>>HINDU</option>
                                                                                                        <option value="KRISTEN" <?php if ($personaldata['agama']=='KRISTEN') { echo "selected";} ?>>KRISTEN</option>
                                                                                                        <option value="KATOLIK" <?php if ($personaldata['agama']=='KATOLIK') { echo "selected";} ?>>KATOLIK</option>
                                                                                                        <option value="BUDHA" <?php if ($personaldata['agama']=='BUDHA') { echo "selected";} ?>>BUDHA</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                         <div class="col-lg-6">
                                                                                                  <div class="mb-3">
                                                                                                    <label for="choices-single-no-sorting" class="form-label ">Status Marital</label>
                                                                                                    <select class="form-control" name="idmd_marital" id="status" placeholder="Jenis kelamin">
                                                                                                        <option value="">Pilih status karyawan</option>
                                                                                                        <option value="BK" <?php if ($personaldata['idmd_marital']=='BK') { echo "selected";} ?>>BK - Belum Kawin </option>
                                                                                                        <option value="TK" <?php if ($personaldata['idmd_marital']=='TK') { echo "selected";} ?>>TK - Cerai Hidup / Cerai Mati</option>
                                                                                                        <option value="BS" <?php if ($personaldata['idmd_marital']=='BS') { echo "selected";} ?>>BS - Bersuami (Orang Barata)</option>
                                                                                                        <option value="K" <?php if ($personaldata['idmd_marital']=='K') { echo "selected";} ?>>K - Kawin</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        <div class="col-lg-6">
                                                                                            <div class="mb-3">
                                                                                                <label for="progresspill-nik-input">NIK</label>
                                                                                                <input type="number" class="form-control" placeholder="NIK" name="nik" value="<?php echo $personaldata['nik'] ?>">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-lg-12">
                                                                                            <div class="mb-3">
                                                                                                <label for="progresspill-address-input">Alamat Sekarang</label>
                                                                                                <textarea id="progresspill-address-input" name="alamatsekarang" class="form-control" rows="2" placeholder="Alamat sekarang"><?php echo $personaldata['alamatsekarang']; ?></textarea>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-lg-6">
                                                                                            <div class="mb-3">
                                                                                                <label for="progresspill-phoneno-input">No Hp</label>
                                                                                                <input type="number" name="nohp" class="form-control" id="" placeholder="No Hp" value="<?php echo $personaldata['nohp'] ?>">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-6">
                                                                                            <div class="mb-3">
                                                                                                <label for="progresspill-email-input">Email</label>
                                                                                                <input type="email" name="email" class="form-control" placeholder="Alamat email" value="<?php echo $personaldata['email'] ?>">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                                                    <li class="next"><a class="btn btn-primary" onclick="nextTab()">Next <i class="bx bx-chevron-right ms-1"></i></a></li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="tab-pane" id="progress-educational-background">
                                                                                <div>
                                                                                    <div class="text-center mb-4">
                                                                                        <h5>EDUCATIONAL BACKGROUND</h5>
                                                                                        <p class="card-title-desc">Isi informasi pendidikan karyawan</p>
                                                                                    </div>
                                                                                    <form>
                                                                                        <div class="row">
                                                                                             <div class="col-lg-4">
                                                                                                  <div class="mb-3">
                                                                                                    <label for="choices-single-no-sorting" class="form-label">Tingkat Pendidikan</label>
                                                                                                    <select class="form-control" name="levelpendidikan" id="pilih-pendidikan" placeholder="Pilih tingkat pendidikan">
                                                                                                        <option value="">Pilih tingkat pendidikan</option>
                                                                                                        <option value="SD" <?php if ($personaldata['levelpendidikan']=='SD') { echo "selected";} ?>>SD</option>
                                                                                                        <option value="SMP" <?php if ($personaldata['levelpendidikan']=='SMP') { echo "selected";} ?>>SMP</option>
                                                                                                        <option value="SMA" <?php if ($personaldata['levelpendidikan']=='SMA') { echo "selected";} ?>>SMA</option>
                                                                                                        <option value="SMK" <?php if ($personaldata['levelpendidikan']=='SMK') { echo "selected";} ?>>SMK</option>
                                                                                                        <option value="Diploma 1" <?php if ($personaldata['levelpendidikan']=='Diploma 1') { echo "selected";} ?>>Diploma 1</option>
                                                                                                        <option value="Diploma 2" <?php if ($personaldata['levelpendidikan']=='Diploma 2') { echo "selected";} ?>>Diploma 2</option>
                                                                                                        <option value="Diploma 3" <?php if ($personaldata['levelpendidikan']=='Diploma 3') { echo "selected";} ?>>Diploma 3</option>
                                                                                                        <option value="Diploma 4" <?php if ($personaldata['levelpendidikan']=='Diploma 4') { echo "selected";} ?>>Diploma 4</option>
                                                                                                        <option value="Sarjana 1" <?php if ($personaldata['levelpendidikan']=='Sarjana 1') { echo "selected";} ?>>Sarjana 1</option>
                                                                                                        <option value="Sarjana 2" <?php if ($personaldata['levelpendidikan']=='Sarjana 2') { echo "selected";} ?>>Sarjana 2</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-2">
                                                                                                <div class="mb-3">
                                                                                                    <label for="choices-single-no-sorting" class="form-label ">Golongan Pendidikan</label>
                                                                                                    <input type="text" class="form-control" id="golpend" name="golpend" placeholder="Golongan Pendidikan" value="<?php if ($personaldata['levelpendidikan']=='SD') {
                                                                                                            echo 'A';
                                                                                                        } else if ($personaldata['levelpendidikan']=='SMP') {
                                                                                                            echo 'B';
                                                                                                        } else if ($personaldata['levelpendidikan']=='SMA') {
                                                                                                            echo 'C';
                                                                                                        } else if ($personaldata['levelpendidikan']=='SMK') {
                                                                                                            echo 'C';
                                                                                                        } else if ($personaldata['levelpendidikan']=='Diploma 1') {
                                                                                                            echo 'C';
                                                                                                        } else if ($personaldata['levelpendidikan']=='Diploma 2') {
                                                                                                            echo 'C';
                                                                                                        } else if ($personaldata['levelpendidikan']=='Diploma 3') {
                                                                                                            echo 'D';
                                                                                                        } else if ($personaldata['levelpendidikan']=='Diploma 4') {
                                                                                                            echo 'E';
                                                                                                        } else if ($personaldata['levelpendidikan']=='Sarjana 1') {
                                                                                                            echo 'F';
                                                                                                        } else if ($personaldata['levelpendidikan']=='Sarjana 2') {
                                                                                                            echo 'G';
                                                                                                        }  ?>" readonly>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-fakultas" class="form-label">Fakultas/Jurusan</label>
                                                                                                    <input type="text" class="form-control" id="progresspill-vatno-input" name="jurusan" placeholder="Fakultas/Jurusan" value="<?php echo $personaldata['jurusan'] ?>">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-institusi" class="form-label">Institusi</label>
                                                                                                    <input type="text" class="form-control" name="institusi" id="progresspill-cstno-input" placeholder="Institusi" value="<?php echo $personaldata['institusi'] ?>">
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                <label class="form-label">Tahun Lulus</label>
                                                                                                <input type="text" class="form-control" id="datepicker-datetime-lulus" name="tahunlulus" placeholder="Tahun Lulus" value="<?php echo $personaldata['tahunlulus'] ?>">
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
                                                                            <div class="tab-pane" id="progress-career">
                                                                                <div>
                                                                                    <div class="text-center mb-4">
                                                                                        <h5>CAREER</h5>
                                                                                        <p class="card-title-desc">Isi informasi karir karyawan</p>
                                                                                    </div>  
                                                                                        <div class="row">
                                                                                            <div class="col-lg-4">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-tanggalmasuk">Tanggal Masuk</label>
                                                                                                    <input type="text" class="form-control" name="mulaibekerja" id="datepicker-datetime-tanggalmasuk" placeholder="Tanggal Masuk" value="<?php echo $personaldata['mulaibekerja'] ?>">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-4">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-tanggalmasuk">Lama Kerja</label>
                                                                                                    <input type="text" class="form-control" id="lamakerja" 
                                                                                                     name="lamakerja"  placeholder="Lama Kerja" readonly>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-4">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-pengangkatan">Tanggal Pengangkatan</label>
                                                                                                    <input type="text" class="form-control" name="tgldiangkat" id="datepicker-datetime-tanggalangkat" placeholder="Tanggal Pengangkatan" value="<?php echo $personaldata['tgldiangkat'] ?>">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col-lg-4">
                                                                                                <div class="mb-3">
                                                                                                    <label for="choices-single-no-sorting" class="form-label">Satuan Organisasi</label>
                                                                                                    <input id="NmSatminkal" name="NmSatminkal" type="hidden" class="form-control">
                                                                                                    <select class="form-control" name="idmd_organisasi" id="idmd_organisasi" placeholder="Pilih satuan organisasi">
                                                                                                        
                                                                                                        
                                                                                                        <option value="<?php echo $personaldata['idmd_organisasi'] ?>" selected><?php echo $personaldata['namaorganisasi'] ?></option>
                                                                                                        <option value="">Pilih Satuan Organisasi</option>
                                                                                                        <?php foreach ($organisasi as $data) {?>
                                                                                                        <option value="<?php echo $data->idmd_organisasi; ?>"><?php echo $data->namaorganisasi; ?></option>
                                                                                                        <?php } ?>

                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-4">
                                                                                                <div class="mb-3">
                                                                                                    <label for="choices-single-no-sorting" class="form-label">Bidang Organisasi</label>
                                                                                                    <select class="form-control" name="idmd_bidang" id="idmd_bidang" placeholder="Pilih bagian">
                                                                                                        <option value="<?php echo $personaldata['idmd_bidang'] ?>" selected><?php echo $personaldata['namabidang'] ?></option>
                                                                                                        <option value="">Pilih bagian</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>


                                                                                            <div class="col-lg-4">
                                                                                                 <div class="mb-3">
                                                                                                    <label for="choices-single-no-sorting" class="form-label">Jabatan Organisasi</label>
                                                                                                    <input id="NmBidang" name="NmBidang" type="hidden" class="form-control">
                                                                                                    <select class="form-control" name="idmd_jabatan" id="idmd_jabatan" placeholder="Pilih jabatan"><option value="<?php echo $personaldata['idmd_jabatan'] ?>" selected><?php echo $personaldata['namajabatan'] ?></option>
                                                                                                        <option value="">Pilih jabatan</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="row">
                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-declaration-input" class="form-label">Level Jabatan</label>
                                                                                                    <select class="form-control" name="idmd_level" id="pilih-level" placeholder="Pilih level jabatan">
                                                                                                        <option value="<?php echo $personaldata['level'] ?>" selected><?php echo $personaldata['level'].' - '.$personaldata['namalevel'] ?></option>
                                                                                                        <option value="">Pilih level jabatan</option>
                                                                                                        <?php foreach ($level as $data) {?>
                                                                                                        <option value="<?php echo $data->level ?>"><?php echo $data->level ?> - <?php echo $data->namalevel ?></option>
                                                                                                        <?php } ?>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-6">
                                                                                                 <div class="mb-3">
                                                                                                    <label for="choices-single-no-sorting" class="form-label ">Status Jabatan</label>
                                                                                                    <select class="form-control" name="statusjabatan" id="statusjabatan" placeholder="Status Jabatan">
                                                                                                        <option value="<?php echo $personaldata['statusjabatan'] ?>" selected><?php echo $personaldata['statusjabatan'] ?></option>
                                                                                                        <option value="">Pilih status jabatan karyawan</option>
                                                                                                        <option value="Definitif">Def. - Definitif</option>
                                                                                                        <option value="Penganti Sementara">Pgs. - Penganti Sementara</option>
                                                                                                        <option value="Pejabat Sementara">Pjs. - Pejabat Sementara</option>
                                                                                                        <option value="Pelaksana Tugas">Plt. - Pelaksana Tugas</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                             
                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-declaration-input" class="form-label">TMT Jabatan</label>
                                                                                                    <input type="text" class="form-control" id="datepicker-datetime-tmtjabatan" name="tglmulai" placeholder="TMT Jabatan" value="<?php echo $personaldata['tglmulai'] ?>">
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-declaration-input" class="form-label">Kategori Fungsi</label>
                                                                                                    <select class="form-control" name="kategorifungsi" id="fungsi" placeholder="Pilih satuan organisasi">
                                                                                                        <option value="">Pilih kategori fungsi</option>
                                                                                                        <option value="<?php echo $personaldata['kategorifungsi'] ?>" selected><?php echo $personaldata['kategorifungsi'] ?></option>
                                                                                                        <option value="Core">Core</option>
                                                                                                        <option value="Support">Support</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                                                        <li class="previous"><a href="javascript: void(0);" class="btn btn-primary" onclick="nextTab()"><i class="bx bx-chevron-left me-1"></i> Previous</a></li>
                                                                                        <li class="next"><a href="javascript: void(0);" class="btn btn-primary" onclick="nextTab()">Next <i class="bx bx-chevron-right ms-1"></i></a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="tab-pane" id="progress-grade">
                                                                                <div>
                                                                                    <div class="text-center mb-4">
                                                                                        <h5>GRADE</h5>
                                                                                        <p class="card-title-desc">Isi informasi Grade karyawan</p>
                                                                                    </div>
                                                                                        <div class="row">
                                                                                             <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-declaration-input" class="form-label">Konversi Baru</label>
                                                                                                    <select class="form-control" name="idmd_grade" id="grade" placeholder="Grade">
                                                                                                        <option value="">Pilih grade</option>
                                                                                                        <?php foreach ($grade as $data) {?>
                                                                                                        <option value="<?php echo $data->idmd_grade ?>"><?php echo $data->grade ?> - <?php echo $data->gajipokok ?></option>
                                                                                                        <?php } ?>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-tanggalmasuk">TMT Grade</label>
                                                                                                    <input type="text" class="form-control" id="tgldiangkat" placeholder="TMT Grade" name="tgldiangkatgrade">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                                                        <li class="previous"><a href="javascript: void(0);" class="btn btn-primary" onclick="nextTab()"><i class="bx bx-chevron-left me-1"></i> Previous</a></li>
                                                                                        <li class="next"><a href="javascript: void(0);" class="btn btn-primary" onclick="nextTab()">Next <i class="bx bx-chevron-right ms-1"></i></a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="tab-pane" id="progress-upah-berlaku">
                                                                                <div>
                                                                                    <div class="text-center mb-4">
                                                                                        <h5>UPAH BERLAKU</h5>
                                                                                        <p class="card-title-desc">Isi informasi upah berlaku karyawan</p>
                                                                                    </div>

                                                                                        <div class="row">
                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-cstno-input" class="form-label">Gaji Pokok Konversi(Rp)</label>
                                                                                                    <input type="text" class="form-control" id="currency-gaji-pokok" name="ub_gajipokokkonversi" placeholder="Isi gaji pokok konversi">
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-servicetax-input" class="form-label">Tunjangan Kesejahteraan Konversi(Rp)</label>
                                                                                                    <input type="text" class="form-control" id="currency-tunjangan-kesejahteraan-konversi" name="ub_tunjkesejahteraankonversi" placeholder="Isi tunjangan kesejahteraan konversi">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-companyuin-input" class="form-label">Tunjangan Peralihan Upah Pokok(Rp)</label>
                                                                                                    <input type="text" class="form-control" id="currency-tunjangan-peralihan" name="ub_tunjperalihanupahpokok" placeholder="Isi tunjangan peralihan upah pokok">
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-declaration-input" class="form-label">Tunjangan Peralihan Jabatan(Rp)</label>
                                                                                                    <input type="text" class="form-control" id="currency-tunjangan-peralihan-jabatan" name="ub_tunjperalihanjabatan" placeholder="Isi tunjangan peralihan jabatan">
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-declaration-input" class="form-label">Tunjangan Peralihan(Rp)</label>
                                                                                                    <input type="text" class="form-control" id="tunjangan-peralihan" name="ub_tunjperalihan" placeholder="Isi tunjangan peralihan">
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-declaration-input" class="form-label">Tunjangan Jabatan(Rp)</label>
                                                                                                    <input type="text" class="form-control" name="ub_tunjjabatan" id="tunjangan-jabatan" placeholder="Isi tunjangan jabatan">
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-declaration-input" class="form-label">Upah Pokok Berlaku(Rp)</label>
                                                                                                    <input type="text" class="form-control" id="upah-pokok-berlaku" name="ub_upahpokokberlaku" placeholder="Isi upah pokok berlaku">
                                                                                                </div>
                                                                                            </div>
                                                                                           
                                                                                           
                                                                                        </div>
                                                                                    <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                                                        <li class="previous"><a href="javascript: void(0);" class="btn btn-primary" onclick="nextTab()"><i class="bx bx-chevron-left me-1"></i> Previous</a></li>
                                                                                        <li class="next"><a href="javascript: void(0);" class="btn btn-primary" onclick="nextTab()">Next <i class="bx bx-chevron-right ms-1"></i></a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="tab-pane" id="progress-upah-efisiensi">
                                                                                <div>
                                                                                    <div class="text-center mb-4">
                                                                                        <h5>UPAH EFISIENSI</h5>
                                                                                        <p class="card-title-desc">Isi informasi upah efisiensi karyawan</p>
                                                                                    </div>
                                                                                        <div class="row">
                                                                                           <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-declaration-input" class="form-label">Gaji Pokok Konversi(Rp)</label>
                                                                                                    <input type="text" class="form-control" id="ue-gaji-pokok-konversi" name="uf_gajipokokkonversi" placeholder="Isi gaji pokok konversi">
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-declaration-input" class="form-label">Tunjangan Kesejahteraan Konversi(Rp)</label>
                                                                                                    <input type="text" class="form-control" id="ue-tunjangan-kesejahteraan-konversi" name="uf_tunjkesejahteraankonversi" placeholder="Isi tunjangan kesejahteraan konversi">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-declaration-input" class="form-label">Tunjngan Peralihan Upah Pokok(Rp)</label>
                                                                                                    <input type="text" class="form-control" id="ue-tunjangan-peralihan-upah-pokok" name="uf_tunjperalihanupahpokok" placeholder="Isi tunjangan peralihan upah pokok">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-declaration-input" class="form-label">Tunjangan Peralihan Jabatan(Rp)</label>
                                                                                                    <input type="text" class="form-control" id="ue-tunjangan-peralihan-jabatan" name="uf_tunjperalihanjabatan" placeholder="Isi tunjangan peralihan jabatan">
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-declaration-input" class="form-label">Tunjangan Peralihan(Rp)</label>
                                                                                                    <input type="text" class="form-control" id="ue-tunjangan-peralihan" name="uf_tunjperalihan" placeholder="Isi tunjangan peralihan">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-declaration-input" class="form-label">Tunjangan Jabatan(Rp)</label>
                                                                                                    <input type="text" class="form-control" id="ue-tunjangan-jabatan" name="uf_tunjjabatan" placeholder="Isi tunjangan jabatan">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-declaration-input" class="form-label">Upah Pokok Efisiensi(Rp)</label>
                                                                                                    <input type="text" class="form-control" id="ue-upah-pokok-efisiensi" name="uf_upahpokokberlaku" placeholder="Isi upah pokok efisiensi">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-declaration-input" class="form-label">Tunjangan Penyesuaian(Rp)</label>
                                                                                                    <input type="text" class="form-control" id="ue-tunjangan-penyesuaian" name="uf_tunjpenyesuaian" placeholder="isi tunjangan penyesuaian">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
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
                                                                                        <p class="card-title-desc">Isi informasi efisiensi karyawan</p>
                                                                                    </div>

                                                                                        <div class="row">
                                                                                           <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="choices-single-no-sorting" class="form-label ">Status Keaktifan</label>
                                                                                                    <select class="form-control" name="statuskeaktifan" id="status-keaktifan" name="statuskeaktifan" placeholder="Pilih status keaktifan">
                                                                                                        <option value="">Pilih status keaktifan</option>
                                                                                                        <option value="A">A - Aktif</option>
                                                                                                        <option value="NA">NA - Non Aktif</option>
                                                                                                        
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="choices-single-no-sorting" class="form-label ">Status Dirumahkan</label>
                                                                                                    <select class="form-control" name="statusdirumahkan" id="status-dirumahkan" placeholder="Pilih status dirumahkan">
                                                                                                        <option value="">Pilih status dirumahkan</option>
                                                                                                        <option value="-">-</option>
                                                                                                        <option value="H">H</option>
                                                                                                        
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="choices-single-no-sorting" class="form-label ">Batch Dirumahkan</label>
                                                                                                    <select class="form-control" name="batchdirumahkan" id="status-batch" placeholder="Pilih batch dirumahkan">
                                                                                                        <option value="">Pilih batch dirumahkan</option>
                                                                                                        <option value="I">I</option>
                                                                                                        <option value="II">II</option>
                                                                                                        <option value="III">III</option>
                                                                                                        <option value="IIII">IIII</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="progresspill-pengangkatan">Tanggal Dirumahkan atau Aktif Kembali</label>
                                                                                                    <input type="text" class="form-control" id="tanggal-dirumahkan" name="tgldirumahkan" placeholder="Isi tanggal di rumahkan atau Aktif kembali">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="choices-single-no-sorting" class="form-label ">Aktifitas (Obsolete)</label>
                                                                                                    <select class="form-control" name="aktivitasobsolete" id="aktifitasobsolete" placeholder="Pilih aktifitas">
                                                                                                        <option value="">Pilih aktifitas</option>
                                                                                                        <option value="TL">TL</option>
                                                                                                        <option value="TTL">TTL</option>
                                                                                                        <option value="TPEM">TPEM</option>
                                                                                                        <option value="TADM">TADM</option>
                                                                                                        
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="choices-single-no-sorting" class="form-label ">Aktifitas 2022</label>
                                                                                                    <select class="form-control" name="aktivitas2022" id="aktifitas2022" placeholder="Pilih aktifitas">
                                                                                                        <option value="">Pilih aktifitas</option>
                                                                                                        <option value="TL">TL</option>
                                                                                                        <option value="TTL">TTL</option>
                                                                                                        <option value="TPEM">TPEM</option>
                                                                                                        <option value="TADM">TADM</option>
                                                                                                        
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="choices-single-no-sorting" class="form-label ">Sub Aktifitas</label>
                                                                                                    <select class="form-control" name="subaktivitas" id="subaktifitas" placeholder="Pilih sub aktifitas">
                                                                                                        <option value="">Pilih sub aktifitas</option>
                                                                                                        <option value="BP">BP</option>
                                                                                                        <option value="BPP">BPP</option>
                                                                                                        
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="choices-single-no-sorting" class="form-label ">Status Kepegawaian</label>
                                                                                                    <select class="form-control" name="statuskepegawaian" id="statuskepegawaian" placeholder="Pilih status kepegawaian">
                                                                                                        <option value="">Pilih status kepegawaian</option>
                                                                                                        <option value="KT">KT</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="choices-single-no-sorting" class="form-label ">Teknik atau Non Teknik</label>
                                                                                                    <select class="form-control" name="tekniknonteknik" id="tekniknonteknik" placeholder="Pilih status kepegawaian">
                                                                                                        <option value="">Pilih teknik atau non Teknik</option>
                                                                                                        <option value="Teknik">Teknik</option>
                                                                                                        <option value="Non Teknik">Non Teknik</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                                                        <li class="previous"><a href="javascript: void(0);" class="btn btn-primary" onclick="nextTab()"><i class="bx bx-chevron-left me-1"></i> Previous</a></li>
                                                                                        <li class="float-end"><button id="submit" type="submit" class="btn btn-primary">Save Changes</button></li>
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
                                                    </form>
                                                    <!-- end row -->
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                                </div>
                            <div class="card-body">

                               <div class="row">
                                <div class="col-xl-3 col-lg-4">
                            <div class="card text-center">
                            <div class="card-body">
                                <div class="dropdown text-end">
                                    <a class="text-muted dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                        <i class="bx bx-dots-horizontal-rounded"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Ganti foto</a>
                                    </div>
                                </div>

                                <div class="mx-auto mb-4">
                                    <img src="<?php     echo base_url('assets/images/users/avatar-2.jpg') ?>" alt="" class="avatar-xl rounded-circle img-thumbnail">
                                </div>
                                <h5 class="font-size-16 mb-1"><a href="#" class="text-dark"><?php echo $personaldata['nama']; ?></a></h5>
                                <p class="text-muted mb-2"><?php echo $personaldata['namajabatan']; ?></p>

                            </div>

                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-outline-light text-truncate"><i class="uil uil-user me-1"></i> Transfer</button>
                                <button type="button" class="btn btn-outline-light text-truncate"><i class="uil uil-envelope-alt me-1"></i> Resign</button>
                                <button type="button" class="btn btn-outline-light text-truncate"><i class="uil uil-envelope-alt me-1"></i> Delete</button>

                            </div>
                        </div>


                            <div class="card">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                Time Management
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                           <div class="list-group" id="list-tab" role="tablist">
                                              <a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Attendance</a>
                                              <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Timeoff</a>
                                              <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Overtime</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Time Management
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="text-muted">
                                                    <strong class="text-dark">This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.

                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                     <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingFour">
                                            <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                Assets
                                            </button>
                                        </h2>
                                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                            <div class="list-group" id="list-tab" role="tablist">
                                              <a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Aset Personal</a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end accordion -->
                            </div><!-- end card-body -->

                    </div>
                    <!-- end col -->
                    <div class="col-xl-9 col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm order-2 order-sm-1">
                                        <div class="d-flex align-items-start mt-3 mt-sm-0">
                                            
                                            <div class="flex-grow-1">
                                                <div>
                                                    <h5 class="font-size-17 mb-2"><?php echo $personaldata['nama'] ?> - <?php echo $personaldata['npk'] ?></h5>
                                                    <p class="text-muted font-size-13 mb-1"><strong>Jabatan : </strong><?php echo $personaldata['namajabatan']   ?></p><p class="text-muted font-size-13 mb-1"><strong>Satuan Organisasi : </strong> <?php echo $personaldata['namaorganisasi']   ?></p><p class="text-muted font-size-13 mb-1"><strong>Bidang : </strong><?php echo $personaldata['namabidang']   ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-auto order-1 order-sm-2">
                                        <div class="d-flex align-items-start justify-content-end gap-2">
                                            <div>
                                                <button type="button" class="btn btn-light btn-label" data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl"><i class="bx bx-user-circle label-icon"></i> Update Data</button>
                                            </div>
                                            <div>
                                                <div class="dropdown">
                                                    <button class="btn btn-link font-size-16 shadow-none text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <ul class="nav nav-tabs-custom card-header-tabs border-top mt-4" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link px-3 active" data-bs-toggle="tab" href="#overview" role="tab">PERSONAL BACKGROUND</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link px-3" data-bs-toggle="tab" href="#informasi" role="tab">EDUCATIONAL BACKGROUND</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link px-3" data-bs-toggle="tab" href="#about" role="tab">CAREER</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link px-3" data-bs-toggle="tab" href="#efisiensi" role="tab">GRADE</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link px-3" data-bs-toggle="tab" href="#post" role="tab">UPAH BERLAKU</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link px-3" data-bs-toggle="tab" href="#upahefisiensi" role="tab">UPAH EFISIENSI</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link px-3" data-bs-toggle="tab" href="#efisiensitab" role="tab">EFISIENSI</a>
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
                                        <h5 class="card-title mb-0">Personal Background <?php echo $personaldata['nama'] ?></h5>
                                    </div>
                                    <div class="card-body">
                                         <div class="mb-5">
                                            <div class="row justify-content-center mt-4">
                                                <div class="col-xl-5">
                                                    <div class="mt-3">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="font-size-14 text-truncate"><a href="#" class="text-dark">Nama Lengkap</a></h5>
                                                                <p class="font-size-13 text-muted mb-0"><?php echo $personaldata['nama']; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end post -->
                                                    <hr class="mt-1">
                                                </div>
                                                <!-- end col -->

                                                 <div class="col-xl-5">
                                                    <div class="mt-3">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="font-size-14 text-truncate"><a href="#" class="text-dark">NPK</a></h5>
                                                                <p class="font-size-13 text-muted mb-0"><?php echo $personaldata['npk']; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end post -->
                                                    <hr class="mt-1">
                                                </div>



                                            </div>
                                            <!-- end row -->
                                            <div class="row justify-content-center">
                                                <div class="col-xl-5">
                                                    <div class="mt-3">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="font-size-14 text-truncate"><a href="#" class="text-dark">Tempat Lahir</a></h5>
                                                                <p class="font-size-13 text-muted mb-0"><?php echo $personaldata['tempatlahir']; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end post -->
                                                    <hr class="mt-1">
                                                </div>
                                                <!-- end col -->

                                                 <div class="col-xl-5">
                                                    <div class="mt-3">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="font-size-14 text-truncate"><a href="#" class="text-dark">Tanggal Lahir</a></h5>
                                                                <p class="font-size-13 text-muted mb-0"><?php echo $personaldata['tgllahir']; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end post -->
                                                    <hr class="mt-1">
                                                </div>

                                            </div>
                                            <!-- end row -->

                                             <div class="row justify-content-center">
                                                <div class="col-xl-5">
                                                    <div class="mt-3">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="font-size-14 text-truncate"><a href="#" class="text-dark">Jenis Kelamin</a></h5>
                                                                <p class="font-size-13 text-muted mb-0"><?php echo $personaldata['jeniskelamin']; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end post -->
                                                    <hr class="mt-1">
                                                </div>
                                                <!-- end col -->

                                                 <div class="col-xl-5">
                                                    <div class="mt-3">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="font-size-14 text-truncate"><a href="#" class="text-dark">Agama</a></h5>
                                                                <p class="font-size-13 text-muted mb-0"><?php echo $personaldata['agama']; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end post -->
                                                    <hr class="mt-1">
                                                </div>

                                            </div>
                                            <!-- end row -->

                                             <div class="row justify-content-center">
                                                <div class="col-xl-5">
                                                    <div class="mt-3">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="font-size-14 text-truncate"><a href="#" class="text-dark">Status Marital</a></h5>
                                                                <p class="font-size-13 text-muted mb-0"><?php echo $personaldata['deskripsi']; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end post -->
                                                    <hr class="mt-1">
                                                </div>
                                                <!-- end col -->

                                                 <div class="col-xl-5">
                                                    <div class="mt-3">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="font-size-14 text-truncate"><a href="#" class="text-dark">NIK</a></h5>
                                                                <p class="font-size-13 text-muted mb-0"><?php echo $personaldata['nik']; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end post -->
                                                    <hr class="mt-1">
                                                </div>

                                            </div>
                                            <!-- end row -->

                                            <div class="row justify-content-center">
                                                <div class="col-xl-5">
                                                    <div class="mt-3">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="font-size-14 text-truncate"><a href="#" class="text-dark">No Hp</a></h5>
                                                                <p class="font-size-13 text-muted mb-0"><?php echo $personaldata['nohp']; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end post -->
                                                    <hr class="mt-1">
                                                </div>
                                                <!-- end col -->

                                                 <div class="col-xl-5">
                                                    <div class="mt-3">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="font-size-14 text-truncate"><a href="#" class="text-dark">Email</a></h5>
                                                                <p class="font-size-13 text-muted mb-0"><?php echo $personaldata['email']; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end post -->
                                                    <hr class="mt-1">
                                                </div>

                                            </div>
                                            <!-- end row -->

                                            <div class="row justify-content-center">
                                                <div class="col-xl-10">
                                                    <div class="mt-3">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="font-size-14 text-truncate"><a href="#" class="text-dark">Alamat</a></h5>
                                                                <p class="font-size-13 text-muted mb-0"><?php echo $personaldata['alamatsekarang']; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end post -->
                                                    <hr class="mt-1">
                                                </div>
                                                <!-- end col -->

                                            </div>
                                            <!-- end row -->

                                           
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
                                        <h5 class="card-title mb-0">Educational Background <?php echo $personaldata['nama'] ?></h5>
                                    </div>
                                    <div class="card-body">
                                         <div class="mb-5">
                                            <div class="row justify-content-center mt-4">
                                                <div class="col-xl-5">
                                                    <div class="mt-3">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="font-size-14 text-truncate"><a href="#" class="text-dark">Tingkat Pendidikan</a></h5>
                                                                <p class="font-size-13 text-muted mb-0"><?php echo $personaldata['levelpendidikan']; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end post -->
                                                    <hr class="mt-1">
                                                </div>
                                                <!-- end col -->

                                                 <div class="col-xl-5">
                                                    <div class="mt-3">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="font-size-14 text-truncate"><a href="#" class="text-dark">Golongan Pendidikan</a></h5>
                                                                <p class="font-size-13 text-muted mb-0"><?php echo $personaldata['golpend']; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end post -->
                                                    <hr class="mt-1">
                                                </div>



                                            </div>
                                            <!-- end row -->
                                            <div class="row justify-content-center">
                                                <div class="col-xl-5">
                                                    <div class="mt-3">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="font-size-14 text-truncate"><a href="#" class="text-dark">Fakultas/Jurusan</a></h5>
                                                                <p class="font-size-13 text-muted mb-0"><?php echo $personaldata['jurusan']; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end post -->
                                                    <hr class="mt-1">
                                                </div>
                                                <!-- end col -->

                                                 <div class="col-xl-5">
                                                    <div class="mt-3">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="font-size-14 text-truncate"><a href="#" class="text-dark">Institusi</a></h5>
                                                                <p class="font-size-13 text-muted mb-0"><?php echo $personaldata['institusi']; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end post -->
                                                    <hr class="mt-1">
                                                </div>

                                            </div>
                                            <!-- end row -->

                                             <div class="row justify-content-center">
                                                <div class="col-xl-10">
                                                    <div class="mt-3">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="font-size-14 text-truncate"><a href="#" class="text-dark">Tahun Lulus</a></h5>
                                                                <p class="font-size-13 text-muted mb-0"><?php echo $personaldata['tahunlulus']; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end post -->
                                                    <hr class="mt-1">
                                                </div>
                                                <!-- end col -->

                                            </div>
                                            <!-- end row -->

                                           
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
                                        <h5 class="card-title mb-0">Grade <?php echo $personaldata['nama']; ?></h5>
                                    </div>
                                     <div class="card-body">
                                         <div class="mb-5">
                                            <div class="row justify-content-center mt-4">
                                                <div class="col-xl-5">
                                                    <div class="mt-3">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="font-size-14 text-truncate"><a href="#" class="text-dark">Konversi Grade</a></h5>
                                                                <p class="font-size-13 text-muted mb-0"><?php echo $personaldata['idmd_grade']; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end post -->
                                                    <hr class="mt-1">
                                                </div>
                                                <!-- end col -->

                                                 <div class="col-xl-5">
                                                    <div class="mt-3">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="font-size-14 text-truncate"><a href="#" class="text-dark">TMT Grade</a></h5>
                                                                <p class="font-size-13 text-muted mb-0"><?php echo $personaldata['tgldiangkat']; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end post -->
                                                    <hr class="mt-1">
                                                </div>



                                            </div>
                                           

                                           
                                        </div>
                                    </div>
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end tab pane -->

                            <div class="tab-pane" id="about" role="tabpanel">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Career <?php echo $personaldata['nama'];?></h5>
                                    </div>
                                     <div class="card-body">
                                         <div class="mb-5">
                                            <div class="row justify-content-center mt-4">
                                                <div class="col-xl-5">
                                                    <div class="mt-3">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="font-size-14 text-truncate"><a href="#" class="text-dark">Tanggal Masuk</a></h5>
                                                                <p class="font-size-13 text-muted mb-0"><?php echo $personaldata['mulaibekerja']; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end post -->
                                                    <hr class="mt-1">
                                                </div>
                                                <!-- end col -->

                                                 <div class="col-xl-5">
                                                    <div class="mt-3">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="font-size-14 text-truncate"><a href="#" class="text-dark">Lama Kerja(Tanggal masuk)</a></h5>
                                                                <p class="font-size-13 text-muted mb-0"></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end post -->
                                                    <hr class="mt-1">
                                                </div>



                                            </div>
                                            <!-- end row -->
                                            <div class="row justify-content-center">
                                                <div class="col-xl-5">
                                                    <div class="mt-3">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="font-size-14 text-truncate"><a href="#" class="text-dark">Tanggal Pengangkatan</a></h5>
                                                                <p class="font-size-13 text-muted mb-0"><?php echo $personaldata['tgldiangkat']; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end post -->
                                                    <hr class="mt-1">
                                                </div>
                                                <!-- end col -->

                                                 <div class="col-xl-5">
                                                    <div class="mt-3">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="font-size-14 text-truncate"><a href="#" class="text-dark">Lama Kerja(Tanggal Pengangkatan)</a></h5>
                                                                <p class="font-size-13 text-muted mb-0"></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end post -->
                                                    <hr class="mt-1">
                                                </div>

                                            </div>
                                            <!-- end row -->

                                             <div class="row justify-content-center">
                                                <div class="col-xl-5">
                                                    <div class="mt-3">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="font-size-14 text-truncate"><a href="#" class="text-dark">Satuan Organisasi</a></h5>
                                                                <p class="font-size-13 text-muted mb-0"><?php echo $personaldata['namaorganisasi']; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end post -->
                                                    <hr class="mt-1">
                                                </div>
                                                <!-- end col -->

                                                 <div class="col-xl-5">
                                                    <div class="mt-3">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="font-size-14 text-truncate"><a href="#" class="text-dark">Bidang Organisasi</a></h5>
                                                                <p class="font-size-13 text-muted mb-0"><?php echo $personaldata['namabidang']; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end post -->
                                                    <hr class="mt-1">
                                                </div>
                                                <!-- end col -->

                                                <div class="col-xl-10">
                                                    <div class="mt-3">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="font-size-14 text-truncate"><a href="#" class="text-dark">Jabatan Organisasi</a></h5>
                                                                <p class="font-size-13 text-muted mb-0"><?php echo $personaldata['namajabatan']; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end post -->
                                                    <hr class="mt-1">
                                                </div>
                                                <!-- end col -->

                                            </div>
                                            <!-- end row -->

                                           
                                        </div>
                                    </div>
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end tab pane -->

                            <div class="tab-pane" id="post" role="tabpanel">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Upah Berlaku <?php echo $personaldata['nama']; ?></h5>
                                    </div class="mb-5">
                                     <div class="card-body">
                                         <div class="mb-5">
                                            <div class="row justify-content-center mt-4">
                                                <div class="col-xl-5">
                                                    <div class="mt-3">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="font-size-14 text-truncate"><a href="#" class="text-dark">Gaji Pokok Konversi(Rp)</a></h5>
                                                                <p class="font-size-13 text-muted mb-0"><?php echo $personaldata['ub_gajipokokkonversi']; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end post -->
                                                    <hr class="mt-1">
                                                </div>
                                                <!-- end col -->

                                                 <div class="col-xl-5">
                                                    <div class="mt-3">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="font-size-14 text-truncate"><a href="#" class="text-dark">Tunjangan Kesejahteraan Konversi(Rp)</a></h5>
                                                                <p class="font-size-13 text-muted mb-0"><?php echo $personaldata['ub_tunjkesejahteraankonversi']; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end post -->
                                                    <hr class="mt-1">
                                                </div>



                                            </div>
                                            <!-- end row -->
                                            <div class="row justify-content-center">
                                                <div class="col-xl-5">
                                                    <div class="mt-3">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="font-size-14 text-truncate"><a href="#" class="text-dark">Tunjangan Peralihan Upah Pokok(Rp)</a></h5>
                                                                <p class="font-size-13 text-muted mb-0"><?php echo $personaldata['ub_tunjperalihanupahpokok']; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end post -->
                                                    <hr class="mt-1">
                                                </div>
                                                <!-- end col -->

                                                 <div class="col-xl-5">
                                                    <div class="mt-3">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="font-size-14 text-truncate"><a href="#" class="text-dark">Tunjangan Peralihan Jabatan(Rp)</a></h5>
                                                                <p class="font-size-13 text-muted mb-0"><?php echo $personaldata['ub_tunjperalihanjabatan']; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end post -->
                                                    <hr class="mt-1">
                                                </div>

                                            </div>
                                            <!-- end row -->

                                             <div class="row justify-content-center">
                                                <div class="col-xl-5">
                                                    <div class="mt-3">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="font-size-14 text-truncate"><a href="#" class="text-dark">Tunjangan Peralihan(Rp)</a></h5>
                                                                <p class="font-size-13 text-muted mb-0"><?php echo $personaldata['ub_tunjperalihan']; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end post -->
                                                    <hr class="mt-1">
                                                </div>
                                                <!-- end col -->

                                                 <div class="col-xl-5">
                                                    <div class="mt-3">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="font-size-14 text-truncate"><a href="#" class="text-dark">Tunjangan Jabatan(Rp)</a></h5>
                                                                <p class="font-size-13 text-muted mb-0"><?php echo $personaldata['ub_tunjjabatan']; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end post -->
                                                    <hr class="mt-1">
                                                </div>
                                                <!-- end col -->

                                                <div class="col-xl-10">
                                                    <div class="mt-3">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="font-size-14 text-truncate"><a href="#" class="text-dark">Upah Pokok Berlaku(Rp)</a></h5>
                                                                <p class="font-size-13 text-muted mb-0"><?php echo $personaldata['ub_upahpokokberlaku']; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end post -->
                                                    <hr class="mt-1">
                                                </div>
                                                <!-- end col -->

                                            </div>
                                            <!-- end row -->

                                           
                                        </div>
                                    </div>
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end tab pane -->


                            <div class="tab-pane" id="upahefisiensi" role="tabpanel">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Upah Efisiensi <?php echo $personaldata['nama']; ?></h5>
                                    </div>
                                     <div class="card-body">
                                         <div class="mb-5">
                                            <div class="row justify-content-center mt-4">
                                                <div class="col-xl-5">
                                                    <div class="mt-3">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="font-size-14 text-truncate"><a href="#" class="text-dark">Gaji Pokok Konversi(Rp)</a></h5>
                                                                <p class="font-size-13 text-muted mb-0"><?php echo $personaldata['uf_gajipokokkonversi']; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end post -->
                                                    <hr class="mt-1">
                                                </div>
                                                <!-- end col -->

                                                 <div class="col-xl-5">
                                                    <div class="mt-3">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="font-size-14 text-truncate"><a href="#" class="text-dark">Tunjangan Kesejahteraan Konversi(Rp)</a></h5>
                                                                <p class="font-size-13 text-muted mb-0"><?php echo $personaldata['uf_tunjkesejahteraankonversi']; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end post -->
                                                    <hr class="mt-1">
                                                </div>



                                            </div>
                                            <!-- end row -->
                                            <div class="row justify-content-center">
                                                <div class="col-xl-5">
                                                    <div class="mt-3">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="font-size-14 text-truncate"><a href="#" class="text-dark">Tunjngan Peralihan Upah Pokok(Rp)</a></h5>
                                                                <p class="font-size-13 text-muted mb-0"><?php echo $personaldata['uf_tunjperalihanupahpokok']; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end post -->
                                                    <hr class="mt-1">
                                                </div>
                                                <!-- end col -->

                                                 <div class="col-xl-5">
                                                    <div class="mt-3">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="font-size-14 text-truncate"><a href="#" class="text-dark">Tunjangan Peralihan Jabatan(Rp)</a></h5>
                                                                <p class="font-size-13 text-muted mb-0"><?php echo $personaldata['uf_tunjperalihanjabatan']; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end post -->
                                                    <hr class="mt-1">
                                                </div>

                                            </div>
                                            <!-- end row -->

                                             <div class="row justify-content-center">
                                                <div class="col-xl-5">
                                                    <div class="mt-3">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="font-size-14 text-truncate"><a href="#" class="text-dark">Tunjangan Peralihan(Rp)</a></h5>
                                                                <p class="font-size-13 text-muted mb-0"><?php echo $personaldata['uf_tunjperalihan']; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end post -->
                                                    <hr class="mt-1">
                                                </div>
                                                <!-- end col -->

                                                 <div class="col-xl-5">
                                                    <div class="mt-3">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="font-size-14 text-truncate"><a href="#" class="text-dark">Tunjangan Jabatan(Rp)</a></h5>
                                                                <p class="font-size-13 text-muted mb-0"><?php echo $personaldata['uf_tunjjabatan']; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end post -->
                                                    <hr class="mt-1">
                                                </div>
                                                <!-- end col -->

                                                <div class="col-xl-5">
                                                    <div class="mt-3">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="font-size-14 text-truncate"><a href="#" class="text-dark">Upah Pokok Efisiensi(Rp)</a></h5>
                                                                <p class="font-size-13 text-muted mb-0"><?php echo $personaldata['uf_upahpokokberlaku']; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end post -->
                                                    <hr class="mt-1">
                                                </div>
                                                <!-- end col -->

                                                 <div class="col-xl-5">
                                                    <div class="mt-3">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="font-size-14 text-truncate"><a href="#" class="text-dark">Tunjangan Penyesuaian(Rp)</a></h5>
                                                                <p class="font-size-13 text-muted mb-0"><?php echo $personaldata['uf_tunjpenyesuaian']; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end post -->
                                                    <hr class="mt-1">
                                                </div>
                                                <!-- end col -->

                                            </div>
                                            <!-- end row -->

                                           
                                        </div>
                                    </div>
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end tab pane -->

                            <div class="tab-pane" id="efisiensitab" role="tabpanel">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Efisiensi <?php echo $personaldata['nama']; ?></h5>
                                    </div>
                                     <div class="card-body">
                                         <div class="mb-5">
                                            <div class="row justify-content-center mt-4">
                                                <div class="col-xl-5">
                                                    <div class="mt-3">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="font-size-14 text-truncate"><a href="#" class="text-dark">Status Keaktifan</a></h5>
                                                                <p class="font-size-13 text-muted mb-0"><?php echo $personaldata['statuskeaktifan']; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end post -->
                                                    <hr class="mt-1">
                                                </div>
                                                <!-- end col -->

                                                 <div class="col-xl-5">
                                                    <div class="mt-3">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="font-size-14 text-truncate"><a href="#" class="text-dark">Status Dirumahkan</a></h5>
                                                                <p class="font-size-13 text-muted mb-0"><?php echo $personaldata['statusdirumahkan']; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end post -->
                                                    <hr class="mt-1">
                                                </div>



                                            </div>
                                            <!-- end row -->
                                            <div class="row justify-content-center">
                                                <div class="col-xl-5">
                                                    <div class="mt-3">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="font-size-14 text-truncate"><a href="#" class="text-dark">Batch Dirumahkan</a></h5>
                                                                <p class="font-size-13 text-muted mb-0"><?php echo $personaldata['batchdirumahkan']; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end post -->
                                                    <hr class="mt-1">
                                                </div>
                                                <!-- end col -->

                                                 <div class="col-xl-5">
                                                    <div class="mt-3">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="font-size-14 text-truncate"><a href="#" class="text-dark">Tanggal Dirumahkan atau Aktif Kembali</a></h5>
                                                                <p class="font-size-13 text-muted mb-0"><?php echo $personaldata['tgldirumahkan']; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end post -->
                                                    <hr class="mt-1">
                                                </div>

                                            </div>
                                            <!-- end row -->

                                             <div class="row justify-content-center">
                                                <div class="col-xl-5">
                                                    <div class="mt-3">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="font-size-14 text-truncate"><a href="#" class="text-dark">Aktifitas (Obsolete)</a></h5>
                                                                <p class="font-size-13 text-muted mb-0"><?php echo $personaldata['aktivitasobsolete']; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end post -->
                                                    <hr class="mt-1">
                                                </div>
                                                <!-- end col -->

                                                 <div class="col-xl-5">
                                                    <div class="mt-3">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="font-size-14 text-truncate"><a href="#" class="text-dark">Aktifitas 2022</a></h5>
                                                                <p class="font-size-13 text-muted mb-0"><?php echo $personaldata['aktivitas2022']; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end post -->
                                                    <hr class="mt-1">
                                                </div>
                                                <!-- end col -->

                                                <div class="col-xl-5">
                                                    <div class="mt-3">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="font-size-14 text-truncate"><a href="#" class="text-dark">Sub Aktifitas</a></h5>
                                                                <p class="font-size-13 text-muted mb-0"><?php echo $personaldata['subaktivitas']; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end post -->
                                                    <hr class="mt-1">
                                                </div>
                                                <!-- end col -->

                                                 <div class="col-xl-5">
                                                    <div class="mt-3">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="font-size-14 text-truncate"><a href="#" class="text-dark">Status Kepegawaian</a></h5>
                                                                <p class="font-size-13 text-muted mb-0"><?php echo $personaldata['statuskepegawaian']; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end post -->
                                                    <hr class="mt-1">
                                                </div>
                                                <!-- end col -->

                                                 <div class="col-xl-10">
                                                    <div class="mt-3">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="font-size-14 text-truncate"><a href="#" class="text-dark">Teknik atau Non Teknik</a></h5>
                                                                <p class="font-size-13 text-muted mb-0"><?php echo $personaldata['tekniknonteknik']; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end post -->
                                                    <hr class="mt-1">
                                                </div>
                                                <!-- end col -->

                                            </div>
                                            <!-- end row -->

                                           
                                        </div>
                                    </div>
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
<!-- choices js -->
<script src="<?php echo base_url('assets/libs/choices.js/public/assets/scripts/choices.min.js') ?>"></script>

<!-- Sweet Alerts js -->
<script src="<?php echo base_url('assets/libs/sweetalert2/sweetalert2.min.js') ?>"></script>

<!-- Datatable init js -->
<script src="<?php echo base_url('assets/js/pages/datatables.init.js') ?>"></script>

<!-- datepicker js -->
<script src="<?php echo base_url('assets/libs/flatpickr/flatpickr.min.js') ?>"></script>

<!-- form wizard init -->
<script src="<?php echo base_url('assets/js/pages/form-wizard.init.js') ?>"></script>

<!-- init js -->
<script src="<?php echo base_url('assets/js/pages/form-advanced.init.js') ?>"></script>


<script src="<?php echo base_url('assets/js/app.js') ?>"></script>


<script type="text/javascript">
    function checknpk(handleData){
           var npk = $('#npk').val();
           var urlnpk = '<?php echo site_url('data/ceknpk/') ?>'
            $.ajax({
                url: urlnpk,
                method: "POST",
                data: { npk: npk },
                async: false,
                dataType: 'json',
                success: function (data) {
                   handleData(data);
                },
                    error: function() {
                        alert('Error occured');
                    }
            }

            );

    }
    
    function validateForm() {
          let x = document.forms["karyawan"]["npk"].value;
          if (x == "") {
            alert("Formulir NPK harus di isi..!!");
            return false;
          }else{
            checknpk(function(output){
                if (!$.trim(output)){   
                    
                    return data = confirm("Simpan ke database?");
                }
                else{   
                    alert("NPK sudah ada di database silahkan gunakan yang lain!! ");
                    return data = false;
                }
            });
            return data;
          }

        }
</script>
<script>
    function dateAgo(date) {
    var startDate = new Date(date);
    var diffDate = new Date(new Date() - startDate);
    return ((diffDate.toISOString().slice(0, 4) - 1970) + " Tahun " +
        diffDate.getMonth() + " Bulan " + (diffDate.getDate()-1) + " Hari");
    }

    $('#datepicker-datetime-tanggalmasuk').change(function () {
        var tgl = $('#datepicker-datetime-tanggalmasuk').val();
        $('#lamakerja').val(dateAgo(tgl));

    });

    const isEmpty = str => !str.trim().length;

    document.getElementById("datepicker-datetime-tanggalmasuk").addEventListener("input", function() {
      if( isEmpty(this.value) ) {
        $('#lamakerja').val('');
      }
    });
</script>
        
<script>
    $('#pilih-pendidikan').change(function () {
        var pendidikan = $('#pilih-pendidikan').find('option:selected').val();
        if (pendidikan=='SD') {
            var value = 'A'
        } else if (pendidikan=='SMP') {
            var value = 'B'
        } else if (pendidikan=='SMA') {
            var value = 'C'
        } else if (pendidikan=='SMK') {
            var value = 'C'
        } else if (pendidikan=='Diploma 1') {
            var value = 'C'
        } else if (pendidikan=='Diploma 2') {
            var value = 'C'
        } else if (pendidikan=='Diploma 3') {
            var value = 'D'
        } else if (pendidikan=='Diploma 4') {
            var value = 'E'
        } else if (pendidikan=='Sarjana 1') {
            var value = 'F'
        } else if (pendidikan=='Sarjana 2') {
            var value = 'G'
        } 
        $('#golpend').val(value);

    });
</script>

<script>
     <?php if ($this->session->flashdata('done')) {?>
       $(window).on('load', function() {
            Swal.fire({
            position: 'top-midle',
            icon: 'success',
            title: 'Data berhasil di simpan',
            showConfirmButton: false,
            timer: 1500
            })
        });
    <?php } ?>
</script>

<script type="text/javascript">

    const bidang = new Choices('#idmd_bidang', {
    shouldSort: false,placeholder: true
    });
    
    const jabatan = new Choices('#idmd_jabatan', {
    shouldSort: false,placeholder: true
    });


    var urlbidang = '<?php echo site_url('data/getbidang') ?>';
    var urljabatan = '<?php echo site_url('data/getjabatan') ?>';

    $('#idmd_organisasi').change(function () {
        bidang.clearChoices();
        jabatan.clearChoices();
        var id = $('#idmd_organisasi').find('option:selected').val();
        $('#NmSatminkal').val(id);
        $.ajax({
            url: urlbidang,
            method: "POST",
            data: { id: id },
            async: false,
            dataType: 'json',
            success: function (data) {
                bidang.setChoices([{
                          value: '',
                          label: 'Pilih bidang',
                          selected:true,
                          disabled: true
                        }]);
                jabatan.setChoices([{
                          value: '',
                          label: 'Pilih bagian',
                          selected:true,
                          disabled: true
                        }]);
                var i;
                for (i = 0; i < data.length; i++) {
                    bidang.setChoices([{
                          value: data[i].idmd_bidang,
                          label: data[i].namabidang
                        }]);



                }

            }
        });
    });

     $('#idmd_bidang').change(function () {
        jabatan.clearChoices();
        var id = $('#idmd_bidang').find('option:selected').val();
        $('#NmBidang').val(id);
        $.ajax({
            url: urljabatan,
            method: "POST",
            data: { id: id },
            async: false,
            dataType: 'json',
            success: function (data) {
                jabatan.setChoices([{
                          value: '',
                          label: 'Pilih jabatan',
                          selected:true,
                          disabled: true
                        }]);
                var i;
                for (i = 0; i < data.length; i++) {
                    jabatan.setChoices([{
                          value: data[i].idmd_jabatan,
                          label: data[i].namajabatan
                        }]);

                }

            }
        });
    });


    
</script>

</body>

</html>
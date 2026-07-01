<!--
@Project: Learnify
@About: Halaman Data Materi - Dashboard Guru
-->

<!DOCTYPE html>
<html lang="en">

<!-- begin::Head -->

<head>
    <meta charset="utf-8" />
    <title>Learnify - Data Materi</title>
    <meta name="description" content="Data Materi - Dashboard Guru">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--begin::Fonts -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
            },
            active: function () {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <!--end::Fonts -->

    <!--begin:: Global Mandatory Vendors -->
    <link href="<?= base_url('assets') ?>/assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css"
        rel="stylesheet" type="text/css" />
    <!--end:: Global Mandatory Vendors -->

    <!--begin:: Global Optional Vendors -->
    <link href="<?= base_url('assets') ?>/assets/vendors/general/tether/dist/css/tether.css" rel="stylesheet"
        type="text/css" />
    <link href="<?= base_url('assets') ?>/assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css"
        rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets') ?>/assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css"
        rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets') ?>/assets/vendors/general/select2/dist/css/select2.css" rel="stylesheet"
        type="text/css" />
    <link href="<?= base_url('assets') ?>/assets/vendors/general/animate.css/animate.css" rel="stylesheet"
        type="text/css" />
    <link href="<?= base_url('assets') ?>/assets/vendors/general/toastr/build/toastr.css" rel="stylesheet"
        type="text/css" />
    <link href="<?= base_url('assets') ?>/assets/vendors/general/sweetalert2/dist/sweetalert2.css" rel="stylesheet"
        type="text/css" />
    <link href="<?= base_url('assets') ?>/assets/vendors/general/socicon/css/socicon.css" rel="stylesheet"
        type="text/css" />
    <link href="<?= base_url('assets') ?>/assets/vendors/custom/vendors/line-awesome/css/line-awesome.css"
        rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets') ?>/assets/vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet"
        type="text/css" />
    <link href="<?= base_url('assets') ?>/assets/vendors/custom/vendors/flaticon2/flaticon.css" rel="stylesheet"
        type="text/css" />
    <link href="<?= base_url('assets') ?>/assets/vendors/custom/vendors/fontawesome5/css/all.min.css" rel="stylesheet"
        type="text/css" />
    <!--end:: Global Optional Vendors -->

    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="<?= base_url('assets') ?>/assets/demo/demo7/base/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles -->

    <link rel="shortcut icon" href="<?= base_url('assets') ?>/img/favicon.png" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.10.0/dist/sweetalert2.all.min.js"></script>
</head>

<!-- end::Head -->

<!-- begin::Body -->

<body
    class="kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed kt-aside--minimize kt-page--loading">

    <!-- begin:: Page -->

    <!-- begin:: Header Mobile -->
    <div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
        <div class="kt-header-mobile__logo">
            <a href="<?= site_url('guru') ?>">
                <img alt="Logo" src="<?= base_url('assets') ?>/img/logo.png" width="90px;" />
            </a>
        </div>
        <div class="kt-header-mobile__toolbar">
            <button class="kt-header-mobile__toolbar-toggler kt-header-mobile__toolbar-toggler--left"
                id="kt_aside_mobile_toggler"><span></span></button>
            <button class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler"><span></span></button>
            <button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i
                    class="flaticon-more"></i></button>
        </div>
    </div>
    <!-- end:: Header Mobile -->

    <div class="kt-grid kt-grid--hor kt-grid--root">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

            <!-- begin:: Aside -->
            <button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
            <div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop"
                id="kt_aside">
                <div class="kt-aside__brand kt-grid__item " id="kt_aside_brand">
                    <div class="kt-aside__brand-logo">
                        <a href="<?= site_url('guru') ?>">
                            <img alt="Logo" width="35px;" src="<?= base_url('assets') ?>/img/favicon.png" />
                        </a>
                    </div>
                </div>
                <div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
                    <div id="kt_aside_menu" class="kt-aside-menu  kt-aside-menu--dropdown " data-ktmenu-vertical="1"
                        data-ktmenu-dropdown="1" data-ktmenu-scroll="0">
                        <ul class="kt-menu__nav ">
                            <li class="kt-menu__item" aria-haspopup="true">
                                <a href="<?= site_url('guru') ?>" class="kt-menu__link">
                                    <i class="kt-menu__link-icon flaticon2-protection"></i>
                                    <span class="kt-menu__link-text">Dashboard</span>
                                </a>
                            </li>
                            <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                                data-ktmenu-submenu-toggle="click">
                                <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                                    <i class="kt-menu__link-icon flaticon2-calendar-5"></i>
                                    <span class="kt-menu__link-text">Tambah</span>
                                    <i class="kt-menu__ver-arrow la la-angle-right"></i>
                                </a>
                                <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                    <ul class="kt-menu__subnav">
                                        <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true">
                                            <span class="kt-menu__link"><span
                                                    class="kt-menu__link-text">Tambah</span></span>
                                        </li>
                                        <li class="kt-menu__item " aria-haspopup="true">
                                            <a href="<?= site_url('guru/add_materi') ?>" class="kt-menu__link ">
                                                <i class="kt-menu__link-icon la la-commenting"></i>
                                                <span class="kt-menu__link-text">Materi</span>
                                            </a>
                                        </li>
                                        
                                        <li class="kt-menu__item " aria-haspopup="true">
                                            <a href="<?= site_url('guru/data_nilai') ?>" class="kt-menu__link ">
                                                <i class="kt-menu__link-icon la la-star-o"></i>
                                                <span class="kt-menu__link-text">Nilai</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="kt-menu__item kt-menu__item--active kt-menu__item--here" aria-haspopup="true">
                                <a href="<?= site_url('guru/data_materi') ?>" class="kt-menu__link">
                                    <i class="kt-menu__link-icon flaticon2-books"></i>
                                    <span class="kt-menu__link-text">Data Materi</span>
                                </a>
                            </li>
                            <li class="kt-menu__item" aria-haspopup="true">
                                <a href="<?= site_url('guru/data_nilai') ?>" class="kt-menu__link">
                                    <i class="kt-menu__link-icon flaticon2-checking"></i>
                                    <span class="kt-menu__link-text">Data Nilai</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="kt-aside-menu-overlay"></div>
            <!-- end:: Aside -->

            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

                <!-- begin:: Header -->
                <div id="kt_header" class="kt-header kt-grid kt-grid--ver  kt-header--fixed ">
                    <button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i
                            class="la la-close"></i></button>
                    <div class="kt-header-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_header_menu_wrapper">
                        <div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile  kt-header-menu--layout- ">
                            <ul class="nav navbar-nav menu_nav ">
                                <li class="kt-menu__item" aria-haspopup="true"><a href="<?= site_url('guru') ?>"
                                        class="kt-menu__link "><span class="kt-menu__link-text">Dashboard</span></a>
                                </li>
                                <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel active"
                                    data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a href="javascript:;"
                                        class="kt-menu__link kt-menu__toggle"><span
                                            class="kt-menu__link-text">Materi</span><i
                                            class="kt-menu__hor-arrow la la-angle-down"></i></a>
                                    <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
                                        <ul class="kt-menu__subnav">
                                            <li class="kt-menu__item kt-menu__item--active" aria-haspopup="true"><a
                                                    href="<?= site_url('guru/data_materi') ?>" class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                        class="kt-menu__link-text">Data Materi</span></a></li>
                                            <li class="kt-menu__item " aria-haspopup="true"><a
                                                    href="<?= site_url('guru/add_materi') ?>" class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                        class="kt-menu__link-text">Tambah Materi</span></a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- begin:: Header Topbar -->
                    <div class="kt-header__topbar">
                        <div class="kt-header__topbar-item kt-header__topbar-item--user">
                            <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
                                <span class="kt-header__topbar-icon"><i
                                        class="flaticon2-user-outline-symbol"></i></span>
                            </div>
                            <div
                                class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">
                                <div class="kt-user-card kt-user-card--skin-light kt-notification-item-padding-x">
                                    <div class="kt-user-card__avatar">
                                        <img class="kt-hidden-" alt="Pic"
                                            src="<?= base_url('assets') ?>/assets/media/users/default.jpg" />
                                    </div>
                                    <div class="kt-user-card__name font-weight-bold">
                                        Hai!, &nbsp;
                                        <?php
                                        if (isset($user) && is_array($user) && isset($user['nama_guru'])) {
                                            echo $user['nama_guru'];
                                        } else {
                                            echo 'Guru';
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="kt-notification">
                                    <div class="kt-notification__custom">
                                        <a href="<?= base_url('welcome/logout') ?>"
                                            class="btn btn-label-brand btn-sm btn-bold">Log Out</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end:: Header Topbar -->
                </div>
                <!-- end:: Header -->

                <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">

                    <!-- begin:: Subheader -->
                    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
                        <div class="kt-subheader__main">
                            <h1 class="kt-subheader__title font-weight-bold"
                                style="font-size: 28px !important; letter-spacing:-1px; line-height:3px;">
                                Data Materi </h1>
                            <span class="kt-subheader__separator kt-hidden"></span>
                            <div class="kt-subheader__breadcrumbs">
                                <a href="<?= site_url('guru') ?>" class="kt-subheader__breadcrumbs-home"><i
                                        class="flaticon2-shelter"></i></a>
                                <span class="kt-subheader__breadcrumbs-separator"></span>
                                <a href="#" class="kt-subheader__breadcrumbs-link">Data Materi</a>
                            </div>
                        </div>
                    </div>
                    <!-- end:: Subheader -->

                    <!-- begin:: Content -->
                    <div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="kt-portlet kt-portlet--mobile">
                                    <div class="kt-portlet__head kt-portlet__head--lg"
                                        style="background: linear-gradient(135deg, #1bc5bd 0%, #3dd5cd 100%); border-radius: 6px 6px 0 0;">
                                        <div class="kt-portlet__head-label">
                                            <span class="kt-portlet__head-icon">
                                                <i class="flaticon2-books" style="color: #fff;"></i>
                                            </span>
                                            <h3 class="kt-portlet__head-title font-weight-bold" style="color: #fff;">
                                                Data Materi Saya
                                            </h3>
                                        </div>
                                        <div class="kt-portlet__head-toolbar">
                                            <div class="kt-portlet__head-wrapper">
                                                <a href="<?= site_url('guru/add_materi') ?>"
                                                    class="btn btn-brand btn-elevate btn-icon-sm"
                                                    style="background-color: #fff; color: #1bc5bd; border-color: #fff; font-weight: bold;">
                                                    <i class="la la-plus"></i> Tambah Materi
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="kt-portlet__body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover" id="materiTable">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Mata Pelajaran</th>
                                                        <th>Video</th>
                                                        <th>Deskripsi</th>
                                                        <th>Kelas</th>
                                                        <th style="width: 150px;">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php if (!empty($materi)): ?>
                                                        <?php foreach ($materi as $m): ?>
                                                            <tr>
                                                                <td><?= $m['id'] ?></td>
                                                                <td><?= $m['nama_mapel'] ?></td>
                                                                <td>
                                                                    <a href="<?= base_url('assets/materi_video/' . $m['video']) ?>"
                                                                        target="_blank" class="btn btn-outline-info btn-sm">
                                                                        <i class="la la-play-circle"></i> <?= $m['video'] ?>
                                                                    </a>
                                                                </td>
                                                                <td><?= (strlen($m['deskripsi']) > 100) ? substr($m['deskripsi'], 0, 100) . '...' : $m['deskripsi'] ?>
                                                                </td>
                                                                <td>
                                                                    <span class="kt-badge kt-badge--brand kt-badge--inline">
                                                                        Kelas <?= $m['kelas'] ?>
                                                                    </span>
                                                                </td>
                                                                <td>
                                                                    <a href="<?= site_url('guru/edit_materi/' . $m['id']) ?>"
                                                                        class="btn btn-info btn-sm">
                                                                        <i class="la la-edit"></i> Edit
                                                                    </a>
                                                                    <a href="#"
                                                                        onclick="confirmDelete('<?= site_url('guru/delete_materi/' . $m['id']) ?>')"
                                                                        class="btn btn-danger btn-sm">
                                                                        <i class="la la-trash"></i> Hapus
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        <?php endforeach; ?>
                                                    <?php else: ?>
                                                        <tr>
                                                            <td colspan="6" class="text-center text-muted py-4">Belum ada materi
                                                                yang Anda unggah.</td>
                                                        </tr>
                                                    <?php endif; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- begin:: Footer -->
                        <div class="kt-footer kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop">
                            <div class="kt-footer__copyright">
                                2020&nbsp;&copy;&nbsp;<a href="https://syauqizaidan.github.io/" target="_blank"
                                    class="kt-link">Syaauqi Zaaidan & Descienfy</a>
                            </div>
                            <div class="kt-footer__menu">
                                Made with &nbsp; <span class="" style="color: red"> &#10084;</span> &nbsp; by Syaauqi
                            </div>
                        </div>
                        <!-- end:: Footer -->
                    </div>
                </div>
            </div>

            <!-- end:: Page -->

            <!-- begin::Scrolltop -->
            <div id="kt_scrolltop" class="kt-scrolltop">
                <i class="fa fa-arrow-up"></i>
            </div>
            <!-- end::Scrolltop -->

            <!-- begin::Global Config -->
            <script>
                var KTAppOptions = {
                    "colors": {
                        "state": {
                            "brand": "#4dbf1c",
                            "light": "#ffffff",
                            "dark": "#282a3c",
                            "primary": "#5867dd",
                            "success": "#34bfa3",
                            "info": "#36a3f7",
                            "warning": "#ffb822",
                            "danger": "#fd3995"
                        },
                        "base": {
                            "label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
                            "shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
                        }
                    }
                };
            </script>
            <!-- end::Global Config -->

            <!--begin:: Global Mandatory Vendors -->
            <script src="<?= base_url('assets') ?>/assets/vendors/general/jquery/dist/jquery.js"
                type="text/javascript"></script>
            <script src="<?= base_url('assets') ?>/assets/vendors/general/popper.js/dist/umd/popper.js"
                type="text/javascript"></script>
            <script src="<?= base_url('assets') ?>/assets/vendors/general/bootstrap/dist/js/bootstrap.min.js"
                type="text/javascript"></script>
            <script src="<?= base_url('assets') ?>/assets/vendors/general/js-cookie/src/js.cookie.js"
                type="text/javascript"></script>
            <script src="<?= base_url('assets') ?>/assets/vendors/general/moment/min/moment.min.js"
                type="text/javascript"></script>
            <script src="<?= base_url('assets') ?>/assets/vendors/general/tooltip.js/dist/umd/tooltip.min.js"
                type="text/javascript"></script>
            <script src="<?= base_url('assets') ?>/assets/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js"
                type="text/javascript"></script>
            <script src="<?= base_url('assets') ?>/assets/vendors/general/sticky-js/dist/sticky.min.js"
                type="text/javascript"></script>
            <script src="<?= base_url('assets') ?>/assets/vendors/general/wnumb/wNumb.js" type="text/javascript"></script>
            <!--end:: Global Mandatory Vendors -->

            <!--begin::Global Theme Bundle(used by all pages) -->
            <script src="<?= base_url('assets') ?>/assets/demo/demo7/base/scripts.bundle.js"
                type="text/javascript"></script>
            <!--end::Global Theme Bundle -->

            <!--begin::Global App Bundle(used by all pages) -->
            <script src="<?= base_url('assets') ?>/assets/app/bundle/app.bundle.js" type="text/javascript"></script>
            <!--end::Global App Bundle -->

            <!-- Swal Success alerts -->
            <?php if ($this->session->flashdata('success-materi')): ?>
                <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil!',
                        text: '<?= $this->session->flashdata('success-materi') ?>',
                        showConfirmButton: false,
                        timer: 2500
                    })
                </script>
            <?php endif; ?>

            <?php if ($this->session->flashdata('delete-materi')): ?>
                <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Dihapus!',
                        text: '<?= $this->session->flashdata('delete-materi') ?>',
                        showConfirmButton: false,
                        timer: 2500
                    })
                </script>
            <?php endif; ?>

            <script>
                function confirmDelete(url) {
                    Swal.fire({
                        title: 'Apakah Anda yakin?',
                        text: "Data materi dan file videonya akan dihapus permanen!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Ya, Hapus!',
                        cancelButtonText: 'Batal'
                    }).then((result) => {
                        if (result.value) {
                            window.location.href = url;
                        }
                    });
                }
            </script>
</body>

<!-- end::Body -->

</html>

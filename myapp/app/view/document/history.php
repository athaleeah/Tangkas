 <!-- TOP Nav Bar HOME -->
<div class="iq-top-navbar">
    <div class="iq-navbar-custom">
        <nav class="navbar navbar-expand-lg navbar-light p-0">
            <div class="iq-menu-bt d-flex align-items-center">
                <div class="wrapper-menu">
                    <div class="main-circle">
                        <i class="ri-menu-line"></i>
                    </div>
                    <div class="hover-circle">
                        <i class="ri-close-fill"></i>
                    </div>
                </div>
                <div class="iq-navbar-logo d-flex justify-content-between ml-3">
                    <a href="index.php" class="header-logo">
                        <img src="<?php echo APP_PATH; ?>/images/Tangkas_logo.png" class="img-fluid rounded" alt="">
                        <span>Tangkas</span>
                    </a>
                </div>
            </div>

            <div class="iq-search-bar" id="search-bar-text">
                <div class="container">
                    <div class="logo">
                        <img src="<?php echo APP_PATH; ?>/images/Tangkas_logo.png" alt="Tangkas Logo" width="30" height="30">
                    </div>
                    <h6 class="small-text bold-text">Tangkap Kekerasan Seksual</h6>
                </div>
            </div>

            <!-- Search form (commented out) -->
            <!--<form action="#" class="searchbox">
                <input type="text" class="text search-input" placeholder="Type here to search..." style="color: #9DB2BF;">
                <a class="search-link" href="#"><i class="ri-search-line"></i></a>
            </form>-->

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
                <i class="ri-menu-3-line"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto navbar-list">
                    <li class="line-height">
                        <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                            <div class="caption">
                                <h6 class="mb-0 line-height">
                                    <b><?php echo $data['datalogin']["full_name"]; ?></b>
                                </h6>
                            </div>
                            <img src="<?php echo APP_PATH; ?>/images/user/1.1.png" class="img-fluid rounded ml-3" alt="user">
                        </a>

                        <div class="iq-sub-dropdown iq-user-dropdown">
                            <div class="iq-card shadow-none m-0">
                                <div class="iq-card-body p-0">
                                    <div class="bg-primary p-3">
                                        <h5 class="mb-0 text-white line-height">Hello, <?php echo $data['datalogin']["full_name"]; ?></h5>
                                    </div>
                                    <a href="<?php echo APP_PATH; ?>/profile_ctrl/profile" class="iq-sub-card iq-bg-primary-hover">
                                        <div class="media align-items-center">
                                            <div class="rounded iq-card-icon iq-bg-primary">
                                                <i class="ri-profile-line"></i>
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0">My Profile</h6>
                                                <p class="mb-0 font-size-12">View and modify your personal details.</p>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="d-inline-block w-100 text-center p-3">
                                        <a class="bg-primary iq-sign-btn" href="<?php echo APP_PATH; ?>/login/user" role="button">
                                            Sign out
                                            <i class="ri-login-box-line ml-2"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<!-- TOP Nav Bar END -->

<!-- Page Content -->
<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">History</h4>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <div class="table-responsive">
                            <div class="row justify-content-between">
                                <div class="col-sm-12 col-md-6">
                                    <div id="user_list_datatable_info" class="dataTables_filter">
                                        <form class="mr-3 position-relative">
                                            <div class="form-group mb-0">
                                                <input type="search" class="form-control" id="exampleInputSearch" placeholder="Search" aria-controls="user-list-table">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                
                            </div>

                            <table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid" aria-describedby="user-list-page-info">
                                <thead>
                                    <tr>
										<th class="text-center" width="5%">#</th>
                                        <th class="text-center" width="20%">Users</th>
                                        <th class="text-center" width="50%">Laporan</th>
                                        <th class="text-center" width="20%">Detail Tambahan</th>
                                        <th class="text-center" width="20%">Status Laporan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $count = 1;
                                    foreach ($data['datareport'] as $report) : ?>
                                        <tr>
                                            
                                            <td>
												<div class="flex align-items-center" "text-center">
													<img class="rounded img-fluid avatar-40"  src="<?php echo APP_PATH; ?>/images/user/06.jpg" alt="profile">
													
													
												</div>
											</td>
											<td>
												<div class="flex align-items-center" "text-center">
													
													<i class="ri-user-add-line"> <?= $report['full_name'] ?></i><br>
													
												</div>
											</td>
											<td>
												<div class="flex align-items-center">
													<i class="text-center">"<?= $report['judul'] ?>"</i><br>
													<i class="ri-file-text-line"> <?= $report['deskripsi_pengaduan'] ?></i><br>

													<i class="ri-map-pin-line"> <?= $report['lokasi'] ?></i><br>
												</div>
											</td>
											<td>
												<div class="flex align-items-center">
													<i class="ri-calendar-line"> <?= $report['tanggal_kejadian'] ?></i>
													<i class="ri-time-line"> <?= $report['waktu_kejadian'] ?></i><br>
													<i class="ri-building-line"> <?=$report['lapor_pihak_terkait'] ?> lapor ke pihak terkait.</i><br>
													<i class="ri-camera-2-line"> <?= $report['path_bukti_foto'] ?></i><br>
													<i class="ri-shield-user-line"> Status Pelapor  : <?= $report['status_pelapor'] ?></i><br>
													<i class="ri-shield-user-line"> Tanggal Melapor : <?= $report['tanggal_melapor'] ?></i><br>													
												</div>
											</td>
											<td>
												<div>
													<i class=""><?= $report['status_laporan'] ?></i><br>
													</div>
											</td>
										  

                                        </tr>
                                        <?php $count++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
 
                        <div class="row justify-content-between mt-3">
                            <div class="col-sm-12 col-md-6">
                                <div class="dataTables_info" id="user-list-page-info" role="status" aria-live="polite">
                                    Showing 1 to 10 of <?php echo count($data['datareport']); ?> entries
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="dataTables_paginate">
                                    <ul class="pagination justify-content-end">
                                        <li class="paginate_button page-item previous disabled">
                                            <a href="#" class="page-link">Previous</a>
                                        </li>
                                        <li class="paginate_button page-item active">
                                            <a href="#" class="page-link">1</a>
                                        </li>
                                        <li class="paginate_button page-item next">
                                            <a href="#" class="page-link">Next</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Content END -->

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const searchInput = document.getElementById('exampleInputSearch');
        const table = document.getElementById('user-list-table');
        const rows = table.getElementsByTagName('tbody')[0].getElementsByTagName('tr');

        searchInput.addEventListener('keyup', function () {
            const filter = searchInput.value.toLowerCase();
            for (let i = 0; i < rows.length; i++) {
                const cells = rows[i].getElementsByTagName('td');
                let rowContainsSearchTerm = false;
                for (let j = 0; j < cells.length; j++) {
                    const cell = cells[j];
                    if (cell.textContent.toLowerCase().includes(filter)) {
                        rowContainsSearchTerm = true;
                        break;
                    }
                }
                if (rowContainsSearchTerm) {
                    rows[i].style.display = ''; // Tampilkan baris
                } else {
                    rows[i].style.display = 'none'; // Sembunyikan baris
                }
            }
        });
    });
</script>


	    


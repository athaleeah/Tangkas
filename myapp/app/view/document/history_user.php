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
                            <h4 class="card-title">My Report History</h4>
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
                                        <th class="text-center" width="40%">Riwayat Pengiriman Laporan</th>
										<th class="text-center" width="10%">Actions</th>
                                    </tr>
									
									
                                </thead>
                                <tbody> 
                                    <?php 
									$count = 1; 
									foreach ($data['datareport'] as $report) : ?>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <i class="ri-shield-user-line text-success" style="font-size: 20px;"></i>
                                                    <div class="ml-2 flex-grow-1">
                                                        <span class="font-weight-bold">Laporan berhasil dikirimkan</span>
                                                        <div class="text-muted">
                                                            Tanggal: <strong><?= $report['tanggal_melapor'] ?></strong><br> 
															Judul: <strong><?= $report['judul'] ?></strong>
															<td class="text-center">
															 <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="Delete" 
															 onclick="$('#dreport_id').val('<?=$report['id_laporan'];?>');
																	  $('#dreport_name').val('<?=$report['tanggal_melapor'];?>');
																	  $('#dreport_title').val('<?=$report['judul'];?>');
																	  $('#FormDeleteBox').modal('show');">
																<i class="ri-delete-bin-line"></i>
															</a>
															</td>
                                                        </div>
                                                    </div>
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
                                    Showing 1 to <?php echo count($data['datareport']); ?> of <?php echo count($data['datareport']); ?> entries
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

<div class="modal" id="FormDeleteBox">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header" style="background-color: #0d47a1;">
		  <h4 class="modal-title w-100 text-center text-white">Delete Selected Data</h4>
		</div>

      <!--  Modal body -->
      <div class="modal-body">
        <form action="<?php echo APP_PATH; ?>/history_user/deleteHistoryUser1" method="post">
			<div class="mb-3 mt-3"> 
				<input type="text" class="form-control" id="dreport_id" name="dreport_id" style="display: none;">
				<input type="text" class="form-control" id="dreport_name" placeholder="Enter Full Name" name="dreport_name" readonly>
			</div>
			<div class="mb-3 mt-3"> 
				<input type="text" class="form-control" id="dreport_title" placeholder="Enter Title" name="dreport_title" readonly>
			</div>
			<div class="mb-3 mt-3"> 
				Apakah anda yakin untuk menghapus data ini?
			</div>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer" style="background-color: #0d47a1;">
        <button type="button" class="btn btn-info" data-bs-dismiss="modal">Cancel</button>
		<button type="submit" class="btn btn-info" >Delete Data</button> 
		</form>
      </div>
    </div>
  </div>
</div>   

	  
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
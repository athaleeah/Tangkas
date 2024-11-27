$(document).ready(function() {
//document ready function = tempat menyimpan 
	// Handle Button Edit
	$("#btn-edit-profile").click(function() {
		//$('#user_id').val('<?=$user['id'];?>');
		
		// get data
		$txt_name = $('#full_name').val();		//view id
		//$txt_id = $('#id').val();
		$txt_phone = $('#no_hp').val();
		$txt_email = $('#email').val();
		$txt_alamat = $('#alamat').val();
		$txt_gender = $('#gender').val();
		$txt_nik = $('#nik').val();
		
		$txt_judul = $('#input-judul').val();		//view id
		$txt_deskripsi = $('#input-deskripsi').val();
		$txt_longitude = $('#input-longitude').val();
		$txt_latitude = $('#input-latitude').val();
		$txt_lokasi = $('#input-lokasi-bencana').val();
		$txt_tanggal = $('#tanggal-kejadian').val();
		$txt_waktu = $('#waktu-kejadian').val();
		
		$txt_lapor_pihak_terkait = $('#input-lapor-pihak').val();
		$txt_foto = $('#path_bukti_foto').val();
		$txt_status_pelapor = $('#input-status-pelapor').val();
		$txt_status_laporan = $('#input_status_laporan').val();
		$txt_keterangan = $('#keterangan_laporan').val();
		$txt_tanggal_melapor = $('#tanggal_melapor').val();
		
		// set data
		$('#history_judul').val($txt_judul);			// nama dari modal
		$('#history_deskripsi').val($txt_deskripsi);
		$('#history_longitude').val($txt_longitude);
		$('#history_latitude').val($txt_latitude);
		$('#history_lokasi').val($txt_lokasi);
		$('#history_tanggal').val($txt_tanggal);
		$('#history_waktu').val($txt_waktu);
		
		$('#history_lapor').val($txt_lapor_pihak_terkait);
		$('#history_foto').val($txt_foto);
		$('#history_status_pelapor').val($txt_status_pelapor);
		$('#history_status_laporan').val($txt_status_laporan);
		$('#history_tanggal_melapor').val($txt_tanggal_melapor);
		$('#history_keterangan').val($txt_keterangan);
		$('#FormUpdateBox').modal('show');
		
	});
	
	
	$("#btn-change-password").click(function() {
		//$('#user_id').val('<?=$user['id'];?>');
		
		// get data
		$('#FormUpdatePasswordBox').modal('show');				//view id
		$txt_currentpass = $('#current_password').val();
		$txt_newpass = $('#new_password').val();
		$txt_retypenewpass = $('#retype_new_password').val();
		
		// set data
		$('#current_password').val($txt_currentpass);			// nama dari modal
		$('#new_password').val($txt_newpass);
		$('#retype_new_password').val($txt_retypenewpass);
		
		$('#FormUpdatePasswordBox').modal('show');
	});
});
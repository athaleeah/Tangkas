$(document).ready(function() {
    

    // Handle Button Edit
    $("#btn-edit-profile").click(function() {
        // Get data from input fields
        const txtName = $('#input-fullname').val();    // Full name
        const txtPhone = $('#input-phone').val();      // Phone number
        const txtAddress = $('#input-address').val();  // Address
        const txtGender = $('#input-gender').val();    // Gender
        const txtEmail = $('#input-email').val();      // Email
        const txtNIK = $('#input-nik').val();          // NIK

        // Set data in modal
        $('#user_name').val(txtName);
        $('#user_phone').val(txtPhone);
        $('#user_address').val(txtAddress);
        $('#user_gender').val(txtGender);
        $('#user_email').val(txtEmail);
        $('#user_nik').val(txtNIK);

        // Show the update form modal
        $('#FormUpdateBox').modal('show');
    });

    // Handle Change Password Button
    $("#btn-change-password").click(function() {
		


        // If validation passes, open the change password modal
        $('#changePasswordModal').modal('show');
    });
});

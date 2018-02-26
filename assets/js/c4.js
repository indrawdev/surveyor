$('#c4').validate({
    rules: {
        fs_jenis_dokumen: {
            required: true
        },
        fs_file_upload: {
            required: true
        }
    },
    messages: {
        fs_jenis_dokumen: {
            required: "Jenis dokumen..."
        },
        fs_file_upload: {
            required: "File Upload..."
        }
    },
    errorPlacement: function (error, element) {
        error.appendTo(element.parent().prev());
    },
    submitHandler: function (form) {
        $(':mobile-pagecontainer').pagecontainer('change', '#success', {
            reload: false
        });
        return false;
    }
});
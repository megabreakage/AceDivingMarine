
function previewFile() {
    var preview = document.getElementById('preview');
    var file = document.getElementById('mainPhoto').files[0];
    var reader = new FileReader();

    reader.onloadend = function () {
        preview.src = reader.result;
    }

    if (file) {
        reader.readAsDataURL(file);
    } else {
        preview.src = "";
    }
}


function uploadPhoto() {
    var image = $('#mainPhoto').val();

    success: () => {
        $.ajax({
            url: "",
            method: 'POST',
            data: {
                image: image
            },
            success: function (data) {
                console.log(data);
                alert('success');

            },
            error: function () {
                alert('failed');
            }
        });
    }

}

function previewMultiFiles() {
    console.log('Multiple files');
    var preview = document.getElementById('previews');
    var files = document.querySelector('input[type=file]').files;
    var files = document.getElementById('multiUpload').files;

    for (var i = 0; i < files.length; i++) {
        var file = files[i];
        var reader = new FileReader();
        console.log(file);

        reader.onloadend = function () {
            var img = document.createElement('img');
            img.src = reader.result;
            img.style.maxWidth = '200px'; // Adjust the width as needed
            img.style.maxHeight = '100px'; // Adjust the height as needed
            previewPhoto = img;
            preview.appendChild(previewPhoto);
        }

        if (file) {
            reader.readAsDataURL(file);
        }
    }
}

$(document).ready(function () {
    tinymce.init({
        selector: '.rich-text-area',
        height: 300,
        plugins: 'advlist autolink lists link image charmap print preview anchor table',
        toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | link image table',
        content_style: 'body { font-size: 14px; }',
        table_default_styles: { "width": "100%", "border-style": "solid", "border-color": "#E00E78" },
    });
})
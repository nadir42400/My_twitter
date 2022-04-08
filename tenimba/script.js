function file_changed() {
    var selectedFile = document.getElementById('profil').files[0];
    var img = document.getElementById('img')

    var reader = new FileReader();
    reader.onload = function() {

        img.src = this.result;
    }
    reader.readAsDataURL(selectedFile);
}

function file_chang() {
    var selectedFile = document.getElementById('couverture').value;
    console.log(selectedFile)
    var img = document.getElementById('conv')

    var reader = new FileReader();
    reader.onload = function() {

        img.src = this.result;
        console.log(img.src)

    }
}
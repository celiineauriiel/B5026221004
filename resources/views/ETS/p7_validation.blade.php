<html>

<head>
    <title>Validation Form Javascript</title>
    <meta charset="utf-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function validateForm(){
            var nrp = document.getElementById("nrp");
            var msg = document.getElementById("msg");

            //cek hanya yang invalid
            if(nrp.value == "") {
                nrp.focus(); //ini tergantung ux designer nya
                nrp.placeholder = "ex: 5026221004"
                alert("NRP harus diisi!");
                return false;
            }
            //harus 10 digit
            if(nrp.value.length != 10){
                nrp.focus();
                alert("NRP harus 10 digit, Anda memasukkan " + nrp.value.length + " digit");
                return false;
            }
            //yang ada alphabet abc maka invalid
            if(isNaN(nrp.value) == true){ //true jika ada unsur abjad, false jika angka semua
                nrp.focus();
                msg.innerHTML = "NRP harus angka!"; //innerHTML mengubah tulisan dalam tag
                return false;
            }
        }
    </script>
</head>

<body>
    <div class="container">
        <div class="jumbotron">Form Validasi adalah mencegah pengiriman data ke server jika yang invalid atau tidak sesuai constraint database</div>
        <script>
            function validate(){
                console.log("baris 22"); //cara untuk melakukan debugging, untuk melakukan bug //nanti berhentinya disini, di cosole return yang pertama
                return false;
                console.log("baris 24");
                return true;
                console.log("baris 26");
                return false;
                // defaultnya return function adalah true
            }
        </script>
        <form action="https://google.com" method="get" onsubmit="return validateForm();"> <!-- form ada 2 method, yaitu get dan post. get untuk yg non secure, post untuk yang secure atau encrypted. jadi misal password itu lebih cocok pake post, biar ga keliatan. tambahin onsubmit biar kalau ga ngisi apa-apa maka gabisa. kalau ga ditambah maka jika ga ngisi apa apa langsung klik daftar tetap bisa, jadi harus dibuat--> <!--onsubmit return true maka bisa ketujuan, kalau false  maka stop berhenti di form ini, gabisa ke tujuan-->
            <div class="form-group">
                <label for="nrp">NRP :</label>
                <input type="text" class="form-control" id="nrp"> <!--id ini dibaca dari script yg ada di head yg var nrp = document.getElementById("nrp"); -->
                <div id="msg" class="btn-danger"></div>
            </div>
            <input type="submit" value="DAFTAR" class="btn btn-primary">
            <input type="reset" value="ULANGI" class="btn btn-warning">
        </form>
    </div>
</body>

</html>

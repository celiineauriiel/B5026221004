<html>

<head>
    <title>Javascript</title>
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
        function changeText() {
            var span = document.getElementById("output");
            var textBox = document.getElementById("textbox");
            textbox.style.color = "red";
            textBox.style.fontSize = "13pt";
            textBox.style.fontFamily = "Comic Sans MS";
            span.className = "text-success"; //ini untuk langsung ganti 1 class
            //dibawah ini kalau mau ngubah replace me jadi sistem informasi
            //span.innerHTML = "Sistem Informasi";
            //dibawah ini kalau mau ganti : tulisan yang di input, maka outputnya tulisan itu senduri (dia ngubah tulisan replace me)
            span.innerHTML = textBox.value;
            hadiah(); //ini manggil function yg udh dibuat di script yg alert tadi
        }
    </script>
</head>

<body>
    <div class="container-fluid">
        <script>
            function hadiah() {
                alert("Selamat kamu mendapatkan tiket konser Taylor Swift VIP!");
            }
        </script>
        <center><button class="btn btn-primary" onclick="hadiah();">Klik Disini!</button></center>
        <br>
        <button onclick="changeText();" class="btn btn-success">Click me!</button>
        <span id="output">replace me</span>
        <input id="textbox" type="text" class="form-control" /> <!--ini buat bikin textbox, jadi semua ini masuk ke function script diatas, wajib-->
    </div>
</body>

</html>

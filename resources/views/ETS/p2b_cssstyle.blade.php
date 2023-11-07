<html>

    <head>
        <!-- div di seluruh halaman ini, di set seperti i block-->
    <link rel="stylesheet" href="/asset/css/mystyle.css">
        <style>
            div {
                color: aqua;
                font-weight: bold;
                text-align: right;
            }
            .judulhalaman {
                text-align: center;
                font-size: large;
            }
        </style>
    </head>

    <body>
        <div class="judulhalaman"> Welcome bro</div>
        <!-- in line CSS, digunakan ketika ada specifik ke 1 bagian saja-->
        <p style="text-decoration: line-through;color: pink;">Hallo apa kabar hari ini?</p>
        <!-- in page CSS, digunakan ketika ada yang specific ke 1 halaman khusus-->
        <div>Hallo apa kabar hari ini?</div>
        <!-- external CSS, digunakan untuk format umum 1 website-->
        <span>Hallo apa kabar hari ini?</span>
        <p>Last banget ni</p>
    </body>

</html>

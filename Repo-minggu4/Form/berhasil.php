
<!DOCTYPE html>

<html>

<head>

 <title>Pendaftaran Berhasil!</title>

 <style type="text/css">

body {
  background-image: url('bc2.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size:  100% 100%;
}

{

    margin: 0;

    padding: 0;

   }

 * {

  box-sizing: border-box;

}

form {

  padding: 1em;

  background: #f9f9f9;

  border: 1px solid #c1c1c1;

  margin-top: 2rem;

  max-width: 600px;

  margin-left: auto;

  margin-right: auto;

  padding: 1em;

}

form input {

  margin-bottom: 1rem;

  background: #fff;

  border: 1px solid #9c9c9c;

}

form button {

  background: lightgrey;

  padding: 0.7em;

  border: 0;

}



form button:hover {

  background: green;

  color: white;

}

form span a{

  background: lightblue;

  padding: 0.7em;

  border: 0;

  text-decoration: none;

  color: black;

  text-align: center;

}



form span a:hover {

  background: blue;

  color: white;

}





label {

  text-align: right;

  display: block;

  padding: 0.5em 1.5em 0.5em 0;

}

input {

  width: 100%;

  padding: 0.7em;

  margin-bottom: 0.5rem;

}

input:focus {

  outline: 3px solid green;

}

select {

  width: 100%;

  padding: 0.7em;

  margin-bottom: 0.5rem;

}

select:focus {

  outline: 3px solid green;

}

@media (min-width: 400px) {

  form {

    overflow: hidden;

  }

  label {

    float: left;

    width: 200px;

  }

  input {

    float: left;

    width: calc(100% - 200px);

  }



    select {

    float: left;

    width: calc(100% - 200px);

  }

  button {

    float: right;

    width: calc(100% - 200px);

  }

 </style>

 </style>

</head>

<body>

<form>

  <h1> Pendaftaran Berhasil</h1>
  

  <p>

    NISN: <?php echo $_GET["nisn"]; ?><br>
    <br>
    Asal Sekolah: <?php echo $_GET["asal_sekolah"]; ?><br>
    <br>
    Tahun Lulus: <?php echo $_GET["tahun_lulus"]; ?><br>
    <br>
    Ijazah: <?php echo $_GET["upload"]; ?><br>
    <br>
  

    Nama Lengkap: <?php echo $_GET["nama_lengkap"]; ?><br>
    <br>
    NIK: <?php echo $_GET["nik"]; ?><br>
    <br>
    TTL: <?php echo $_GET["tempat_lahir"]; ?> <?php echo $_GET["tanggal_lahir"]; ?><br>
    <br>
    Jenis Kelamin: <?php echo $_GET["jenis_kelamin"]; ?><br>
    <br>
    Alamat Lengkap: <?php echo $_GET["alamat"]; ?><br>
    <br>
    E-mail: <?php echo $_GET["email"]; ?><br>
    <br>

  
    Nomor KK: <?php echo $_GET["nomor_kk"]; ?><br>
    <br>
    Ayah Kandung: <?php echo $_GET["nama_ayah"]; ?><br>
    <br>
    agama: <?php echo $_GET["agama_ayah"]; ?><br>
    <br>
    Pekerjaan: <?php echo $_GET["pekerjaan_ayah"]; ?><br>
    <br>

    Ibu Kandung: <?php echo $_GET["ibu_kandung"]; ?><br>
    <br>
    agama: <?php echo $_GET["agama_ibu"]; ?><br>
    <br>
    Pekerjaan: <?php echo $_GET["pekerjaan_ibu"]; ?><br>
    <br>
    <h1> Silahkan tunggu informasi selanjutnya</h1>
   


  </p>

</form>

</body>

</html> 
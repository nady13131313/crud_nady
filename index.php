<?php 
require 'koneksi.php';
  $tampil = query ("SELECT * FROM blog");

 ?>
 <!DOCTYPE html>
<html>
<head>

  <title><font color=red>MY BLOG</font></title>
</head>

<body>
   
   <link rel="stylesheet" type="text/css" href="style1.css">
</head>
  <header>
    
   
 <div class="jumbotron">
  <h1>Hello, World!</h1>
  

</div>

  

  </header>
  
  <h4> DaftarMenu</h4>
  <nav>
    <ul>
      <li><a href="register.php">add post</a></li>
      <li><a href="log.php">baca post</a></li>
    </ul>
  </nav>
  
  
  <br>
  <br>
  <br>
  

<div class="row">
        <div class="col-lg-4">
          <h2>APA ITU GIT</h2>
         
          <p>Git adalah salah satu sistem pengontrol versi (Version Control System) pada proyek perangkat lunak yang diciptakan oleh Linus Torvalds.

Pengontrol versi bertugas mencatat setiap perubahan pada file proyek yang dikerjakan oleh banyak orang maupun sendiri.

Git dikenal juga dengan distributed revision control (VCS terdistribusi), artinya penyimpanan database Git tidak hanya berada dalam satu tempat saja. </p>
          
        </div>
        <div class="col-lg-4">
          <h2>Kenapa Git Penting Bagi Programmer?</h2>
          <p>Jadi selain untuk mengontrol versi, git juga digunakan untuk kolaborasi.

Saat ini Git menjadi salah satu tool terpopuler yang digunakan pada pengembangan software open souce maupun closed source.

Google, Microsoft, Facebook dan berbagai perusahaan raksasa lainnya menggunakan Git.

Jadi, buat kamu yang punya impian ingin bekerja di sana, maka kamu harus bisa Git.
Selain itu, berikut ini ada beberapa menfaat yang akan kamu rasakan setelah bisa menggunakan Git.

    Bisa menyimpan seluruh versi source code;
    Bisa paham cara kolaborasi dalam proyek;
    Bisa ikut berkontribusi ke poryek open-source;
    Lebih aman digunakan untuk kolaborasi, karena kita bisa tahu apa yang diubah dan siapa yang mengubahnya.
    Bisa memahami cara deploy aplikasi modern;
    Bisa membuat blog dengan SSG.
    dan sebagainya…</p>
        
       </div>
        <div class="col-lg-4">
          <h2>Apa Selanjutnya?</h2>
          <p>Jadi, apakah kamu sudah mengenal git?

Bagus, selanjutnya silahkan ikuti tutorial git berikut ini.
</p>
<p class="text-danger">https://www.youtube.com/watch?v=Pq05cauucs8</p>
     
        </div>
      </div>
      </body>
</html>
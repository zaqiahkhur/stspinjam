<?php
$koneksi = mysqli_connect("localhost", "root", "", "peminjaman_barang") or die;

function getalldata($tablename)
{
  global $koneksi;
  $hasil= mysqli_query($koneksi, "SELECT * FROM $tablename");
   $rows = [];
    while ($row = mysqli_fetch_assoc($hasil)) 
    {
        $rows[] = $row;
    }
    return $rows;
}
function getpinjam($no_identitas)
{
    global $koneksi;
  $hasil=mysqli_query($koneksi,"SELECT * FROM peminjaman WHERE no_identitas = '$no_identitas'");
    $rows=[];
        while($row = mysqli_fetch_assoc($hasil))
        {
            $rows[] = $row;
        }
        return $rows;
}

function tampildata_user($tablename){
  global $koneksi;
  $hasil=mysqli_query($koneksi,"SELECT * FROM $tablename");
   $rows = [];
    while ($row = mysqli_fetch_assoc($hasil)) 
    {
        $rows[] = $row;
    }
    return $rows;
}

function getdata_peminjaman(){
  global $koneksi;
  $hasil=mysqli_query($koneksi,"SELECT peminjaman.id,peminjaman.tgl_peminjaman,peminjaman.tgl_kembali,peminjaman.no_identitas,user.nama,peminjaman.kode_barang,barang.nama_barang,peminjaman.jumlah,peminjaman.keperluan,peminjaman.status FROM peminjaman INNER JOIN user ON peminjaman.no_identitas= USER.no_identitas INNER JOIN barang ON peminjaman.kode_barang=barang.kode_barang;");
}


          function editdata($tablename,$id)
          {
            global $koneksi;
            $hasil=mysqli_query($koneksi, "select * from $tablename where id = $id");
            return $hasil;
          }

           function updatedata($table,$data,$id)
          {
            global $koneksi;
            $sql = "UPDATE $table SET nama_barang  = '$data' WHERE id = '$id'";
            $hasil=mysqli_query($koneksi,$sql);
            return $hasil;
          } 

          function Delete($tablename,$id)
          {
            global $koneksi;
            $hasil=mysqli_query($koneksi,"delete from $tablename where id='$id'");
            return $hasil;
          }
          
          function kembalikanBarang($id,$jumlah,$kd)
          {
            global $koneksi;
            $updateTanggalKembali = "UPDATE peminjaman AS pm SET pm.tgl_kembali  = NOW(),
            pm.status='kembali'
             WHERE id = '$id'";
            $excecutionTglkembali=mysqli_query($koneksi,$updateTanggalKembali);
            
            $updatestok="UPDATE barang SET jumlah  = jumlah+'$jumlah' WHERE kode_barang = '$kd'";
            $excecutionUpdateStock=mysqli_query($koneksi,$updatestok);
            
            return $excecutionTglkembali;
          }


          function cek_login($username,$password)
          {
            global $koneksi;
            $uname = $username;
            $upass = $password;

            $hasil= mysqli_query($koneksi,"select * from user where username='$uname' and password='$upass'");
            $cek=mysqli_num_rows($hasil);
            if($cek > 0){
              $sql= mysqli_fetch_array($hasil);
                $_SESSION ['id']=$sql['id'];
                $_SESSION ['username']=$sql['username'];
                $_SESSION['no_identitas']=$sql['no_identitas'];
                $_SESSION ['role']=$sql['role'];
                $_SESSION ['isLogin']='true';
              return $_SESSION;
            }else{
              return false;
            }

          }
          function inputdata($inputdata)
          {
            global $koneksi;
            $sql=mysqli_query($koneksi, $inputdata);
            return $sql;
          }

          function jumlah()
          {
            global $koneksi;
            $getBarang=mysqli_query($koneksi,"SELECT COUNT(*) AS jumlah FROM barang") ;
            $rowCount = $getBarang->fetch_assoc();
            $rowCount['jumlah'];
           
            
            
            // $getBarang=mysqli_query($koneksi,"SELECT nama_barang AS nama, kategori AS kategori FROM barang") ;
            // $rowBarang= $getBarang->fetch_assoc();
            // $rowBarang['nama'];
            // $rowBarang['kategori'];
            
            // return $rowCount + $rowBarang;
            return $rowCount ;
          }
          function jumlahpinjam()
          {
            global $koneksi;
             $getpeminjaman=mysqli_query($koneksi,"SELECT COUNT(*) AS jumlah FROM peminjaman") ;
            $rowCountpeminjaman = $getpeminjaman->fetch_assoc();
            $rowCountpeminjaman['jumlah'];
            return $rowCountpeminjaman;
          }
             function jumlahUser()
          {
            global $koneksi;
            $getuser=mysqli_query($koneksi,"SELECT COUNT(*) AS jumlah FROM user") ;
            $rowCountuser = $getuser->fetch_assoc();
            $rowCountuser['jumlah'];
            return $rowCountuser;
          }

      function barangTerbanyakdiPinjam()
      {
        global $koneksi;
        $pinjam=mysqli_query($koneksi,"SELECT nama_barang AS nama,SUM(jumlah) AS jumlah FROM barang GROUP BY nama ORDER BY jumlah  LIMIT 1");
        $rowCountpinjam=$pinjam->fetch_assoc();
        $rowCountpinjam['nama'];

        return $rowCountpinjam;
      }

      function cobaGet1()
      {
        global $koneksi;
        $pinjam=mysqli_query($koneksi,"SELECT br.nama_barang as nb,pm.kode_barang AS kode,
        SUM(pm.jumlah) AS total1 
        FROM peminjaman as pm
        inner join barang as br on br.kode_barang = pm.kode_barang
        WHERE pm.kode_barang = 5678");
        $rowCountpinjam=$pinjam->fetch_assoc();
        $rowCountpinjam['kode'];
        $rowCountpinjamTotal1 = $rowCountpinjam['total1'];
        $rowCountpinjamNama1 = $rowCountpinjam['nb'];

        $pinjam1=mysqli_query($koneksi,"SELECT br.nama_barang as nb2,pm.kode_barang AS kode2,
        SUM(pm.jumlah) AS total2 
        FROM peminjaman as pm
        inner join barang as br on br.kode_barang = pm.kode_barang
        WHERE pm.kode_barang = 8910");
        $rowCountpinjam1=$pinjam1->fetch_assoc();
        $rowCountpinjam1['kode2'];
        $rowCountpinjamTotal2 = $rowCountpinjam1['total2'];
        $rowCountpinjamNama2 = $rowCountpinjam1['nb2'];


        $rowTerbayak = "";        

        if ($rowCountpinjamTotal1 > $rowCountpinjamTotal2){
          $rowTerbayak = $rowCountpinjamNama1;
        }else{
          $rowTerbayak = $rowCountpinjamNama2;
        }

        // echo $rowCountpinjam['kode'];
        // echo $rowCountpinjam1['kode'];



        return $rowTerbayak;
      }

?>
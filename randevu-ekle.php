<?php

@$baglanti = new mysqli('localhost', 'root', '', 'database'); // Veritabanı bağlantımızı yapıyoruz.
    if(mysqli_connect_error()) //Eğer hata varsa yazdırıyoruz 
    {
        echo mysqli_connect_error();
        exit; //eğer bağlantıda hata varsa PHP çalışmasını sonlandırıyoruz.
    }

$baglanti->set_charset("utf8"); // Türkçe karakter sorunu olmaması için utf8'e çeviriyoruz.



?>

 
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style.css">


</head>
<body>



    <div class="container">
        <div class="login-box">
        <div class="row">
      
        </div>

    </div>

</div>

<div style="background-color: #fff" class="container">
<div class="col-md-9 login-lef">
<form action="" method="post">
    <h2>Randevu Liste</h2>
    <table class="table">
        
        <tr>
            <td>Kuafor Ad</td>
            <td><input type="text" name="KuaforAd" class="form-control" ></td>
        </tr>

        <tr>
            <td>Tarih</td>
            <td><input type="text" name="Tarih" class="form-control" placeholder="dd/mm/yy" ></td>
        </tr>

        <tr>
            <td>İşlem Türü</td>
            <td><input type="text" name="Kesim" class="form-control" ></td>
        </tr>


        <tr>
            <td></td>
            <td><input class="btn btn-primary"  type="submit" value="Ekle"></td>
        </tr>

    </table>

</form>


<?php 

if ($_POST) { // Sayfada post olup olmadığını kontrol ediyoruz.

    // Sayfa yenilendikten sonra post edilen değerleri değişkenlere atıyoruz
    $KuaforAd = $_POST['KuaforAd'];
    $Tarih = $_POST['Tarih']; 
    $Kesim = $_POST['Kesim'];

    if ($KuaforAd<>"" && $Tarih<>"") { 
    // Veri alanlarının boş olmadığını kontrol ettiriyoruz. Başka kontrollerde yapabilirsiniz.
        
         // Veri ekleme sorgumuzu yazıyoruz.
        if ($baglanti->query("INSERT INTO randevu (KuaforAd, Tarih,Kesim) VALUES ('$KuaforAd','$Tarih','$Kesim')")) 
        {
            echo "Randevu  Eklendi"; // Eğer veri eklendiyse eklendi yazmasını sağlıyoruz.
        }
        else
        {
            echo "Hata oluştu";
        }

    }

}

?>
</div>

<div class="col-md-7">
<table class="table">
    
    <tr>
        <th>Kuafor Ad</th>
        <th>Tarih</th>
        <th>İşlem Türü</th>
        <th></th>
        <th></th>
    </tr>

<!-- Şimdi ise verileri sıralayarak çekmek için PHP kodlamamıza geçiyoruz. -->

<?php 

$sorgu = $baglanti->query("SELECT * FROM randevu"); // Makale tablosundaki tüm verileri çekiyoruz.

while ($sonuc = $sorgu->fetch_assoc()) { 

$id = $sonuc['id'];
$KuaforAd = $sonuc['KuaforAd']; // Veritabanından çektiğimiz id satırını $id olarak tanımlıyoruz.
$Tarih = $sonuc['Tarih'];
$Kesim = $sonuc['Kesim'];

// While döngüsü ile verileri sıralayacağız. Burada PHP tagını kapatarak tırnaklarla uğraşmadan tekrarlatabiliriz. 
?>
    
    <tr>
        <td><?php echo $KuaforAd; // Yukarıda tanıttığımız gibi alanları dolduruyoruz. ?></td>
        <td><?php echo $Tarih; ?></td>
        <td><?php echo $Kesim; ?></td>
        
        <td><a href="sil.php?id=<?php echo $id; ?>" class="btn btn-danger">Sil</a></td>
    </tr>

<?php 
} 
// Tekrarlanacak kısım bittikten sonra PHP tagının içinde while döngüsünü süslü parantezi kapatarak sonlandırıyoruz. 
?>

</table>
</div>
</div>

    





</body>
</html>
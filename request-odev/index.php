<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input name="sayi" type="text" placeholder="sayı giriniz">
        <button type="submit">Gönder</button>
        <?php
            function check_mod($value,$mod)
            {
                return $value%$mod;
            }
            $mod = 3;
            if($_POST['sayi'] != '')
            {
                $sayi = is_numeric($_POST['sayi']) ? doubleval($_POST['sayi']) : null;
                if (!is_null($sayi))
                {
                    $kalan = check_mod($sayi,$mod);
                    if ($kalan != 0)
                    {
                        $onceki_fark = $sayi-floor($sayi/$mod)*$mod;
                        $sonraki_fark = (floor($sayi/$mod)+1)*$mod-$sayi;
                        $en_yakin_deger = 0;
                        if ($onceki_fark < $sonraki_fark) $en_yakin_deger =  $sayi - $onceki_fark;
                        else $en_yakin_deger =  $sayi + $sonraki_fark;
                        echo  "<span style='color: red'>".$mod."'a tam bölünemiyor.En yakın değer ".$en_yakin_deger."</span>";
                    }
                    else echo "<span style='color: green'>".$mod."'a tam bölünüyor"."</span>";
                }
                else echo  "<span style='color: red'>Geçersiz değer</span>";
            }
            else echo  "<span style='color: red'>Boş değer</span>";



        ?>
    </form>
</body>
</html>
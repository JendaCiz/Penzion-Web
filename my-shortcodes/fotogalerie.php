<div class="foto">
    <?php
        $slozka = "./vendor/source/archiv/";
        $poleNazvuVsechSouboruVeSlozce = scandir($slozka);

        //var_dump($poleNazvuVsechSouboruVeSlozce);

        foreach ($poleNazvuVsechSouboruVeSlozce as $nazevSouboru) {
            if ($nazevSouboru != "." && $nazevSouboru != ".."){
                echo "<a href='{$slozka}{$nazevSouboru}'><img src='{$slozka}{$nazevSouboru}' alt='obrazek'/></a>";
            }
            
        }
    ?>
</div>
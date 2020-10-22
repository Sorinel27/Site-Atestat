<?php
  session_start();
  require 'conectare.php';
?>

<!DOCTYPE html>
<html lang="ro">
  <head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta charset="utf-8">
    <title>Best PCs! Largest IT Retailer Online </title>
    <script src="librariep5.js"></script>
    <script src="p5.sound.js"></script>
    <script src="particles.js"></script>
    <script src="core.js"></script>
  </head>
  <body>
    <?php

if(isset($_SESSION['id']))
{
  echo 'AM INTRAT';
}
          ?>
    <div id="upbox">
      <div id="inupbox" class="inupbox1">
        PRODUSE
      </div>
      <div id="inupbox" class="inupbox2">
        PROMOTII
      </div>
      <div id="inupbox" class="inupbox3">
        PERIFERICE
      </div>
      <a href="asistenta.php">
        <div id="inupbox" class="inupbox4">
          ASISTENTA
        </div>
      </a>
      <a href="contact.php">
        <div id="inupbox" class="inupbox5">
          CONTACT
        </div>
      </a>
    </div>
    <div class="sales">
      <div id="desktop">
        SISTEME PC
        <div id="itembox">
        <a href="">
            <div id="itembox0">
          Sistem Gaming Corvus, AMD Ryzen 3 3200G 3.6GHz, 4 nuclee, 8GB DDR4, 1TB HDD, AMD Radeon™ Vega 8
          <br>
         (PRET 1.799,99 RON)
          <br>
          <img src="https://5.grgs.ro/images/products/1/1634078/1637356/thumbnails/gaming-corvus-amd-ryzen-3-2200g-35ghz-4-nuclee-8gb-ddr4-1tb-hdd-amd-radeon-vega-8-53403fe86777173c53af50da7ba93f6e.jpg" width="140" height="120">
            
          </div>
        </a>
        <a href="">
            <div id="itembox1">
          Gaming Mamba, AMD Ryzen 7 3700X 3.6GHz, 16GB DDR4, 1TB SSD, RX 5700 XT 8GB GDDR6, Iluminare RGB
          <br>
         (PRET 6.899,99 RON)
          <br>
          <img src="https://4.grgs.ro/images/products/1/9943/2014286/thumbnails/gaming-mamba-amd-ryzen-7-3700x-36ghz-16gb-ddr4-1tb-ssd-rx-5700-xt-8gb-gddr6-iluminare-rgb-7870c14df42ad98c14ba5e3449e0586e.jpg" width="140" height="120">
            
          </div>
        </a>
        <a href="">
          <div id="itembox2">
            Gaming Raptor5 AMD, AMD Ryzen 5 2600 3.4GHz, 6 nuclee, 8GB DDR4, 960GB SSD, GTX 1660, Iluminare RGB
          <br>
         (PRET 4.199,99 RON)
          <br>
          <img src="https://4.grgs.ro/images/products/1/6763/1867182/thumbnails/gaming-raptor5-amd-amd-ryzen-5-2600-34ghz-6-nuclee-8gb-ddr4-960gb-ssd-gtx-1660-iluminare-rgb-6d205dec6f4a230bbf5820e8d09fc1b7.jpg" width="140" height="120">
          </div>
        </a>
        <a href="">
          <div id="itembox3">
            Gaming Balaur by HyperX, AMD Ryzen 5 2600 3.4GHz, 16GB DDR4, 500GB SSD, RX 5500 XT 8GB GDDR6, Iluminare RGB
          <br>
         (PRET 3.799,99 RON)
          <br>
          <img src="https://2.grgs.ro/images/products/1/1977958/1980186/thumbnails/gaming-balaur-powered-by-hyperx-amd-ryzen-5-2600-34ghz-16gb-ddr4-500gb-ssd-rx-5500-xt-8gb-gddr6-iluminare-rgb-7dd3b30c648be3ca605d19f414209149.jpg" width="140" height="120">
          </div>
        </a>
        <a href="">
          <div id="itembox4">
            Gaming Arkay, AMD Ryzen 5 3600 3.6GHz, 6 nuclee, 16GB DDR4, 1TB SSD, RTX 2060 6GB GDDR6, Iluminare RGB
          <br>
         (PRET 5.999,99 RON)
          <br>
          <img src="https://5.grgs.ro/images/products/1/6166/1942674/thumbnails/gaming-arkay-amd-ryzen-5-3600-36ghz-6-nuclee-16gb-ddr4-1tb-ssd-rtx-2060-6gb-gddr6-iluminare-rgb-5648895633d0467016f63ae6d667c7e5.jpg" width="140" height="120">
          </div>
        </a>
        <a href="">
          <div id="itembox5">
            Office Start I3M16H1S2, Intel i3-9100F 3.6GHz Coffee Lake, 16GB DDR4, 1TB HDD + 120GB SSD, GT 710 2GB
          <br>
         (PRET 1.899,99 RON)
          <br>
          <img src="https://4.grgs.ro/images/products/1/370411/1991158/thumbnails/office-start-i3m16h1s2-intel-i3-9100f-36ghz-coffee-lake-16gb-ddr4-1tb-hdd-plus-120gb-ssd-gt-710-2gb-4943d366c8e9b0dd27223c9b9b9c48a3.jpg" width="140" height="120">
          </div>
        </a>
        </div>    
      </div>
      <div id="laptop">
        LAPTOPURI
        <div id="itembox">
        <a href="">
            <div id="itembox0">
ASUS Gaming 17.3'' ROG Strix G G731GT, FHD, Procesor Intel® Core™ i7-9750H (12M Cache, up to 4.50 GHz)
          <br>
         (PRET 4.498,99 RON)
          <br>
          <img src="https://1.grgs.ro/images/products/1/1202/1928710/thumbnails/mwl_i7_9-cd38de26d4f698fb03659a07cf240dc0.jpg" width="140" height="120">
            
          </div>
        </a>
        <a href="">
            <div id="itembox1">
          DELL 15.6" Inspiron 3583 (seria 3000), FHD, Procesor Intel® Core™ i3-8145U (4M Cache, up to 3.90 GHz), 8GB DDR4
          <br>
         (PRET 1.898,99 RON)
          <br>
          <img src="https://3.grgs.ro/images/products/1/8629/1924758/thumbnails/mwl_i3_8-7bba128c7ce6703ca98c8d258fb53e0f.jpg" width="140" height="120">
            
          </div>
        </a>
        <a href="">
          <div id="itembox2">
            Notebook / Laptop Lenovo 15.6'' V15 IKB, FHD, Procesor Intel® Core™ i3-8130U (4M Cache, up to 3.40 GHz), 8GB DDR4
          <br>
         (PRET 1.898,99 RON)
          <br>
          <img src="https://1.grgs.ro/images/products/1/6472/2020802/normal/mwl_i3_8-a0469efb07bda45788a3529ad7f15467.jpg" width="140" height="120">
          </div>
        </a>
        <a href="">
          <div id="itembox3">
            Notebook / Laptop ASUS Gaming 15.6'' TUF FX505DU, FHD, Procesor AMD Ryzen™ 7 3750H (4M Cache, up to 4.00 GHz), 8GB DDR4
          <br>
         (PRET 3.998,99 RON)
          <br>
          <img src="https://1.grgs.ro/images/products/1/1867706/1986526/normal/gaming-156-tuf-fx505du-fhd-120hz-procesor-amd-ryzen-7-3750h-6m-cache-up-to-400-ghz-8gb-ddr4-512gb-ssd-geforce-gtx-1660-ti-6gb-no-os-black-d5a9c8db90ca726aa04cd0657ed6f762.jpg" width="140" height="120">
          </div>
        </a>
        <a href="">
          <div id="itembox4">
            
Notebook / Laptop Lenovo Gaming 15.6'' Legion Y7000, FHD IPS, Procesor Intel® Core™ i7-9750HF (12M Cache, up to 4.50 GHz)
          <br>
         (PRET 4.498,99 RON)
          <br>
          <img src="https://3.grgs.ro/images/products/1/8629/1986206/normal/mwl_i7_9-599797f0e981eb2ba98e8a905e974a9a.jpg" width="140" height="120">
          </div>
        </a>
        <a href="">
          <div id="itembox5">
            Notebook / Laptop Lenovo Gaming 15.6'' IdeaPad L340, FHD, Procesor Intel® Core™ i7-9750H (12M Cache, up to 4.50 GHz)
          <br>
         (PRET 3.598,99 RON)
          <br>
          <img src="https://2.grgs.ro/images/products/1/6622/1927794/normal/mwl_i7_9-0d5656c4a754dc929b49f282963cfd6e.jpg" width="140" height="120">
          </div>
        </a>
        </div>    
      </div>
      <div id="parts">
        COMPONENTE
        <div id="itembox">
        <a href="">
            <div id="itembox0">
              Carcasa AQIRYS Arcturus ARGB
          <br>
          <br>
         (PRET 369,99 RON)
         <br>
          
          <br>
          <img src="https://5.grgs.ro/images/products/1/8078/2005382/normal/arcturus-86a1c3e3d6134b84edbbddc90c0c048a.jpg" width="140" height="120">
            
          </div>
        </a>
        <a href="">
            <div id="itembox1">
          Procesor Intel Coffee Lake, Core i9 9900KF 3.6GHz box
          <br>
         (PRET 2.409,99 RON)
          <br>
          <br>
          <img src="https://1.grgs.ro/images/products/1/6440/1789712/normal/coffee-lake-core-i9-9900kf-360ghz-box-ce8d92a1ed790c7eeb6721713911e928.png" width="140" height="120">
            
          </div>
        </a>
        <a href="">
          <div id="itembox2">
            Placa de baza GIGABYTE Z490 AORUS ULTRA
          <br>
         (PRET 1.742,29 RON)
          <br>
          <img src="https://3.grgs.ro/images/products/1/3041/2033738/normal/z490-aorus-ultra-9e692812e44c94fb48797e64d863c0f3.png" width="140" height="120">
          </div>
        </a>
        <a href="">
          <div id="itembox3">
            Placa video profesionala PNY NVIDIA Quadro RTX 8000 48GB GDDR6 384-bit
          <br>
         (PRET 30.646,31 RON)
          <br>
          <img src="https://2.grgs.ro/images/products/1/6115/1779296/normal/nvidia-quadro-rtx-8000-48gb-gddr6-384-bit-7ff66d2873819a1500311d869a6f4841.jpg" width="140" height="120">
          </div>
        </a>
        <a href="">
          <div id="itembox4">
           Memorie HyperX Fury RGB 32GB DDR4 3200MHz CL16 Dual Channel Kit
          <br>
         (PRET 804,36 RON)
          <br>
          <img src="https://3.grgs.ro/images/products/1/5758/1945626/normal/fury-rgb-16gb-ddr4-3200mhz-cl16-dual-channel-kit-f5c43a7442eaf92f0776dc6b06a60cd6.jpg" width="140" height="120">
          </div>
        </a>
        <a href="">
          <div id="itembox5">
            Sursa RAIDMAX Cobra AE-B Series, 80+ Gold, 1000W
          <br>
         (PRET 684,28 RON)
          <br>
          <img src="https://3.grgs.ro/images/products/1/5147/1823768/normal/cobra-ae-b-series-80-plus-gold-1000w-d906eede026ca66668ed94ab4654005e.jpg" width="140" height="120">
          </div>
        </a>
        </div>    
      </div>
      <div id="kits">
        PERIFERICE
        <div id="itembox">
        <a href="">
            <div id="itembox0">
              Mouse Gaming SteelSeries Rival 3
          <br>
          <br>
         (PRET 181,98 RON)
         <br>
          
          <br>
          <img src="https://4.grgs.ro/images/products/1/1990366/1996254/normal/rival-3-84232b5f2476746ddf26797729b506e7.jpg" width="140" height="120">
            
          </div>
        </a>
        <a href="">
            <div id="itembox1">
          Tastatura Gaming Logitech G213 Prodigy Gaming
          <br>
         (PRET 329,99 RON)
          <br>
          <br>
          <img src="https://3.grgs.ro/images/products/1/1152773/1411142/full/g213-prodigy-gaming-6b043a65b1f8367cb83a620ed49ccd1c.png" width="140" height="120">
            
          </div>
        </a>
        <a href="">
          <div id="itembox2">
            Casti Gaming HyperX Cloud II 7.1 Red
          <br>
         (PRET 382,99 RON)
          <br>
          <br>
          <img src="https://5.grgs.ro/images/products/1/853128/984807/full/cloud-ii-71-red-11cddfe660ae4e4ab9262188a361f0d4.jpg" width="140" height="120">
          </div>
        </a>
        <a href="">
          <div id="itembox3">
           Scaun gaming Inaza Rainbow RGB
          <br>
         (PRET 749,99 RON)
          <br>
          <br>
          <img src="https://5.grgs.ro/images/products/1/8977/1969162/full/rainbow-rgb-26ab054342e80bcb15f4babf49a869a8.jpg" width="140" height="120">
          </div>
        </a>
        <a href="">
          <div id="itembox4">
           Monitor LED Alienware AW3420DW Curbat 34 inch 2 ms Black G-Sync 120 Hz
          <br>
         (PRET 4.995,98 RON)
          <br>

          <img src="https://3.grgs.ro/images/products/1/1979534/1986090/normal/alienware-aw3420dw-curbat-34-inch-2-ms-black-g-sync-120-hz-7d614eac3c60200e57521acda76640fd.jpg" width="140" height="120">
          </div>
        </a>
        <a href="">
          <div id="itembox5">
            Mouse pad Corsair MM800 RGB Polaris
          <br>
         (PRET 339,99 RON)
          <br>
          <img src="https://3.grgs.ro/images/products/1/1355434/1402375/normal/mm800-rgb-polaris-1ad1cc72f1df978373da27491b426977.jpg" width="140" height="120">
          </div>
        </a>
        </div>    
      </div>
    </div>
    <div id="downcredits">
      <div id = "cc1">
        Copyright © 2020 BestPCs Corporation
      </div>
    </div>
    <div class='console-container'>
      <span id='text'></span>
        <div class='console-underscore' id='console'>&#95;
        </div>
    </div>
    <script src="supertext.js"></script>
    <a href="autentificare.php" id="loginbox">Contul meu</a>
    <a href="index.php" id="maindirectory">
      <img src="sorinelLogos/pclogo.png" width="110" height="94">  
    </a>
    <a href="https://www.facebook.com/sorin.fratean/" id="faceblogo">
      <img src="sorinelLogos/fblogo.png" width="35" height="35">
    </a>
    <a href="https://www.instagram.com/sorinel_fr/" id="instagramlogo">
      <img src="sorinelLogos/instalogo.png" width="35" height="35">
    </a>
    <a href="https://github.com/Sorinel27" id="githublogo">
      <img src="sorinelLogos/github.jpg" width="35" height="35">
    </a>
  </body>
</html>
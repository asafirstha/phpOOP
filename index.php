<?php 
    require_once('product.php');
    require_once('cdrack.php');
    require_once('cdmusic.php');

    
    echo " ------------------------------------ <br>" ;
    echo " Nama : Ananda Asa Firstha Affandi  <br>" ;
    echo " NPM : 21081010155 <br>" ;
    echo " Kelas : Pemweb C  <br>" ;
    
    echo " ------------------------------------ <br>" ;

    echo "<h2>List Product</h2>" ;
    echo "<table border='1'>";
    echo "<tr><th>Nama Produk</th><th>Harga</th><th>Diskon</th></tr>";

    //CD Product//
    echo "<h5>=====CD Product=====</h5>";
    $CD1 = new Product("Inside The Music", 150000, 0.15);
    echo "<tr><td>" . $CD1->getName() . "</td><td>" . $CD1->getPrice() . "</td><td>" . $CD1->getDiscount() . "</td></tr>";
    $CD2 = new Product("Feel Free", 100000, 0.1);
    echo "<tr><td>" . $CD2->getName() . "</td><td>" . $CD2->getPrice() . "</td><td>" . $CD2->getDiscount() . "</td></tr>";
    $CD3 = new Product("Lonely Together", 200000, 0.15);
    echo "<tr><td>" . $CD3->getName() . "</td><td>" . $CD3->getPrice() . "</td><td>" . $CD3->getDiscount() . "</td></tr>";
    $CD4 = new Product("New Moon", 250000, 0.2);
    echo "<tr><td>" . $CD4->getName() . "</td><td>" . $CD4->getPrice() . "</td><td>" . $CD4->getDiscount() . "</td></tr>";
    echo "</table>";

    //CD Rack//
    echo "<h5>=====CD Rack=====</h5>";

    $RC1 = new Product("Moonshine", 300000, 0.15);
    $RC2 = new Product("Missing Pieces", 150000, 0.2);
    $RC3 = new Product("Time For Memories", 170000, 0.1);
    $RC4 = new Product("Morning Glory", 510000, 0.2);

    echo "Nama : " . $RC1->getName() . "<br>";
    echo "Harga : " . $RC1->getPrice() . "<br>";
    echo "Diskon : " . $RC1->getDiscount() . " (15 %) <br><br>";

    echo "Nama : " . $RC2->getName() . "<br>";
    echo "Harga : " . $RC2->getPrice() . "<br>";
    echo "Diskon : " . $RC2->getDiscount() . " (20 %) <br><br>";

    echo "Nama : " . $RC3->getName() . "<br>";
    echo "Harga : " . $RC3->getPrice() . "<br>";
    echo "Diskon : " . $RC3->getDiscount() . " (10 %) <br><br>";

    echo "Nama : " . $RC4->getName() . "<br>";
    echo "Harga : " . $RC4->getPrice() . "<br>";
    echo "Diskon : " . $RC4->getDiscount() . " (20 %) <br><br>";
    
    echo "<h2> List Product Music </h2>" ;

    $MUSIC1 = new CDMusic($CD1->getName(), $CD1->getPrice(), $CD1->getDiscount(), "Tulus", "Pop" );
    $MUSIC2 = new CDMusic($CD2->getName(), $CD2->getPrice(), $CD2->getDiscount(), "Stray Kids", "Korean Dance" );
    $MUSIC3 = new CDMusic($CD3->getName(), $CD3->getPrice(), $CD3->getDiscount(), "Celline Dion", "Pop" );
    $MUSIC4 = new CDMusic($CD4->getName(), $CD4->getPrice(), $CD4->getDiscount(), "NCT 127", "Korean Dance" );

    echo "Nama : " . $MUSIC1->getName() . "<br>";
    echo "Artis : " . $MUSIC1->getArtist() . "<br>";
    echo "Genre : " . $MUSIC1->getGenre() . "<br>";
    echo "Harga : " . $MUSIC1->getPrice() . "<br>";
    echo "Diskon : " . $MUSIC1->getDiscount() . " (20 %) " . "<br>";
    echo "Harga Diskon : " . $MUSIC1->FinalPrice() . "<br> <br>";

    echo "Nama : " . $MUSIC2->getName() . "<br>";
    echo "Artis : " . $MUSIC2->getArtist() . "<br>";
    echo "Genre : " . $MUSIC2->getGenre() . "<br>";
    echo "Harga : " . $MUSIC2->getPrice() . "<br>";
    echo "Diskon : " . $MUSIC2->getDiscount() . " (15 %) " . "<br>";
    echo "Harga Diskon : " . $MUSIC2->FinalPrice() . "<br> <br>";

    echo "Nama : " . $MUSIC3->getName() . "<br>";
    echo "Artis : " . $MUSIC3->getArtist() . "<br>";
    echo "Genre : " . $MUSIC3->getGenre() . "<br>";
    echo "Harga : " . $MUSIC3->getPrice() . "<br>";
    echo "Diskon : " . $MUSIC3->getDiscount() . " (25 %) " . "<br>";
    echo "Harga Diskon : " . $MUSIC3->FinalPrice() . "<br> <br>";

    echo "Nama : " . $MUSIC4->getName() . "<br>";
    echo "Artis : " . $MUSIC4->getArtist() . "<br>";
    echo "Genre : " . $MUSIC4->getGenre() . "<br>";
    echo "Harga : " . $MUSIC4->getPrice() . "<br>";
    echo "Diskon : " . $MUSIC4->getDiscount() . " (15 %) " . "<br>";
    echo "Harga Diskon : " . $MUSIC4->FinalPrice() . "<br> <br>";

    echo "<h2> List Product Rack</h2>" ;

    $RACK1 = new CDRack($RC1->getName(), $RC1->getPrice(), $RC1->getDiscount(), "55", "Vintage" );
    $RACK2 = new CDRack($RC2->getName(), $RC2->getPrice(), $RC2->getDiscount(), "50", "Vintage" );
    $RACK3 = new CDRack($RC3->getName(), $RC3->getPrice(), $RC3->getDiscount(), "100", "Minimalist" );
    $RACK4 = new CDRack($RC4->getName(), $RC4->getPrice(), $RC4->getDiscount(), "30", "Futuristik" );

    echo "Nama : " . $RACK1->getName() . "<br>";
    echo "Model : " . $RACK1->getModel() . "<br>";
    echo "Kapasitas : " . $RACK1->getCapacity() . "<br>";
    echo "Harga : " . $RACK1->getPrice() . "<br>";
    echo "Diskon : " . $RACK1->getDiscount() . " (15 %) " . "<br>";
    echo "Harga Diskon : " . $RACK1->FinalPrice() . "<br> <br>";

    echo "Nama : " . $RACK2->getName() . "<br>";
    echo "Model : " . $RACK2->getModel() . "<br>";
    echo "Kapasitas : " . $RACK2->getCapacity() . "<br>";
    echo "Harga : " . $RACK2->getPrice() . "<br>";
    echo "Diskon : " . $RACK2->getDiscount() . " (20 %) " . "<br>";
    echo "Harga Diskon : " . $RACK2->FinalPrice() . "<br> <br>";

    echo "Nama : " . $RACK3->getName() . "<br>";
    echo "Model : " . $RACK3->getModel() . "<br>";
    echo "Kapasitas : " . $RACK3->getCapacity() . "<br>";
    echo "Harga : " . $RACK3->getPrice() . "<br>";
    echo "Diskon : " . $RACK3->getDiscount() . " (10 %) " . "<br>";
    echo "Harga Diskon : " . $RACK3->FinalPrice() . "<br> <br>";

    echo "Nama : " . $RACK4->getName() . "<br>";
    echo "Model : " . $RACK4->getModel() . "<br>";
    echo "Kapasitas : " . $RACK4->getCapacity() . "<br>";
    echo "Harga : " . $RACK4->getPrice() . "<br>";
    echo "Diskon : " . $RACK4->getDiscount() . " (20 %) " . "<br>";
    echo "Harga Diskon : " . $RACK4->FinalPrice() . "<br> <br>";
?>
<?php

class laptop{
	public $warna = 'Hitam'; // String
	public $harga = 250000; // Integer
	public $type = 6.3; // Float
	public $benar=true; // Boolean
    public $salah=false; // Boolean

	public function membeli()
	{
		return "Di Toko";
	}

	public function item($var , $var2)
	{
	return "Item : ". $var . ' dan ' . $var2;
	}
}
$toko = new laptop;
echo "Warna : ". $toko->warna;
echo '<br>'. "Harga : ". $toko->harga;
echo '<br>'. "Type : ". $toko->type;
echo '<br>'. $toko->benar;
echo '<br>'. "Membeli : ". $toko->membeli();
echo '<br>'. $toko->item('Keyboard' ,'Mouse');

?>

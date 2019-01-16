<?php 
	// class ContohStatic{
	// 	public static $angka = 1;
	// 	public static function halo() {
	// 		return "Hallo".self::$angka++ ."kali.";
	// 	}
	// }
	// echo ContohStatic::$angka;
	// echo "<br>";
	// echo ContohStatic::halo();
	// echo "<hr>";
	// echo ContohStatic::halo();
 


class Contoh {
	public static $angka = 1;

	public function Agnia(){
		return "Agnia" . self::$angka++ ."kali. <br>";
	}
}

$obj = new Contoh;
echo $obj->Agnia();
echo $obj->Agnia();
echo $obj->Agnia();

echo "<hr>";

$obj2 = new Contoh;
echo $obj->Agnia();
echo $obj->Agnia();
echo $obj->Agnia();
?>

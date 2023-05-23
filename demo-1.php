<?php
class FileSystem
{
	public $dmsg = "";
	public function get( $dir, $file){
		$out = false;
		if( is_dir($dir) )
		{
			$this->dmsg = 'Katalog istnieje: '.$dir;
			if( file_exists($dir.'/'.$file) ){
				$this->dmsg = $dir.'/'.$file;
				$out = true;
			} else
				$this->dmsg = $dir.'/'.$file;
		} else
			$this->dmsg = $dir;
		return $out;
	}
}
	$fs = new FileSystem();

	$fleLded = $fs->get('./media', 'dokument.html');
if ($fleLded) {
    echo '#1 Plik istnieje: ' . $fs->dmsg;
} else {
    $fleLded = $fs->get('./media/assets', 'dokument.html');
    if ($fleLded) {
        echo '#2 Plik istnieje: ' . $fs->dmsg;
    } else {
        echo 'Brak pliku';
    }
}
?>

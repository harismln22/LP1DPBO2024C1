<?php
class Dpr
{
	private $nama = '';
	private $id = '';
	private $nama_bidang = '';
	private $nama_partai = '';
	private $foto;
	
	# construct
	public function __construct($name = '', $id = '', $nama_bidang = '', $nama_partai = '')
	{
		$this->nama = $name;
		$this->id= $id;
		$this->nama_bidang = $nama_bidang;
		$this->nama_partai = $nama_partai;
	}
	
	# setter
	public function setName($name)
	{
		$this->nama = $name;
	}
	
	public function setId($id)
	{
		$this->id = $id;
	}
	
	public function setBidang($nama_bidang)
	{
		$this->nama_bidang = $nama_bidang;
	}
	
	public function setPartai($nama_partai)
	{
		$this->nama_partai = $nama_partai;
	}
	public function setFoto($foto)
	{
		$this->foto = $foto;
	}
	
	# getter
	public function getName()
	{
		return $this->nama;
	}
	
	public function getId()
	{
		return $this->id;
	}
	
	public function getBidang()
	{
		return $this->nama_bidang;
	}
	
	public function getPartai()
	{
		return $this->nama_partai;
	}
	
	public function getFoto()
	{
		return $this->foto;
	}
	
	public function Edit(&$list, $id, $name, $banding)
	{
		$bidang = $name; $partai = $name; $foto = $name; // memasukkan setiap nama ke variable
		$NamaAda = 0; $PartaiAda = 0; $BidangAda = 0; $FotoAda = 0; // marking
		foreach($list as $humans)
		{
			if($humans->getId() == $id) // jika id tersebut memang terdapat dalam daftar
			{
				if(strcmp($banding, "Nama") == 0) // jika user pengen mengubah nama
				{
					$NamaAda = 1; // jika terdapat dalam daftar, maka
					if($NamaAda == 1) // akan menampilkan jika nama diubah
					{
						echo "Nama " . $humans->getName() . " Menjadi " . $name;
					}
					$humans->setName($name); // masuk ke function setter
				}
				else if(strcmp($banding, "Bidang") == 0) // jika user pengen mengubah bidang
				{
					$BidangAda = 1; // jika terdapat dalam daftar, maka
					if($BidangAda == 1) // akan menampilkan jika bidang diubah
					{
						echo "Bidang " . $humans->getBidang() . " Menjadi " . $bidang;
					}
					$humans->setBidang($bidang); // masuk ke function setter
				}
				else if(strcmp($banding, "Partai") == 0) // jika user pengen mengubah partai
				{
					$PartaiAda = 1; // jika terdapat dalam daftar, maka
					if($PartaiAda == 1) // akan menampilkan jika partai diubah
					{
						echo "Partai " . $humans->getPartai() . " Menjadi " . $partai;
					}
					$humans->setPartai($partai);
				}
				else if(strcmp($banding, "Foto") == 0) // jika user pengen mengubah foto
				{
					$FotoAda = 1; // jika terdapat dalam daftar, maka
					if($FotoAda == 1) // akan memberitahu jika foto diubah berhasil
					{
						echo "Foto dirubah!";
					}
					$humans->setFoto($foto); // masuk ke function setter
				}
			}
		}
		
		echo '</br>';
	}
	
	public function ketemu($list, $id) // mencari id anggota yang dicari
	{
		foreach($list as $humans)
		{
			if($humans->getId() == $id)
			{
				return 1;
			}
		}
		return 0;
	}
	
	public function hapus(&$list, $id) // fungsi menghapus anggota
	{
		foreach($list as $cari => $humans)
		{
			if($humans->getId() == $id)
			{
				echo '<i><b>'. $humans->getName(). " telah dihapus!" .'</i></b>';
				unset($list[$cari]);
			}
		}
		echo '</br>';
	}
	
	public function tampil($list)  // menampilkan anggota
	{
		if($list != null && !empty($list)) // jika list tidak kosong
		{
			echo "<table border='1'>";
			echo "<tr><th>Nama</th><th>Id</th><th>Bidang</th><th>Partai</th><th>Foto</th></tr>";
			foreach ($list as $human)
			{
				echo "<tr>";
				echo "<td>" . $human->getName() . "</td>";
				echo "<td>" . $human->getId() . "</td>";
				echo "<td>" . $human->getBidang() . "</td>";
				echo "<td>" . $human->getPartai() . "</td>";
				echo "<td><img src='" . $human->getFoto() . "' width='30' height='30' alt='Foto profil'></td>";
				echo "</tr>";
			}
			echo "</table>";
		}
		else // jika list kosong
		{
			echo "Kosong!\n";
		}
	}
}
?>
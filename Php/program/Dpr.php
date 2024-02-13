<?php
class Dpr
{
	private $nama = '';
	private $id = '';
	private $nama_bidang = '';
	private $nama_partai = '';
	private $foto;
	
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
		$bidang = $name; $partai = $name; $foto = $name;
		$NamaAda = 0; $PartaiAda = 0; $BidangAda = 0; $FotoAda = 0;
		foreach($list as $humans)
		{
			if($humans->getId() == $id)
			{
				if(strcmp($banding, "Nama") == 0)
				{
					$NamaAda = 1;
					if($NamaAda == 1)
					{
						echo "Nama " . $humans->getName() . " Menjadi " . $name;
					}
					$humans->setName($name);
				}
				else if(strcmp($banding, "Bidang") == 0)
				{
					$BidangAda = 1;
					if($BidangAda == 1)
					{
						echo "Bidang " . $humans->getBidang() . " Menjadi " . $bidang;
					}
					$humans->setBidang($bidang);	
				}
				else if(strcmp($banding, "Partai") == 0)
				{
					$PartaiAda = 1;
					if($PartaiAda == 1)
					{
						echo "Partai " . $humans->getPartai() . " Menjadi " . $partai;
					}
					$humans->setPartai($partai);
				}
				else if(strcmp($banding, "Foto") == 0)
				{
					$FotoAda = 1;
					if($FotoAda == 1)
					{
						echo "Foto dirubah!";
					}
					$humans->setFoto($foto);
				}
			}
		}
		
		echo '</br>';
	}
	
	public function ketemu($list, $id)
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
	
	public function hapus(&$list, $id)
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
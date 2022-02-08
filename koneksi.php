<?php 
class database{
 
	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "phpOOP";
	var $koneksi = "";
	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
		if (mysqli_connect_errno()){
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}
	}
 
	function tampil_data()
	{
		$data = mysqli_query($this->koneksi,"select * from daftar_siswa");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}

    function tambah_data($nama,$tempat_lahir,$tanggal_lahir,$warga_negara,$alamat,$email,$tlp,$smp,$ayah,$ibu,$penghasilan)
	{
		mysqli_query($this->koneksi,"INSERT INTO `daftar_siswa`(`id`, `nama`, `tempat_lahir`, `tanggal_lahir`, `warga_negara`, `alamat`, `email`, `tlp`, `smp`, `ayah`, `ibu`, `penghasilan`) VALUES ('','$nama','$tempat_lahir','$tanggal_lahir','$warga_negara','$alamat','$email','$tlp','$smp','$ayah','$ibu','$penghasilan')");
	}

    function update_data($nama,$tempat_lahir,$tanggal_lahir,$warga_negara,$alamat,$email,$tlp,$smp,$ayah,$ibu,$penghasilan,$id)
	{
		$query = mysqli_query($this->koneksi,"UPDATE `daftar_siswa` SET `nama`='$nama',`tempat_lahir`='$tempat_lahir',`tanggal_lahir`='$tanggal_lahir',`warga_negara`='$warga_negara',`alamat`='$alamat',`email`='$email',`tlp`='$tlp',`smp`='$smp',`ayah`='$ayah',`ibu`='$ibu',`penghasilan`='$penghasilan' WHERE id = '$id'");
	}

    function get_by_id($id)
	{
		$query = mysqli_query($this->koneksi,"select * from daftar_siswa where id='$id'");
		return $query->fetch_array();
	}

    function hapus($id){
        $query = mysqli_query($this->koneksi,"DELETE FROM `daftar_siswa` WHERE id = '$id'");
    }
}
?>
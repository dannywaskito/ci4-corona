<?php namespace App\Controllers;

class Home extends BaseController
{
public function index()
	{
		$indonesia=json_decode(file_get_contents('https://api.kawalcorona.com/indonesia'),true);
		$provinsi=json_decode(file_get_contents('https://api.kawalcorona.com/indonesia/provinsi'),true);
		$data = array(

			'title' =>'Update Covid 19 Indonesia' ,
			'indonesia'=>$indonesia,
			'provinsi'=>$provinsi,
			'isi' =>'home' ,
		);
		echo view('layout/wrapper',$data);
	}

	public function global()
	{
		$global=json_decode(file_get_contents('https://api.kawalcorona.com/'),true);
		$positif=json_decode(file_get_contents('https://api.kawalcorona.com/positif'),true);
		$sembuh=json_decode(file_get_contents('https://api.kawalcorona.com/sembuh'),true);
		$meninggal=json_decode(file_get_contents('https://api.kawalcorona.com/meninggal'),true);
		$data = array(

			'title' =>'Update Covid 19 Seluruh Dunia' ,
			'global'=>$global,
			'positif'=>$positif,
			'sembuh'=>$sembuh,
			'meninggal'=>$meninggal,
			'isi' =>'global' ,
		);
		echo view('layout/wrapper',$data);
	}
	public function dunia()
	{
		$dunia=json_decode(file_get_contents('https://api.kawalcorona.com/'),true);
		$data = array(

			'title' =>'Peta Dunia Update Covid 19 ',
			'dunia'=> $dunia,
			'isi' =>'dunia' ,
		);
		echo view('layout/wrapper',$data);
	}
		public function nasional()
	{
		$nasional=json_decode(file_get_contents('https://services5.arcgis.com/VS6HdKS0VfIhv8Ct/arcgis/rest/services/COVID19_Indonesia_per_Provinsi/FeatureServer/0/query?where=1%3D1&outFields=*&outSR=4326&f=json'),true);
		$data = array(

			'title' =>'Peta Nasional Update Covid 19 ',
			'nasional'=> $nasional,
			'isi' =>'nasional' ,
		);
		echo view('layout/wrapper',$data);
	}

}

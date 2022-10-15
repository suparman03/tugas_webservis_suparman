<?php
$data=file_get_contents("https://datasekolahapi.herokuapp.com/api/data");
$datasekolah=json_decode($data);
//echo "<pre>";print_r($datasekolah);
$table = "<h3>data sekolah sd</h3>";
$table .= "<table border=1>
			<tr><td>No</td>
			    <td>NamaSD</td>
				<td>NPSN</td>
				<td>Alamat</td>
				<td>Kode_Pos</td>
				<td>Desa</td>
				<td>Kecamatan</td>
				<td>Kabupaten</td>
				<td>Provinsi</td>
				</tr>";
for($i=0;$i<count($datasekolah);$i++){
	$no=$i+1;
	$table .= "<tr><td>{$no}</td>
			    <td>{$datasekolah[$i]->NamaSD}</td>
				<td>{$datasekolah[$i]->NPSN}</td>
				<td>{$datasekolah[$i]->Alamat}</td>
				<td>{$datasekolah[$i]->Kode_Pos}</td>
				<td>{$datasekolah[$i]->Desa}</td>
				<td>{$datasekolah[$i]->Kecamatan}</td>
				<td>{$datasekolah[$i]->Kabupaten}</td>
				<td>{$datasekolah[$i]->Provinsi}</td>
				</tr>";
}
$table .= "</table>";
echo $table;				
?>
<?php 
	if (isset($_GET['submit'])) {
		$id=$_GET['id'];
		$pass=$_GET['password'];
		$username=array('id' => 'fajar' , 'pass' => 'cibedug' );
	if ($id == $username['id'] && $pass == $username['pass']) {
		echo "<h2>Login berhasil</h2>";
	
?>

<form method="GET">
	
	<h2><br>Genre Film TerFavorit :<br></h2>

	<table>
		
		<tr>
	<td>Action<input type="checkbox" name="film[]" value="Action"></td>
	<td>Adventure<input type="checkbox" name="film[]" value="Adventure"></td>
	<td>Biography<input type="checkbox" name="film[]" value="Biography"></td>
	<td>Comedy<input type="checkbox" name="film[]" value="Comedy"></td>
	<td>Animation<input type="checkbox" name="film[]" value="Animation"></td>

		</tr>

		<tr>
	<td>Crime<input type="checkbox" name="film[]" value="Crime"></td>
		<td>Drama<input type="checkbox" name="film[]" value="Drama"></td>
			<td>Family<input type="checkbox" name="film[]" value="Family"></td>
				<td>Fantasy<input type="checkbox" name="film[]" value="Fantasy"></td>
					<td>Documentary<input type="checkbox" name="film[]" value="Documentary"></td>
			
		</tr>

		<tr>
			
			<td>Horror<input type="checkbox" name="film[]" value="Horror"></td>
			<td>Film-Noir<input type="checkbox" name="film[]" value="Film-Noir"></td>
			<td>Game-Show<input type="checkbox" name="film[]" value="Game-Show"></td>
			<td>History<input type="checkbox" name="film[]" value="History"></td>
			<td>Musicals<input type="checkbox" name="film[]" value="Musicals"></td>
		</tr>

		<tr>
			<td>Mystery<input type="checkbox" name="film[]" value="Mystery"></td>
			<td>News<input type="checkbox" name="film[]" value="News"></td>
			<td>Sci-Fi<input type="checkbox" name="film[]" value="Sci-Fi"></td>
			<td>Sport<input type="checkbox" name="film[]" value="Sport"></td>
			<td>Romance<input type="checkbox" name="film[]" value="Romance"></td>
			
		</tr>

		<tr>
			<td>Thriller<input type="checkbox" name="film[]" value="Thriller"></td>
			<td>Western<input type="checkbox" name="film[]" value="Western"></td>
			<td>War<input type="checkbox" name="film[]" value="War"></td>

		</tr>

	</table>

	<h3><br>Wisata TerFavorit :<br></h3>

	<table>
		
		<tr>
			<td>Dieng Plateau<input type="checkbox" name="wisata[]" value="Dieng Plateau"></td>
			<td>Borobudur Temple<input type="checkbox" name="wisata[]" value="Borobudur Temple"></td>
			<td>Komodo National Park<input type="checkbox" name="wisata[]" value="Komodo National Park"></td>
		</tr>

		<tr>
			<td>Raja Ampat<input type="checkbox" name="wisata[]" value="Raja Ampat"></td>
			<td>Mount Bromo<input type="checkbox" name="wisata[]" value="Mount Bromo"></td>
			<td>Ubud<input type="checkbox" name="wisata[]" value="Ubud"></td>
		</tr>

		<tr>
			<td>Lake Toba<input type="checkbox" name="wisata[]" value="Lake Toba"></td>
			<td>Tana Toraja<input type="checkbox" name="wisata[]" value="Tana Toraja"></td>
			<td>Tanjung Puting National Park<input type="checkbox" name="wisata[]" value="Tanjung Puting National Park"></td>
		</tr>

		<tr>
			<td>Derawan Island<input type="checkbox" name="wisata[]" value="Derawan Island"></td>
			<td>Bangka Belitung Island<input type="checkbox" name="wisata[]" value="Bangka Belitung Island"></td>
			<td>Wae Rebo Village<input type="checkbox" name="wisata[]" value="Wae Rebo Village"></td>
		</tr>

		<tr>
			<td>Lombok<input type="checkbox" name="wisata[]" value="Lombok"></td>
			<td>Nusa Island<input type="checkbox" name="wisata[]" value="Nusa Island"></td>
			<td>Bukittinggi<input type="checkbox" name="wisata[]" value="Bukittinggi"></td>
		</tr>

	</table>

	<table>
		<tr>
			<td><input type="submit" name="input" value="Input"></td>
		</tr>
	</table>

</form>

<?php
}
	else{
		echo "Tidak login";
	}
}
if (isset($_GET['input'])) {
		$film=$_GET['film'];
		$wisata=$_GET['wisata'];
		echo "Film Favorit yang Dipilih : "."<br>";
		if (!empty($film)) {
			foreach ($film as $pilm) {
				echo "-".$pilm."<br>";
			}
		}
		else{
			echo "Pilih Film Favorit !!";
		}
	
		echo "<br> Wisata Favorit : "."<br>";
		if (!empty($wisata)) {
			foreach ($wisata as $adventur) {
				echo "-".$adventur."<br>";
			}
		}
		else{
			echo "Pilih Wisata Favorit !!";
		}
	}
	
 ?>

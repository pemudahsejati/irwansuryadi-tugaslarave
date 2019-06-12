<strong><h3 align="center">TAMBAH DATA BARANG</h3></strong>

<h5 align="center"><a href="/brg">KEMBALI</h5>
	<hr>

<form method="POST" action="{{route('brg.store')}}">
	{{csrf_filed ()}}

<table border="5" height="400" width="600" align="center">
	<tr>
		<td>id_barang</td>
		<td>
			<input type="text" name="id_barang" required="">
		</td>
	</tr>
	<tr>
		<td>nama_barang</td>
		<td>
			<input type="text" name="nama_barang" required="">
		</td>
	</tr>
	<tr>
		<td>kategori_barang</td>
		<td>
			<select name="kategori_barang">
				<option>-</option>
				<option value="Alat dapur">Alat dapur</option>
				<option value="Alat electronik">Alat electronik</option>
				<option value="Alat tulis">Alat tulis</option>
				<option value="Alat olahraga">Alat olahraga</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>merk_barang</td>
		<td>
			<input type="text" name="merk_barang" required="">
		</td>
	</tr>
	<tr>
		<td>deskripsi_barang</td>
		<td>
			<input type="text" name="deskripsi_barang" required="">
		</td>
	</tr>
	<tr>
		<td>stok_barang</td>
		<td>
			<input type="number" name="stok_barang" required="">
		</td>
	</tr>
	<tr>
		<td>harga_barang</td>
		<td>
			<input type="number" name="harga_barang" required="">
		</td>
	</tr>
	<tr>
		<td>
			<button type="submit">SIMPAN</button>
		</td>
	</tr>
		
	
</table>
</form>
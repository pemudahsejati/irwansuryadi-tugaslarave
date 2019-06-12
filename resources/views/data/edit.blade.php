<strong><h3 align="center">UABH DATA BARANG</h3></strong>

<h5 align="center"><a href="/brg">KEMBALI</a></h5>
<hr>

@foreach($barang as $a =>$tampilkan)
<form method="POST" action="{{route('brg.update', $tampilkan->id_barang)}}">
	{{crsf_filed ()}}
	<input type="hidden" name="method" value="PUT">

	<table border="5" height="400" width="600" align="center">
		<tr>
			<td>id_barang</td>
			<td>
				<input type="text" name="id_barang" required="" value="{{$tampilkan->id_barang}}">
			</td>
		</tr>
		<tr>
			<td>kategori_barang</td>
			<td>
				@if($tampilkan->kategori_barang == "Alat dapur")
				<select name="kategori_barang">
				<option>-</option>
				<option selected value="Alat dapur">Alat dapur</option>
				<option value="Alat electronik">Alat electronik</option>
				<option value="Alat tulis">Alat tulis</option>
				<option value="Alat olahraga">Alat olahraga</option>
			</select>
				@endif

			@if($tampilkan->kategori_barang == "Alat electronik")
			<select name="kategori_barang">
				<option>-</option>
				<option selected value="Alat dapur">Alat dapur</option>
				<option value="Alat electronik">Alat electronik</option>
				<option value="Alat tulis">Alat tulis</option>
				<option value="Alat olahraga">Alat olahraga</option>
			</select>
				@endif

			@if($tampilkan->kategori_barang == "Alat tulis")
			<select name="kategori_barang">
				<option>-</option>
				<option selected value="Alat dapur">Alat dapur</option>
				<option value="Alat electronik">Alat electronik</option>
				<option value="Alat tulis">Alat tulis</option>
				<option value="Alat olahraga">Alat olahraga</option>
			</select>
				@endif

			@if($tampilkan->kategori_barang == "Alat olahraga")
			<select name="kategori_barang">
				<option>-</option>
				<option value="Alat dapur">Alat dapur</option>
				<option value="Alat electronik">Alat electronik</option>
				<option value="Alat tulis">Alat tulis</option>
				<option selected value="Alat olahraga">Alat olahraga</option>
			</select>
				@endif

			</td>
		</tr>
		<tr>
			<td>merk_barang</td>
			<td>
				<input type="text" name="merk_barang" required="" value="{{$tampilkan->merk_barang}}">
			</td>

		</tr>
		<tr>
			<td>deskripsi_barang</td>
			<td>
				<input type="text" name="deskripsi_barang" required="" value="{{$tampilkan->deskripsi_barang}}">
			</td>
		</tr>

		<tr>
			<td>stok_barang</td>
			<td>
				<input type="text" name="stok_barang" required="" value="{{$tampilkan->stok_barang}}">
			</td>
		</tr>

		<tr>
			<td>harga

				<td>harga_barang</td>
			<td>
				<input type="text" name="harga_barang" required="" value="{{$tampilkan->harga_barang}}">
			</td>
		</tr>

		<tr>
			<td>harga

				<td>harga_barang</td>
			<td>
				<input type="text" name="harga_barang" required="" value="{{$tampilkan->harga_barang}}">
			</td>
		</tr>
		<tr>
			<td>
				<button type="submit">UBAH</button>
			</td>
		</tr>

	</table>
</form>
@endforeach
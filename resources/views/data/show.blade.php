<strong><h3 align="center">DETAIL DATA BARANG</h3></strong>

<h5 align="center"><a href="/brg">KEMBALI</a></h5>
<hr>

@foreach($barang as $a => $tampilkan)

<table border="5" height="400" width="600" align="center">
	<tr>
		<td>id_barang</td>
		<td>{{$tampilakan->id_barang}}</td>
	</tr>
	<tr>
		<td>nama_barang</td>
		<td>{{$tampilakan->nama_barang}}</td>
	</tr>
	<tr>
		<td>kategori_barang</td>
		<td>{{$tampilakan->kategori_barang}}</td>
	</tr>
	<tr>
		<td>merk_barang</td>
		<td>{{$tampilakan->merk_barang}}</td>
	</tr>
	<tr>
		<td>deskripsi_barang</td>
		<td>{{$tampilakan->deskripsi_barang}}</td>
	</tr>
	<tr>
		<td>stok_barang</td>
		<td>{{$tampilakan->stok_barang}}</td>
	</tr>
	<tr>
		<td>harga_barang</td>
		<td>{{$tampilakan->harga_barang}}</td>
	</tr>

</table>
@endforeach
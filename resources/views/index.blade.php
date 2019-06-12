<strong><h3 align="center">DATA BARANG<h3></strong>

	<h5 align="center"><a href="/brg/create">TAMBAH BARANG</a></h5>
		<hr>

		<table border="5" height="400" width="600" align="center">
			<tr>
				<th>id_barang</th>
				<th>nama_barang</th>
				<th>DETAIL</th>
				<th>UPDATE</th>
				<th>DELETE</th>


			</tr>
			@foreach($barang as $a => $tampilkan)
				<td>[[ $tampilkan ->id_barang ]]</td>
				<td>[[ $tampilkan ->nama_barang ]]</td>

				<td>
					<a href="{{route('br.show', $tampilkan-> id_barang)}}">Detail Data</a>
				</td>
				<td>
					<a href="{{route('br.edit', $tampilkan-> id_barang)}}">Update Data</a>
				</td>

				<td>
					<form method="POST" action="{{route('brg.destroy', $tampilkan-> id_barang">
						{{csrf_filed ()}}

						<input type="hidden" name="method" value="DELETE">
						<button type="submit">Delete</button>
					</form>
				</td>
			</tr>
				
				


			
		</table>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
table { 
	width: 750px; 
	border-collapse: collapse; 
	margin:50px auto;
	}

/* Zebra striping */
tr:nth-of-type(odd) { 
	background: #eee; 
	}

th { 
	background: #3498db; 
	color: white; 
	font-weight: bold; 
	}

td, th { 
	padding: 10px; 
	border: 1px solid #ccc; 
	text-align: left; 
	font-size: 18px;
	}

/* 
Max width before this PARTICULAR table gets nasty
This query will take effect for any screen smaller than 760px
and also iPads specifically.
*/
@media 
only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px)  {

	table { 
	  	width: 100%; 
	}

	/* Force table to not be like tables anymore */
	table, thead, tbody, th, td, tr { 
		display: block; 
	}
	
	/* Hide table headers (but not display: none;, for accessibility) */
	thead tr { 
		position: absolute;
		top: -9999px;
		left: -9999px;
	}
	
	tr { border: 1px solid #ccc; }
	
	td { 
		/* Behave  like a "row" */
		border: none;
		border-bottom: 1px solid #eee; 
		position: relative;
		padding-left: 50%; 
	}

	td:before { 
		/* Now like a table header */
		position: absolute;
		/* Top/left values mimic padding */
		top: 6px;
		left: 6px;
		width: 45%; 
		padding-right: 10px; 
		white-space: nowrap;
		/* Label the data */
		content: attr(data-column);

		color: #000;
		font-weight: bold;
	}

}
</style>
<body>
<a href="{{route('Pasien.tambah')}}">tambah data</a>
<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Nama</th>
      <th>Alamat</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
  @forelse ($pasien as $pasien)
    <tr>
      <td data-column="First Name">{{$pasien->id}}</td>
      <td data-column="Last Name">{{$pasien->nama}}</td>
      <td data-column="Job Title">{{$pasien->alamat}}</td>
      <td>
      <a href="{{route('Pasien.edit',['id' => $pasien->id])}}">edit</a>
      <a href="{{route('Pasien.hapus',['id' => $pasien->id])}}">hapus</a>
      </td>
    </tr>
    @empty
   @endforelse
  </tbody>
</table>
</body>
</html>
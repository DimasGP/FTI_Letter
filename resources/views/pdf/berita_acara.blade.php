<!DOCTYPE html>
<html>
<head>
	<title>Berita Acara</title>
	<style type="text/css">
		table {
			border-style: double;
			border-width: 3px;
			border-color: white;
		}
		table tr .text2 {
			text-align: right;
            /* color: blue; */
			font-size: 13px;
		}
		table tr .text {
			/* text-align: center; */
			font-size: 13px;
		}
		table tr td {
			font-size: 13px;
		}
	</style>
</head>
<body>
	<center>
		<table style="width: 100%">
			<tr>
				<td><img src="" width="90" height="90"></td>
				<td>
				<center>
                    <font size="3"><b>UNIVERSITAS KRISTEN DUTA WACANA</b></font><br>
                    <font size="5"><b>FAKULTAS TEKNOLOGI INFORMASI</b></font><br>
					<font size="2"><i>Jl. dr. Wahidin Sudirohusodo no. 5-25 Yogyakarta, Indonesia – 55224</i></font>
				</center>
				</td>
			</tr>
			<tr>
				<td colspan="2"><hr></td>
			</tr>
		</table>
		<table>
			<tr class="text2">
				<td></td>
                <center>
                    
					<font size="4">BERITA ACARA 2021</font><br>
                    <font size="3">NO SURAT : {{ $item->no_surat }}</font><br>
				
				</center>
				<td></td>
			</tr>
			{{-- <tr>
				<td>Perihal</td>
				<td width="564">: -</td>
			</tr> --}}

		</table>

		<table width="625">
			<tr>
		       <td>
			       <font size="2"><br>Dengan ini Dekan Fakultas teknologi Informasi Universitas Kristen Duta Wacana memuat berita tentang :  </font>
		       </td>
		    </tr>
		</table>
        <table width="625">
			<tr>
		       <td>
			       {{-- <font size="2"><br>Untuk mengikuti kunjungan penelitian yang dilaksanakan oleh Bapak {{ $item->pengirim->nama }} kunjungan akan dilaksanakan pada;</font> --}}
		       </td>
		    </tr>
		</table>
		</table>
		<table>
            <tr>
				<td>Acara</td>
				<td width="525">: <b> {{ $item->judul }} </b></td>
			</tr>
			<tr class="text2">
				<td>Tanggal</td>
				<td width="541">: <b>{{ Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}</b></td>
			</tr>
			{{-- <tr>
				<td>Jam</td>
				<td width="525">: <b> 08:30 </b></td>
			</tr> --}}
            <tr>
				<td>Keterangan</td>
				<td width="525">: <b> {{ $item->keterangan }} </b></td>
			</tr>
		</table>
		<br>
		<table width="625">
			<tr>
		       <td>
			       <font size="2">Dimikian Berita Acara ini di buat dengan sebenarnya, untuk dapat digunakan sebagaimana mestinya.
</font>
		       </td>
		    </tr>
		</table>
		<br>
        <br>
		{{-- {{$item->sign->signs}} --}}
		{{-- <img src="{{ public_path('upload/'. $item->sign->signs) }}" alt=""> --}}
		<table style="width: 100%">
			<tr>
				<td width="330"></td>
				<td class="text" align="center"><b> Dekan </b>
                    <img width="320" src="{{ public_path('upload/'. $item->sign->sign) }}" alt="">
        {{-- <img src="{{ asset('upload/'. $item->sign) }}" alt=""> --}}
                    <br><br><br><br>{{ $item->sign->user->nama }}</td>
			</tr>
	     </table>
         <table style="width : 100%">
			<tr>
                <td></td>
				<td class="text2">Yogyakarta, {{ Carbon\Carbon::parse($item->created_at)->format('d M Y') }}</td>
			</tr>
		</table>
	</center>
</body>
</html>

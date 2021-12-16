<!DOCTYPE html>
<html>
<head>
	<title>Tugas Pribadi</title>
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
				<td><img src="surat.png" width="500" height="130"></td>
				<!--<td>
				<center>
                    <font size="3"><b>UNIVERSITAS KRISTEN DUTA WACANA</b></font><br>
                    <font size="5"><b>FAKULTAS TEKNOLOGI INFORMASI</b></font><br>
					<font size="4">SURAT TUGAS PRIBADI 2021</font><br>
                    <font size="3">NO SURAT : {{ $item->no_surat }}</font><br>
					<font size="2"><i>Jl. Dr.Wahidin Sudirohusodo No. 5-25 Yogyakarta, Indonesia – 55224 </i></font>
				</center>
				</td>-->
			</tr>
			<!--<tr>
				<td colspan="2"><hr></td>
			</tr>-->
		<table style="width : 100%">
			<tr>
                <td>
                    <center>
                        <b><font size="4">Surat Tugas</font></b><br>
                        <font size="3">No : {{ $item->no_surat }}</font>
                    </center>

                </td>
			</tr>
		</table>
		</table>
		<table>
			<tr>
				<td>
                    Kepada,
				    <br> {{ $item->kepada }}
                    <br> {{ $item->alamat }}
                </td>
			</tr>
		</table>

		<table width="625">
			<tr>
		       <td>
			       <font size="2"><br>Dengan ini Dekan Fakultas teknologi Informasi Universitas Kristen Duta Wacana memberikan tugas kepada para mahasiswa/i <br>di bawah ini :</font>
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
				<td>Nama</td>
				<td width="525">: <b> {{ $item->user->nama }} </b></td>
			</tr>
            <tr>
				<td>NIM</td>
				<td width="525">: <b> {{ $item->user->no_induk }} </b></td>
			</tr>
		</table>
		<br>
		<table width="625">
			<tr>
		       <td>
			       <font size="2">Demikian surat tugas ini di buat agar di pergunakan sebagaimana perlunya,
                       kepada penerima tugas selesai menerima tugas dimohon <br>menyampaikan laporan kepada pemberi tugas.
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
	</center>
</body>
</html>

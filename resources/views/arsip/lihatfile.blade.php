@extends('layouts.master')
@section('title','About')
<link rel="shortcut icon" href="{{asset('AdminLTE-3.2.0')}}/dist/img/dinas.png" type="image/x-icon">
@extends('layouts.bagatas')


@section('content')


<div class="panel-heading " >
      
            </div>
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

                <div class="panel-body py-10">
                    
                <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arsip-{{ $data->id}}</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery-3.4.1.min.js"></script>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body>
<table border="0" align="center">
   <td><center>
   <b> <font size="5">PENGUMUMAN</font></b><br>
   <p style="margin-top:0pt; margin-bottom:0pt; line-height:150%;">&ensp; &ensp;&ensp; {{ $data->nomorsurat}} </p>
</table>
</center>
<br><br><br>

                <tr><td style="width:150.65pt; padding-right:0pt; padding-left:100pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:150%;">&ensp; &ensp; &ensp;&ensp; &ensp; &ensp;&ensp; Kategori   &ensp; &ensp;&ensp; &ensp; &ensp; &ensp;&ensp; : {{ $data->kategori}} </p>
                </td>
                </tr>
                <tr><td style="width:187.65pt; padding-right:2pt; padding-left:100pt; vertical-align:top;">
        <p style="margin-top:0pt; margin-bottom:0pt; line-height:150%;">&ensp; &ensp; &ensp;&ensp; &ensp; &ensp;&ensp; Judul &ensp; &ensp; &ensp; &ensp; &ensp;&ensp; &ensp; &ensp; &ensp;: {{ $data->judul}} <br>&ensp; &ensp; &ensp;&ensp; &ensp; &ensp;&ensp; 
                </td>
                </tr>
                <tr><td style="width:187.65pt; padding-right:2pt; padding-left:100pt; vertical-align:top;">
        <p style="margin-top:0pt; margin-bottom:0pt; line-height:150%;">&ensp; &ensp; &ensp;&ensp; &ensp; &ensp;&ensp; Waktu Unggah&ensp; &ensp; &ensp; : {{ $data->created_at}} <br>&ensp; &ensp; &ensp;&ensp; &ensp; &ensp;&ensp; 
                </td>
                </tr>
                <tr>
                <td style="padding-left:100.4pt; vertical-align:justify;">
                <p style="margin-top:0pt; margin-bottom:0pt; line-height:150%;"> &emsp; Dalam rangka {{ $data->judul}}.&ensp; &emsp; &ensp;  &emsp; &emsp; &ensp;</p>
                </td>
                </tr>
                <tr>
                <td style="padding-left:100.4pt; vertical-align:justify;">
                <p style="margin-top:0pt; margin-bottom:0pt; line-height:150%;"> &emsp;Demikian kami sampaikan, mohon perkenan tanda tangan Bapak dan
atas perhatiannya diucapkan terima kasih.
                </td>
                </tr>
                
</table>

<table>


 <table cellpadding="0" cellspacing="0" style="margin-right:9pt; margin-left:9pt; border-collapse:collapse; float:left;">
        <tbody>
        <tr>
                <td style="padding-left:100.4pt; vertical-align:justify;">
                </td>
                </tr>
            <tr>
                <td style="width:187.65pt; padding-right:5.4pt; padding-left:100.4pt; vertical-align:top;">
                </td>
                </tr>
                
                
                
</table>


            
<div style="margin-left: 50%">
        <span style="text-align: center;">
            <p style="margin-top:0pt; margin-bottom:0pt; text-align:left; line-height:150%;">&nbsp;</p>
            <p style="margin-top:0pt; margin-bottom:0pt; text-align:left; line-height:150%;">&nbsp;</p>
            <p style='margin:0cm; text-align:center;font-size:16px;font-family:"Arial",sans-serif;'>

            
            <p style='margin:0cm; padding-right:2pt; padding-left:2pt;  text-align:center;font-size:15px;font-family:"Arial",sans-serif;'>KELURAHAN DESA KARANGDUREN</p>
            <p style='margin:0cm; text-align:center;font-size:16px;font-family:"Arial",sans-serif;'>KECAMATAN PAKISAJI</p>
            <p style='margin:0cm; text-align:center;font-size:16px;font-family:"Arial",sans-serif;'>&nbsp;</p>
            <p style='margin:0cm;text-align:center;font-size:16px;font-family:"Arial",sans-serif;'>&nbsp;</p>
            <p style='margin:0cm;text-align:center;font-size:16px;font-family:"Arial",sans-serif;'>&nbsp;</p>
            <p style='margin:0cm;text-align:center;font-size:16px;font-family:"Arial",sans-serif;'>&nbsp;</p>
            <p style='margin:0cm; text-align:center;font-size:16px;font-family:"Arial",sans-serif;'><strong><u>SYAIFUL</u></strong></p>
            <p style="margin: 0cm; text-align: center; font-size: 16px; font-family: Arial, sans-serif;">Kepala Desa</p>
            <p style="margin: 0cm; text-align: center; font-size: 16px; font-family: Arial, sans-serif;">NIP. </p>
            <p style="margin-top:0pt; margin-bottom:0pt; text-align:left; line-height:150%;">&nbsp;</p>
          
        </span>
    </div>
</td>
</tbody>

<script type="text/javascript">
window.print();
</script>
 <script src="js/boostrap.min.js"></script>
        </body></html>    
                </div>
            </div>
        </div>

        </div>
            </div>
        </div>
    </div>

    @stop

@push('scripts')
<script>
$(function() {
    $('#table-arsip').DataTable();
});
</script>

@endpush


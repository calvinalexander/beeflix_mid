<!DOCTYPE html>
<html lang="en">

    @extends('template')

    @section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background-color:#e3e3e3">
    <div style=" font-size:36px; background-color:white;padding:20px"> BeeFlix </div>
    <div style="background-color: white;padding:20px">
        <button type="button" onclick="history.go(-1)" style ="background-color: black; color: white;height:30px; width:120px;"><- KEMBALI</button>
        <a href="/"><button type="button" style ="margin-left: -5px; background-color: white;height:30px; width:160px;">LIHAT SEMUA FILM</button></a> 
        
        <br></div>
        <br>
    
    <div style="width: 90%; margin-left: auto; margin-right: auto;">     
        <table style="width: 100%;background-color:white ">
            @foreach ($movie as $movies)
                <td align="center" style="padding: 20px">
                    <img src="{{$movies->photo}}" alt="" width="250" height="370">
                </td>

                <td style="font-size:20px;text-align: left; vertical-align: middle; padding-left:10px; padding-right:10px;">
                    {{$movies->movie_title}}<br>
                    Rating: {{$movies->rating}} <br>
                    {{$movies->description}} <br>
                Kategori: <a href="{{url('/genre', [$movies->Genre->genre_name])}}">{{$movies->Genre->genre_name}}</a> 
                </td>

                <td style="font-size:20px;text-align: center; vertical-align: middle; padding-left:10px; padding-right:10px;">
                    <table align="center" border="1" style="width:50%;">
                        <tr align="left">
                            <th>Episode</th>
                            <th>Judul</th>
                        </tr>
                        @foreach ($episode as $episodes)
                            @if ($movies->id == $episodes->movie_id)
                            <tr align="left">                           
                                <td>  
                                    {{$episodes->episode}}                                   
                                </td>
                                <td >                                
                                    {{$episodes->episode_title}}
                                </td>
                            </tr> 
                            @endif
                        @endforeach
                    </table>                   
                    <div style="padding-left: 125px">{{$episode->withQueryString()->links()}}  </div>  
                </td>                
            @endforeach
        </table>
    </div>
</body>
</html>
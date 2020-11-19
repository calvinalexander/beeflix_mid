<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background-color: #e3e3e3">
    <div style=" font-size:36px; background-color:white;padding:20px"> BeeFlix </div>
    <div style="background-color: white;padding:20px">
    <button type="button" onclick="history.go(-1)" style ="background-color: black; color: white; height:30px; width:120px"><- KEMBALI</button>
    <a href="/"><button type="button" style ="margin-left: -5px; background-color: white; height:30px; width:160px">LIHAT SEMUA FILM</button></a> 
    <br></div><br>
     
    <div style="width: 90%; margin-left: auto; margin-right: auto;">     
        @foreach($genre as $genres)
            
        
            <div style =" overflow-x: auto; background-color: white">
                <table>
                    <div style="text-transform: uppercase; padding: 20px;font-size:26px">{{$genres->genre_name}} </div>
                    @foreach($movie as $movies)
                        @if ($movies->genre_id == $genres->id)
                            <td style="font-size:20px;text-align: center; vertical-align: middle; padding-left:10px; padding-right:10px;">   
                            <a href="{{url('/', [$movies->movie_title])}}"><img src="{{$movies->photo}}" alt="" width="250" height="370" style="overflow-x: auto;"> </a> 
                                <br>   
                                {{$movies->movie_title}}
                                <br>
                                <a href="{{url('/', [$movies->movie_title])}}">
                                    <button style="width: 100%; height: 35px; background-color: black; color:white ">LIHAT FILM</button>
                                </a>
                            </td>
                        @endif      
                    @endforeach  
                </table>
            </div>
            <br><br><br>                
        @endforeach
    </div>
</body>
</html>
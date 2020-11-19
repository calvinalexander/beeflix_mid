<!DOCTYPE html>
<html lang="en">

    

    <?php $__env->startSection('content'); ?>
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
            <?php $__currentLoopData = $movie; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movies): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <td align="center" style="padding: 20px">
                    <img src="<?php echo e($movies->photo); ?>" alt="" width="250" height="370">
                </td>

                <td style="font-size:20px;text-align: left; vertical-align: middle; padding-left:10px; padding-right:10px;">
                    <?php echo e($movies->movie_title); ?><br>
                    Rating: <?php echo e($movies->rating); ?> <br>
                    <?php echo e($movies->description); ?> <br>
                Kategori: <a href="<?php echo e(url('/genre', [$movies->Genre->genre_name])); ?>"><?php echo e($movies->Genre->genre_name); ?></a> 
                </td>

                <td style="font-size:20px;text-align: center; vertical-align: middle; padding-left:10px; padding-right:10px;">
                    <table align="center" border="1" style="width:50%;">
                        <tr align="left">
                            <th>Episode</th>
                            <th>Judul</th>
                        </tr>
                        <?php $__currentLoopData = $episode; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $episodes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($movies->id == $episodes->movie_id): ?>
                            <tr align="left">                           
                                <td>  
                                    <?php echo e($episodes->episode); ?>                                   
                                </td>
                                <td >                                
                                    <?php echo e($episodes->episode_title); ?>

                                </td>
                            </tr> 
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>                   
                    <div style="padding-left: 125px"><?php echo e($episode->withQueryString()->links()); ?>  </div>  
                </td>                
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
</body>
</html>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\LaravelInstall\uts\resources\views/product.blade.php ENDPATH**/ ?>
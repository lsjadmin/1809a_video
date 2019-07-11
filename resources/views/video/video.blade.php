<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
            <h2>视频展示</h2>




                <h2>{{$video->title}}</h2>
                <video width="320" height="240" controls>
                    <source src="{{env('ADD_HOST')}}/{{$video->path}}" type="video/mp4">
                </video>
    



</body>
</html>
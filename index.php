<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://vjs.zencdn.net/7.15.4/video-js.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/videojs-resolution-switcher-vjs7@1.0.0/videojs-resolution-switcher.css">
    <title>Resolution Selector</title>
</head>
<body>
    <div class="container">
        <div class="vjs-wrapper">
        <video id="video" class="video-js vjs-default-skin" width="1000" controls data-setup='{}'>
            <source src="http://mirrorblender.top-ix.org/movies/sintel-1024-surround.mp4" type='video/mp4' label='SD' />
            <source src="http://media.xiph.org/mango/tears_of_steel_1080p.webm" type='video/webm' label='HD'/>
        </video>
        </div>
    </div>

    <script src="https://vjs.zencdn.net/7.15.4/video.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/videojs-resolution-switcher-vjs7@1.0.0/videojs-resolution-switcher.js"></script>
    <script>
        videojs('video').videoJsResolutionSwitcher()
    </script>
</body>
</html>
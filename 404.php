<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Not Found</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
            padding: 20px;
            box-sizing: border-box;
            font-family: sans-serif;
            text-align: center;
        }

        h1 {
            color: #333;
            font-size: 2em;
        }

        p {
            color: #666;
            margin-bottom: 20px;
        }

        #image-container {
            width: 100%;
            max-width: 800px;
            overflow: hidden;
        }

        #error-image {
            display: block;
            width: 100%;
            height: auto;
            transition: opacity 0.5s ease-in-out;
        }
    </style>
</head>
<body>

    <h1>404 Not Found</h1>
    <p>お探しのページは見つかりませんでした。しょんぼり</p>
    
    <div id="image-container">
        <img id="error-image" src="<?php echo get_template_directory_uri(); ?>/screenshot_s.png" alt="脱力系404画像">
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const highResImage = new Image();
            // WordPress関数を使って画像のパスを取得
            highResImage.src = "<?php echo get_template_directory_uri(); ?>/screenshot.png";

            const lowResImageElement = document.getElementById('error-image');

            // 高解像度画像が読み込まれたら置き換える
            highResImage.onload = function() {
                lowResImageElement.style.opacity = 0;
                setTimeout(() => {
                    lowResImageElement.src = highResImage.src;
                    lowResImageElement.style.opacity = 1;
                }, 500);
            };
        });
    </script>

</body>
</html>


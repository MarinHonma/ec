<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <title>商品登録画面</title>
    </head>
    <body>
        <h1>商品登録画面</h1>
        <form action="/posts" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="image">
                <h2>1. メイン画像を挿入してください。</h2>
                <input type="file" name="メイン画像" accept="image/*">
            </div>
            
            <div class="sub_image">
                <h2>2. サブ画像を挿入してください。</h2>
                <input type="file" name="サブ画像" accept="image/*">
            </div>
            
            <div class="price">
                <h2>3. 商品の値段を設定してください。</h2>
                <input type="number" name="値段">
            </div>
            
            <div class="information">
                <h2>4. 商品情報を登録してください。</h2>
                <select name="性別タイプ">
                    <option>WOMEN</option>
                    <option>MEN</option>
                    <option>UNISEX</option>
                </select>
                    
                <select name="カテゴリ名">
                        
                </select>
                    
                <input type="text" name="商品名">
    </body>
</html>

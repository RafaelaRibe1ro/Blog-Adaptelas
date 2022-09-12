<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('assets/image/css/main.css')}}" rel="stylesheet"/>
    <title>Blog Adaptelas</title>
</head>
<body>
    <header>
        <nav class="navbar" >
            <div class="logo">
                <img src="{{asset('assets/image/logo9.jpeg')}}" alt="Imagem">
            </div>
            <ul class="links" >
                <li><a class="link" href="#">Blog</a></li>
                <li><a class="link" href="#">Sobre mim</a></li>
                <li><a class="link" href="{{ route('blog.index') }}">Cadastrar Post</a></li>
            </ul>
        </nav>
    </header>
    <footer class="footer">
    <p class="text-footer">Deselvolvido com <span>♥</span> 2022 Adapti - Soluções Web.</p>
    <div class="container-icons">
        <div style="width: 20px; height: 20px; background:aliceblue"></div>
        <div style="width: 20px; height: 20px; background:aliceblue"></div>
        <div style="width: 20px; height: 20px; background:aliceblue"></div>
    </div>
    </footer>
</body>
</html>
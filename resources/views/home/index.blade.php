<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite(['resources/css/app.css'])
        <title>Chaihu</title>
    </head>
    <body>
        <div class="header">
            <nav>
             <ul>
               <li><a href="#">Главная</a></li>
               <li><a href="#">О нас</a></li>
               <li><a href="#">Услуги</a></li>
               <li><a href="#">Контакты</a></li>
               <li><a href="{{route ('users.index') }}">Регистрация</a></li>
               <li><a href="#">Авторизация</a></li>
             </ul>
            </nav>
        </div>
        
        <div class="container">
            <div class="left_catalog">
                
            </div>
            
            <div class="products_block">
                <div class="category_block">
                
                </div>
                
                <div class="product_card">
                
                </div>
            </div>
        </div>
        
        <div class="footer">
            
        </div>
    </body>
</html>

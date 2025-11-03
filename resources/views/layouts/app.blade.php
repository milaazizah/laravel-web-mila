<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Promo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<!-- Floating WhatsApp Button -->
<a href="https://wa.me/6282287195287" 
   class="float-wa" 
   target="_blank" 
   title="Hubungi kami di WhatsApp">
   <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" 
        alt="WhatsApp" 
        class="wa-icon">
</a>
    <style>
        .float-wa {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 25px;
            right: 25px;
            background-color: #25D366;
            color: #FFF;
            border-radius: 50%;
            text-align: center;
            box-shadow: 2px 2px 3px #999;
            z-index: 1000;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: all 0.3s;
        }
        .float-wa:hover {
            transform: scale(1.1);
            background-color: #1EBE5D;
        }
        .wa-icon {
            width: 35px;
            height: 35px;
        }
    </style>
<body>
    @yield('content')
</body>
</html>

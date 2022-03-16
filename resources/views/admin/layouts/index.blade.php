<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Tailwind Starter Template - Minimal Admin Template: Tailwind Toolbox</title>
        <meta name="description" content="description here">
        <meta name="keywords" content="keywords,here">
    
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,700,800" rel="stylesheet">
    
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
        <!--Replace with your tailwind.css once created-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
    
        <style>
            .nunito {
                font-family: 'nunito', font-sans;
            }
            
            .border-b-1 {
                border-bottom-width: 1px;
            }
            
            .border-l-1 {
                border-left-width: 1px;
            }
            
            hover\:border-none:hover {
                border-style: none;
            }
            
            #sidebar {
                transition: ease-in-out all .2s;
                z-index: 9999;
            }
            
            #sidebar span {
                opacity: 0;
                position: absolute;
                transition: ease-in-out all .5s;
            }
            
            #sidebar:hover {
                width: 150px;
                box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
                /*shadow-2xl*/
            }
            
            #sidebar:hover span {
                opacity: 1;
            }
        </style>
    
    </head>
<body  class="flex h-screen bg-gray-100 font-sans">
    
    @include('admin.components.sideBar')
    @yield('admin')
    <script src="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>
    @include('admin.components.script')
</body>
</html>
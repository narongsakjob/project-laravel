<!DOCTYPE html>
<html>
    <header>
        <meta charset='utf-8'>
        <title>Laravel</title>
        <style >
            header {
                text-align: center;
                color: #FFF;
                background: red;
                padding: 25px;

            }
            footer {
                text-align: center;
                color: #FFF;
                background: blue;
                padding: 25px;
            }
            #main {
                padding: 30px;
            }
        </style>
    </header>
    <body>
        <header>header</header>
        <section id="main"> @yield('content') </section>
        <footer>footer</footer>
    </body>
</html>
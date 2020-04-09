<!DOCTYPE html>
<html lang="pl"> 

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{$conf->app_root}/assets/css/main.css" />
    <noscript><link rel="stylesheet" href="{$conf->app_root}/assets/css/noscript.css" /></noscript>
    

</head>

<body controls preload="none">
    <div id="wrapper">
<!-- Header -->	
        <header id="header">
		<a class="logo">Kalkulator</a>
                {block name=head}{/block}
        </header>  
<!-- Nav -->
	<nav id="nav">
            <section>
                <ul class="links">
                {block name=nav}
		<li><a href="index.html">a</a></li>
		<li class="active"><a href="generic.html">b</a></li>
                {/block}
                </ul>
            </section>
        </nav>
<!-- Main -->
    <div id="main">
         <section class="post">
             {block name=content}  {/block}
         </section>
    </div>

<!-- Footer -->
        <footer id="footer">
            {block name=footer}{/block}
            <section class="alt row">
                    <div class= "col-4" ><h3>Telefon</h3> <p>(+48) 123 456 789</p></div>
                    <div class= "col-4" ><h3>Email</h3> <p>k.palega@onet.pl</p></div>
                    <div class= "col-3" >
                        <center>
                        <ul class="icons alt">
			<li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
			<li><a href="https://github.com/kpalega" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
                        </ul>
                        </center>
                    </div>
                </section>
            
        </footer>
    
    
    <!-- Copyright -->
    <div id="copyright">
        <ul><li>&copy; Karolina Pałęga</li><li> Widok oparty na: <a href="https://html5up.net">HTML5 UP</a></li></ul>
    </div>
    
</div>
    <!-- Scripts -->
			<script src="{$conf->app_root}/assets/js/jquery.min.js"></script>
			<script src="{$conf->app_root}/assets/js/jquery.scrollex.min.js"></script>
			<script src="{$conf->app_root}/assets/js/jquery.scrolly.min.js"></script>
			<script src="{$conf->app_root}/assets/js/browser.min.js"></script>
			<script src="{$conf->app_root}/assets/js/breakpoints.min.js"></script>
			<script src="{$conf->app_root}/assets/js/util.js"></script>
			<script src="{$conf->app_root}/assets/js/main.js"></script>
                      
</body>
</html>
<!DOCTYPE HTML>

<html>
    <head>
        <title>"ProjektPostac"</title>
	    <meta charset="utf-8" />
	    <meta name="viewport" content="width=device-width, initial-scale=1" />
	    <link rel="stylesheet" href="{$conf -> app_url}/assets/css/main.css" />
        <script type="text/javascript" src="{$conf->app_url}/js/functions.js"></script>
	</head>

    <body>
        <header id = "header">
            <h1> <strong> Świat Rzemiosła Wojny </strong> </h1>
            <nav id = "nav">
                <ul>
                    {if (\core\RoleUtils::inRole("Admin") || \core\RoleUtils::inRole("Moderator") || \core\RoleUtils::inRole("Uzytkownik"))}
                        <li> <a href = "{$conf->action_root}menu"> Menu </a> </li>
                        <li> <a href = "{$conf->action_root}logout"> Wyloguj </a> </li>
                    {/if}
                </ul>
            </nav>
        </header>

        <a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>

        <section id = "main" class = "wrapper">

            <div class = "container">
            
                {block name=messages}
            
                    <section>
                        {if $msgs->isMessage()}
                            <h4> Komunikaty: </h4>
                            <div class = "row">
                                <div class = "12u$">
                                    <ul class = "alt">
                                        {foreach $msgs->getMessages() as $msg}
                                            <li> {$msg->text} </li>
                                        {/foreach}
                                    </ul>
                                </div>
                            </div>
                        {/if}
                    </section>
                
                {/block}

            </div>
            
                {block name=content}{/block}

        </section>

    <footer id = "footer">
            <div class="container">
                <ul class="icons">
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
				</ul>
                <h6> Email do administracji: kwojtuszek@o2.pl </h6> 
                <ul class="copyright">
					<li> &copy; Untitled</li>
					<li> Źródło Szablonu: <a href="http://templated.co">Templated</a></li>
					<li> Wykorzystany Szablon: <a href = "https://templated.co/spatial">Szablon</a></li> 
                </ul>
            </div>
        </footer>

    <script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/skel.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>
    
    </body>
</html>

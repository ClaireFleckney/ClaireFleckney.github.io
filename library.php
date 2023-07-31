<?php

function writeHead($pageName) {
    print
    "<head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Claire Fleckney - " . $pageName . "</title>
        <link href='style.css' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Alegreya SC' rel='stylesheet'>
        <link rel='icon' href='images/claire-portrait.png' type='image/x-icon'>
    </head>\n";
}

function writeTop() {
    print
    "<script language='javascript' type='text/javascript'>
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            if (window.scrollY > 99) {
                document.getElementById('scrollNav').style.position = 'fixed';
                document.getElementById('scrollNav').style.top = '0';
            } else {
                document.getElementById('scrollNav').style.position = 'fixed';
                document.getElementById('scrollNav').style.top = '-40px';
            }
        }
    </script>
    <script language='javascript' type='text/javascript'>
        function navChange() {
            document.getElementById('myDropdown').classList.toggle('show');
        }
        
        window.onclick = function(event) {
            if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName('dropdown-content');
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
    </script>
    <a href='#main' alt='Skip to Main Content'></a>
        <div id='scrollNav'>
            <div class='name'><h1><a href='index.php'>Claire Fleckney</a></h1></div>
            <div class='nav'>
                <ul>
                    <li><a href='devexp.php'>Developer Experience</a>
                        <ul>
                            <li><a href='devexp.php#programs'>Downloadable Programs</a></li>
                            <li><a href='devexp.php#sites'>Built Websites</a></li>
                        </ul>
                    </li>
                    <li>|</li>
                    <li><a href='sitsoft.php'>SIT SOFTware</a>
                    </li>
                    <li>|</li>
                    <li><a href='resume.php'>Resume and References</a>
                        <ul>
                            <li><a href='resume.php#resume'>Resume and Experience</a></li>
                            <li><a href='resume.php#references'>References/Accolades</a></li>
                        </ul>
                    </li>
                    <li>|</li>
                    <li><a href='contact.php'>Contact</a></li>
                </ul>
            </div>
        </div>
        <div id='title'>
            <h1><a href='index.php'>Claire Fleckney</a></h1>
        </div>
        <div class='hamburger'>
            <div class='dropdown'>
                <img src='images/hamburger.png' height='80%' align='right' onclick='navChange()' class='dropbtn'>
                <div id='myDropdown' class='dropdown-content'>
                    <a href='devexp.php'>Developer Experience</a>
                    <a href='sitsoft.php'>SIT SOFTware</a>
                    <a href='resume.php'>Resume and References</a>
                    <a href='contact.php'>Contact</a>
                </div>
            </div>
        </div>
        <nav id='nav'>
            <ul>
                <li><a href='devexp.php'>Developer Experience</a>
                    <ul>
                        <li><a href='devexp.php#programs'>Downloadable Programs</a></li>
                        <li><a href='devexp.php#sites'>Built Websites</a></li>
                    </ul>
                </li>
                <li>|</li>
                <li><a href='sitsoft.php'>SIT SOFTware</a></li>
                <li>|</li>
                <li><a href='resume.php'>Resume and References</a>
                    <ul>
                        <li><a href='resume.php#resume'>Resume and Experience</a></li>
                        <li><a href='resume.php#references'>References/Accolades</a></li>
                    </ul>
                </li>
                <li>|</li>
                <li><a href='contact.php'>Contact</a></li>
            </ul>
        </nav>\n";
}

function writeFooter($pos) {
    print
    "<footer style='position:$pos;'>
        <a href='https://www.credential.net/5addfc29-68d6-4a6f-bd1a-b51de078a0fd' target='_blank' rel='noopener noreferrer'>
            <img src='https://api.accredible.com/v1/frontend/credential_website_embed_image/certificate/62467816' alt='CIPS Cert' />
        </a>
        <a href='https://www.linkedin.com/in/claire-fleckney-53811a204/' target='_blank' rel='noopener noreferrer'>
            <img src='images/linkedin-line-logo.png' alt='Linked In Profile' />
        </a>
        &nbsp;&nbsp;&nbsp;
        <small><em>&copy 2022 Claire Fleckney</em></small>
    </footer>\n";
}

?>
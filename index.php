<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nermin Šistek</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="./resursi/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>

    <header>
        <a href="#" class="logo">Nermin Šistek</a>
        <div class="toggle" onclick="toggleMenu();"></div>
        <ul class="menu">
            <li><a href="#$početna" onclick="toggleMenu();">Početna</a></li>
            <li><a href="#$o_meni" onclick="toggleMenu();">O meni</a></li>
            <li><a href="#$edukacija" onclick="toggleMenu();">Edukacija</a></li>
            <li><a href="#$projekti" onclick="toggleMenu();">Moj rad</a></li>
            <li><a href="#$vjestine"" onclick="toggleMenu();">Vještine</a></li>
            <li><a href="#$kontakt" onclick="toggleMenu();">Kontakt</a></li>
        </ul>
    </header>

    <section class="banner" id="$početna">
        <div class="textBox">
            <h2>Pozdrav, ja sam<br><span>Nermin Šistek</span></h2>
            <h3>Bavim se Web developmentom</h3>
            <a href="#$o_meni" class="btn1">O meni</a>
        </div>
    </section>

    <section class="oMeni" id="$o_meni">
        <div class="content">
            <div class="contentBox">
                <h3>Svoj život sam posvetio tehnologiji i računarstvu</h3>
                <p>Imam 24 godine i rođen sam 26.09.1996.godine u Sanskom Mostu gdje sam i odrastao i pohađao srednju školu. Pohađao sam srednju ekonomsku školu a zatim dolazim u Sarajevo na studij gdje i trenutno boravim iako sam promijenio studij. Prvobitno sam studirao na Fakultetu za saobraćaj i komunikacije na odsjeku za kompjuterske i informacijske tehnologije sve dok ove godine nisam promijenio studij. Trenutno studiram drugu godinu na Fakultetu informacionih tehnologija (DL studij) Univerziteta u Vitezu. Bavim se računarstvom, informacionim tehnologijama i grafičkom obradom unazad nekoliko godina.</p>
            </div>
            <div class="w35">
               <img src="./resursi/slike/ja2.jpg" class="img"> 
            </div>
        </div>
    </section>
    
    <div class="heading">
        <h2>Obrazovanje i edukacija</h2>
    </div>

    <section class="edu-timeline" id="$edukacija">
        <div class="edu-block">
            <h2>Fakultet za saobraćaj i komunikacije, Univerzitet u Sarajevu</h2>
            <h3>2015-2019</h3>
            <p>Tokom studija sam usvojio znanja iz oblasti analize, inženjerskog pristupa i primjene naučnih metodologija u oblasti razvoja (software-a). Uspješno sam završio 2 godine studija te upisao treću/završnu godinu međutim, nažalost iz zdravstvenih razloga morao sam zaustaviti studij.</p>
        </div>
        <div class="edu-block">
            <h2>Fakultet informacionih tehnologija, Univerzitet u Vitezu</h2>
            <h3>2020 - trenutno</h3>
            <p>Svoje školovanje nastavljam na FIT-u, gdje je plan i program kreiran kako bi student usvojio čvrste temelje za razvoj software-a i web developmenta. Tijekom studija nastojim da usvajam nova znanja iz informacionih tehnologija kao i kombinaciju i primjenu već usvojenih znanja kroz samo-edukaciju</p>
        </div> 
        <div class="edu-block">
            <h2>Cisco Networking Academy – CCNA – Routing and switching (Akademika Sarajevo)</h2>
            <h3>2017-2018</h3>
            <p>Tokom edukacije usvojio sam osnovna znanja o mrežnom inženjeringu, komunikaciji između pojedinih mrežnih entiteta i uređaja te njihovo konfigurisanje</p>
        </div>
        <div class="edu-block">
            <h2>Neformalna edukacija</h2>
            <h3>2020-trenutno</h3>
            <p>Codecademy full stack development, Udemy, Danilo Vešović - Online škola programiranja, Youtube itd. Aktivno usvajam znanje iz web tehnologija poput Node.js, PHP, Laravel, Javacript, Vue.js, MongoDB, MySQL itd.</p>
        </div> 
        
        
    </section>


    <section class="projekti" id="$projekti">

        <div class="heading white">
            <h2>Moj rad...</h2>
        </div>
        
        <div class="container">

            <div class="projekt">

                <div class="projekt-img1"></div>

                <div class="projekt-text">
                    <span class="date">agencija</span>
                    <h3 class="heading">Adix Events d.o.o.</h3>
                    <p>Razvoj, implementacija i održavanje web stranice za Adix
                        Events: <a href="https://www.adixevents.com/" target="_blank"> <em>adixevents.com</em></a></p>
                </div>
        
                <div class="projekt-stats">
                    <div class="stat">
                        <div class="value">html</div>
                    </div>
                    <div class="stat">
                        <div class="value">css</div>
                    </div>
                    <div class="stat">
                        <div class="value">jquery</div>
                    </div>
                </div>

            </div>

            <div class="projekt">

                <div class="projekt-img2"></div>

                <div class="projekt-text">
                    <span class="date">frizerski salon</span>
                    <h2 class="heading">Fashion</h2>
                    <p>Razvoj, implementacija i održavanje web stranice za
                        frizerski salon Fashion: <a href="https://www.fashionsarajevo.ba/" target="_blank"> <em>fashionsarajevo.ba</em></a></p>
                </div>
        
                <div class="projekt-stats">
                    <div class="stat">
                        <div class="value">html</div>
                    </div>
                    <div class="stat">
                        <div class="value">css</div>
                    </div>
                    <div class="stat">
                        <div class="value">jquery</div>
                    </div>
                </div>

            </div>

            <div class="projekt">

                <div class="projekt-img3"></div>

                <div class="projekt-text">
                    <span class="date">platforma (projekat još u fazi testiranja)</span>
                    <h2 class="heading">AdiX online shop</h2>
                    <p>Implementacija i custom-izacija wordpress teme i plugin-a <a href="https://adixonlineshop.com/" target="_blank"> <em>adixonlineshop.com</em></a></p>
                </div>
        
                <div class="projekt-stats">
                    <div class="stat">
                        <div class="value">wordpress</div>
                    </div>
                    <div class="stat">
                        <div class="value">css</div>
                    </div>
                    <div class="stat">
                        <div class="value">jquery</div>
                    </div>
                </div>

            </div>

            <div class="projekt">

                <div class="projekt-img4"></div>

                <div class="projekt-text">
                    <span class="date">sportski portal</span>
                    <h2 class="heading">BH Lopta</h2>
                    <p>Razvoj i održavanje web portala BH Lopta, implementacija google adsense i google
                        analytics platformi: <a href="https://bhlopta.com/" target="_blank"> <em>bhlopta.com</em></a></p>
                </div>
        
                <div class="projekt-stats">
                    <div class="stat">
                        <div class="value">wordpress</div>
                    </div>
                    <div class="stat">
                        <div class="value">css</div>
                    </div>
                    <div class="stat">
                        <div class="value">adsense</div>
                    </div>
                </div>

            </div>

            <div class="projekt">

                <div class="projekt-img5"></div>

                <div class="projekt-text">
                    <span class="date">web aplikacija</span>
                    <h2 class="heading">City Info</h2>
                    <p>Web aplikacija koja na osnovu API-a pokazuje informacije za pretraženi grad: <a href="https://github.com/nermins26/city_info" target="_blank"> <em>github.com/nermins26</em></a></p>
                </div>
        
                <div class="projekt-stats">
                    <div class="stat">
                        <div class="value">html</div>
                    </div>
                    <div class="stat">
                        <div class="value">css</div>
                    </div>
                    <div class="stat">
                        <div class="value">vanilla.js</div>
                    </div>
                    <div class="stat">
                        <div class="value">API</div>
                    </div>
                </div>

            </div>

            <div class="projekt">

                <div class="projekt-img6"></div>

                <div class="projekt-text">
                    <span class="date">web aplikacija</span>
                    <h2 class="heading">OCR app</h2>
                    <p>Web aplikacija koja pretvara text (u formatu slike) u pdf: <a href="https://github.com/nermins26/OCR" target="_blank"> <em>github.com/nermins26</em></a></p>
                </div>
        
                <div class="projekt-stats">
                    <div class="stat">
                        <div class="value">node</div>
                    </div>
                    <div class="stat">
                        <div class="value">express</div>
                    </div>
                    <div class="stat">
                        <div class="value">ejs</div>
                    </div>
                    <div class="stat">
                        <div class="value">npm</div>
                    </div>
                </div>

            </div>
            
            <div class="projekt">

                <div class="projekt-img7"></div>

                <div class="projekt-text">
                    <span class="date">web aplikacija</span>
                    <h2 class="heading">Accounts CRUD</h2>
                    <p>Web aplikacija koja omogućava pregled, dodavanje, uređivanje i brisanje računa: <a href="https://github.com/nermins26/accounts-app-crud" target="_blank"> <em>github.com/nermins26</em></a></p>
                </div>
        
                <div class="projekt-stats">
                    <div class="stat">
                        <div class="value">node</div>
                    </div>
                    <div class="stat">
                        <div class="value">express</div>
                    </div>
                    <div class="stat">
                        <div class="value">ejs</div>
                    </div>
                    <div class="stat">
                        <div class="value">mongodb</div>
                    </div>
                </div>

            </div>

            <div class="projekt">

                <div class="projekt-img8"></div>

                <div class="projekt-text">
                    <span class="date">web aplikacija</span>
                    <h2 class="heading">TO-DO SPA CRUD</h2>
                    <p>Web aplikacija za dodavanje i brisanje to-do taskova: <a href="https://github.com/nermins26/todo-spa-crud" target="_blank"> <em>github.com/nermins26</em></a></p>
                </div>
        
                <div class="projekt-stats">
                    <div class="stat">
                        <div class="value">node</div>
                    </div>
                    <div class="stat">
                        <div class="value">express</div>
                    </div>
                    <div class="stat">
                        <div class="value">AJAX</div>
                    </div>
                    <div class="stat">
                        <div class="value">mongodb</div>
                    </div>
                </div>

            </div>

            
        </div>
    </section>


    <section class="skills" id="$vjestine">
        <div class="heading">
            <h2>Vještine</h2>
        </div>
        <div class="skill">
            <div class="skill-name">HTML</div>
            <div class="skill-bar">
                <div class="skill-per" per="90"></div>
            </div>
        </div>

        <div class="skill">
            <div class="skill-name">CSS</div>
            <div class="skill-bar">
                <div class="skill-per" per="80"></div>
            </div>
        </div>

        <div class="skill">
            <div class="skill-name">JAVASCRIPT</div>
            <div class="skill-bar">
                <div class="skill-per" per="60"></div>
            </div>
        </div>


        <div class="skill">
            <div class="skill-name">PHP Laravel</div>
            <div class="skill-bar">
                <div class="skill-per" per="70"></div>
            </div>
        </div>

        <div class="skill">
            <div class="skill-name">NODE.js</div>
            <div class="skill-bar">
                <div class="skill-per" per="30"></div>
            </div>
        </div>
        
        <div class="skill">
            <div class="skill-name">MySQL</div>
            <div class="skill-bar">
                <div class="skill-per" per="60"></div>
            </div>
        </div>
        
        <div class="skill">
            <div class="skill-name">ADOBE PHOTOSHOP</div>
            <div class="skill-bar">
                <div class="skill-per" per="80"></div>
            </div>
        </div>
    </section>

    <section class="kontakt" id="$kontakt">
        <div class="heading white">
            <h2>Kontakt</h2>
            <p>Kontaktirajte me putem društvenih mreža, emaila ili preko ove stranice</p>
        </div>
        <div class="content form-group">
            <div class="formBox">
                
                <form id="kontakt">
                    <h3>Pošalji poruku</h3>
                    <input type="text" name="name" id="name" placeholder="Ime i prezime" class="form-control" required>
                    <input type="email" name="email" id="email" placeholder="Email" class="form-control" required>
                    <input type="text" name="subject" id="subject" placeholder="Naslov poruke" class="form-control" required>
                    <textarea placeholder="Vaša poruka" name="body" id="body" class="form-control" required></textarea>
                    <button type="button" onclick="sendEmail()" value="Pošalji email" class="btn btn-sm btn-primary form-control" >Submit</button>
                </form>
                
                <h4 class="sent-notification mt-2"></h4>
            </div>
            <div class="contactInfo">
                <h3 class="white">Kontakt informacije</h3>
                <div class="contactInfoBox">
                    <div class="box">
                        <div class="infoIcon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="text">
                            <h3>Adresa</h3>
                            <p>Drinska, <br>Novo Sarajevo<br>71000<br>Sarajevo<br>Bosna i Hercegovina</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="infoIcon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="text">
                            <h3>Broj telefona</h3>
                            <p>062-696-505</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="infoIcon">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <div class="text">
                            <h3>Email</h3>
                            <p><a class="white" href="mailto:nermin.contact@gmail.com">nermin.contact@gmail.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script type="text/javascript">
        function sendEmail() {
            var name = $("#name");
            var email = $("#email");
            var subject = $("#subject");
            var body = $("#body");

            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
                $.ajax({
                    url: 'sendEmail.php',
                    method: 'POST',
                    dataType: 'json',
                    data: {
                        name: name.val(),
                        email: email.val(),
                        subject: subject.val(),
                        body: body.val()
                    },
                    success: function(response) {
                        $('#kontakt')[0].reset();
                        $('.sent-notification').text("Poruka uspješno poslana");
                    }
                })
            }
            
        }

        function isNotEmpty (caller) {
            if(caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else {
                caller.css('border', '');
                return true;
            }
        }

    </script>

    <script type="text/javascript">
        window.addEventListener('scroll', function(){
            var header = document.querySelector('header');
            header.classList.toggle('sticky', window.scrollY > 0)
        });

        function toggleMenu() {
            var menuToggle = document.querySelector('.toggle');
            var menuToggle = document.querySelector('.menu');
            menuToggle.classList.toggle('active');
            menu.classList.toggle('active');
        }
    </script>

    <script type="text/javascript">
        $('.skill-per').each(function(){
            var $this = $(this);
            var per = $this.attr('per');
            $this.css('width', per + '%');
            $({animatedValue: 0}).animate({animatedValue: per},{
            duration: 1000,
            step: function(){
                $this.attr('per', Math.floor(this.animatedValue));
                },
                complete: function(){
                $this.attr('per', Math.floor(this.animatedValue) + '%');
                }
            });
        });
    </script>
</body>
</html>
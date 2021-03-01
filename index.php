<?php
$serverPath = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
$urlCorrente = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$siteTitle = 'Memento';

$siteDescription = 'Memento è una piattaforma cloud native per semplificare le attività di monitortaggioe incasso dei crediti commerciali da parte di aziende e professionisti del settore.';

$ver = '?ver=' . date('YmdHis');
?>
<!doctype html>
<html lang="it">
<head>
    <title>Memento - Incassa i tuoi crediti senza fatica</title>
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="<?php echo $urlCorrente ?>" />
    <meta name="twitter:title" content="<?php echo $siteTitle ?>" />
    <meta name="twitter:description" content="<?php echo $siteDescription ?>" />
    <!-- Open Graph data -->
    <meta property="og:url" content="<?php echo $urlCorrente ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $siteTitle ?>" />
    <meta property="og:description" content="<?php echo $siteDescription ?>" />
    <meta property="og:image" content="<?php echo $urlCorrente ?>" />
    <meta property="og:site_name" content="" />
    <!-- meta -->
    <meta charset="utf-8">
    <meta name="author" content="" />
    <meta name="web_author" content="">
    <meta name="revisit-after" content="15 days" />
    <meta name="robots" content="index,follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="description" content="<?php echo $siteDescription ?>" />
    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#022F4D">
    <meta name="apple-mobile-web-app-title" content="Memento">
    <meta name="application-name" content="Memento">
    <meta name="msapplication-TileColor" content="#022F4D">
    <meta name="theme-color" content="#022F4D">
    <!-- css -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap">
    <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/aos.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/all.css<?php echo $ver ?>" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/all-responsive.css<?php echo $ver ?>" />
</head>
<body>
    <!-- header -->
    <header data-aos="fade-down" data-aos-offset="0" data-aos-duration="1500" data-aos-delay="0">
        <div class="logo">
            <?php echo file_get_contents('svg/memento-logo.svg') ?>
        </div>
        <nav>
            <ul>
                <li>
                    <a class="blue" href="javascript:;" title="Contattaci" onclick="scrollToElement('#contact-form', 1000)">Contattaci</a>
                </li>
                <li>
                    <a class="green" href="https://app.memento.credit/register" title="Registrati">Registrati</a>
                </li>
                <li>
                    <a class="green" href="https://app.memento.credit/login" title="Accedi">Accedi</a>
                </li>
            </ul>
        </nav>
    </header>
    <!-- home -->
    <section class="home boxed">
        <div class="text" data-aos="fade-in" data-aos-offset="0" data-aos-duration="1500" data-aos-delay="500">
            <h1>Incassa i tuoi crediti senza fatica</h1>
            <ul>
                <li>
                    <a class="button green" href="https://app.memento.credit/register" title="Scopri di più">Scopri di più</a>
                </li>
                <li>
                    <a class="button blue-bordered" href="https://app.memento.credit/register" title="Registrati">Registrati</a>
                </li>
            </ul>
        </div>
        <div class="image" data-aos="fade-in" data-aos-offset="0" data-aos-duration="1500" data-aos-delay="250">
            <img src="img/memento-home-devices.jpg" alt="Memento" width="100%" height="auto">
        </div>
        <h2><span data-aos="fade-in" data-aos-offset="0" data-aos-duration="1500" data-aos-delay="750">Memento è una piattaforma cloud native nata per sempliﬁcare le attività di monitoraggio e incasso dei crediti commerciali da parte di aziende e professionisti di ogni settore</span></h2>
    </section>
    <div class="home-enter" data-aos="fade-in" data-aos-offset="0" data-aos-duration="1500" data-aos-delay="750">
        <a href="javascript:;" title="Entra" onclick="scrollToElement('#collections-credits', 1000)">
            <?php echo file_get_contents('svg/home-enter.svg') ?>
        </a>
    </div>
    <!-- section collections-credits -->
    <section class="collections-credits" id="collections-credits">
        <h3 data-aos="fade-up" data-aos-offset="150" data-aos-duration="1500" data-aos-delay="0">Con Memento gestisci gli incassi dei tuoi crediti commerciali riducendo al minimo il consumo di tempo e l’effort del tuo team di lavoro</h3>
        <div class="group">
            <div class="mask mask-top"><?php echo file_get_contents('svg/mask-4.svg') ?></div>
            <div class="photo obj-fit">
                <img src="img/memento-incassi-crediti-commerciali.jpg" alt="Incassi crediti commerciali" width="100%" height="auto">
            </div>
            <div class="text">
                <ul>
                    <li data-aos="fade-up" data-aos-offset="150" data-aos-duration="1000" data-aos-delay="0">Semplice da usare</li>
                    <li data-aos="fade-up" data-aos-offset="150" data-aos-duration="1000" data-aos-delay="0">Mobile ready</li>
                    <li data-aos="fade-up" data-aos-offset="150" data-aos-duration="1000" data-aos-delay="0">Integrata con i principali software di fatturazione e ERP</li>
                </ul>
                <a data-aos="fade-up" data-aos-offset="150" data-aos-duration="1000" data-aos-delay="0" class="button" href="https://app.memento.credit/register" title="Inizia ora">Inizia ora</a>
            </div>
            <div class="mask mask-bottom"><?php echo file_get_contents('svg/mask-3.svg') ?></div>
        </div>
    </section>
    <!-- section features -->
    <section class="features">
        <div class="group">
            <div class="item" data-aos="fade-up" data-aos-offset="150" data-aos-duration="1000" data-aos-delay="0">
                <div class="icon">
                    <?php echo file_get_contents('svg/automate.svg') ?>
                </div>
                <div class="text">
                    <h4>Automatizza</h4>
                    <p>Automatizza la gestione di attività ripetitive.</p>
                </div>
            </div>
            <div class="item" data-aos="fade-up" data-aos-offset="150" data-aos-duration="1000" data-aos-delay="0">
                <div class="icon">
                    <?php echo file_get_contents('svg/organize.svg') ?>
                </div>
                <div class="text">
                    <h4>Organizza</h4>
                    <p>Organizza la gestione attraverso workﬂow personalizzati dei noiosi promemoria di pagamento di pagamento ai clienti.</p>
                </div>
            </div>
            <div class="item" data-aos="fade-up" data-aos-offset="150" data-aos-duration="1000" data-aos-delay="0">
                <div class="icon">
                    <?php echo file_get_contents('svg/customize.svg') ?>
                </div>
                <div class="text">
                    <h4>Personalizza</h4>
                    <p>Accelera e personalizza la comunicazione con i tuoi clienti.</p>
                </div>
            </div>
            <div class="item" data-aos="fade-up" data-aos-offset="150" data-aos-duration="1000" data-aos-delay="0">
                <div class="icon">
                    <?php echo file_get_contents('svg/simplify.svg') ?>
                </div>
                <div class="text">
                    <h4>Semplifica</h4>
                    <p>Sempliﬁca i pagamenti da parte dei clienti con link per il pagamento diretto inseriti nelle comunicazioni.</p>
                </div>
            </div>
            <div class="item" data-aos="fade-up" data-aos-offset="150" data-aos-duration="1000" data-aos-delay="0">
                <div class="icon">
                    <?php echo file_get_contents('svg/track.svg') ?>
                </div>
                <div class="text">
                    <h4>Tieni traccia</h4>
                    <p>Tiene traccia dell’attività svolta su ogni singola fattura.</p>
                </div>
            </div>
            <div class="item" data-aos="fade-up" data-aos-offset="150" data-aos-duration="1000" data-aos-delay="0">
                <div class="icon">
                    <?php echo file_get_contents('svg/reduce.svg') ?>
                </div>
                <div class="text">
                    <h4>Riduci</h4>
                    <p>Riduce drasticamente il tempo dedicato dal tuo team alla gestione del recupero degli incassi sulle fatture scadute.</p>
                </div>
            </div>
            <div class="item" data-aos="fade-up" data-aos-offset="150" data-aos-duration="1000" data-aos-delay="0">
                <div class="icon">
                    <?php echo file_get_contents('svg/analyze.svg') ?>
                </div>
                <div class="text">
                    <h4>Analizza</h4>
                    <p>Utilizza la piattaforma per  tenere i tuoi crediti sotto controllo con le Dashboard e gli insight.</p>
                </div>
            </div>
            <div class="item" data-aos="fade-up" data-aos-offset="150" data-aos-duration="1000" data-aos-delay="0">
                <div class="icon">
                    <?php echo file_get_contents('svg/monitoring.svg') ?>
                </div>
                <div class="text">
                    <h4>Monitora</h4>
                    <p>Monitora il merito creditizio dei tuoi clienti e valuta in real time il tuo rischio di credito sulle forniture.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- credit-control -->
    <div class="mask"><?php echo file_get_contents('svg/mask-1.svg') ?></div>
    <section class="screenshot bg-gradient" id="credit-control">
        <div class="text" data-aos="fade-right" data-aos-offset="150" data-aos-duration="1000" data-aos-delay="0">
            <h4>Tieni i tuoi crediti sotto controllo e velocizza gli incassi!</h4>
            <p>Con Memento sarai in grado di misurare la tua efﬁcienza nella gestione dei crediti e di comprendere la velocità con cui la tua azienda incassa mediamente le sue fatture misurando e monitorando il tuo Days Sales Outstanding (DSO).</p>
        </div>
        <div class="photo" data-aos="fade-left" data-aos-offset="150" data-aos-duration="1000" data-aos-delay="0">
            <img src="img/screenshot-tempi-medi.png" alt="Tieni i tuoi crediti sotto controllo e velocizza gli incassi!" width="100%" height="auto">
        </div>
    </section>
    <div class="mask"><?php echo file_get_contents('svg/mask-2.svg') ?></div>
    <!-- dashboard-analytics -->
    <section class="screenshot alt" id="dashboard-analytics">
        <div class="text" data-aos="fade-left" data-aos-offset="150" data-aos-duration="1000" data-aos-delay="0">
            <h4>Dashboard e analytics</h4>
            <p>Attraverso le dashboard e gli analytics di Memento potrai monitorare e analizzare con semplicità i tuoi dati ﬁnanziari, misurare come migliorano nel tempo e utilizzarli per prendere decisioni più efﬁcaci per il miglioramento del business e del cash ﬂow della tua azienda.</p>
        </div>
        <div class="photo" data-aos="fade-right" data-aos-offset="150" data-aos-duration="1000" data-aos-delay="0">
            <img src="img/screenshot-dashboard-analytics.png" alt="Dashboard e analytics" width="100%" height="auto">
        </div>
    </section>
    <!-- client-analyze -->
    <div class="mask"><?php echo file_get_contents('svg/mask-3.svg') ?></div>
    <section class="screenshot bg-gradient-revert mask-curved" id="client-analyze">
        <div class="text" data-aos="fade-right" data-aos-offset="150" data-aos-duration="1000" data-aos-delay="0">
            <h4>Imposta flussi di lavoro automatici e personalizzati</h4>
            <p>Analizza lo storico dei tuoi clienti in modo da poter elaborare la giusta strategia per abbreviare i tempi di incasso.<br />Con Memento potrai impostare, con semplicità, una serie di azioni automatiche e creare dei flussi di comunicazione personalizzati, rapidi ed efficaci verso ciascuno di loro.</p>
            <p>Centralizza le attività del tuo team su un unico strumento e organizza le azioni da compiere su ciascuna fattura in maniera chiara, rapida e condivisa.<br />Risparmia tempo, fatica e denaro, automatizzando attività noiose e ripetitive come l’invio di promemoria sui pagamenti scaduti o in scadenza.</p>
            <p>Grazie a Memento tutte le azioni svolte saranno catalogate in maniera ordinata e saranno accessibili a tutto il team di lavoro.</p>
        </div>
        <div class="photo" data-aos="fade-left" data-aos-offset="150" data-aos-duration="1000" data-aos-delay="0">
            <img src="img/screenshot-client-analysis.png" alt="Analisi del cliente" width="100%" height="auto">
        </div>
    </section>
    <!-- real-time-metrics -->
    <section class="real-time-metrics">
        <div class="mask mask-top"><?php echo file_get_contents('svg/mask-4.svg') ?></div>
        <div class="photo" data-aos="fade-in" data-aos-offset="150" data-aos-duration="1000" data-aos-delay="0">
            <img src="img/screenshot-metrics-real-time.png" alt="" width="100%" height="auto">
        </div>
        <div class="text" data-aos="fade-in" data-aos-offset="150" data-aos-duration="1000" data-aos-delay="250">
            <h4>Metriche in tempo reale</h4>
            <p>Tutti gli indicatori di memento relativi agli incassi sono sempre aggiornati in tempo reale.</p>
        </div>
        <div class="mask mask-bottom"><?php echo file_get_contents('svg/mask-1.svg') ?></div>
    </section>
    <!-- dashboard-analytics -->
    <section class="screenshot bg-gradient" id="credit-risk">
        <div class="text" data-aos="fade-right" data-aos-offset="150" data-aos-duration="1000" data-aos-delay="0">
            <h4>Scopri chi è rimasto indietro nei pagamenti e monitora il tuo rischio di credito</h4>
            <p>Con Memento avrai sempre sotto controllo l’aging dei tuoi crediti (complessivo e di ciascun cliente) attraverso report e analisi customizzabili e potrai richiedere il monitoraggio del credit score di ciascuno dei tuoi clienti per scoprire se e quali crediti potrebbero essere potenzialmente problematici, monitorare le singole posizioni e agire per tempo per limitare al minimo il rischio di insolvenza.</p>
        </div>
        <div class="photo" data-aos="fade-left" data-aos-offset="150" data-aos-duration="1000" data-aos-delay="0">
            <img src="img/screenshot-credit-risk.png" alt="Tieni i tuoi crediti sotto controllo e velocizza gli incassi!" width="100%" height="auto">
        </div>
    </section>
    <div class="mask"><?php echo file_get_contents('svg/mask-2.svg') ?></div>
    <!-- credits-segmentation -->
    <section class="credits-segmentation-aging">
        <div data-aos="fade-up" data-aos-offset="150" data-aos-duration="1000" data-aos-delay="0">
            <div class="icon">
                <?php echo file_get_contents('svg/credit-segmentation.svg') ?>
            </div>
            <h5>Segmentazione dei crediti</h5>
            <p>Filtra i clienti in base al loro credit score al ﬁne di identiﬁcare in anticipo potenziali problemi</p>
        </div>
        <div data-aos="fade-up" data-aos-offset="150" data-aos-duration="1000" data-aos-delay="0">
            <div class="icon">
                <?php echo file_get_contents('svg/credits-aging.svg') ?>
            </div>
            <h5>Analisi dell’aging dei crediti</h5>
            <p>Misura l’aging dei tuoi crediti per veriﬁcare l’efﬁcacia della tua strategia di gestione.</p>
        </div>
    </section>
    <!-- real-time-metrics -->
    <section class="coming-soon">
        <div class="mask mask-top"><?php echo file_get_contents('svg/mask-2.svg') ?></div>
        <div class="text" data-aos="fade-in" data-aos-offset="150" data-aos-duration="1000" data-aos-delay="0">
            <h4>Accedi a previsioni accurate sugli incassi futuri e elabora in anticipo le tue strategie</h4>
            <p>Sfruttando i dati storici relativi ai ﬂussi di cassa della tua azienda, gli algoritmi predittivi di Memento ti permetteranno di stimare in qualsiasi momento il tuo tasso di raccolta futuro e di prevedere i tuoi ﬂussi di cassa in entrata.</p>
            <a href="#" title="Coming soon">
                <span><?php echo file_get_contents('svg/shuttle.svg') ?></span>
                <span>Coming soon</span>
            </a>
        </div>
        <div class="mask mask-bottom"><?php echo file_get_contents('svg/mask-1.svg') ?></div>
    </section>
    <!-- contacts -->
    <section class="contacts" id="contact-form">
        <form action="" enctype="multipart/form-data" method="post">
            <div class="boxed">
                <div class="text" data-aos="fade-in" data-aos-offset="150" data-aos-duration="1000" data-aos-delay="0">
                    <h6>Contattaci</h6>
                    <p>Aenean pellentesque metus vel nisl condimentum congue. Vestibulum id ligula enim. Vivamus vehicula nunc sagittis lectus auctor, a lobortis enim sollicitudin. Nulla facilisi. In molestie nulla vitae mollis aliquam.</p>
                </div>
                <div class="module" data-aos="fade-in" data-aos-offset="150" data-aos-duration="1000" data-aos-delay="0">
                    <div>
                        <input type="text" id="nome" name="nome" value="" placeholder="Nome e Cognome">
                    </div>
                    <div>
                        <input type="text" id="email" name="email" value="" placeholder="E-mail">
                    </div>
                    <div class="full">
                        <textarea type="text" id="messaggio" name="messaggio" rows="8" placeholder="Motivo del contatto"></textarea>
                    </div>
                    <div class="full privacy">
                        <label for="privacy">
                            <span>
                                <input type="checkbox" id="privacy" name="privacy" value="accetto">
                            </span>
                            <span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </span>
                        </label>
                    </div>
                    <div class="full button">
                        <button type="send">Invia richiesta</button>
                    </div>
                </div>
            </div>
        </form>
    </section>
    <!-- footer -->
    <footer>
        <div>
            <div class="logo">
                <?php echo file_get_contents('svg/memento-logo.svg') ?>
            </div>
            <div class="text">
                <div>
                    <h6>Bflows Srl</h6>
                    <p>Piazza Martiri d’Italia 12 - 09124 Cagliari</p>
                    <p>Via non saprei 11 - 19124 Milano</p>
                </div>
                <div>
                    <h6>
                        <a href="mailto:info@bflows.net" title="info@bflows.net">info@bflows.net</a>
                    </h6>
                </div>
            </div>
        </div>
    </footer>
    <!-- credits -->
    <div class="credits">
        <div>
            <div class="links">
                <ul>
                    <li>
                        <a href="#" title="Privacy Policy">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="#" title="Cookie Policy">Cookie Policy</a>
                    </li>
                    <li>
                        <a href="https://inoke.studio" title="Credits" target="_blank">Credits</a>
                    </li>
                </ul>
            </div>
            <div class="copyright">
                Copyright © 2020. All rights reserved
            </div>
        </div>
    </div>
    <!-- scrollbar -->
    <div class="scrollbar">
        <div class="bar"><div class="scroll"></div></div>
    </div>
    <!-- script -->
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/aos.js"></script>
    <script type="text/javascript" src="js/all.js<?php echo $ver ?>"></script>
</body>
</html>

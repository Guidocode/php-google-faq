<!-- 
  Riscrivere questa pagina del sito google https://policies.google.com/faq.
  Ci sono diverse domande con relative risposte.
  Gestire il “Database” e la visualizzazione di queste domande e risposte con PHP.
  Per la formattazione del testo della FAQ inserite il markup HTML direttamente nel “database”
-->


<?php

  $db = [
    [
      'question' => "Come state implementando la recente decisione della Corte di giustizia dell'Unione europea (CGUE) relativa al diritto all'oblio?",
      'answer' => "
        <p>La <a href='#'>decisione della Corte di giustizia dell'Unione europea</a> ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi.</p>
        <p>Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa. Si tratta di una procedura complessa perché dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto dell'individuo a controllare i suoi dati personali ed il diritto di tutti di conoscere e distribuire le informazioni.</p>
        <p>Per presentare una richiesta di rimozione, compila questo <a href='#'>modulo web</a>. Riceverai una risposta automatica che conferma la ricezione della tua richiesta. Dopodiché valuteremo il tuo caso (tieni presente che potrebbe occorrere un po' di tempo perché abbiamo già ricevuto tante richieste simili). Nel valutare la richiesta, considereremo se i risultati includono informazioni obsolete relative alla tua vita privata. Considereremo inoltre se vi è un interesse pubblico a che le informazioni rimangano nei nostri risultati delle ricerche, ad esempio se riguardano frodi finanziarie, negligenza professionale, condanne penali o la tua condotta pubblica in relazione a un pubblico ufficio (eletto o non eletto). Queste valutazioni sono complesse e, in quanto organizzazione privata, potremmo non essere nella posizione giusta per prendere decisioni in merito al tuo caso. Se non sei d'accordo con la nostra valutazione, puoi rivolgerti all'Autorità garante per la protezione dei dati personali nel tuo paese.</p>
        <p>Nei prossimi mesi lavoreremo a stretto contatto con le autorità per la protezione dei dati e con altre autorità per perfezionare il nostro approccio. La decisione della CGUE rappresenta un cambiamento significativo per i motori di ricerca. Siamo preoccupati per le sue conseguenze, ma riteniamo anche che sia importante rispettare la decisione della Corte e ci stiamo adoperando per predisporre una procedura conforme alla legge.</p>
        <p>Quando cerchi un nome, potresti trovare una notifica in cui viene spiegato che i risultati potrebbero essere stati modificati nel rispetto delle leggi europee per la protezione dei dati. Mostriamo questa notifica agli utenti europei quando cercano la maggior parte dei nomi, non soltanto le pagine che sono state soggette a una rimozione.</p>
      "
    ],
    [
      'question' => "Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?",
      'answer' => "
        <p>Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. Per noi è imperativo offrire un'elevata sicurezza e assicurarti che le tue informazioni sono al sicuro e accessibili quando ne hai bisogno.</p>
        <p>Siamo costantemente al lavoro per garantire un'elevata sicurezza, proteggere la tua privacy e rendere Google ancora più efficace ed efficiente per te. Spendiamo centinaia di milioni di dollari ogni anno per la sicurezza e ci avvaliamo di esperti di fama mondiale in materia di sicurezza dei dati per mantenere le tue informazioni al sicuro. Abbiamo inoltre sviluppato strumenti per la sicurezza e la privacy di facile utilizzo come Google Dashboard, la verifica in due passaggi e Impostazioni annunci. Così, per quanto riguarda le informazioni che condividi con Google, hai il massimo controllo.</p>
        <p>Puoi leggere ulteriori informazioni sulla sicurezza online, incluso come proteggere te e la tua famiglia online, nel <a href='#'>Centro Google per la sicurezza online</a>.</p>
        <p><a href='#'>Scopri</a> quali misure adottiamo per garantire protezione e sicurezza alle tue informazioni personali, lasciando a te il controllo.</p>
      "
    ],
    [
      'question' => "Perché il mio account è associato a un paese?",
      'answer' => "
        <p>Il tuo account è associato a un paese (o territorio) nei Termini di servizio per poter stabilire due cose:</p>
        <ol>
          <li>
            La società consociata Google che offre i servizi, tratta le tue informazioni ed è responsabile del rispetto delle leggi sulla privacy vigenti. Generalmente Google offre i propri servizi per i consumatori tramite una delle due società seguenti:
            <ol type='a'>
              <li>Google Ireland Limited, se gli utenti sono residenti nello Spazio economico europeo (paesi dell'Unione europea, oltre a Islanda, Liechtenstein e Norvegia) o in Svizzera.</li>
              <li>Google LLC, con sede negli Stati Uniti, per il resto del mondo.</li>
            </ol>
          </li>
          <li>La versione dei termini che regola il nostro rapporto, che può variare in base alle leggi locali.</li>
        </ol>
        <p>Tieni presente che i servizi Google sono fondamentalmente gli stessi a prescindere dalla società consociata che li offre o dal paese a cui è associato il tuo account.</p>
        <p class='fs-5'>Stabilire il paese associato al tuo account</p>
        <p>Quando crei un nuovo Account Google, lo associamo a un paese in base a dove è stato creato. Per quanto riguarda gli account creati almeno un anno fa, usiamo il paese da cui accedi solitamente ai servizi Google, in genere i servizi in cui hai trascorso più tempo nell'ultimo anno.</p>
        <p>I viaggi frequenti solitamente non influiscono sul paese associato al tuo account. Se ti trasferisci in un altro paese, potrebbe occorrere circa un anno per aggiornare l'associazione del paese.</p>
        <p>Se il paese associato al tuo account non corrisponde al tuo paese di residenza, il motivo potrebbe essere la differenza tra il paese in cui lavori e il paese in cui risiedi, l'installazione di una rete privata virtuale (VPN) per mascherare il tuo indirizzo IP oppure la residenza vicino a un confine territoriale. <a href='#'>Contattaci</a> se ritieni che il paese associato al tuo account sia sbagliato.</p>
      "
    ],
    [
      'question' => "Come faccio a rimuovere informazioni su di me dai risultati di ricerca di Google?",
      'answer' => "<p>I risultati di ricerca di Google rispecchiano i contenuti pubblicamente disponibili sul Web. I motori di ricerca non possono rimuovere i contenuti direttamente dai siti web, quindi rimuovere risultati di ricerca da Google non consente di rimuovere i contenuti dal Web. Se desideri rimuovere qualcosa dal Web, devi <a href='#'>contattare il webmaster</a> del sito su cui sono pubblicati i contenuti e chiedergli di apportare una modifica. Inoltre, se, ai sensi delle leggi europee per la protezione dei dati, desideri richiedere la rimozione di determinate informazioni su di te visualizzate nei risultati di ricerca di Google, <a href='#'>fai clic qui</a>. Una volta che i contenuti saranno stati rimossi e che Google avrà rilevato l'aggiornamento, le informazioni non verranno più visualizzate nei risultati di ricerca di Google. In caso di una richiesta di rimozione urgente, è inoltre possibile <a href='#'>visitare la nostra pagina di assistenza per avere ulteriori informazioni</a>.</p>"
    ],
    [
      'question' => "Quando faccio clic sui risultati della Ricerca Google, le mie chiavi di ricerca vengono inviate ai siti web?",
      'answer' => "<p>In alcuni casi sì. Quando fai clic su un risultato della Ricerca Google, il tuo browser web potrebbe reindirizzare alla pagina web di destinazione anche l'indirizzo Internet, o URL, della pagina dei risultati di ricerca sotto forma di <a href='#'>URL referrer</a>. Talvolta, l'URL della pagina dei risultati di ricerca potrebbe contenere la query di ricerca che hai inserito. Se utilizzi la ricerca SSL (la funzione di ricerca criptata di Google), nella maggior parte dei casi i termini di ricerca non vengono inviati come parte dell'URL negli URL referrer. Questo comportamento può fare eccezione, ad esempio se utilizzi alcuni browser meno diffusi. Ulteriori informazioni sulla ricerca SSL sono disponibili <a href='#'>qui</a>. Le query di ricerca o le informazioni contenute nell'URL referrer potrebbero essere disponibili mediante Google Analytics o un'API (Application Programming Interface). Inoltre, gli inserzionisti potrebbero ricevere informazioni relative all' esatte parole chiave che hanno determinato il clic su un annuncio.</p>"
    ],
  ];
  
  // var_dump($db);

?>





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="./style/style.css">

  <title>Php gogle faq</title>
</head>
<body>

  <header>

    <div class="header-top d-flex justify-content-between align-items-center">
      <div class="left">
        <img class="logo" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTiKoXotLAQMMLsO_qRy4Y4Rz5Fn44nZU0wbSJTHUzlf3nG6qecoD9JSjyNtXu9MSCJ86s&usqp=CAU" alt="Logo Google">
        <span class="fs-5">Privacy e termini</span>
      </div>
      <div class="right d-flex align-items-center">
        <i class="fa-solid fa-bars fs-4"></i>
        <button type="button" class="btn btn-primary gb-btn px-4">Accedi</button>
      </div>
    </div>

    <div class="header-bottom">
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            
            <li class="nav-item">
              <a class="nav-link" href="#">Introduzione</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Norme sulla privacy</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Termini di servizio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Tecnologie</a>
            </li>
            <li class="nav-item">
              <a class="nav-link gb-active" href="#">Domande frequenti <span class="sr-only"></span></a>
            </li>

          </ul>
        </div>
      </nav>
    </div>

  </header>

  <main>
    <div class="gb-container my-5">

      <?php foreach($db as $faqs => $faq) :?>

        <p class="question fs-4"> <?php echo $faq['question'] ?> </p>

        <div class="answer mb-5"> <?php echo $faq['answer'] ?> </div>

      <?php endforeach ?>

    </div>
  </main>
  
</body>
</html>
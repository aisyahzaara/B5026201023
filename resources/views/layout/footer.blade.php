<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>CodePen - CSS Goey footer</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;display=swap" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" />
    <link rel="stylesheet" href="./style.css" />

    <style>
      body {
        display: grid;
        grid-template-rows: 1fr auto;
        grid-template-areas: "main" "footer";
        overflow-x: hidden;
        background: #f5f7fa;
        min-height: 100vh;
        font-family: "Open Sans", sans-serif;
      }
      body .footer {
        z-index: 1;
        --footer-background: #94a3f7;
        display: grid;
        position: relative;
        grid-area: footer;
        min-height: 12rem;
      }
      body .footer .bubbles {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 1rem;
        background: var(--footer-background);
        filter: url("#blob");
      }
      body .footer .bubbles .bubble {
        position: absolute;
        left: var(--position, 50%);
        background: var(--footer-background);
        border-radius: 100%;
        -webkit-animation: bubble-size var(--time, 4s) ease-in infinite var(--delay, 0s), bubble-move var(--time, 4s) ease-in infinite var(--delay, 0s);
        animation: bubble-size var(--time, 4s) ease-in infinite var(--delay, 0s), bubble-move var(--time, 4s) ease-in infinite var(--delay, 0s);
        transform: translate(-50%, 100%);
      }
      body .footer .content {
        z-index: 2;
        display: grid;
        grid-template-columns: 1fr auto;
        grid-gap: 3rem;
        padding: 2rem;
        background: var(--footer-background);
      }
      body .footer .content a,
      body .footer .content p {
        color: #f5f7fa;
        text-decoration: none;
      }
      body .footer .content b {
        color: white;
      }
      body .footer .content p {
        margin: 0;
        font-size: 0.85rem;
        text-align: center;
      }
      body .footer .content > div {
        display: flex;
        flex-direction: column;
        justify-content: center;
      }
      body .footer .content > div > div {
        margin: 0.25rem 0;
      }
      body .footer .content > div > div > * {
        margin-right: 0.5rem;
      }
      body .footer .content > div .image {
        align-self: center;
        width: 4rem;
        height: 4rem;
        margin: 0.25rem 0;
        background-size: cover;
        background-position: center;
      }

      @-webkit-keyframes bubble-size {
        0%,
        75% {
          width: var(--size, 4rem);
          height: var(--size, 4rem);
        }
        100% {
          width: 0rem;
          height: 0rem;
        }
      }

      @keyframes bubble-size {
        0%,
        75% {
          width: var(--size, 4rem);
          height: var(--size, 4rem);
        }
        100% {
          width: 0rem;
          height: 0rem;
        }
      }
      @-webkit-keyframes bubble-move {
        0% {
          bottom: -4rem;
        }
        100% {
          bottom: var(--distance, 10rem);
        }
      }
      @keyframes bubble-move {
        0% {
          bottom: -4rem;
        }
        100% {
          bottom: var(--distance, 10rem);
        }
      }
    </style>
  </head>
  <body>
    <!-- partial:index.partial.html -->
    <div class="main"></div>
    <div class="footer">
      <div class="bubbles">
        <div class="bubble" style="--size: 2.1662286042718524rem; --distance: 8.62950612560807rem; --position: 82.91799157325615%; --time: 3.577844065748164s; --delay: -3.8855883965436093s"></div>
        <div class="bubble" style="--size: 4.417364899259883rem; --distance: 7.150417868605735rem; --position: 84.8998881504291%; --time: 3.6198290212124755s; --delay: -3.5583481426357664s"></div>
        <div class="bubble" style="--size: 3.7743251206117003rem; --distance: 9.305588434391236rem; --position: 16.30195419922712%; --time: 2.1004595596104023s; --delay: -3.1945964448390933s"></div>
        <div class="bubble" style="--size: 3.6463947248239297rem; --distance: 8.156751863180446rem; --position: 27.77831497746137%; --time: 3.9075367920260216s; --delay: -3.559699177534523s"></div>
        <div class="bubble" style="--size: 2.6218204875905045rem; --distance: 7.827816763116623rem; --position: 92.0753689826994%; --time: 3.259828616235901s; --delay: -2.9138575087445857s"></div>
        <div class="bubble" style="--size: 5.5235429782954rem; --distance: 6.818718733479606rem; --position: 4.247365315366199%; --time: 3.1338266588341144s; --delay: -2.1948215032897687s"></div>
        <div class="bubble" style="--size: 2.84519135923653rem; --distance: 8.067912896402401rem; --position: 53.95815557899985%; --time: 3.465298346129186s; --delay: -3.301252264731847s"></div>
        <div class="bubble" style="--size: 5.210391432909355rem; --distance: 9.663562539147058rem; --position: 104.67311655479088%; --time: 3.427585754492091s; --delay: -3.1854531450475125s"></div>
        <div class="bubble" style="--size: 2.052679602702656rem; --distance: 6.30996252449269rem; --position: 32.97640339473855%; --time: 3.6199196622998406s; --delay: -2.7653169546303764s"></div>
        <div class="bubble" style="--size: 2.0268414898015106rem; --distance: 8.796657954796592rem; --position: 71.31766929873079%; --time: 2.5475431135463777s; --delay: -3.4522059694020832s"></div>
        <div class="bubble" style="--size: 5.0109778629241rem; --distance: 9.255604105141717rem; --position: 39.823160394758155%; --time: 3.0625055283724385s; --delay: -2.1209423385281134s"></div>
        <div class="bubble" style="--size: 3.3116115714225787rem; --distance: 9.780968035463715rem; --position: 41.98530543854015%; --time: 2.570492466585039s; --delay: -3.8051375777711987s"></div>
        <div class="bubble" style="--size: 4.102770589293491rem; --distance: 6.775281103355093rem; --position: 25.10184568889144%; --time: 2.1779008818170147s; --delay: -2.845622596295033s"></div>
        <div class="bubble" style="--size: 3.6576352434833543rem; --distance: 6.089746481895569rem; --position: 21.296110808063165%; --time: 3.5220701642100933s; --delay: -3.407054256632051s"></div>
        <div class="bubble" style="--size: 2.4197694884265086rem; --distance: 6.3992341594603275rem; --position: 57.60384239136097%; --time: 3.3606450912445243s; --delay: -3.840276915658409s"></div>
        <div class="bubble" style="--size: 5.755016188993135rem; --distance: 9.97706503668567rem; --position: 39.80564046987392%; --time: 2.285456823446269s; --delay: -3.5174995800005155s"></div>
        <div class="bubble" style="--size: 2.6895498234467397rem; --distance: 9.743880274757984rem; --position: 65.10999578139416%; --time: 3.8053137470464815s; --delay: -2.9437273116306497s"></div>
        <div class="bubble" style="--size: 4.496384620870255rem; --distance: 8.23127670916088rem; --position: 58.53342368824043%; --time: 2.2896147295947036s; --delay: -2.9394554631376124s"></div>
        <div class="bubble" style="--size: 5.199831756939104rem; --distance: 8.417694177840604rem; --position: 15.72301196519129%; --time: 3.1320052690725455s; --delay: -3.841645787836404s"></div>
        <div class="bubble" style="--size: 2.3912984772302277rem; --distance: 8.250602429220741rem; --position: 60.430977036816216%; --time: 2.932907222911298s; --delay: -3.6365447624891254s"></div>
        <div class="bubble" style="--size: 5.1514646702128rem; --distance: 7.122710405045958rem; --position: 88.71403769091849%; --time: 3.9887970418923544s; --delay: -2.167831944252362s"></div>
        <div class="bubble" style="--size: 4.204915715310608rem; --distance: 8.452404984408835rem; --position: 11.029373720257151%; --time: 2.2506948948600822s; --delay: -3.217793135643216s"></div>
        <div class="bubble" style="--size: 5.406696978850478rem; --distance: 7.605101658716519rem; --position: 35.484578292296426%; --time: 2.1351683528743526s; --delay: -3.567386992140415s"></div>
        <div class="bubble" style="--size: 3.589110248478587rem; --distance: 7.955337912250322rem; --position: 8.434160156761799%; --time: 3.9204660874909463s; --delay: -3.193787681275306s"></div>
        <div class="bubble" style="--size: 4.2864837633266175rem; --distance: 8.853039138044636rem; --position: 9.274508066314286%; --time: 3.3780594242426343s; --delay: -2.102914635614522s"></div>
        <div class="bubble" style="--size: 3.6506543799899127rem; --distance: 6.595388059642348rem; --position: 99.08936755968159%; --time: 3.5061800674837396s; --delay: -3.5792882375610007s"></div>
        <div class="bubble" style="--size: 2.06302025707636rem; --distance: 6.577058275699334rem; --position: 21.062460200948355%; --time: 3.744884914781782s; --delay: -3.640707300965603s"></div>
        <div class="bubble" style="--size: 2.967321009740802rem; --distance: 9.627934470498301rem; --position: 69.51429389266771%; --time: 3.245119059671137s; --delay: -3.5335347561650896s"></div>
        <div class="bubble" style="--size: 5.178262979274872rem; --distance: 7.963021014819376rem; --position: 62.35181310675998%; --time: 3.0846570542003744s; --delay: -3.6656896503324683s"></div>
        <div class="bubble" style="--size: 5.379009976304803rem; --distance: 7.126051078360335rem; --position: 70.88107276990937%; --time: 2.8056680258958635s; --delay: -3.534243363751736s"></div>
        <div class="bubble" style="--size: 2.451309084196337rem; --distance: 9.637317747413064rem; --position: 13.532264928617497%; --time: 3.629176634714014s; --delay: -2.5604690872896327s"></div>
        <div class="bubble" style="--size: 5.869629086212742rem; --distance: 6.951511645578494rem; --position: 50.32649188844243%; --time: 3.488143684677961s; --delay: -3.1887654425247924s"></div>
        <div class="bubble" style="--size: 2.626312759294488rem; --distance: 9.864076270617595rem; --position: 53.223867198896116%; --time: 3.916045074865699s; --delay: -3.8220275900976874s"></div>
        <div class="bubble" style="--size: 2.9358955167516694rem; --distance: 7.750710790673376rem; --position: 82.12637251627233%; --time: 3.614426959692508s; --delay: -2.839982136986907s"></div>
        <div class="bubble" style="--size: 4.916388570384143rem; --distance: 6.078303255374292rem; --position: 4.797625874807473%; --time: 2.0288310204610016s; --delay: -3.3010515458493424s"></div>
        <div class="bubble" style="--size: 3.8502277495723636rem; --distance: 7.251936675960043rem; --position: 62.55724912651222%; --time: 2.9702264527690776s; --delay: -3.996106414623152s"></div>
        <div class="bubble" style="--size: 5.6701161439078875rem; --distance: 6.802432131431549rem; --position: 91.18680867466301%; --time: 3.1952038896172446s; --delay: -3.1203946548598473s"></div>
        <div class="bubble" style="--size: 2.130074560222302rem; --distance: 9.697116575494842rem; --position: 93.85237111839768%; --time: 3.06765792421218s; --delay: -3.335579472223635s"></div>
        <div class="bubble" style="--size: 4.534526587296381rem; --distance: 6.8245345279921015rem; --position: 61.52238669516383%; --time: 2.100981864122645s; --delay: -2.4640392487409186s"></div>
        <div class="bubble" style="--size: 5.097798321011004rem; --distance: 6.854665181754954rem; --position: 33.52782401676595%; --time: 3.0663172969574726s; --delay: -3.9976022675627694s"></div>
        <div class="bubble" style="--size: 4.042838076956162rem; --distance: 8.115238656148758rem; --position: 98.24039405954177%; --time: 3.0653691286955547s; --delay: -3.3910808061061695s"></div>
        <div class="bubble" style="--size: 3.0019566909249873rem; --distance: 9.081775767883528rem; --position: 56.924673203651274%; --time: 3.6166421433745732s; --delay: -2.9969101263316995s"></div>
        <div class="bubble" style="--size: 4.6711731469275115rem; --distance: 7.313564064907209rem; --position: 39.35907913538323%; --time: 2.4444587340445545s; --delay: -3.9796806897441215s"></div>
        <div class="bubble" style="--size: 3.008244285398934rem; --distance: 8.822456853946356rem; --position: 75.50932933683377%; --time: 2.901154157385003s; --delay: -3.1352170345283636s"></div>
        <div class="bubble" style="--size: 5.100491591684066rem; --distance: 6.925755225347743rem; --position: 25.051134751101056%; --time: 3.5046610220196848s; --delay: -3.596120187295015s"></div>
        <div class="bubble" style="--size: 3.212237002796348rem; --distance: 6.857961519042632rem; --position: 53.962911856128024%; --time: 2.882345154070675s; --delay: -3.375958273037015s"></div>
        <div class="bubble" style="--size: 4.53958195895517rem; --distance: 9.555719824558901rem; --position: 100.01850342297506%; --time: 2.528319914268705s; --delay: -3.5599168393414513s"></div>
        <div class="bubble" style="--size: 5.786664229674458rem; --distance: 6.458061293954091rem; --position: 66.18454123370186%; --time: 2.263935231787082s; --delay: -3.2461197635941184s"></div>
        <div class="bubble" style="--size: 5.273932188285438rem; --distance: 8.960716701029192rem; --position: 17.878149578756272%; --time: 3.603553359409431s; --delay: -3.1738468243265587s"></div>
        <div class="bubble" style="--size: 4.119562083210732rem; --distance: 6.439305808365295rem; --position: 16.120772756262532%; --time: 3.079956687080462s; --delay: -2.849001370105101s"></div>
        <div class="bubble" style="--size: 2.238892990822034rem; --distance: 7.108028480898376rem; --position: 49.79757295076799%; --time: 2.851716016020167s; --delay: -2.978905543505526s"></div>
        <div class="bubble" style="--size: 4.5130141686891045rem; --distance: 7.186812681008986rem; --position: 22.303682730283477%; --time: 2.073290702996364s; --delay: -3.6373481522245457s"></div>
        <div class="bubble" style="--size: 2.1473492711906728rem; --distance: 8.715167263985364rem; --position: 4.137228303642178%; --time: 2.605071535290792s; --delay: -3.766311342039926s"></div>
        <div class="bubble" style="--size: 4.782721097557759rem; --distance: 8.249847352411532rem; --position: 7.5494389655668%; --time: 2.2999130977914595s; --delay: -3.056937392912288s"></div>
        <div class="bubble" style="--size: 5.349664910307532rem; --distance: 7.647962198253005rem; --position: 90.92568055561213%; --time: 3.510370603840688s; --delay: -3.8920314128156255s"></div>
        <div class="bubble" style="--size: 3.7600265813059703rem; --distance: 7.171710387740847rem; --position: -1.518109846414355%; --time: 2.936547567165077s; --delay: -3.446016973748817s"></div>
        <div class="bubble" style="--size: 5.010585811649681rem; --distance: 6.717281975533632rem; --position: 18.39855959494686%; --time: 3.7777743266107557s; --delay: -2.227422424498216s"></div>
        <div class="bubble" style="--size: 3.4803617599861356rem; --distance: 7.604641983403989rem; --position: 84.73826885744573%; --time: 3.4482445856932387s; --delay: -2.364209718209646s"></div>
        <div class="bubble" style="--size: 5.659412618361887rem; --distance: 9.612815923215702rem; --position: 103.89666954215078%; --time: 3.1970249446416075s; --delay: -3.068259221422511s"></div>
        <div class="bubble" style="--size: 5.4801987693586405rem; --distance: 9.744716513308049rem; --position: 83.64245411400815%; --time: 3.5779449717116676s; --delay: -3.760609364989023s"></div>
        <div class="bubble" style="--size: 2.645040515649738rem; --distance: 6.537590463561858rem; --position: -0.6421100557255173%; --time: 3.867348618132048s; --delay: -3.8361663950160962s"></div>
        <div class="bubble" style="--size: 3.4583951706635245rem; --distance: 9.185645814403795rem; --position: 84.1231690186998%; --time: 3.8355252579570998s; --delay: -2.0869021848921783s"></div>
        <div class="bubble" style="--size: 2.8095811945221616rem; --distance: 9.684247409961932rem; --position: 31.658626879570214%; --time: 3.8717859546188613s; --delay: -2.2391859631602196s"></div>
        <div class="bubble" style="--size: 3.762149575722913rem; --distance: 8.173454295864524rem; --position: 14.744690142290985%; --time: 2.0997692739439504s; --delay: -3.9286658390490086s"></div>
        <div class="bubble" style="--size: 2.445419741052433rem; --distance: 8.674373748652265rem; --position: 17.729987671666873%; --time: 3.033830191569654s; --delay: -2.212931077882247s"></div>
        <div class="bubble" style="--size: 3.6083960420975556rem; --distance: 9.18583760837177rem; --position: 52.72926790871972%; --time: 2.5957849044217447s; --delay: -2.178082910205105s"></div>
        <div class="bubble" style="--size: 3.591816066602192rem; --distance: 6.429782585550487rem; --position: 37.50886467370548%; --time: 2.0111635848970577s; --delay: -3.1628146090839504s"></div>
        <div class="bubble" style="--size: 2.660544753051073rem; --distance: 9.358521179085841rem; --position: 97.62990569086104%; --time: 3.755804502016494s; --delay: -3.9203894097897405s"></div>
        <div class="bubble" style="--size: 2.460173144951648rem; --distance: 8.23462696321438rem; --position: 27.627792775329908%; --time: 2.1487438305093844s; --delay: -3.5293861880482402s"></div>
        <div class="bubble" style="--size: 2.848640871413778rem; --distance: 6.731511047602155rem; --position: 41.648532137031346%; --time: 3.875304626564926s; --delay: -3.379504483231239s"></div>
        <div class="bubble" style="--size: 4.641617733126695rem; --distance: 6.317379023502482rem; --position: 74.9813298245419%; --time: 2.6412584748760954s; --delay: -3.842955116015872s"></div>
        <div class="bubble" style="--size: 3.0301666113034225rem; --distance: 9.87790552180389rem; --position: 78.93337758425604%; --time: 2.9372924086758196s; --delay: -2.756674010736383s"></div>
        <div class="bubble" style="--size: 2.872565330905359rem; --distance: 8.739069924329145rem; --position: 38.46082913982526%; --time: 3.915640413157481s; --delay: -3.5754485966121337s"></div>
        <div class="bubble" style="--size: 5.134844281206351rem; --distance: 9.755043956186626rem; --position: 42.43636097972538%; --time: 3.3801451163591887s; --delay: -3.357580292069533s"></div>
        <div class="bubble" style="--size: 3.8575274563344504rem; --distance: 8.622534984631649rem; --position: 1.1947865457922813%; --time: 3.518525700908772s; --delay: -3.9331336573422275s"></div>
        <div class="bubble" style="--size: 4.595681941488611rem; --distance: 6.308426504620948rem; --position: 89.30879326238328%; --time: 2.8716761240112483s; --delay: -3.9223757413867797s"></div>
        <div class="bubble" style="--size: 2.5407487600762435rem; --distance: 8.24434142571776rem; --position: 13.001917253804606%; --time: 3.803764880314398s; --delay: -2.2690965956620333s"></div>
        <div class="bubble" style="--size: 4.214852946463041rem; --distance: 9.297274821839785rem; --position: 39.41458162711144%; --time: 3.534658059667384s; --delay: -2.1963996235900294s"></div>
        <div class="bubble" style="--size: 2.954802454152029rem; --distance: 7.500431664752914rem; --position: 12.70038246163033%; --time: 3.1636614480684853s; --delay: -2.2451707447283527s"></div>
        <div class="bubble" style="--size: 5.445587797264056rem; --distance: 8.053997160063393rem; --position: 84.08416058397201%; --time: 2.425329083893323s; --delay: -2.6539451280534947s"></div>
        <div class="bubble" style="--size: 2.3277542316102906rem; --distance: 9.029195082518616rem; --position: 97.07868866567789%; --time: 3.02332298336427s; --delay: -2.214872230703894s"></div>
        <div class="bubble" style="--size: 3.071844514266692rem; --distance: 6.657046059298015rem; --position: 70.58445133260585%; --time: 2.3967105664122363s; --delay: -3.192177301017018s"></div>
        <div class="bubble" style="--size: 2.1757071639927164rem; --distance: 9.792983713385023rem; --position: 43.59680042579778%; --time: 3.198177839180233s; --delay: -2.025501708526078s"></div>
        <div class="bubble" style="--size: 2.92760783669586rem; --distance: 8.566393189376743rem; --position: 65.4529519118459%; --time: 3.2076200520172007s; --delay: -3.0953053732781473s"></div>
        <div class="bubble" style="--size: 2.206863454753803rem; --distance: 8.473367749279529rem; --position: 0.9721503416937498%; --time: 2.070843840703928s; --delay: -2.487057978871576s"></div>
        <div class="bubble" style="--size: 4.148992417027772rem; --distance: 9.341591540738705rem; --position: 70.38737827314583%; --time: 2.9274170511467936s; --delay: -3.9387271720322197s"></div>
        <div class="bubble" style="--size: 4.4906239844533795rem; --distance: 8.137205093237306rem; --position: 18.036919201900837%; --time: 3.585898272365367s; --delay: -3.6912896997459566s"></div>
        <div class="bubble" style="--size: 4.00491932559842rem; --distance: 6.347033169304773rem; --position: 16.978862406225037%; --time: 2.5083416439668667s; --delay: -2.6438649002152315s"></div>
        <div class="bubble" style="--size: 4.959057655376639rem; --distance: 6.3736719952527rem; --position: 68.22386150117019%; --time: 2.3081668866255165s; --delay: -2.402929892839713s"></div>
        <div class="bubble" style="--size: 2.2045034023989496rem; --distance: 7.80334582540474rem; --position: 18.311874990328064%; --time: 3.516305810992486s; --delay: -3.211702450469365s"></div>
        <div class="bubble" style="--size: 4.9399876094517685rem; --distance: 9.955730367651457rem; --position: 1.2979524411504268%; --time: 2.731660051409274s; --delay: -2.796567968074274s"></div>
        <div class="bubble" style="--size: 3.21220896723531rem; --distance: 7.72804797994758rem; --position: 10.935678794722556%; --time: 3.9297432271398547s; --delay: -2.511591333358771s"></div>
        <div class="bubble" style="--size: 5.038327433239362rem; --distance: 9.056087614259667rem; --position: 52.41369449201712%; --time: 3.4113898152743514s; --delay: -3.2784458571783186s"></div>
        <div class="bubble" style="--size: 4.99650271384457rem; --distance: 9.980180209225342rem; --position: 44.69069741352135%; --time: 3.2290160807886688s; --delay: -3.3938132194915855s"></div>
        <div class="bubble" style="--size: 3.2262422465922187rem; --distance: 9.21832046269401rem; --position: 88.74869567598087%; --time: 3.4404145921970484s; --delay: -3.493192878851989s"></div>
        <div class="bubble" style="--size: 4.362292558542274rem; --distance: 6.609543828394994rem; --position: 9.994289048919853%; --time: 3.2016259694117504s; --delay: -3.5715921986921058s"></div>
        <div class="bubble" style="--size: 2.3905660064787932rem; --distance: 6.470178514267246rem; --position: 79.4958643304575%; --time: 3.777021461891806s; --delay: -3.38696422273803s"></div>
        <div class="bubble" style="--size: 3.4619756032211644rem; --distance: 9.55343344704338rem; --position: 43.784726755449505%; --time: 2.7860267073800316s; --delay: -3.8262476891685693s"></div>
        <div class="bubble" style="--size: 3.77883052179014rem; --distance: 6.557524077041915rem; --position: 66.02619722250817%; --time: 2.0746411228899553s; --delay: -3.1469541173972986s"></div>
        <div class="bubble" style="--size: 3.3456505786006536rem; --distance: 8.490036658105257rem; --position: 40.47310936502768%; --time: 3.179647535515022s; --delay: -3.071589102979812s"></div>
        <div class="bubble" style="--size: 3.4354692772745183rem; --distance: 6.171666547740265rem; --position: 23.698400087374612%; --time: 2.786223929927271s; --delay: -2.294405225446117s"></div>
        <div class="bubble" style="--size: 3.563257286337108rem; --distance: 9.067356359073855rem; --position: 71.12204998555156%; --time: 2.6605514354639825s; --delay: -2.178950085515851s"></div>
        <div class="bubble" style="--size: 5.712023585997016rem; --distance: 8.658289584033195rem; --position: 59.56081988914549%; --time: 2.5457760037193378s; --delay: -3.942281047839385s"></div>
        <div class="bubble" style="--size: 4.029046171555258rem; --distance: 8.910774117433366rem; --position: 30.451964753209822%; --time: 2.0645711128893947s; --delay: -3.3162963266885237s"></div>
        <div class="bubble" style="--size: 3.981232581568624rem; --distance: 8.307725558066851rem; --position: 104.00467005107592%; --time: 3.7172183299671664s; --delay: -3.9682001746811s"></div>
        <div class="bubble" style="--size: 4.716216351766715rem; --distance: 8.234800743385339rem; --position: 96.23252588386228%; --time: 2.4347782910059115s; --delay: -3.576144715312197s"></div>
        <div class="bubble" style="--size: 3.5430005134055174rem; --distance: 9.45976899205625rem; --position: 102.95766347239535%; --time: 3.529644703116371s; --delay: -3.953698816616488s"></div>
        <div class="bubble" style="--size: 2.5240827059835356rem; --distance: 9.789388733198681rem; --position: 77.8377006646819%; --time: 2.4438006975761573s; --delay: -2.300718037858438s"></div>
        <div class="bubble" style="--size: 5.868150668657653rem; --distance: 9.562535863273887rem; --position: 24.94991028965998%; --time: 3.1412194255976886s; --delay: -2.632409221791991s"></div>
        <div class="bubble" style="--size: 5.470576340305291rem; --distance: 8.396009489365337rem; --position: 48.99617496944008%; --time: 3.0225933548860686s; --delay: -2.905867469259393s"></div>
        <div class="bubble" style="--size: 2.166284076310964rem; --distance: 8.63756600321221rem; --position: 93.34604147771239%; --time: 2.804398099759216s; --delay: -2.3150931990347288s"></div>
        <div class="bubble" style="--size: 3.295451216945093rem; --distance: 6.121091598671195rem; --position: 26.45738031829349%; --time: 3.427442305008304s; --delay: -3.382000758686569s"></div>
        <div class="bubble" style="--size: 3.3243385899331424rem; --distance: 6.985360553872156rem; --position: 39.51990309795818%; --time: 2.6468219852804378s; --delay: -3.1180760211216487s"></div>
        <div class="bubble" style="--size: 5.287865668026134rem; --distance: 6.709004610900678rem; --position: 4.068951676609691%; --time: 2.372540019293199s; --delay: -3.282707362070675s"></div>
        <div class="bubble" style="--size: 5.049145357027169rem; --distance: 8.103689137206626rem; --position: 78.73300560314078%; --time: 2.9719876245572148s; --delay: -3.4897143841740834s"></div>
        <div class="bubble" style="--size: 5.047554496323823rem; --distance: 6.056011434996267rem; --position: 66.3987307705562%; --time: 2.1718131753224785s; --delay: -3.002486038512048s"></div>
        <div class="bubble" style="--size: 5.829626740337494rem; --distance: 8.84096229189543rem; --position: 70.71686906200853%; --time: 3.2023626826846723s; --delay: -2.3439314419678126s"></div>
        <div class="bubble" style="--size: 4.056600195341037rem; --distance: 8.146795345469734rem; --position: 83.98921191991906%; --time: 3.0957619643266034s; --delay: -3.347425445112155s"></div>
        <div class="bubble" style="--size: 5.345227699971689rem; --distance: 8.595584803249281rem; --position: 103.60489970325938%; --time: 2.5044534451412765s; --delay: -2.407213814843857s"></div>
        <div class="bubble" style="--size: 4.849350338492539rem; --distance: 7.833739741006196rem; --position: 45.06231413504029%; --time: 2.29877690216961s; --delay: -3.8970996443254817s"></div>
        <div class="bubble" style="--size: 4.808469964830963rem; --distance: 9.319658080324821rem; --position: 41.45569981166314%; --time: 2.087434220452997s; --delay: -2.4278729724783865s"></div>
        <div class="bubble" style="--size: 3.31839771863633rem; --distance: 9.408399925619115rem; --position: 19.245095048209343%; --time: 3.3772316742929656s; --delay: -3.1179430552199388s"></div>
        <div class="bubble" style="--size: 4.29319080258115rem; --distance: 8.690326068471308rem; --position: 77.11540172631261%; --time: 3.66178054316561s; --delay: -3.2458765402814223s"></div>
        <div class="bubble" style="--size: 2.4012052163062947rem; --distance: 9.518420413079834rem; --position: 68.2911354617637%; --time: 2.3354454946950134s; --delay: -2.414243628721255s"></div>
        <div class="bubble" style="--size: 5.77198406776141rem; --distance: 8.288402240901975rem; --position: 27.824099111405012%; --time: 2.580788512037639s; --delay: -3.509438223227362s"></div>
        <div class="bubble" style="--size: 2.577507346109271rem; --distance: 6.6161965181751645rem; --position: 50.43670965726996%; --time: 3.8754356712087374s; --delay: -2.198697187372911s"></div>
        <div class="bubble" style="--size: 2.928525362252441rem; --distance: 7.8025423611895475rem; --position: 100.71346780437091%; --time: 2.3073066790216505s; --delay: -3.24183829096404s"></div>
        <div class="bubble" style="--size: 3.2080778869577884rem; --distance: 8.670236544579023rem; --position: 57.971379266425885%; --time: 2.6648198193319237s; --delay: -3.3403068595604877s"></div>
      </div>
      <div class="content">
        <div>
          <a style="background-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/199011/happy.svg')"></a>
          <p>©Hak Cipta oleh 5026201023-Aisyah Zahrah</p>
        </div>
      </div>
    </div>
    <svg style="position: fixed; top: 100vh">
      <defs>
        <filter id="blob">
          <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur"></feGaussianBlur>
          <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="blob"></feColorMatrix>
          <feComposite in="SourceGraphic" in2="blob" operator="atop"></feComposite>
        </filter>
      </defs>
    </svg>
    <!-- partial -->
  </body>
</html>

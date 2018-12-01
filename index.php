<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <title>Tablica Mnozenja</title>
    <meta name="description" content="Tablica mnozenja napravljena kao evaluacijski projektni zadatak">
    <meta name="author" content="gordan.cuic@gmail.com">
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" />
</head>
<body>
    <div class="container">
        <header>
            <h1>Tablica Mnozenja <span>Projektni zadatak za evaluaciju poznavanja PHP-a, MySQL-a, HTML i Javascript-a</span></h1>	
            <h1><span>Autor: Gordan Cuic</span></h1>	
            <nav class="codrops-demos">
                <a href="https://github.com/gordan-cuic/tablica_mnozenja_newbie" title="Github">Github</a>
                <a href="https://dev.to/gordan_cuic" title="Dev.to">DEV.TO</a>
                <a href="www.linkedin.com/in/gordan-cuic-8791ab50" title="LinkedIN">LinkedIN</a>
            </nav>
        </header>
        <div class="component">
            <!--
            <h2>Basic usage</h2>
            <p>This is a basic usage example. Scroll down to see the sticky table header in action. And of course, multiple instances are supported. Tables are pre-populated with random user data retrieved from the <a href="http://randomuser.me/" title="Random User Generator">Random User Generator</a>.</p>
            -->
            <table>
                <thead>
                    <tr>
                        <th>...</th>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>4</th>
                        <th>5</th>
                        <th>6</th>
                        <th>7</th>
                        <th>8</th>
                        <th>9</th>
                        <th>10</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td class="td-lead">1</td><td>gary.coleman21@example.com</td><td class="user-phone">(398)-332-5385</td><td class="user-mobile">(888)-677-3719</td></tr>
                    <tr><td class="td-lead">2</td><td>rose.parker16@example.com</td><td class="user-phone">(293)-873-2247</td><td class="user-mobile">(216)-889-4933</td></tr>
                    <tr><td class="td-lead">3</td><td>chloe.nelson18@example.com</td><td class="user-phone">(957)-213-3499</td><td class="user-mobile">(207)-516-4474</td></tr>
                    <tr><td class="td-lead">4</td><td>eric.bell16@example.com</td><td class="user-phone">(897)-762-9782</td><td class="user-mobile">(565)-627-3002</td></tr>
                    <tr><td class="td-lead">5</td><td>douglas.hayes92@example.com</td><td class="user-phone">(231)-391-6269</td><td class="user-mobile">(790)-838-2130</td></tr>
                    <tr><td class="td-lead">6</td><td>cameron.brown32@example.com</td><td class="user-phone">(204)-488-5204</td><td class="user-mobile">(508)-463-6811</td></tr>
                    <tr><td class="td-lead">7</td><td>nevaeh.diaz99@example.com</td><td class="user-phone">(436)-578-2946</td><td class="user-mobile">(906)-412-3302</td></tr>
                    <tr><td class="td-lead">8</td><td>kathy.miller62@example.com</td><td class="user-phone">(724)-705-3555</td><td class="user-mobile">(764)-841-2531</td></tr>
                    <tr><td class="td-lead">9</td><td>susan.king88@example.com</td><td class="user-phone">(774)-205-7754</td><td class="user-mobile">(639)-267-9728</td></tr>
                    <tr><td class="td-lead">10</td><td>jeffery.ramirez83@example.com</td><td class="user-phone">(723)-243-7706</td><td class="user-mobile">(172)-597-3422</td></tr>
                </tbody>
            </table>
        </div>
        <div class="component" id="dynamic-table-container">
        </div>
    </div><!-- /container -->
    <!-- <script src="js/jquery-3.3.1.slim.min"></script> -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js"></script>
    <!-- <script src="js/jquery.stickyheader.js"></script> -->
</body>
</html>
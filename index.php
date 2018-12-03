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
    <div class="dimmer">
    <span class="exit">Zatvori</span>
        <div class="result-holder">
            <p id="result-value"></p>
        </div>
    </div>
    <div class="container">
        <header>
            <h1>Tablica Mnozenja</h1>	
            <h1><span>Projektni zadatak za evaluaciju poznavanja PHP-a, MySQL-a, HTML i Javascript-a. Dev by: Gordan Cuic</span></h1>
            <nav class="codrops-demos">
                <a href="https://github.com/gordan-cuic/tablica_mnozenja_newbie" target="_blank" title="Github">Github</a>
                <a href="https://dev.to/gordan_cuic" target="_blank" title="Dev.to">DEV.TO</a>
                <a href="www.linkedin.com/in/gordan-cuic-8791ab50" target="_blank" title="LinkedIN">LinkedIN</a>
            </nav>            
        </header>
        <div class="component">
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
                    <tr><td class="td-lead">1</td><td>1 x 1</td><td>1 x 2</td><td>1 x 3</td><td>1 x 4</td><td>1 x 5</td><td>1 x 6</td><td>1 x 7</td><td>1 x 8</td><td>1 x 9</td><td>1 x 10</td></tr>
                    <tr><td class="td-lead">2</td><td>2 x 1</td><td>2 x 2</td><td>2 x 3</td><td>2 x 4</td><td>2 x 5</td><td>2 x 6</td><td>2 x 7</td><td>2 x 8</td><td>2 x 9</td><td>2 x 10</td></tr>
                    <tr><td class="td-lead">3</td><td>3 x 1</td><td>3 x 2</td><td>3 x 3</td><td>3 x 4</td><td>3 x 5</td><td>3 x 6</td><td>3 x 7</td><td>3 x 8</td><td>3 x 9</td><td>3 x 10</td></tr>
                    <tr><td class="td-lead">4</td><td>4 x 1</td><td>4 x 2</td><td>4 x 3</td><td>4 x 4</td><td>4 x 5</td><td>4 x 6</td><td>4 x 7</td><td>4 x 8</td><td>4 x 9</td><td>4 x 10</td></tr>
                    <tr><td class="td-lead">5</td><td>5 x 1</td><td>5 x 2</td><td>5 x 3</td><td>5 x 4</td><td>5 x 5</td><td>5 x 6</td><td>5 x 7</td><td>5 x 8</td><td>5 x 9</td><td>5 x 10</td></tr>
                    <tr><td class="td-lead">6</td><td>6 x 1</td><td>6 x 2</td><td>6 x 3</td><td>6 x 4</td><td>6 x 5</td><td>6 x 6</td><td>6 x 7</td><td>6 x 8</td><td>6 x 9</td><td>6 x 10</td></tr>
                    <tr><td class="td-lead">7</td><td>7 x 1</td><td>7 x 2</td><td>7 x 3</td><td>7 x 4</td><td>7 x 5</td><td>7 x 6</td><td>7 x 7</td><td>7 x 8</td><td>7 x 9</td><td>7 x 10</td></tr>
                    <tr><td class="td-lead">8</td><td>8 x 1</td><td>8 x 2</td><td>8 x 3</td><td>8 x 4</td><td>8 x 5</td><td>8 x 6</td><td>8 x 7</td><td>8 x 8</td><td>8 x 9</td><td>8 x 10</td></tr>
                    <tr><td class="td-lead">9</td><td>9 x 1</td><td>9 x 2</td><td>9 x 3</td><td>9 x 4</td><td>9 x 5</td><td>9 x 6</td><td>9 x 7</td><td>9 x 8</td><td>9 x 9</td><td>9 x 10</td></tr>
                    <tr><td class="td-lead">10</td><td>10 x 1</td><td>10 x 2</td><td>10 x 3</td><td>10 x 4</td><td>10 x 5</td><td>10 x 6</td><td>10 x 7</td><td>10 x 8</td><td>10 x 9</td><td>10 x 10</td></tr>
                </tbody>
            </table>
            <div id="response-block"></div>
        </div>
    </div><!-- /container -->
    <script src="js/jquery.min.js"></script>
    <script src="js/calculator.js"></script>
</body>
</html>
<!doctype html>
<html>
    <head>
        <title>Web 1 - WELCOME</title>
        <meta charset="utf-8"/>
    </head>

    <body>
        <h1><a href="./mainFolder/index.php">Web</a><h1>
        <ol>
            <li><a href="./mainFolder/1.php">HTML</a></li>
            <li><a href="./mainFolder/2.php">CSS</a></li>
            <li><a href="./mainFolder/3.php">JavaSctipt</a></li>
        </ol>
        <h2>HTML 이란 무엇인가? </h2>
        <p><a href="http://www.w3.org/TR/html5/" target="_blank" title="html5 speicification">Hypertext Markup Language (HTML)</a> is the standard markup language for <strong>creating <u>web</u> pages</strong> 
        and web applications. and web applications.Web browsers receive HTML documents from a web server or from local storage 
        and render them into multimedia web pages. HTML describes the structure of a web page semantically and originally included 
        cues for the appearance of the document.
        <img src="img/coding.jpg" width="100%"/>
        </p><p style="margin-top:45px">HTML elements are the building blocks of HTML pages. With HTML constructs, 
        images and other objects, such as interactive forms, may be embedded into the rendered page. It provides a means to 
        create structured documents by denoting structural semantics for text such as headings, paragraphs, lists, links, 
        quotes and other items. HTML elements are delineated by tags, written using angle brackets.</p>

        <br>
        <br>
        <br>


        <?php
        $data = array(
            'a' => 'aa',
            'b' => 'bb'
        );


        foreach($data as $key => $item) {
            echo sprintf('key:%s, val:%s\n', $key, $item);
        }

        ?>
    </body>
</html>
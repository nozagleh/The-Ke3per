<?php
    $xmlString = "todos.xml";
    $xml = simplexml_load_file($xmlString);

    $todo = $xml->addChild("todo");
    $todo->addChild("text",$_POST["text"]);
    $todo->addChild("checked","false");
    
    $openFile = fopen("todos.xml","w") or die("Error!");
    fwrite($openFile,$xml->asXML());
    fclose($openFile);
?>
<?php
    $todos = simplexml_load_file('todos.xml');
    unset($todos->todo);

    $todos->asXML();

    return $todos->saveXML('todos.xml');
?>
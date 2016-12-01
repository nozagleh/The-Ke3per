<?php
    $todos = simplexml_load_file('todos.xml');
    foreach($todos->todo as $t){
        if($t->text == $_POST['text']){
            if($t->checked == "false"){
                $t->checked = "true";   
            }
            else if($t->checked == "true"){
                $t->checked = "false";   
            }
             
        }
    }
    
    
    $todos->asXML('todos.xml');

    return $t->saveXML();
?>
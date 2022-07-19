<?php
class Stack{

    private $index;
    private $capacity;
    private $arr;

    function __construct($capacity) {
        $this->capacity = $capacity;
        $this->index = 0;
        // $this->arr=array();
        $this->arr = [];
    }

    function push($element) {
        if($this->isFull()){
            echo "There Is No Empty Space To Push! <br>";
        }
        else{
            $this->arr[$this->index] = $element;
            $this->index++;
            echo "Element Pushed. <br>";
        }
    }

    function pop() {       
        if($this->isEmpty()){
            echo "There Is No Element To Push! <br>";
        }
        else{
            $this->index--;
            echo "Popped Element: ".$this->arr[$this->index]." <br>";            
        }
    }

    function peek() {
        echo "Peek Element: ".$this->arr[$this->index]." <br>";
    }

    function isEmpty() {
        if($this->index == 0){
            return TRUE;
            // echo "The Stack Is Empty! <br>";
        }
        else{           
            return FALSE;
            // echo "The Stack Is NOT Empty! <br>";
        }
    }
    
    function isFull() {
        if($this->index == $this->capacity){
            return TRUE;
            // echo "The Stack Is Full! <br>";
        }
        else{
            return FALSE;
            // echo "The Stack Is NOT Full! <br>";
        }
        
    }

    function show() {
        echo "Stack: ";
        for ($i=0; $i < $this->index; $i++){
            echo $this->arr[$i]." ";
        }
        echo "<br>";
    }

}

?>
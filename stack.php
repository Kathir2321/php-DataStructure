<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class Stack
    {
        private $stackArray = [];

        
        public function push($item)
        {
            array_push($this->stackArray, $item);
        }

        public function pop()
        {
            if (!$this->isEmpty()) {
                return array_pop($this->stackArray);
            } else {
                return null; 
            }
        }
    public function peek()
        {
            $count = count($this->stackArray);
            if ($count > 0) {
                return $this->stackArray[$count - 1];
            } else {
                return null; 
            }
        }

        
        public function isEmpty()
        {
            return empty($this->stackArray);
        }

       
        public function size()
        {
            return count($this->stackArray);
        }
    }

    
    $stack = new Stack();

    $stack->push(50);
    $stack->push(40);
    $stack->push(20);

    echo $stack->pop(); 
    echo $stack->peek();
    echo $stack->size(); 
    echo $stack->isEmpty() ? 'Stack is empty' : 'Stack is not empty'; 

    ?>
</body>

</html>
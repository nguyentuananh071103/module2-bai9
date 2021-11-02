<?{
    public array $stack;

    public function __construct()
    {
        $this->stack = [];
    }
    public function push($value)
    {
//        if (count($this->stack)<$this->value){
            array_unshift($this->stack,$value);
//        }else{
//            echo('stack is full!');
//        }
    }
    public function pop()
    {
            return array_pop($this->stack);
    }
}
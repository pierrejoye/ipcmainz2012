<?php
class Test implements IteratorAggregate {
    protected $data;
 
    public function __construct(array $data) {
        $this->data = $data;
    }
 
    public function getIterator() {
        foreach ($this->data as $key => $value) {
            yield $key => $value;
        }
        // or whatever other traversation logic the class has
    }
}
 
$test = new Test(['foo' => 'bar', 'bar' => 'foo']);
foreach ($test as $k => $v) {
    echo $k, ' => ', $v, "\n";
}
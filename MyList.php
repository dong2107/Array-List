<?php


class MyList
{
    public $arrayList;
    public function __construct($arr = '')
    {
        if (is_array($arr)) {
            $this->arrayList = $arr;
        } else {
            $this->arrayList = array();
        }
    }
    public function add($obj)
    {
        array_push($this->arrayList, $obj);
    }
    public function remove($index)
    {
        $newArrayList = array();
        if ($this->isInteger($index)) {
            for ($i = 0; $i < $this->size(); $i++) {
                if ($index != $i) {
                    $newArrayList[] = $this->get($i);
                }
            }
            $this->arrayList = $newArrayList;
        } else {
            die('error in arrayList.remove');
        }
    }
    public function size()
    {
        return count($this->arrayList);
    }
    public function isInteger($int)
    {
        return preg_match('/^[0-9]+$/', $int);
    }
    public function get($index)
    {
        if ($this->isInteger($index) && $index < $this->size()) {
            return $this->arrayList[$index];
        } else {
            die('error in arrayList . get');
        }
    }
    public function clear()
    {
        $this->arrayList = [];
    }
}
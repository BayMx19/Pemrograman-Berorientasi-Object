<!-- created by Isa Iman Muhammad - 20051397019 -->


<?php 

class RerataNilai {
    protected $value, $value2;
    public function __construct($value, $value2){
        $this->value = $value;
        $this->value2 = $value2;
    }

    public function average($value3 = 0){
        if ($value3 == 0) {
            $str = $this->value . ' + ' . $this->value2 . ' / 2 = ';
            return $str . ($this->value += $this->value2 ) / 2;

        } else {
            $str ='(' . $this->value . ' + ' . $this->value2 . ' + ' . $this->value2 . ') / 3 = ';
            return $str . ($this->value += $this->value2 += $value3 ) / 3;
        }
    }
}


class RerataNilai2 extends RerataNilai{
    public function __construct($value, $value2){
        parent::__construct($value, $value2);
    }

    public function average($value3 = 0){
        return parent::average($value3);
    }
}

?>

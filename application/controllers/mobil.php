<?php
// class yang akan menerapkan fungsi uri dengan mengirimkan beberapa parameter pada saat mengakses link
class Mobil extends CI_Controller 
{
    // method yang akan menerapkan fungsi dari uri
    public function warna()
    { 
    echo "Segment 1 adalah = " . $this->uri->segment('1') . "</br>";
    echo "Segment 2 adalah = " . $this->uri->segment('2') . "</br>";
    echo "Segment 3 adalah = " . $this->uri->segment('3') . "</br>";
    echo "Segment 4 adalah = " . $this->uri->segment('4') . "</br>";
    echo "Segment 5 adalah = " . $this->uri->segment('5') . "</br>";
  }
}
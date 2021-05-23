<style>
.formatText {
  margin: 0;
  font-family: sans-serif;
}

.formatText:last-child {
  margin-top: .5rem;
}
</style>

<?php 

class Date {
  public $day = 1;
  public $month = 1;
  public $year = 1970;

  public function dateFormatted() {
    return "{$this->day}/{$this->month}/{$this->year}";
  }
}

$d1 = new Date;
echo "<h1 class='formatText'>{$d1->dateFormatted()}</h1> <br />";

$d2 = new Date;
$d2->day = 10;
$d2->month = 8;
$d2->year =  2023;
echo "<h1 class='formatText'>{$d2->dateFormatted()}</h1>";
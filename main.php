<?php
class FruitTree {
    private $tree_id;
    private $fruit_type;
    private $fruit_count;
  
    public function __construct($id, $type, $count) {
      $this->tree_id = $id;
      $this->fruit_type = $type;
      $this->fruit_count = $count;
    }
  
    public function getTreeId() {
      return $this->tree_id;
    }
  
    public function getFruitType() {
      return $this->fruit_type;
    }
  
    public function getFruitCount() {
      return $this->fruit_count;
    }
  
    public function harvest() {
      $count = $this->fruit_count;
      $this->fruit_count = 0;
      return $count;
    }
  }
  
  class FruitCollector {
    private $trees = [];
  
    public function addTree($id, $type, $count) {
      $this->trees[] = new FruitTree($id, $type, $count);
    }
  
    public function collect() {
      $total_apples = 0;
      $total_pears = 0;
  
      foreach ($this->trees as $tree){
        $fruit_type = $tree->getFruitType();
        $fruit_count = $tree->harvest();
        if ($fruit_type == 'apple') {
            $total_apples += $fruit_count;
          } elseif ($fruit_type == 'pear') {
            $total_pears += $fruit_count;
          }
        }

        $total_count=$total_apples+$total_pears;
        
        $apple_wieght = rand(150, 180);

        $pears_wieght = rand(130, 170);

        $total_apple_wieght = $total_apples * $apple_weight;

        $total_pears_wieght = $total_pears * $pears_wieght;

        $total_wieght = $total_apple_weight + $total_pears_wieght;
        
        echo "Общее кол-во собранных яблок и груш: " . $total_count . "\n";
        echo "Общий вес яблок и груш: ".$total_weight."\n";
        }
        }
        
        // example usage
        $collector = new FruitCollector();
        $collector->addTree(1, 'apple', rand(40,50));
        $collector->addTree(2, 'pear', rand(0,20));
        $collector->addTree(3, 'apple', rand(40,50));
        $collector->addTree(4, 'apple', rand(40,50));
        $collector->addTree(5, 'apple', rand(40,50));
        $collector->addTree(6, 'apple', rand(40,50));
        $collector->addTree(7, 'apple', rand(40,50));
        $collector->addTree(8, 'apple', rand(40,50));
        $collector->addTree(9, 'apple', rand(40,50));
        $collector->addTree(10, 'apple', rand(40,50));
        $collector->addTree(11, 'pear', rand(0,20));
        $collector->addTree(12, 'pear', rand(0,20));
        $collector->addTree(13, 'pear', rand(0,20));
        $collector->addTree(14, 'pear', rand(0,20));
        $collector->addTree(15, 'pear', rand(0,20));
        $collector->addTree(16, 'pear', rand(0,20));
        $collector->addTree(17, 'pear', rand(0,20));
        $collector->addTree(18, 'pear', rand(0,20));
        $collector->addTree(19, 'pear', rand(0,20));
        $collector->addTree(20, 'pear', rand(0,20));
        $collector->addTree(21, 'pear', rand(0,20));
        $collector->addTree(22, 'apple', rand(40,50));
        $collector->addTree(23, 'pear', rand(0,20));
        $collector->addTree(24, 'pear', rand(0,20));
        $collector->addTree(25, 'pear', rand(0,20));
        $collector->collect();
        
        // expected output:
        // Total apples collected: 90
        // Total pears collected: 30

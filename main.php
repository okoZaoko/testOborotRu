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
        
        echo "Total apples collected: " . $total_apples . "\n";
        echo "Total pears collected: " . $total_pears . "\n";
        }
        }
        
        // example usage
        $collector = new FruitCollector();
        $collector->addTree(1, 'apple', 50);
        $collector->addTree(2, 'pear', 20);
        $collector->addTree(3, 'apple', 40);
        $collector->addTree(4, 'pear', 10);
        $collector->collect();
        
        // expected output:
        // Total apples collected: 90
        // Total pears collected: 30
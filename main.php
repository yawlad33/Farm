
<?php

class chiken{
    private $number;
    
    public function __construct($numb){
        $this->number = $numb; 
    }
}

class cow{
    private $number;
    
    public function __construct($numb){
        $this->number = $numb; 
    }
}

class Farm{
    
	private $chikens = [];//курицы
    private $cows = []; //коровы
    private $chik_profit = 0;//собранные яйца куриц
    private $cow_profit = 0;//собранные литры молока
    
    public function __construct(){
         for($i=0;$i<15;$i++){//базовое заполнение массивов
             $this->chikens[] = new chiken(rand(10,1000));
         }
         
         for($i=0;$i<7;$i++){
             $this->cows[] = new cow(rand(10,1000));
         }
    }
    
 	public function addCow(){//добавление коровы
      $this->cows[] = new cow(rand(10,1000));
      echo "Корова добавлена \n";
    }
    
    public function addChiken(){//добавление курицы
        $this->chikens[] = new chiken(rand(10,1000));
        echo "Курица добавлена \n";
          
    }

    public function getProfit(){
        foreach($this->chikens as $item){//сбор продукции согласно условию
          $this->chik_profit += rand(0,1);
        }
        foreach($this->cows as $item){
          $this->cow_profit += rand(8,12);
        }
        echo "Продукция собрана \n";
    }
    
    public function print_info(){//вывод информации о животных + собранной продукции
    	echo "Количество куриц: " . count($this->chikens) . "\n";
        echo "Количество коров: " . count($this->cows) . "\n";
    	echo "Количество собранных яиц: " . $this->chik_profit . "\n";
        echo "Количество собранного молока(л): " . $this->cow_profit . "\n";
    }
    
    
    
}


$obj = new Farm(); //создание объекта класса
$obj->print_info();//базовая информация

$obj->getProfit(); //сбор урожая/добавление по одному животному
$obj->addCow();
$obj->addChiken();
$obj->print_info();

//сбор урожая и вывод
$obj->getProfit();
$obj->print_info();

?>



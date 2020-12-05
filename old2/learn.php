<?php

class ShopProduct
{  
    private $title ;
    private $producerMainName;
    private $producerFirstName;
    protected $price;
    public $discount = 0;


    public function __construct
    (
        string $title,
        string $producerMainName,
        string $producerFirstName,
        float  $price
        
    ) {
        $this->title = $title;
        $this->producerFirstName = $producerFirstName;
        $this->producerMainName = $producerMainName;
        $this->price = $price;
        
    }

    public function getProducerFirstName()
    {
      return $this->producerFirstName;
    }

    public function getProducerMainName()
    {
      return $this->producerMainName;
    }

    public function setDiscount(int $num)
    {
      $this->discount = $num; 
    }
    
    public function getDiscount()
    {
      return $this->discount;
    }

    public function getPrice()
    {
      return ($this->price -$this->discount);
    }

    public function getTitle()
    {
      return $this->title;
    }

    public function getSummaryLine()
    {
      $base = "{$this->title} ( {$this->producerMainName}, ";
      $base .= "{$this->producerFirstName} )";
      return $base;
    }

    public function getProducer()
    {
        return $this->producerFirstName." "
              .$this->producerMainName;
    }

}

class CdProduct extends ShopProduct
{
    private $playLenght;

    function __construct(
      string $title,
      string $firstName,
      string $mainName,
      float  $price,
      int    $playLenght
    ) {
      parent ::__construct(
        $title,
        $firstName,
        $mainName,
        $price
      ) ;
      $this->playLenght = $playLenght;
    }

    public function getPlayLenght()
    {
      return $this->playLenght;
    }

    public function getSummaryLine()
    {
      $base = "{$this->title} ( {$this->producerMainName}, ";
      $base .= "{$this->producerFirstName} )";
      $base .= ":Время звучания - {$this->playLenght}";
      return $base;
    }

   
}

class BookProduct extends ShopProduct
{

  private $numPages;

  function __construct(
    $title,
    $firstName,
    $mainName,
    $price,
    $numPages
  ) {
    parent ::__construct(
      $title,
      $firstName,
      $mainName,
      $price
    );
    $this->numPages = $numPages;
  }

  public function getNumberOfPages()
    {
      return $this->$numPages;
    } 
  
  public function getSummaryLine()
    {
      $base = parent::getSummaryLine();
      $base .= ": {$this->$numPages} стр.";
      return $base;
    }  

  public function getPrice()
  {
    return $this->price;
  }  
}

abstract class ShopProductWriter
{

    private $products = [];

    public function addProducts(ShopProduct $shopProduct)
    {
      $this->products[] = $shopProduct;

    }
    abstract public function write();
    

}
class XmlProductWriter extends ShopProductWriter
{
public function write()
{
$writer = new \XMLWriter();
$writer->openMemory();
$writer->startDocument('1.0', 'UTF-8');
$writer->startElement("products");
foreach ($this->products as $shopProduct) {
$writer->startElement("product");
$writer->writeAttribute("title", $shopProduct->getTitle());
$writer->startElement("summary");
$writer->text($shopProduct->getSummaryLine() ) ;
$writer->endElement(); // "summary"
$writer->endElement(); // "product"
}
$writer->endElement(); // "products"
$writer->endDocument();
print $writer->flush();
}
}
// Листинг 04.07
class TextProductWriter extends ShopProductWriter
{
public function write()
{
$str = "ТОВАРЫ:\n";
foreach ($this->products as $shopProduct) {
$str .= $shopProduct->getSummaryLine()."\n";
}
print $str;
}
}

interface Chargeable
{
  public function getPrice():float ;
}


class StaticExample
{
  static public $aNum = 0;
  public static function sayHello()
  {
    self::$aNum++;
    print "Привет! (".self::$aNum.")\n";
  }
}

$product2 = new CdProduct(
  "Классическая музыка. Лучшее",
  "Антонио",
  "Вивальди",
  10.99,
  0,
  60.33
  ) ;
  
  print "Исполнитель: {$product2->getProducer()}\n";
echo "<br>";
$db = new TextProductWriter();
$db->addProducts($product2);
$db->write();

echo '<br>';

print StaticExample::$aNum;
echo '<br>';
StaticExample::sayHello();
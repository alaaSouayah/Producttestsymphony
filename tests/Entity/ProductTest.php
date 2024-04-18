<?php
namespace App\Tests\Entity;
 use App\Entity\Product;
use PHPUnit\Framework\TestCase;
class ProductTest extends TestCase{
        
        public function testprice(){
            $product = new Product('Pomme', 'ff', 2);
            $this->assertSame(0.392, $product->computeTVA());
            }
            public function testNegativePriceComputeTVA(){
                $product = new Product('Un produit', 'food', -20);
                $this->expectException('Exception');
                $product->computeTVA();
                }
            


    
public function testDefault(){
 $product = new Product('Pomme', 'food', 1);
 $this->assertSame(0.055, $product->computeTVA());

}
}
?>
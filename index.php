<?php
//Задание 1 - 4
include "Product.php";
include "Cleaner.php";
$product1 = new Product("Bosh", 1900, 8);

$product1->infoMassageProduct();
$product2 = new Cleaner("Bosh", 1900, 8,200);
echo '<br>';
$product2->infoMassageProduct();
$product2->saleProduct();//купили
echo '<br> ОБНОВЛЕНИЕ: ';
$product2->infoMassageProduct();
echo '<br>';

//Задание 5
class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
$a1 = new A();
$a2 = new A();
//Если было бы x++, то отчет начался бы с нуля
//Так как переменная статик, она задается один раз и не перезаписывается нулем, если убрать статик вывод везде будет 1
$a1->foo();// 1
$a2->foo();// 2
$a1->foo();// 3
$a2->foo();// 4


//Задание 6
class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class B extends A {
}
$a1 = new A();
$b1 = new B();
$a1->foo();//1
$b1->foo();//1
$a1->foo();//2
$b1->foo();//2

//статик переменная не глобавльная, для каждого экземпляра класса она своя

//Задание 7
// такое же, как и 6 задание


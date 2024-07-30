/*练习题
请大家定义一个汽车类，汽车有属性：品牌、颜色、价格，汽车有方法：启动、加速、刹车、停止。
子类：轿车、卡车，轿车有方法：开窗、放音乐，卡车有方法：装货、卸货。
或者是其他的类，大家可以自由发挥。*/

<?php

// 定义汽车基类
class Car {
    protected $brand;
    protected $color;
    protected $price;

    public function __construct($brand, $color, $price) {
        $this->brand = $brand;
        $this->color = $color;
        $this->price = $price;
    }

    public function start() {
        echo "汽车启动\n";
    }

    public function accelerate() {
        echo "汽车加速\n";
    }

    public function brake() {
        echo "汽车刹车\n";
    }

    public function stop() {
        echo "汽车停止\n";
    }
}

// 定义轿车子类
class Sedan extends Car {
    public function openWindow() {
        echo "轿车开窗\n";
    }

    public function playMusic() {
        echo "轿车播放音乐\n";
    }
}

// 定义卡车子类
class Truck extends Car {
    public function load() {
        echo "卡车装货\n";
    }

    public function unload() {
        echo "卡车卸货\n";
    }
}

// 测试代码
$sedan = new Sedan("Toyota", "白色", 200000);
$sedan->start();
$sedan->accelerate();
$sedan->openWindow();
$sedan->playMusic();
$sedan->brake();
$sedan->stop();

echo "\n";

$truck = new Truck("Volvo", "蓝色", 500000);
$truck->start();
$truck->accelerate();
$truck->load();
$truck->unload();
$truck->brake();
$truck->stop();

?>
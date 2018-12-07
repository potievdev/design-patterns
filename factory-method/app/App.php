<?php

namespace app;

use pattern\ShirtFactory;

class App
{

    public function render(ShirtFactory $shirtFactory)
    {
        $shirt = $shirtFactory->createShirt();

        $image = $shirt->getImage();
        $info = $shirt->getInfo();
        $size = $shirt->getSize();

        echo "Info: $info <br> Size: $size <br> Image: $image";
    }
}
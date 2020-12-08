<?php


require_once  __DIR__ . '/animal.php';

class cats extends Animal {
    private $cname;


    public function __construct(
        string $cname,
        string $type,
        string $breed,
        string $size
    ){
        $this->cname = $cname;
        $this->type = $type;
        $this->breed = $breed;
        $this->size = $size;
    }

    public function getCName(): string {
        return $this->cname;
    }

    public function getType(): string {
        return $this->type;
    }

    public function getCatBreed(): string {
        return $this->breed;
    }

    public function getSize(): string {
        return $this->size;
    }
}


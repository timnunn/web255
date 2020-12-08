<?php


require_once __DIR__ . '/animal.php';

class dogs extends Animal {
    private $dname;

        public function __construct(
        string $dname,
        string $type,
        string $breed,
        string $size
    )
   {
        $this->dname = $dnamename;
        $this->type = $type;
        $this->breed = $breed;
        $this->size = $size;
}

    public function getDName(): string {
        return $this->dname;
    }

    public function getType(): string {
        return $this->type;
    }

    public function getBreed(): string {
        return $this->breed;
    }

    public function getSize(): string {
        return $this->size;
    }
}
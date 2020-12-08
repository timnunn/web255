<?php


class animal
{
    protected $type;
    protected $size;
    protected $breed;

    public function __construct(
        string $type,
        string $breed,
        string $size
    ) {
        $this->type = $type;
        $this->breed = $breed;
        $this->size = $size;
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
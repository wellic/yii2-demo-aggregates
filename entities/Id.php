<?php

namespace app\entities;

use Assert\Assertion;

class Id
{
    protected $id;

    public function __construct($id = null)
    {
        Assertion::notEmpty($id);

        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function isEqualTo(self $other)
    {
        return $this->getId() === $other->getId();
    }
}
<?php

namespace TheCodingOwl\OwlDav\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Field extends AbstractEntity
{
    private string $name;
    private string $type;
    private string $value;
    private Address $address;

    public function __construct()
    {
        $this->name = '';
        $this->type = '';
        $this->value = '';
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;
        return $this;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function setValue(string $value): self
    {
        $this->value = $value;
        return $this;
    }

    public function getAddress(): Address
    {
        return $this->address;
    }

    public function setAddress(Address $address): self
    {
        $this->address = $address;
        return $this;
    }
}

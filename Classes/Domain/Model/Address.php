<?php

namespace TheCodingOwl\OwlDav\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

class Address extends AbstractEntity
{
    private string $name;
    private ObjectStorage $fields;
    private Addressbook $addressbook;

    public function __construct()
    {
        $this->name = '';
        $this->fields = new ObjectStorage();
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

    public function getFields(): ObjectStorage
    {
        return $this->fields;
    }

    public function setFields(ObjectStorage $fields): self
    {
        $this->fields = $fields;
        return $this;
    }

    public function getAddressbook(): Addressbook
    {
        return $this->addressbook;
    }

    public function setAddressbook(Addressbook $addressbook): self
    {
        $this->addressbook = $addressbook;
        return $this;
    }
}

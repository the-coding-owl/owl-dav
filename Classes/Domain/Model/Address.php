<?php

namespace TheCodingOwl\OwlDav\Domain\Model;

use TYPO3\CMS\Extbase\Annotation\ORM\Cascade;
use TYPO3\CMS\Extbase\Annotation\ORM\Lazy;
use TYPO3\CMS\Extbase\Domain\Model\FileReference;
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

class Address extends AbstractEntity
{
    protected string $name = '';

    /**
     * @var ObjectStorage<Field>
     */
    #[Lazy()]
    #[Cascade(["remove"])]
    protected ObjectStorage $fields;

    protected ?FileReference $image = NULL;

    protected Addressbook $addressbook;

    public function __construct()
    {
        $this->initializeObject();
    }

    public function initializeObject(): void
    {
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

    public function getImage(): ?FileReference
    {
        return $this->image;
    }

    public function setImage(?FileReference $image): self
    {
        $this->image = $image;
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

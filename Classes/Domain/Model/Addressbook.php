<?php

namespace TheCodingOwl\OwlDav\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

class Addressbook extends AbstractEntity
{
    private string $title;
    private string $description;
    private string $supportedAddressData;
    private int $maxResourceSize;

    /**
     * @var ObjectStorage<Address>
     */
    private ObjectStorage $addresses;


    public function __construct()
    {
        $this->title = '';
        $this->description = '';
        $this->supportedAddressData = '';
        $this->maxResourceSize = 0;
        $this->addresses = new ObjectStorage();
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;
        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getSupportedAddressData(): string
    {
        return $this->supportedAddressData;
    }

    public function setSupportedAddressData(string $supportedAddressData): self
    {
        $this->supportedAddressData = $supportedAddressData;
        return $this;
    }

    public function getMaxResourceSize(): int
    {
        return $this->maxResourceSize;
    }

    public function setMaxResourceSize(int $maxResourceSize): self
    {
        $this->maxResourceSize = $maxResourceSize;
        return $this;
    }

    public function getAddresses(): ObjectStorage
    {
        return $this->addresses;
    }

    public function setAddresses(ObjectStorage $addresses): self
    {
        $this->addresses = $addresses;
        return $this;
    }
}

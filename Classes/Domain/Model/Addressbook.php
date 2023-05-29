<?php

namespace TheCodingOwl\OwlDav\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;
use TYPO3\CMS\Extbase\Annotation\ORM\Lazy;
use TYPO3\CMS\Extbase\Annotation\ORM\Cascade;

class Addressbook extends AbstractEntity
{
    protected string $title = '';
    protected string $description = '';
    protected string $supportedAddressData = '';
    protected int $maxResourceSize = 0;

    /**
     * @var ObjectStorage<Address>
     */
    #[Lazy()]
    #[Cascade(["remove"])]
    protected ObjectStorage $addresses;

    public function __construct()
    {
        $this->initializeObject();
    }

    public function initializeObject(): void
    {
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

    public function addAddress(Address $address): self
    {
        $this->addresses->attach($address);
        return $this;
    }

    public function removeAddress(Address $address): self
    {
        $this->addresses->detach($address);
        return $this;
    }
}

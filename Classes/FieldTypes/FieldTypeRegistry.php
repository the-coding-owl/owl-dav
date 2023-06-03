<?php

namespace TheCodingOwl\OwlDav\FieldTypes;

use SplObjectStorage;
use TYPO3\CMS\Core\SingletonInterface;

class FieldTypeRegistry implements SingletonInterface
{
    /**
     * @var SplObjectStorage<FieldTypeInterface>
     */
    protected SplObjectStorage $fieldTypes;

    public function __construct()
    {
        $this->fieldTypes = new SplObjectStorage();
    }

    public function registerFieldType(FieldTypeInterface $fieldType): void
    {
        if (!$this->fieldTypes->contains($fieldType)) {
            $this->fieldTypes->attach($fieldType);
        }
    }

    public function renderTCAItems(array $configuration): void
    {
        foreach($this->fieldTypes as $fieldType) {
            $configuration['items'][] = [
                'label' => $fieldType->getName(),
                'value' => $fieldType->getType()
            ];
        }
    }

    public function renderTCATypes(): array
    {
        $types = [];
        foreach($this->fieldTypes as $fieldType) {
            $types[$fieldType->getType()] = [
                'showitems' => $fieldType->getShowItems()
            ];
        }

        return $types;
    }

    public function getFieldTypeOptions(): array
    {
        return (array) $this->fieldTypes;
    }
}

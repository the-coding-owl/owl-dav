<?php

namespace TheCodingOwl\OwlDav\FieldTypes;

class XmlFieldType implements FieldTypeInterface
{
    public function getType(): string
    {
        return 'XML';
    }

    public function getName(): string
    {
        return 'Xml';
    }

    public function getAttributes(): array
    {
        return [];
    }
}

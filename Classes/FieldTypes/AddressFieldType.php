<?php

namespace TheCodingOwl\OwlDav\FieldTypes;

class AddressFieldType implements FieldTypeInterface
{
    public function getType(): string
    {
        return 'ADR';
    }

    public function getName(): string
    {
        return 'Address';
    }

    public function getAttributes(): array
    {
        return [];
    }
}

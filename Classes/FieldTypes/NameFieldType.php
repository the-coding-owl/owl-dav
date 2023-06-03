<?php

namespace TheCodingOwl\OwlDav\FieldTypes;

class NameFieldType implements FieldTypeInterface
{
    public function getType(): string
    {
        return 'N';
    }

    public function getName(): string
    {
        return 'Name';
    }

    public function getAttributes(): array
    {
        return [];
    }
}

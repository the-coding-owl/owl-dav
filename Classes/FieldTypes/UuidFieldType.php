<?php

namespace TheCodingOwl\OwlDav\FieldTypes;

class UuidFieldType implements FieldTypeInterface
{
    public function getType(): string
    {
        return 'UUID';
    }

    public function getName(): string
    {
        return 'Uuid';
    }

    public function getAttributes(): array
    {
        return [];
    }
}

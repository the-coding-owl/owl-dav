<?php

namespace TheCodingOwl\OwlDav\FieldTypes;

class EmailFieldType implements FieldTypeInterface
{
    public function getType(): string
    {
        return 'EMAIL';
    }

    public function getName(): string
    {
        return 'Email';
    }

    public function getAttributes(): array
    {
        return [];
    }
}

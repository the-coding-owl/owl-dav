<?php

namespace TheCodingOwl\OwlDav\FieldTypes;

class GenderFieldType implements FieldTypeInterface
{
    public function getType(): string
    {
        return 'GENDER';
    }

    public function getName(): string
    {
        return 'Gender';
    }

    public function getAttributes(): array
    {
        return [];
    }
}

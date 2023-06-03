<?php

namespace TheCodingOwl\OwlDav\FieldTypes;

class KindFieldType implements FieldTypeInterface
{
    public function getType(): string
    {
        return 'KIND';
    }

    public function getName(): string
    {
        return 'Kind';
    }

    public function getAttributes(): array
    {
        return [];
    }
}

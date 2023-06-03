<?php

namespace TheCodingOwl\OwlDav\FieldTypes;

class CategoryFieldType implements FieldTypeInterface
{
    public function getType(): string
    {
        return 'CATEGORIES';
    }

    public function getName(): string
    {
        return 'Categories';
    }

    public function getAttributes(): array
    {
        return [];
    }
}

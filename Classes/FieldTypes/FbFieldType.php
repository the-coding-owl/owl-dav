<?php

namespace TheCodingOwl\OwlDav\FieldTypes;

class FbFieldType implements FieldTypeInterface
{
    public function getType(): string
    {
        return 'FBURL';
    }

    public function getName(): string
    {
        return 'Free or Occupied';
    }

    public function getAttributes(): array
    {
        return [];
    }
}

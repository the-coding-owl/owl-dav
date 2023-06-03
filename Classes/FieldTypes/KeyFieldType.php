<?php

namespace TheCodingOwl\OwlDav\FieldTypes;

class KeyFieldType implements FieldTypeInterface
{
    public function getType(): string
    {
        return 'KEY';
    }

    public function getName(): string
    {
        return 'Key';
    }

    public function getAttributes(): array
    {
        return [];
    }
}

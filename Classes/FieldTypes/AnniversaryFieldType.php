<?php

namespace TheCodingOwl\OwlDav\FieldTypes;

class AnniversaryFieldType implements FieldTypeInterface
{
    public function getType(): string
    {
        return 'ANNIVERSARY';
    }

    public function getName(): string
    {
        return 'Anniversary';
    }

    public function getAttributes(): array
    {
        return [];
    }
}

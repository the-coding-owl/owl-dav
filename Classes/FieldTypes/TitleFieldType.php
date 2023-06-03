<?php

namespace TheCodingOwl\OwlDav\FieldTypes;

class TitleFieldType implements FieldTypeInterface
{
    public function getType(): string
    {
        return 'TITLE';
    }

    public function getName(): string
    {
        return 'Title';
    }

    public function getAttributes(): array
    {
        return [];
    }
}

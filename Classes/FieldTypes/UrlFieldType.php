<?php

namespace TheCodingOwl\OwlDav\FieldTypes;

class UrlFieldType implements FieldTypeInterface
{
    public function getType(): string
    {
        return 'URL';
    }

    public function getName(): string
    {
        return 'Url';
    }

    public function getAttributes(): array
    {
        return [];
    }
}

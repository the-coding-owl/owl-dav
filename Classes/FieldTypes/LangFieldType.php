<?php

namespace TheCodingOwl\OwlDav\FieldTypes;

class LangFieldType implements FieldTypeInterface
{
    public function getType(): string
    {
        return 'LANG';
    }

    public function getName(): string
    {
        return 'Language';
    }

    public function getAttributes(): array
    {
        return [];
    }
}

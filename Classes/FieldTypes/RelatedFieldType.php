<?php

namespace TheCodingOwl\OwlDav\FieldTypes;

class RelatedFieldType implements FieldTypeInterface
{
    public function getType(): string
    {
        return 'RELATED';
    }

    public function getName(): string
    {
        return 'Related';
    }

    public function getAttributes(): array
    {
        return [];
    }
}

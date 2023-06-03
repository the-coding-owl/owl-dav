<?php

namespace TheCodingOwl\OwlDav\FieldTypes;

class ImppFieldType implements FieldTypeInterface
{
    public function getType(): string
    {
        return 'IMPP';
    }

    public function getName(): string
    {
        return 'Instant Messenger';
    }

    public function getAttributes(): array
    {
        return [];
    }
}

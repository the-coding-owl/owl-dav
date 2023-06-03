<?php

namespace TheCodingOwl\OwlDav\FieldTypes;

class PhotoFieldType implements FieldTypeInterface
{
    public function getType(): string
    {
        return 'PHOTO';
    }

    public function getName(): string
    {
        return 'Photo';
    }

    public function getAttributes(): array
    {
        return [];
    }
}

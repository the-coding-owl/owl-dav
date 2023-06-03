<?php

namespace TheCodingOwl\OwlDav\FieldTypes;

class BirthdayFieldType implements FieldTypeInterface
{
    public function getType(): string
    {
        return 'BDAY';
    }

    public function getName(): string
    {
        return 'Birthday';
    }

    public function getAttributes(): array
    {
        return [];
    }
}

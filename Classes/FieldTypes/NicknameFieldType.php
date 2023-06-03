<?php

namespace TheCodingOwl\OwlDav\FieldTypes;

class NicknameFieldType implements FieldTypeInterface
{
    public function getType(): string
    {
        return 'NICKNAME';
    }

    public function getName(): string
    {
        return 'Nickname';
    }

    public function getAttributes(): array
    {
        return [];
    }
}

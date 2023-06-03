<?php

namespace TheCodingOwl\OwlDav\FieldTypes;

class SoundFieldType implements FieldTypeInterface
{
    public function getType(): string
    {
        return 'SOUND';
    }

    public function getName(): string
    {
        return 'Sound';
    }

    public function getAttributes(): array
    {
        return [];
    }
}

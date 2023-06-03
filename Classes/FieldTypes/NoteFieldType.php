<?php

namespace TheCodingOwl\OwlDav\FieldTypes;

class NoteFieldType implements FieldTypeInterface
{
    public function getType(): string
    {
        return 'NOTE';
    }

    public function getName(): string
    {
        return 'Note';
    }

    public function getAttributes(): array
    {
        return [];
    }
}

<?php

namespace TheCodingOwl\OwlDav\FieldTypes;

class CalendarURIFieldType implements FieldTypeInterface
{
    public function getType(): string
    {
        return 'CALURI';
    }

    public function getName(): string
    {
        return 'Calendar URI';
    }

    public function getAttributes(): array
    {
        return [];
    }
}

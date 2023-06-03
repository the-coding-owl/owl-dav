<?php

namespace TheCodingOwl\OwlDav\FieldTypes;

class CalendarAddressURIFieldType implements FieldTypeInterface
{
    public function getType(): string
    {
        return 'CALADRURI';
    }

    public function getName(): string
    {
        return 'Calendar Address URI';
    }

    public function getAttributes(): array
    {
        return [];
    }
}

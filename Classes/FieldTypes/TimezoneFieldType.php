<?php

namespace TheCodingOwl\OwlDav\FieldTypes;

class TimezoneFieldType implements FieldTypeInterface
{
    public function getType(): string
    {
        return 'TZ';
    }

    public function getName(): string
    {
        return 'Timezone';
    }

    public function getAttributes(): array
    {
        return [];
    }
}

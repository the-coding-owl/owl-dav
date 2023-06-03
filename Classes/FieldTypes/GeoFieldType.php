<?php

namespace TheCodingOwl\OwlDav\FieldTypes;

class GeoFieldType implements FieldTypeInterface
{
    public function getType(): string
    {
        return 'GEO';
    }

    public function getName(): string
    {
        return 'Geo';
    }

    public function getAttributes(): array
    {
        return [];
    }
}

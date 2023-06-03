<?php

namespace TheCodingOwl\OwlDav\FieldTypes;

class OrgFieldType implements FieldTypeInterface
{
    public function getType(): string
    {
        return 'ORG';
    }

    public function getName(): string
    {
        return 'Org';
    }

    public function getAttributes(): array
    {
        return [];
    }
}

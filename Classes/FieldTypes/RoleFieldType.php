<?php

namespace TheCodingOwl\OwlDav\FieldTypes;

class RoleFieldType implements FieldTypeInterface
{
    public function getType(): string
    {
        return 'ROLE';
    }

    public function getName(): string
    {
        return 'Role';
    }

    public function getAttributes(): array
    {
        return [];
    }
}

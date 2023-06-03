<?php

namespace TheCodingOwl\OwlDav\FieldTypes;

class MemberFieldType implements FieldTypeInterface
{
    public function getType(): string
    {
        return 'MEMBER';
    }

    public function getName(): string
    {
        return 'Member';
    }

    public function getAttributes(): array
    {
        return [];
    }
}

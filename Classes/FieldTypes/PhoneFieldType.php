<?php

namespace TheCodingOwl\OwlDav\FieldTypes;

use TheCodingOwl\OwlDav\FieldTypes\FieldTypeInterface;

class PhoneFieldType implements FieldTypeInterface {
    public function getType(): string
    {
        return 'TEL';
    }

    public function getName(): string
    {
        return 'Phone';
    }

    public function getAttributes(): array
    {
        return ['type' => ['work', 'fax', 'mobile', 'home'], 'pref' => [0,1]];
    }
}

<?php

namespace TheCodingOwl\OwlDav\FieldTypes\PhoneFieldType;

use TheCodingOwl\OwlDav\FieldTypes\FieldTypeInterface;

class PhoneFieldType implements FieldTypeInterface {
    public function getType(): string {
        return 'phone';
    }

    public function getName(): string {
        return 'Phone';
    }
}

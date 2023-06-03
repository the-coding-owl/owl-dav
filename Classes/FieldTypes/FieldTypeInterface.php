<?php

namespace TheCodingOwl\OwlDav\FieldTypes;

interface FieldTypeInterface
{
    public function getType(): string;
    public function getName(): string;
    public function getAttributes(): array;
    public function getShowItems(): string;
}

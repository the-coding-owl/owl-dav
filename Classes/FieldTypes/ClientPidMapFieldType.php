<?php

namespace TheCodingOwl\OwlDav\FieldTypes;

class ClientPidMapFieldType implements FieldTypeInterface
{
    public function getType(): string
    {
        return 'CLIENTPIDMAP';
    }

    public function getName(): string
    {
        return 'Client Pid Map';
    }

    public function getAttributes(): array
    {
        return [];
    }
}

CREATE TABLE `tx_owldav_domain_model_addressbook` (
    `title` varchar(255) NOT NULL DEFAULT '',
    `supported_address_data` text,
    `max_resource_size` int(11) NOT NULL DEFAULT 0,
    `description` text,
    `addresses` int(11) NOT NULL DEFAULT 0
);

CREATE TABLE `tx_owldav_domain_model_address` (
    `name` varchar(255) NOT NULL DEFAULT '',
    `fields` int(11) NOT NULL DEFAULT 0,
    `image` int(11) NOT NULL DEFAULT 0,
    `addressbook` int(11) NOT NULL DEFAULT 0
);

CREATE TABLE `tx_owldav_domain_model_field` (
    `type` varchar(255) NOT NULL DEFAULT '',
    `value` text,
    `name` varchar(255) NOT NULL DEFAULT '',
    `address` int(11) NOT NULL DEFAULT 0
);

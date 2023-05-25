CREATE TABLE `tx_thecodingowl_domain_model_addressbook` (
    `title` varchar(255) NOT NULL,
    `supportedAddressData` text,
    `maxResourceSize` int(11) NOT NULL,
    `description` text,
    `addresses` int(11) NOT NULL DEFAULT '0'
);

CREATE TABLE `tx_thecodingowl_domain_model_address` (
    `name` varchar(255) NOT NULL,
    `fields` int(11) NOT NULL DEFAULT '0',
    `addressbook` int(11) NOT NULL
);

CREATE TABLE `tx_thecodingowl_domain_model_field` (
    `type` varchar(255) NOT NULL,
    `value` text,
    `name` varchar(255) NOT NULL,
    `address` int(11) NOT NULL,
);

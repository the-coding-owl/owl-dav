<?php

namespace TheCodingOwl\OwlDav\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\Repository;

class AddressbookRepository extends Repository
{
    public function flush(): void
    {
        $this->persistenceManager->persistAll();
    }
}

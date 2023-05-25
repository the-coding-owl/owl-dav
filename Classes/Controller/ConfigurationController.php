<?php

namespace TheCodingOwl\OwlDav\Controller;

use Psr\Http\Message\ResponseInterface;
use TheCodingOwl\OwlDav\Domain\Repository\AddressbookRepository;
use TYPO3\CMS\Backend\Attribute\Controller;
use TYPO3\CMS\Backend\Template\ModuleTemplateFactory;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

#[Controller]
class ConfigurationController extends ActionController {
    public function __construct(
        private readonly ModuleTemplateFactory $moduleTemplalteFactory,
        private readonly AddressbookRepository $addressbookRepository
    )
    {

    }

    public function indexAction(): ResponseInterface
    {
        $moduleTemplate = $this->moduleTemplalteFactory->create($this->request);
        $queryParams = $this->request->getQueryParams();

        $moduleTemplate->assign('', '');
        return $moduleTemplate->renderResponse();
    }
}

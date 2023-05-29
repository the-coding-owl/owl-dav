<?php

namespace TheCodingOwl\OwlDav\Controller;

use Psr\Http\Message\ResponseInterface;
use TheCodingOwl\OwlDav\Domain\Model\Addressbook;
use TheCodingOwl\OwlDav\Domain\Repository\AddressbookRepository;
use TYPO3\CMS\Backend\Template\ModuleTemplateFactory;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class AddressbookController extends ActionController
{
    public function __construct(
        private readonly ModuleTemplateFactory $moduleTemplalteFactory,
        private readonly AddressbookRepository $addressbookRepository
    )
    {

    }

    public function listAction(): ResponseInterface
    {
        $moduleTemplate = $this->moduleTemplalteFactory->create($this->request);
        $moduleTemplate->assign('addressbooks', $this->addressbookRepository->findAll());
        return $moduleTemplate->renderResponse();
    }

    public function newAction(Addressbook $addressbook = NULL): ResponseInterface
    {
        $moduleTemplate = $this->moduleTemplalteFactory->create($this->request);
        $moduleTemplate->assign('addressbook', $addressbook);
        return $moduleTemplate->renderResponse();
    }

    public function createAction(Addressbook $addressbook): ResponseInterface
    {
        $this->addressbookRepository->add($addressbook);
        $this->addressbookRepository->flush();
        return $this->redirect('show', NULL, NULL, ['addressbook' => $addressbook->getUid()]);
    }

    public function showAction(Addressbook $addressbook): ResponseInterface
    {
        $moduleTemplate = $this->moduleTemplalteFactory->create($this->request);
        $moduleTemplate->assign('addressbook', $addressbook);
        return $moduleTemplate->renderResponse();
    }

    public function editAction(Addressbook $addressbook): ResponseInterface
    {
        $moduleTemplate = $this->moduleTemplalteFactory->create($this->request);
        $moduleTemplate->assign('addressbook', $addressbook);
        return $moduleTemplate->renderResponse();
    }

    public function updateAction(Addressbook $addressbook): ResponseInterface
    {
        $this->addressbookRepository->update($addressbook);
        return $this->redirect('show', NULL, NULL, ['addressbook' => $addressbook]);
    }

    public function deleteAction(Addressbook $addressbook): ResponseInterface
    {
        $this->addressbookRepository->remove($addressbook);
        return $this->redirect('list');
    }
}

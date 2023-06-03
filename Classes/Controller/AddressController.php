<?php

namespace TheCodingOwl\OwlDav\Controller;

use Psr\Http\Message\ResponseInterface;
use TheCodingOwl\OwlDav\Domain\Model\Address;
use TheCodingOwl\OwlDav\Domain\Model\Addressbook;
use TheCodingOwl\OwlDav\Domain\Repository\AddressRepository;
use TheCodingOwl\OwlDav\FieldTypes\FieldTypeRegistry;
use TYPO3\CMS\Backend\Template\ModuleTemplateFactory;
use TYPO3\CMS\Core\Page\PageRenderer;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class AddressController extends ActionController
{
    public function __construct(
        private readonly ModuleTemplateFactory $moduleTemplalteFactory,
        private readonly AddressRepository $addressRepository,
        private readonly PageRenderer $pageRenderer,
        private readonly FieldTypeRegistry $fieldTypeRegistry
    )
    {

    }

    public function newAction(Addressbook $addressbook, Address $address = NULL): ResponseInterface
    {
        $moduleTemplate = $this->moduleTemplalteFactory->create($this->request);
        $moduleTemplate->assign('addressbook', $addressbook);
        $moduleTemplate->assign('address', $address);
        return $moduleTemplate->renderResponse();
    }

    public function createAction(Address $address): ResponseInterface
    {
        $this->addressRepository->add($address);
        return $this->redirect('show', 'Addressbook', NULL, ['addressbook' => $address->getAddressbook()]);
    }

    public function editAction(Address $address): ResponseInterface
    {
        $moduleTemplate = $this->moduleTemplalteFactory->create($this->request);
        $this->pageRenderer->loadJavaScriptModule('@owl_dav/Resources/Public/JavaScript/Backend/Fields.js');
        $fieldOptions = $this->fieldTypeRegistry->getFieldTypeOptions();
        $moduleTemplate->assign('address', $address);
        $moduleTemplate->assign('fieldOptions', $fieldOptions);
        return $moduleTemplate->renderResponse();
    }

    public function updateAction(Address $address): ResponseInterface
    {
        $this->addressRepository->update($address);
        return $this->redirect('show', 'Addressbook', NULL, ['addressbook' => $address->getAddressbook()]);
    }

    public function deleteAction(Address $address): ResponseInterface
    {
        $this->addressRepository->remove($address);
        return $this->redirect('show', 'Addressbook', NULL, ['addressbook' => $address->getAddressbook()]);
    }
}

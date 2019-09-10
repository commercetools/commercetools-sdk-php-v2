<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Customer\CustomerResourceIdentifier;
use Commercetools\Api\Models\Type\CustomFieldsDraft;

interface ShoppingListDraft extends JsonObject
{
    
    const FIELD_CUSTOM = 'custom';
    const FIELD_CUSTOMER = 'customer';
    const FIELD_DELETE_DAYS_AFTER_LAST_MODIFICATION = 'deleteDaysAfterLastModification';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_KEY = 'key';
    const FIELD_LINE_ITEMS = 'lineItems';
    const FIELD_NAME = 'name';
    const FIELD_SLUG = 'slug';
    const FIELD_TEXT_LINE_ITEMS = 'textLineItems';
    const FIELD_ANONYMOUS_ID = 'anonymousId';

    /**
     *
     * @return CustomFieldsDraft|null
     */
    public function getCustom();
    
    /**
     *
     * @return CustomerResourceIdentifier|null
     */
    public function getCustomer();
    
    /**
     *
     * @return int|null
     */
    public function getDeleteDaysAfterLastModification();
    
    /**
     *
     * @return LocalizedString|null
     */
    public function getDescription();
    
    /**
     *
     * @return string|null
     */
    public function getKey();
    
    /**
     *
     * @return ShoppingListLineItemDraftCollection|null
     */
    public function getLineItems();
    
    /**
     *
     * @return LocalizedString|null
     */
    public function getName();
    
    /**
     *
     * @return LocalizedString|null
     */
    public function getSlug();
    
    /**
     *
     * @return TextLineItemDraftCollection|null
     */
    public function getTextLineItems();
    
    /**
     *
     * @return string|null
     */
    public function getAnonymousId();
    public function setCustom(?CustomFieldsDraft $custom): void;
    
    public function setCustomer(?CustomerResourceIdentifier $customer): void;
    
    public function setDeleteDaysAfterLastModification(?int $deleteDaysAfterLastModification): void;
    
    public function setDescription(?LocalizedString $description): void;
    
    public function setKey(?string $key): void;
    
    public function setLineItems(?ShoppingListLineItemDraftCollection $lineItems): void;
    
    public function setName(?LocalizedString $name): void;
    
    public function setSlug(?LocalizedString $slug): void;
    
    public function setTextLineItems(?TextLineItemDraftCollection $textLineItems): void;
    
    public function setAnonymousId(?string $anonymousId): void;
}
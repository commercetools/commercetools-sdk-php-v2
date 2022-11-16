<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\ShoppingList\ShoppingListLineItemDraftCollection;
use Commercetools\Api\Models\ShoppingList\TextLineItemDraftCollection;
use Commercetools\Api\Models\Store\StoreResourceIdentifier;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MyShoppingListDraft extends JsonObject
{
    public const FIELD_NAME = 'name';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_LINE_ITEMS = 'lineItems';
    public const FIELD_TEXT_LINE_ITEMS = 'textLineItems';
    public const FIELD_CUSTOM = 'custom';
    public const FIELD_DELETE_DAYS_AFTER_LAST_MODIFICATION = 'deleteDaysAfterLastModification';
    public const FIELD_STORE = 'store';

    /**
     * <p>Name of the <a href="ctp:api:type:ShoppingList">ShoppingList</a>.</p>
     *

     * @return null|LocalizedString
     */
    public function getName();

    /**
     * <p>Description of the ShoppingList.</p>
     *

     * @return null|LocalizedString
     */
    public function getDescription();

    /**
     * <p><a href="ctp:api:type:ShoppingListLineItem">Line Items</a> (containing Products) to add to the ShoppingList.</p>
     *

     * @return null|ShoppingListLineItemDraftCollection
     */
    public function getLineItems();

    /**
     * <p><a href="ctp:api:type:TextLineItem">Line Items</a> (containing text values) to add to the ShoppingList.</p>
     *

     * @return null|TextLineItemDraftCollection
     */
    public function getTextLineItems();

    /**
     * <p>Custom Fields defined for the ShoppingList.</p>
     *

     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * <p>Number of days after which the ShoppingList will be automatically deleted if it has not been modified. If not set, the <a href="ctp:api:type:ShoppingListsConfiguration">default value</a> configured in the <a href="ctp:api:type:Project">Project</a> is used.</p>
     *

     * @return null|int
     */
    public function getDeleteDaysAfterLastModification();

    /**
     * <p>Assigns the new ShoppingList to the <a href="ctp:api:type:Store">Store</a>. The Store assignment can not be modified.</p>
     *

     * @return null|StoreResourceIdentifier
     */
    public function getStore();

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void;

    /**
     * @param ?LocalizedString $description
     */
    public function setDescription(?LocalizedString $description): void;

    /**
     * @param ?ShoppingListLineItemDraftCollection $lineItems
     */
    public function setLineItems(?ShoppingListLineItemDraftCollection $lineItems): void;

    /**
     * @param ?TextLineItemDraftCollection $textLineItems
     */
    public function setTextLineItems(?TextLineItemDraftCollection $textLineItems): void;

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void;

    /**
     * @param ?int $deleteDaysAfterLastModification
     */
    public function setDeleteDaysAfterLastModification(?int $deleteDaysAfterLastModification): void;

    /**
     * @param ?StoreResourceIdentifier $store
     */
    public function setStore(?StoreResourceIdentifier $store): void;
}

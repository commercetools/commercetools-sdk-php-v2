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
     * @return null|LocalizedString
     */
    public function getName();

    /**
     * @return null|LocalizedString
     */
    public function getDescription();

    /**
     * @return null|ShoppingListLineItemDraftCollection
     */
    public function getLineItems();

    /**
     * @return null|TextLineItemDraftCollection
     */
    public function getTextLineItems();

    /**
     * <p>The custom fields.</p>
     *
     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * <p>The shopping list will be deleted automatically if it hasn't been modified for the specified amount of days.</p>
     *
     * @return null|int
     */
    public function getDeleteDaysAfterLastModification();

    /**
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

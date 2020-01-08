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
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Base\JsonObject;

interface MyShoppingListDraft extends JsonObject
{
    const FIELD_NAME = 'name';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_LINE_ITEMS = 'lineItems';
    const FIELD_TEXT_LINE_ITEMS = 'textLineItems';
    const FIELD_CUSTOM = 'custom';
    const FIELD_DELETE_DAYS_AFTER_LAST_MODIFICATION = 'deleteDaysAfterLastModification';

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
     * <p>The custom fields.</p>.
     *
     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * <p>The shopping list will be deleted automatically if it hasn't been modified for the specified amount of days.</p>.
     *
     * @return null|int
     */
    public function getDeleteDaysAfterLastModification();

    public function setName(?LocalizedString $name): void;

    public function setDescription(?LocalizedString $description): void;

    public function setLineItems(?ShoppingListLineItemDraftCollection $lineItems): void;

    public function setTextLineItems(?TextLineItemDraftCollection $textLineItems): void;

    public function setCustom(?CustomFieldsDraft $custom): void;

    public function setDeleteDaysAfterLastModification(?int $deleteDaysAfterLastModification): void;
}

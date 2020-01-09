<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Customer\CustomerResourceIdentifier;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Base\JsonObject;

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
     * <p>The custom fields.</p>
     *
     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * @return null|CustomerResourceIdentifier
     */
    public function getCustomer();

    /**
     * <p>The shopping list will be deleted automatically if it hasn't been modified for the specified amount of days.</p>
     *
     * @return null|int
     */
    public function getDeleteDaysAfterLastModification();

    /**
     * @return null|LocalizedString
     */
    public function getDescription();

    /**
     * <p>User-specific unique identifier for the shopping list.</p>
     *
     * @return null|string
     */
    public function getKey();

    /**
     * @return null|ShoppingListLineItemDraftCollection
     */
    public function getLineItems();

    /**
     * @return null|LocalizedString
     */
    public function getName();

    /**
     * <p>Human-readable identifiers usually used as deep-link URL to the related shopping list.
     * Each slug is unique across a project, but a shopping list can have the same slug for different languages.
     * The slug must match the pattern [a-zA-Z0-9_-]{2,256}.</p>
     *
     * @return null|LocalizedString
     */
    public function getSlug();

    /**
     * @return null|TextLineItemDraftCollection
     */
    public function getTextLineItems();

    /**
     * <p>Identifies shopping lists belonging to an anonymous session (the customer has not signed up/in yet).</p>
     *
     * @return null|string
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

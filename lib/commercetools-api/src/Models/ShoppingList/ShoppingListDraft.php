<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Api\Models\BusinessUnit\BusinessUnitResourceIdentifier;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Customer\CustomerResourceIdentifier;
use Commercetools\Api\Models\Store\StoreResourceIdentifier;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ShoppingListDraft extends JsonObject
{
    public const FIELD_NAME = 'name';
    public const FIELD_SLUG = 'slug';
    public const FIELD_CUSTOMER = 'customer';
    public const FIELD_KEY = 'key';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_ANONYMOUS_ID = 'anonymousId';
    public const FIELD_DELETE_DAYS_AFTER_LAST_MODIFICATION = 'deleteDaysAfterLastModification';
    public const FIELD_LINE_ITEMS = 'lineItems';
    public const FIELD_TEXT_LINE_ITEMS = 'textLineItems';
    public const FIELD_STORE = 'store';
    public const FIELD_BUSINESS_UNIT = 'businessUnit';
    public const FIELD_CUSTOM = 'custom';

    /**
     * <p>Name of the ShoppingList.</p>
     *

     * @return null|LocalizedString
     */
    public function getName();

    /**
     * <p>Human-readable identifiers usually used as deep-link URL to the related ShoppingList.
     * Each slug is unique across a Project, but a ShoppingList can have the same slug for different languages.
     * The slug must match the pattern <code>[a-zA-Z0-9_-]{2,256}</code>.</p>
     *

     * @return null|LocalizedString
     */
    public function getSlug();

    /**
     * <p>The <a href="ctp:api:type:Customer">Customer</a> the ShoppingList should be associated to.</p>
     *

     * @return null|CustomerResourceIdentifier
     */
    public function getCustomer();

    /**
     * <p>User-defined unique identifier for the ShoppingList.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>Description of the ShoppingList.</p>
     *

     * @return null|LocalizedString
     */
    public function getDescription();

    /**
     * <p>Identifies ShoppingLists belonging to an <a href="ctp:api:type:AnonymousSession">anonymous session</a>.</p>
     *

     * @return null|string
     */
    public function getAnonymousId();

    /**
     * <p>Number of days after which the ShoppingList will be automatically deleted if it has not been modified. If not set, the <a href="ctp:api:type:ShoppingListsConfiguration">default value</a> configured in the <a href="ctp:api:type:Project">Project</a> is used.</p>
     *

     * @return null|int
     */
    public function getDeleteDaysAfterLastModification();

    /**
     * <p>Line Items (containing Products) to add to the ShoppingList.</p>
     *

     * @return null|ShoppingListLineItemDraftCollection
     */
    public function getLineItems();

    /**
     * <p>Line Items (containing text values) to add to the ShoppingList.</p>
     *

     * @return null|TextLineItemDraftCollection
     */
    public function getTextLineItems();

    /**
     * <p>Assigns the new ShoppingList to the <a href="ctp:api:type:Store">Store</a>.</p>
     *

     * @return null|StoreResourceIdentifier
     */
    public function getStore();

    /**
     * <p><a href="ctp:api:type:ResourceIdentifier">ResourceIdentifier</a> of the Business Unit the Shopping List should belong to. When the <code>customer</code> of the Shopping List is set, the <a href="ctp:api:type:Customer">Customer</a> must be an <a href="ctp:api:type:Associate">Associate</a> of the Business Unit.</p>
     *

     * @return null|BusinessUnitResourceIdentifier
     */
    public function getBusinessUnit();

    /**
     * <p>Custom Fields defined for the ShoppingList.</p>
     *

     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void;

    /**
     * @param ?LocalizedString $slug
     */
    public function setSlug(?LocalizedString $slug): void;

    /**
     * @param ?CustomerResourceIdentifier $customer
     */
    public function setCustomer(?CustomerResourceIdentifier $customer): void;

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?LocalizedString $description
     */
    public function setDescription(?LocalizedString $description): void;

    /**
     * @param ?string $anonymousId
     */
    public function setAnonymousId(?string $anonymousId): void;

    /**
     * @param ?int $deleteDaysAfterLastModification
     */
    public function setDeleteDaysAfterLastModification(?int $deleteDaysAfterLastModification): void;

    /**
     * @param ?ShoppingListLineItemDraftCollection $lineItems
     */
    public function setLineItems(?ShoppingListLineItemDraftCollection $lineItems): void;

    /**
     * @param ?TextLineItemDraftCollection $textLineItems
     */
    public function setTextLineItems(?TextLineItemDraftCollection $textLineItems): void;

    /**
     * @param ?StoreResourceIdentifier $store
     */
    public function setStore(?StoreResourceIdentifier $store): void;

    /**
     * @param ?BusinessUnitResourceIdentifier $businessUnit
     */
    public function setBusinessUnit(?BusinessUnitResourceIdentifier $businessUnit): void;

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void;
}

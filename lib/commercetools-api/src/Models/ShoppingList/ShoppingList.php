<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Customer\CustomerReference;
use Commercetools\Api\Models\Store\StoreKeyReference;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface ShoppingList extends BaseResource
{
    public const FIELD_NAME = 'name';
    public const FIELD_KEY = 'key';
    public const FIELD_CUSTOMER = 'customer';
    public const FIELD_SLUG = 'slug';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_LINE_ITEMS = 'lineItems';
    public const FIELD_TEXT_LINE_ITEMS = 'textLineItems';
    public const FIELD_DELETE_DAYS_AFTER_LAST_MODIFICATION = 'deleteDaysAfterLastModification';
    public const FIELD_ANONYMOUS_ID = 'anonymousId';
    public const FIELD_STORE = 'store';
    public const FIELD_CUSTOM = 'custom';
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_CREATED_BY = 'createdBy';

    /**
     * <p>Unique identifier of the ShoppingList.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>Current version of the ShoppingList.</p>
     *

     * @return null|int
     */
    public function getVersion();

    /**
     * <p>Name of the ShoppingList.</p>
     *

     * @return null|LocalizedString
     */
    public function getName();

    /**
     * <p>User-defined unique identifier of the ShoppingList.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>Reference to a <a href="ctp:api:type:Customer">Customer</a> associated with the ShoppingList.</p>
     *

     * @return null|CustomerReference
     */
    public function getCustomer();

    /**
     * <p>Human-readable identifiers usually used as deep-link URL to the related ShoppingList.
     * Each slug is unique across a Project, but a ShoppingList can have the same slug for different languages.
     * The slug must match the pattern <code>[a-zA-Z0-9_-]{2,256}</code>. For <a href="/predicates/query#performance-considerations">good performance</a>, indexes are provided for the first 15 <code>languages</code> set on the <a href="ctp:api:type:Project">Project</a>.</p>
     *

     * @return null|LocalizedString
     */
    public function getSlug();

    /**
     * <p>Description of the ShoppingList.</p>
     *

     * @return null|LocalizedString
     */
    public function getDescription();

    /**
     * <p>Line Items (containing Products) of the ShoppingList.</p>
     *

     * @return null|ShoppingListLineItemCollection
     */
    public function getLineItems();

    /**
     * <p>Line Items (containing text values) of the ShoppingList.</p>
     *

     * @return null|TextLineItemCollection
     */
    public function getTextLineItems();

    /**
     * <p>Number of days after which the ShoppingList will be automatically deleted if it has not been modified.</p>
     *

     * @return null|int
     */
    public function getDeleteDaysAfterLastModification();

    /**
     * <p>Identifies ShoppingLists belonging to an <a href="ctp:api:type:AnonymousSession">anonymous session</a>.</p>
     *

     * @return null|string
     */
    public function getAnonymousId();

    /**
     * <p>Store to which the ShoppingList is assigned.</p>
     *

     * @return null|StoreKeyReference
     */
    public function getStore();

    /**
     * <p>Custom Fields defined for the ShoppingList.</p>
     *

     * @return null|CustomFields
     */
    public function getCustom();

    /**
     * <p>Date and time (UTC) the ShoppingList was initially created.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * <p>Date and time (UTC) the ShoppingList was last updated.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * <p>Present on resources created after 1 February 2019 except for <a href="/../api/general-concepts#events-tracked">events not tracked</a>.</p>
     *

     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy();

    /**
     * <p>Present on resources created after 1 February 2019 except for <a href="/../api/general-concepts#events-tracked">events not tracked</a>.</p>
     *

     * @return null|CreatedBy
     */
    public function getCreatedBy();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void;

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void;

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?CustomerReference $customer
     */
    public function setCustomer(?CustomerReference $customer): void;

    /**
     * @param ?LocalizedString $slug
     */
    public function setSlug(?LocalizedString $slug): void;

    /**
     * @param ?LocalizedString $description
     */
    public function setDescription(?LocalizedString $description): void;

    /**
     * @param ?ShoppingListLineItemCollection $lineItems
     */
    public function setLineItems(?ShoppingListLineItemCollection $lineItems): void;

    /**
     * @param ?TextLineItemCollection $textLineItems
     */
    public function setTextLineItems(?TextLineItemCollection $textLineItems): void;

    /**
     * @param ?int $deleteDaysAfterLastModification
     */
    public function setDeleteDaysAfterLastModification(?int $deleteDaysAfterLastModification): void;

    /**
     * @param ?string $anonymousId
     */
    public function setAnonymousId(?string $anonymousId): void;

    /**
     * @param ?StoreKeyReference $store
     */
    public function setStore(?StoreKeyReference $store): void;

    /**
     * @param ?CustomFields $custom
     */
    public function setCustom(?CustomFields $custom): void;

    /**
     * @param ?DateTimeImmutable $createdAt
     */
    public function setCreatedAt(?DateTimeImmutable $createdAt): void;

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     */
    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;

    /**
     * @param ?LastModifiedBy $lastModifiedBy
     */
    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void;

    /**
     * @param ?CreatedBy $createdBy
     */
    public function setCreatedBy(?CreatedBy $createdBy): void;
}

<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LoggedResource;
use Commercetools\Api\Models\Customer\CustomerReference;
use Commercetools\Api\Models\Type\CustomFields;
use DateTimeImmutable;

interface ShoppingList extends LoggedResource
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
     * <p>The unique ID of the shopping list.</p>
     *
     * @return null|string
     */
    public function getId();

    /**
     * <p>The current version of the shopping list.</p>
     *
     * @return null|int
     */
    public function getVersion();

    /**
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * <p>Present on resources updated after 1/02/2019 except for events not tracked.</p>
     *
     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy();

    /**
     * <p>Present on resources created after 1/02/2019 except for events not tracked.</p>
     *
     * @return null|CreatedBy
     */
    public function getCreatedBy();

    /**
     * @return null|CustomFields
     */
    public function getCustom();

    /**
     * @return null|CustomerReference
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
     * @return null|ShoppingListLineItemCollection
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
     * @return null|TextLineItemCollection
     */
    public function getTextLineItems();

    /**
     * <p>Identifies shopping lists belonging to an anonymous session (the customer has not signed up/in yet).</p>
     *
     * @return null|string
     */
    public function getAnonymousId();

    public function setId(?string $id): void;

    public function setVersion(?int $version): void;

    public function setCreatedAt(?DateTimeImmutable $createdAt): void;

    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;

    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void;

    public function setCreatedBy(?CreatedBy $createdBy): void;

    public function setCustom(?CustomFields $custom): void;

    public function setCustomer(?CustomerReference $customer): void;

    public function setDeleteDaysAfterLastModification(?int $deleteDaysAfterLastModification): void;

    public function setDescription(?LocalizedString $description): void;

    public function setKey(?string $key): void;

    public function setLineItems(?ShoppingListLineItemCollection $lineItems): void;

    public function setName(?LocalizedString $name): void;

    public function setSlug(?LocalizedString $slug): void;

    public function setTextLineItems(?TextLineItemCollection $textLineItems): void;

    public function setAnonymousId(?string $anonymousId): void;
}

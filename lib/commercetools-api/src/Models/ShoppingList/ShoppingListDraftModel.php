<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Api\Models\BusinessUnit\BusinessUnitResourceIdentifier;
use Commercetools\Api\Models\BusinessUnit\BusinessUnitResourceIdentifierModel;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;
use Commercetools\Api\Models\Customer\CustomerResourceIdentifier;
use Commercetools\Api\Models\Customer\CustomerResourceIdentifierModel;
use Commercetools\Api\Models\Store\StoreResourceIdentifier;
use Commercetools\Api\Models\Store\StoreResourceIdentifierModel;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ShoppingListDraftModel extends JsonObjectModel implements ShoppingListDraft
{
    /**
     *
     * @var ?LocalizedString
     */
    protected $name;

    /**
     *
     * @var ?LocalizedString
     */
    protected $slug;

    /**
     *
     * @var ?CustomerResourceIdentifier
     */
    protected $customer;

    /**
     *
     * @var ?string
     */
    protected $key;

    /**
     *
     * @var ?LocalizedString
     */
    protected $description;

    /**
     *
     * @var ?string
     */
    protected $anonymousId;

    /**
     *
     * @var ?int
     */
    protected $deleteDaysAfterLastModification;

    /**
     *
     * @var ?ShoppingListLineItemDraftCollection
     */
    protected $lineItems;

    /**
     *
     * @var ?TextLineItemDraftCollection
     */
    protected $textLineItems;

    /**
     *
     * @var ?StoreResourceIdentifier
     */
    protected $store;

    /**
     *
     * @var ?BusinessUnitResourceIdentifier
     */
    protected $businessUnit;

    /**
     *
     * @var ?CustomFieldsDraft
     */
    protected $custom;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?LocalizedString $name = null,
        ?LocalizedString $slug = null,
        ?CustomerResourceIdentifier $customer = null,
        ?string $key = null,
        ?LocalizedString $description = null,
        ?string $anonymousId = null,
        ?int $deleteDaysAfterLastModification = null,
        ?ShoppingListLineItemDraftCollection $lineItems = null,
        ?TextLineItemDraftCollection $textLineItems = null,
        ?StoreResourceIdentifier $store = null,
        ?BusinessUnitResourceIdentifier $businessUnit = null,
        ?CustomFieldsDraft $custom = null
    ) {
        $this->name = $name;
        $this->slug = $slug;
        $this->customer = $customer;
        $this->key = $key;
        $this->description = $description;
        $this->anonymousId = $anonymousId;
        $this->deleteDaysAfterLastModification = $deleteDaysAfterLastModification;
        $this->lineItems = $lineItems;
        $this->textLineItems = $textLineItems;
        $this->store = $store;
        $this->businessUnit = $businessUnit;
        $this->custom = $custom;
    }

    /**
     * <p>Name of the ShoppingList.</p>
     *
     *
     * @return null|LocalizedString
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }

            $this->name = LocalizedStringModel::of($data);
        }

        return $this->name;
    }

    /**
     * <p>Human-readable identifiers usually used as deep-link URL to the related ShoppingList.
     * Each slug is unique across a Project, but a ShoppingList can have the same slug for different languages.
     * The slug must match the pattern <code>[a-zA-Z0-9_-]{2,256}</code>.</p>
     *
     *
     * @return null|LocalizedString
     */
    public function getSlug()
    {
        if (is_null($this->slug)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_SLUG);
            if (is_null($data)) {
                return null;
            }

            $this->slug = LocalizedStringModel::of($data);
        }

        return $this->slug;
    }

    /**
     * <p>The <a href="ctp:api:type:Customer">Customer</a> the ShoppingList should be associated to.</p>
     *
     *
     * @return null|CustomerResourceIdentifier
     */
    public function getCustomer()
    {
        if (is_null($this->customer)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOMER);
            if (is_null($data)) {
                return null;
            }

            $this->customer = CustomerResourceIdentifierModel::of($data);
        }

        return $this->customer;
    }

    /**
     * <p>User-defined unique identifier for the ShoppingList.</p>
     *
     *
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    /**
     * <p>Description of the ShoppingList.</p>
     *
     *
     * @return null|LocalizedString
     */
    public function getDescription()
    {
        if (is_null($this->description)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_DESCRIPTION);
            if (is_null($data)) {
                return null;
            }

            $this->description = LocalizedStringModel::of($data);
        }

        return $this->description;
    }

    /**
     * <p>Identifies ShoppingLists belonging to an <a href="ctp:api:type:AnonymousSession">anonymous session</a>.</p>
     *
     *
     * @return null|string
     */
    public function getAnonymousId()
    {
        if (is_null($this->anonymousId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ANONYMOUS_ID);
            if (is_null($data)) {
                return null;
            }
            $this->anonymousId = (string) $data;
        }

        return $this->anonymousId;
    }

    /**
     * <p>Number of days after which the ShoppingList will be automatically deleted if it has not been modified. If not set, the <a href="ctp:api:type:ShoppingListsConfiguration">default value</a> configured in the <a href="ctp:api:type:Project">Project</a> is used.</p>
     *
     *
     * @return null|int
     */
    public function getDeleteDaysAfterLastModification()
    {
        if (is_null($this->deleteDaysAfterLastModification)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_DELETE_DAYS_AFTER_LAST_MODIFICATION);
            if (is_null($data)) {
                return null;
            }
            $this->deleteDaysAfterLastModification = (int) $data;
        }

        return $this->deleteDaysAfterLastModification;
    }

    /**
     * <p>Line Items (containing Products) to add to the ShoppingList.</p>
     *
     *
     * @return null|ShoppingListLineItemDraftCollection
     */
    public function getLineItems()
    {
        if (is_null($this->lineItems)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_LINE_ITEMS);
            if (is_null($data)) {
                return null;
            }
            $this->lineItems = ShoppingListLineItemDraftCollection::fromArray($data);
        }

        return $this->lineItems;
    }

    /**
     * <p>Line Items (containing text values) to add to the ShoppingList.</p>
     *
     *
     * @return null|TextLineItemDraftCollection
     */
    public function getTextLineItems()
    {
        if (is_null($this->textLineItems)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_TEXT_LINE_ITEMS);
            if (is_null($data)) {
                return null;
            }
            $this->textLineItems = TextLineItemDraftCollection::fromArray($data);
        }

        return $this->textLineItems;
    }

    /**
     * <p>Assigns the new ShoppingList to the <a href="ctp:api:type:Store">Store</a>.</p>
     *
     *
     * @return null|StoreResourceIdentifier
     */
    public function getStore()
    {
        if (is_null($this->store)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_STORE);
            if (is_null($data)) {
                return null;
            }

            $this->store = StoreResourceIdentifierModel::of($data);
        }

        return $this->store;
    }

    /**
     * <p><a href="ctp:api:type:ResourceIdentifier">ResourceIdentifier</a> of the Business Unit the Shopping List should belong to. When the <code>customer</code> of the Shopping List is set, the <a href="ctp:api:type:Customer">Customer</a> must be an <a href="ctp:api:type:Associate">Associate</a> of the Business Unit.</p>
     *
     *
     * @return null|BusinessUnitResourceIdentifier
     */
    public function getBusinessUnit()
    {
        if (is_null($this->businessUnit)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_BUSINESS_UNIT);
            if (is_null($data)) {
                return null;
            }

            $this->businessUnit = BusinessUnitResourceIdentifierModel::of($data);
        }

        return $this->businessUnit;
    }

    /**
     * <p>Custom Fields defined for the ShoppingList.</p>
     *
     *
     * @return null|CustomFieldsDraft
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOM);
            if (is_null($data)) {
                return null;
            }

            $this->custom = CustomFieldsDraftModel::of($data);
        }

        return $this->custom;
    }


    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void
    {
        $this->name = $name;
    }

    /**
     * @param ?LocalizedString $slug
     */
    public function setSlug(?LocalizedString $slug): void
    {
        $this->slug = $slug;
    }

    /**
     * @param ?CustomerResourceIdentifier $customer
     */
    public function setCustomer(?CustomerResourceIdentifier $customer): void
    {
        $this->customer = $customer;
    }

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    /**
     * @param ?LocalizedString $description
     */
    public function setDescription(?LocalizedString $description): void
    {
        $this->description = $description;
    }

    /**
     * @param ?string $anonymousId
     */
    public function setAnonymousId(?string $anonymousId): void
    {
        $this->anonymousId = $anonymousId;
    }

    /**
     * @param ?int $deleteDaysAfterLastModification
     */
    public function setDeleteDaysAfterLastModification(?int $deleteDaysAfterLastModification): void
    {
        $this->deleteDaysAfterLastModification = $deleteDaysAfterLastModification;
    }

    /**
     * @param ?ShoppingListLineItemDraftCollection $lineItems
     */
    public function setLineItems(?ShoppingListLineItemDraftCollection $lineItems): void
    {
        $this->lineItems = $lineItems;
    }

    /**
     * @param ?TextLineItemDraftCollection $textLineItems
     */
    public function setTextLineItems(?TextLineItemDraftCollection $textLineItems): void
    {
        $this->textLineItems = $textLineItems;
    }

    /**
     * @param ?StoreResourceIdentifier $store
     */
    public function setStore(?StoreResourceIdentifier $store): void
    {
        $this->store = $store;
    }

    /**
     * @param ?BusinessUnitResourceIdentifier $businessUnit
     */
    public function setBusinessUnit(?BusinessUnitResourceIdentifier $businessUnit): void
    {
        $this->businessUnit = $businessUnit;
    }

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void
    {
        $this->custom = $custom;
    }
}

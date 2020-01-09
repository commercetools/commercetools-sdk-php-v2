<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;
use Commercetools\Api\Models\Customer\CustomerResourceIdentifier;
use Commercetools\Api\Models\Customer\CustomerResourceIdentifierModel;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class ShoppingListDraftModel extends JsonObjectModel implements ShoppingListDraft
{
    /**
     * @var ?CustomFieldsDraft
     */
    protected $custom;

    /**
     * @var ?CustomerResourceIdentifier
     */
    protected $customer;

    /**
     * @var ?int
     */
    protected $deleteDaysAfterLastModification;

    /**
     * @var ?LocalizedString
     */
    protected $description;

    /**
     * @var ?string
     */
    protected $key;

    /**
     * @var ?ShoppingListLineItemDraftCollection
     */
    protected $lineItems;

    /**
     * @var ?LocalizedString
     */
    protected $name;

    /**
     * @var ?LocalizedString
     */
    protected $slug;

    /**
     * @var ?TextLineItemDraftCollection
     */
    protected $textLineItems;

    /**
     * @var ?string
     */
    protected $anonymousId;

    public function __construct(
        CustomFieldsDraft $custom = null,
        CustomerResourceIdentifier $customer = null,
        int $deleteDaysAfterLastModification = null,
        LocalizedString $description = null,
        string $key = null,
        ShoppingListLineItemDraftCollection $lineItems = null,
        LocalizedString $name = null,
        LocalizedString $slug = null,
        TextLineItemDraftCollection $textLineItems = null,
        string $anonymousId = null
    ) {
        $this->custom = $custom;
        $this->customer = $customer;
        $this->deleteDaysAfterLastModification = $deleteDaysAfterLastModification;
        $this->description = $description;
        $this->key = $key;
        $this->lineItems = $lineItems;
        $this->name = $name;
        $this->slug = $slug;
        $this->textLineItems = $textLineItems;
        $this->anonymousId = $anonymousId;
    }

    /**
     * <p>The custom fields.</p>
     *
     * @return null|CustomFieldsDraft
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ShoppingListDraft::FIELD_CUSTOM);
            if (is_null($data)) {
                return null;
            }

            $this->custom = CustomFieldsDraftModel::of($data);
        }

        return $this->custom;
    }

    /**
     * @return null|CustomerResourceIdentifier
     */
    public function getCustomer()
    {
        if (is_null($this->customer)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ShoppingListDraft::FIELD_CUSTOMER);
            if (is_null($data)) {
                return null;
            }

            $this->customer = CustomerResourceIdentifierModel::of($data);
        }

        return $this->customer;
    }

    /**
     * <p>The shopping list will be deleted automatically if it hasn't been modified for the specified amount of days.</p>
     *
     * @return null|int
     */
    public function getDeleteDaysAfterLastModification()
    {
        if (is_null($this->deleteDaysAfterLastModification)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(ShoppingListDraft::FIELD_DELETE_DAYS_AFTER_LAST_MODIFICATION);
            if (is_null($data)) {
                return null;
            }
            $this->deleteDaysAfterLastModification = (int) $data;
        }

        return $this->deleteDaysAfterLastModification;
    }

    /**
     * @return null|LocalizedString
     */
    public function getDescription()
    {
        if (is_null($this->description)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ShoppingListDraft::FIELD_DESCRIPTION);
            if (is_null($data)) {
                return null;
            }

            $this->description = LocalizedStringModel::of($data);
        }

        return $this->description;
    }

    /**
     * <p>User-specific unique identifier for the shopping list.</p>
     *
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ShoppingListDraft::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    /**
     * @return null|ShoppingListLineItemDraftCollection
     */
    public function getLineItems()
    {
        if (is_null($this->lineItems)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(ShoppingListDraft::FIELD_LINE_ITEMS);
            if (is_null($data)) {
                return null;
            }
            $this->lineItems = ShoppingListLineItemDraftCollection::fromArray($data);
        }

        return $this->lineItems;
    }

    /**
     * @return null|LocalizedString
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ShoppingListDraft::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }

            $this->name = LocalizedStringModel::of($data);
        }

        return $this->name;
    }

    /**
     * <p>Human-readable identifiers usually used as deep-link URL to the related shopping list.
     * Each slug is unique across a project, but a shopping list can have the same slug for different languages.
     * The slug must match the pattern [a-zA-Z0-9_-]{2,256}.</p>
     *
     * @return null|LocalizedString
     */
    public function getSlug()
    {
        if (is_null($this->slug)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ShoppingListDraft::FIELD_SLUG);
            if (is_null($data)) {
                return null;
            }

            $this->slug = LocalizedStringModel::of($data);
        }

        return $this->slug;
    }

    /**
     * @return null|TextLineItemDraftCollection
     */
    public function getTextLineItems()
    {
        if (is_null($this->textLineItems)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(ShoppingListDraft::FIELD_TEXT_LINE_ITEMS);
            if (is_null($data)) {
                return null;
            }
            $this->textLineItems = TextLineItemDraftCollection::fromArray($data);
        }

        return $this->textLineItems;
    }

    /**
     * <p>Identifies shopping lists belonging to an anonymous session (the customer has not signed up/in yet).</p>
     *
     * @return null|string
     */
    public function getAnonymousId()
    {
        if (is_null($this->anonymousId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ShoppingListDraft::FIELD_ANONYMOUS_ID);
            if (is_null($data)) {
                return null;
            }
            $this->anonymousId = (string) $data;
        }

        return $this->anonymousId;
    }

    public function setCustom(?CustomFieldsDraft $custom): void
    {
        $this->custom = $custom;
    }

    public function setCustomer(?CustomerResourceIdentifier $customer): void
    {
        $this->customer = $customer;
    }

    public function setDeleteDaysAfterLastModification(?int $deleteDaysAfterLastModification): void
    {
        $this->deleteDaysAfterLastModification = $deleteDaysAfterLastModification;
    }

    public function setDescription(?LocalizedString $description): void
    {
        $this->description = $description;
    }

    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    public function setLineItems(?ShoppingListLineItemDraftCollection $lineItems): void
    {
        $this->lineItems = $lineItems;
    }

    public function setName(?LocalizedString $name): void
    {
        $this->name = $name;
    }

    public function setSlug(?LocalizedString $slug): void
    {
        $this->slug = $slug;
    }

    public function setTextLineItems(?TextLineItemDraftCollection $textLineItems): void
    {
        $this->textLineItems = $textLineItems;
    }

    public function setAnonymousId(?string $anonymousId): void
    {
        $this->anonymousId = $anonymousId;
    }
}

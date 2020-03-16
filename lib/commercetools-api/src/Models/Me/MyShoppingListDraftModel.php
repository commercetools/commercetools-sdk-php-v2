<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;
use Commercetools\Api\Models\ShoppingList\ShoppingListLineItemDraftCollection;
use Commercetools\Api\Models\ShoppingList\TextLineItemDraftCollection;
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
final class MyShoppingListDraftModel extends JsonObjectModel implements MyShoppingListDraft
{
    /**
     * @var ?LocalizedString
     */
    protected $name;

    /**
     * @var ?LocalizedString
     */
    protected $description;

    /**
     * @var ?ShoppingListLineItemDraftCollection
     */
    protected $lineItems;

    /**
     * @var ?TextLineItemDraftCollection
     */
    protected $textLineItems;

    /**
     * @var ?CustomFieldsDraft
     */
    protected $custom;

    /**
     * @var ?int
     */
    protected $deleteDaysAfterLastModification;


    public function __construct(
        LocalizedString $name = null,
        LocalizedString $description = null,
        ShoppingListLineItemDraftCollection $lineItems = null,
        TextLineItemDraftCollection $textLineItems = null,
        CustomFieldsDraft $custom = null,
        int $deleteDaysAfterLastModification = null
    ) {
        $this->name = $name;
        $this->description = $description;
        $this->lineItems = $lineItems;
        $this->textLineItems = $textLineItems;
        $this->custom = $custom;
        $this->deleteDaysAfterLastModification = $deleteDaysAfterLastModification;
    }

    /**
     * @return null|LocalizedString
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(MyShoppingListDraft::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }

            $this->name = LocalizedStringModel::of($data);
        }

        return $this->name;
    }

    /**
     * @return null|LocalizedString
     */
    public function getDescription()
    {
        if (is_null($this->description)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(MyShoppingListDraft::FIELD_DESCRIPTION);
            if (is_null($data)) {
                return null;
            }

            $this->description = LocalizedStringModel::of($data);
        }

        return $this->description;
    }

    /**
     * @return null|ShoppingListLineItemDraftCollection
     */
    public function getLineItems()
    {
        if (is_null($this->lineItems)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(MyShoppingListDraft::FIELD_LINE_ITEMS);
            if (is_null($data)) {
                return null;
            }
            $this->lineItems = ShoppingListLineItemDraftCollection::fromArray($data);
        }

        return $this->lineItems;
    }

    /**
     * @return null|TextLineItemDraftCollection
     */
    public function getTextLineItems()
    {
        if (is_null($this->textLineItems)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(MyShoppingListDraft::FIELD_TEXT_LINE_ITEMS);
            if (is_null($data)) {
                return null;
            }
            $this->textLineItems = TextLineItemDraftCollection::fromArray($data);
        }

        return $this->textLineItems;
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
            $data = $this->raw(MyShoppingListDraft::FIELD_CUSTOM);
            if (is_null($data)) {
                return null;
            }

            $this->custom = CustomFieldsDraftModel::of($data);
        }

        return $this->custom;
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
            $data = $this->raw(MyShoppingListDraft::FIELD_DELETE_DAYS_AFTER_LAST_MODIFICATION);
            if (is_null($data)) {
                return null;
            }
            $this->deleteDaysAfterLastModification = (int) $data;
        }

        return $this->deleteDaysAfterLastModification;
    }

    public function setName(?LocalizedString $name): void
    {
        $this->name = $name;
    }

    public function setDescription(?LocalizedString $description): void
    {
        $this->description = $description;
    }

    public function setLineItems(?ShoppingListLineItemDraftCollection $lineItems): void
    {
        $this->lineItems = $lineItems;
    }

    public function setTextLineItems(?TextLineItemDraftCollection $textLineItems): void
    {
        $this->textLineItems = $textLineItems;
    }

    public function setCustom(?CustomFieldsDraft $custom): void
    {
        $this->custom = $custom;
    }

    public function setDeleteDaysAfterLastModification(?int $deleteDaysAfterLastModification): void
    {
        $this->deleteDaysAfterLastModification = $deleteDaysAfterLastModification;
    }
}

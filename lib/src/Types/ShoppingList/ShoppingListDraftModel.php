<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

use Commercetools\Types\Common\LocalizedString;
use Commercetools\Types\Type\CustomFieldsDraft;
use Commercetools\Types\Customer\CustomerReference;

class ShoppingListDraftModel extends JsonObjectModel implements ShoppingListDraft
{
    /**
     * @var CustomFieldsDraft
     */
    protected $custom;
    /**
     * @var CustomerReference
     */
    protected $customer;
    /**
     * @var int
     */
    protected $deleteDaysAfterLastModification;
    /**
     * @var LocalizedString
     */
    protected $description;
    /**
     * @var string
     */
    protected $key;
    /**
     * @var ShoppingListLineItemDraftCollection
     */
    protected $lineItems;
    /**
     * @var LocalizedString
     */
    protected $name;
    /**
     * @var LocalizedString
     */
    protected $slug;
    /**
     * @var TextLineItemDraftCollection
     */
    protected $textLineItems;

    /**
     * @return CustomFieldsDraft
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            $value = $this->raw(ShoppingListDraft::FIELD_CUSTOM);
            if (is_null($value)) {
                return $this->mapData(CustomFieldsDraft::class, null);
            }
            $value = $this->mapData(CustomFieldsDraft::class, $value);

            $this->custom = $value;
        }
        return $this->custom;
    }
    /**
     * @return CustomerReference
     */
    public function getCustomer()
    {
        if (is_null($this->customer)) {
            $value = $this->raw(ShoppingListDraft::FIELD_CUSTOMER);
            if (is_null($value)) {
                return $this->mapData(CustomerReference::class, null);
            }
            $value = $this->mapData(CustomerReference::class, $value);

            $this->customer = $value;
        }
        return $this->customer;
    }
    /**
     * @return int
     */
    public function getDeleteDaysAfterLastModification()
    {
        if (is_null($this->deleteDaysAfterLastModification)) {
            $value = $this->raw(ShoppingListDraft::FIELD_DELETE_DAYS_AFTER_LAST_MODIFICATION);
            $value = (int)$value;
            $this->deleteDaysAfterLastModification = $value;
        }
        return $this->deleteDaysAfterLastModification;
    }
    /**
     * @return LocalizedString
     */
    public function getDescription()
    {
        if (is_null($this->description)) {
            $value = $this->raw(ShoppingListDraft::FIELD_DESCRIPTION);
            if (is_null($value)) {
                return $this->mapData(LocalizedString::class, null);
            }
            $value = $this->mapData(LocalizedString::class, $value);

            $this->description = $value;
        }
        return $this->description;
    }
    /**
     * @return string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            $value = $this->raw(ShoppingListDraft::FIELD_KEY);
            $value = (string)$value;
            $this->key = $value;
        }
        return $this->key;
    }
    /**
     * @return ShoppingListLineItemDraftCollection
     */
    public function getLineItems()
    {
        if (is_null($this->lineItems)) {
            $value = $this->raw(ShoppingListDraft::FIELD_LINE_ITEMS);
            if (is_null($value)) {
                return $this->mapData(ShoppingListLineItemDraftCollection::class, null);
            }
            $value = $this->mapData(ShoppingListLineItemDraftCollection::class, $value);
            $this->lineItems = $value;
        }
        return $this->lineItems;
    }
    /**
     * @return LocalizedString
     */
    public function getName()
    {
        if (is_null($this->name)) {
            $value = $this->raw(ShoppingListDraft::FIELD_NAME);
            if (is_null($value)) {
                return $this->mapData(LocalizedString::class, null);
            }
            $value = $this->mapData(LocalizedString::class, $value);

            $this->name = $value;
        }
        return $this->name;
    }
    /**
     * @return LocalizedString
     */
    public function getSlug()
    {
        if (is_null($this->slug)) {
            $value = $this->raw(ShoppingListDraft::FIELD_SLUG);
            if (is_null($value)) {
                return $this->mapData(LocalizedString::class, null);
            }
            $value = $this->mapData(LocalizedString::class, $value);

            $this->slug = $value;
        }
        return $this->slug;
    }
    /**
     * @return TextLineItemDraftCollection
     */
    public function getTextLineItems()
    {
        if (is_null($this->textLineItems)) {
            $value = $this->raw(ShoppingListDraft::FIELD_TEXT_LINE_ITEMS);
            if (is_null($value)) {
                return $this->mapData(TextLineItemDraftCollection::class, null);
            }
            $value = $this->mapData(TextLineItemDraftCollection::class, $value);
            $this->textLineItems = $value;
        }
        return $this->textLineItems;
    }

    /**
     * @param CustomFieldsDraft $custom
     * @return $this
     */
    public function setCustom(CustomFieldsDraft $custom)
    {
        $this->custom = $custom;

        return $this;
    }
    /**
     * @param CustomerReference $customer
     * @return $this
     */
    public function setCustomer(CustomerReference $customer)
    {
        $this->customer = $customer;

        return $this;
    }
    /**
     * @param int $deleteDaysAfterLastModification
     * @return $this
     */
    public function setDeleteDaysAfterLastModification(int $deleteDaysAfterLastModification)
    {
        $this->deleteDaysAfterLastModification = (int)$deleteDaysAfterLastModification;

        return $this;
    }
    /**
     * @param LocalizedString $description
     * @return $this
     */
    public function setDescription(LocalizedString $description)
    {
        $this->description = $description;

        return $this;
    }
    /**
     * @param string $key
     * @return $this
     */
    public function setKey(string $key)
    {
        $this->key = (string)$key;

        return $this;
    }
    /**
     * @param ShoppingListLineItemDraftCollection $lineItems
     * @return $this
     */
    public function setLineItems(ShoppingListLineItemDraftCollection $lineItems)
    {
        $this->lineItems = $lineItems;

        return $this;
    }
    /**
     * @param LocalizedString $name
     * @return $this
     */
    public function setName(LocalizedString $name)
    {
        $this->name = $name;

        return $this;
    }
    /**
     * @param LocalizedString $slug
     * @return $this
     */
    public function setSlug(LocalizedString $slug)
    {
        $this->slug = $slug;

        return $this;
    }
    /**
     * @param TextLineItemDraftCollection $textLineItems
     * @return $this
     */
    public function setTextLineItems(TextLineItemDraftCollection $textLineItems)
    {
        $this->textLineItems = $textLineItems;

        return $this;
    }

}

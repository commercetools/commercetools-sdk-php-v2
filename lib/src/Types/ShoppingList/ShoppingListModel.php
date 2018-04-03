<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Common\ResourceModel;

use Commercetools\Builder\ShoppingListUpdateBuilder;
use Commercetools\Types\Common\LocalizedString;
use Commercetools\Types\Type\CustomFields;
use Commercetools\Types\Customer\CustomerReference;
use Commercetools\Types\Common\Resource;

class ShoppingListModel extends ResourceModel implements ShoppingList {
    /**
     * @var CustomFields
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
     * @var ShoppingListLineItemCollection
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
     * @var TextLineItemCollection
     */
    protected $textLineItems;

    /**
     * @return CustomFields
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            $value = $this->raw(ShoppingList::FIELD_CUSTOM);
            if (is_null($value)) {
                return $this->mapData(CustomFields::class, null);
            }
            $value = $this->mapData(CustomFields::class, $value);

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
            $value = $this->raw(ShoppingList::FIELD_CUSTOMER);
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
            $value = $this->raw(ShoppingList::FIELD_DELETE_DAYS_AFTER_LAST_MODIFICATION);
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
            $value = $this->raw(ShoppingList::FIELD_DESCRIPTION);
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
            $value = $this->raw(ShoppingList::FIELD_KEY);
            $value = (string)$value;
            $this->key = $value;
        }
        return $this->key;
    }
    /**
     * @return ShoppingListLineItemCollection
     */
    public function getLineItems()
    {
        if (is_null($this->lineItems)) {
            $value = $this->raw(ShoppingList::FIELD_LINE_ITEMS);
            if (is_null($value)) {
                return $this->mapData(ShoppingListLineItemCollection::class, null);
            }
            $value = $this->mapData(ShoppingListLineItemCollection::class, $value);
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
            $value = $this->raw(ShoppingList::FIELD_NAME);
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
            $value = $this->raw(ShoppingList::FIELD_SLUG);
            if (is_null($value)) {
                return $this->mapData(LocalizedString::class, null);
            }
            $value = $this->mapData(LocalizedString::class, $value);

            $this->slug = $value;
        }
        return $this->slug;
    }
    /**
     * @return TextLineItemCollection
     */
    public function getTextLineItems()
    {
        if (is_null($this->textLineItems)) {
            $value = $this->raw(ShoppingList::FIELD_TEXT_LINE_ITEMS);
            if (is_null($value)) {
                return $this->mapData(TextLineItemCollection::class, null);
            }
            $value = $this->mapData(TextLineItemCollection::class, $value);
            $this->textLineItems = $value;
        }
        return $this->textLineItems;
    }

    /**
     * @param CustomFields $custom
     * @return $this
     */
    public function setCustom(CustomFields $custom)
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
     * @param ShoppingListLineItemCollection $lineItems
     * @return $this
     */
    public function setLineItems(ShoppingListLineItemCollection $lineItems)
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
     * @param TextLineItemCollection $textLineItems
     * @return $this
     */
    public function setTextLineItems(TextLineItemCollection $textLineItems)
    {
        $this->textLineItems = $textLineItems;

        return $this;
    }


    /**
     * @return ShoppingListUpdateBuilder
     */
    public function update()
    {
        $builder = new ShoppingListUpdateBuilder();
        $builder->setMapper($this->getMapper());
        $builder->with($this);
        return $builder;
    }
}

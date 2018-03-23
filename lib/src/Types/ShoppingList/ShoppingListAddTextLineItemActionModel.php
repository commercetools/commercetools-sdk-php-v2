<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Types\ShoppingList\ShoppingListUpdateActionModel;

use Commercetools\Types\Common\LocalizedString;
use Commercetools\Types\Type\CustomFieldsDraft;

class ShoppingListAddTextLineItemActionModel extends ShoppingListUpdateActionModel implements ShoppingListAddTextLineItemAction {
    const DISCRIMINATOR_VALUE = 'addTextLineItem';

    /**
     * @var CustomFieldsDraft
     */
    protected $custom;
    /**
     * @var LocalizedString
     */
    protected $description;
    /**
     * @var LocalizedString
     */
    protected $name;
    /**
     * @var int
     */
    protected $quantity;
    /**
     * @var \DateTimeImmutable
     */
    protected $addedAt;

    /**
     * @return CustomFieldsDraft
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            $value = $this->raw(ShoppingListAddTextLineItemAction::FIELD_CUSTOM);
            if (is_null($value)) {
                return $this->mapData(CustomFieldsDraft::class, null);
            }
            $value = $this->mapData(CustomFieldsDraft::class, $value);

            $this->custom = $value;
        }
        return $this->custom;
    }
    /**
     * @return LocalizedString
     */
    public function getDescription()
    {
        if (is_null($this->description)) {
            $value = $this->raw(ShoppingListAddTextLineItemAction::FIELD_DESCRIPTION);
            if (is_null($value)) {
                return $this->mapData(LocalizedString::class, null);
            }
            $value = $this->mapData(LocalizedString::class, $value);

            $this->description = $value;
        }
        return $this->description;
    }
    /**
     * @return LocalizedString
     */
    public function getName()
    {
        if (is_null($this->name)) {
            $value = $this->raw(ShoppingListAddTextLineItemAction::FIELD_NAME);
            if (is_null($value)) {
                return $this->mapData(LocalizedString::class, null);
            }
            $value = $this->mapData(LocalizedString::class, $value);

            $this->name = $value;
        }
        return $this->name;
    }
    /**
     * @return int
     */
    public function getQuantity()
    {
        if (is_null($this->quantity)) {
            $value = $this->raw(ShoppingListAddTextLineItemAction::FIELD_QUANTITY);
            $value = (int)$value;
            $this->quantity = $value;
        }
        return $this->quantity;
    }
    /**
     * @return \DateTimeImmutable
     */
    public function getAddedAt()
    {
        if (is_null($this->addedAt)) {
            $value = $this->raw(ShoppingListAddTextLineItemAction::FIELD_ADDED_AT);
            $dateTime = \DateTimeImmutable::createFromFormat('Y-m-d?H:i:s.uT', $value);
            $value = $dateTime ? $dateTime : null;

            $this->addedAt = $value;
        }
        return $this->addedAt;
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
     * @param LocalizedString $description
     * @return $this
     */
    public function setDescription(LocalizedString $description)
    {
        $this->description = $description;

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
     * @param int $quantity
     * @return $this
     */
    public function setQuantity(int $quantity)
    {
        $this->quantity = (int)$quantity;

        return $this;
    }
    /**
     * @param \DateTimeImmutable|\DateTime|string $addedAt
     * @return $this
     */
    public function setAddedAt($addedAt)
    {
        if ($addedAt instanceof \DateTime) {
            $addedAt = \DateTimeImmutable::createFromMutable($addedAt);
        }
        if (!$addedAt instanceof \DateTimeImmutable) {
            $addedAt = new \DateTimeImmutable($addedAt);
        }
        $this->$addedAt = $addedAt;

        return $this;
    }


    public function jsonSerialize() {
        $data = parent::jsonSerialize();
        if (isset($data[ShoppingListAddTextLineItemAction::FIELD_ADDED_AT]) && $data[ShoppingListAddTextLineItemAction::FIELD_ADDED_AT] instanceof \DateTimeImmutable) {
            $data[ShoppingListAddTextLineItemAction::FIELD_ADDED_AT] = $data[ShoppingListAddTextLineItemAction::FIELD_ADDED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return $data;
    }
}

<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Types\ShoppingList\ShoppingListUpdateActionModel;

use Commercetools\Types\Type\CustomFieldsDraft;

class ShoppingListAddLineItemActionModel extends ShoppingListUpdateActionModel implements ShoppingListAddLineItemAction {
    const DISCRIMINATOR_VALUE = 'addLineItem';

    /**
     * @var \DateTimeImmutable
     */
    protected $addedAt;
    /**
     * @var CustomFieldsDraft
     */
    protected $custom;
    /**
     * @var string
     */
    protected $sku;
    /**
     * @var string
     */
    protected $productId;
    /**
     * @var int
     */
    protected $variantId;
    /**
     * @var int
     */
    protected $quantity;

    /**
     * @return \DateTimeImmutable
     */
    public function getAddedAt()
    {
        if (is_null($this->addedAt)) {
            $value = $this->raw(ShoppingListAddLineItemAction::FIELD_ADDED_AT);
            $dateTime = \DateTimeImmutable::createFromFormat('Y-m-d?H:i:s.uT', $value);
            $value = $dateTime ? $dateTime : null;

            $this->addedAt = $value;
        }
        return $this->addedAt;
    }
    /**
     * @return CustomFieldsDraft
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            $value = $this->raw(ShoppingListAddLineItemAction::FIELD_CUSTOM);
            if (is_null($value)) {
                return $this->mapData(CustomFieldsDraft::class, null);
            }
            $value = $this->mapData(CustomFieldsDraft::class, $value);

            $this->custom = $value;
        }
        return $this->custom;
    }
    /**
     * @return string
     */
    public function getSku()
    {
        if (is_null($this->sku)) {
            $value = $this->raw(ShoppingListAddLineItemAction::FIELD_SKU);
            $value = (string)$value;
            $this->sku = $value;
        }
        return $this->sku;
    }
    /**
     * @return string
     */
    public function getProductId()
    {
        if (is_null($this->productId)) {
            $value = $this->raw(ShoppingListAddLineItemAction::FIELD_PRODUCT_ID);
            $value = (string)$value;
            $this->productId = $value;
        }
        return $this->productId;
    }
    /**
     * @return int
     */
    public function getVariantId()
    {
        if (is_null($this->variantId)) {
            $value = $this->raw(ShoppingListAddLineItemAction::FIELD_VARIANT_ID);
            $value = (int)$value;
            $this->variantId = $value;
        }
        return $this->variantId;
    }
    /**
     * @return int
     */
    public function getQuantity()
    {
        if (is_null($this->quantity)) {
            $value = $this->raw(ShoppingListAddLineItemAction::FIELD_QUANTITY);
            $value = (int)$value;
            $this->quantity = $value;
        }
        return $this->quantity;
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
     * @param string $sku
     * @return $this
     */
    public function setSku(string $sku)
    {
        $this->sku = (string)$sku;

        return $this;
    }
    /**
     * @param string $productId
     * @return $this
     */
    public function setProductId(string $productId)
    {
        $this->productId = (string)$productId;

        return $this;
    }
    /**
     * @param int $variantId
     * @return $this
     */
    public function setVariantId(int $variantId)
    {
        $this->variantId = (int)$variantId;

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


    public function jsonSerialize() {
        $data = parent::jsonSerialize();
        if (isset($data[ShoppingListAddLineItemAction::FIELD_ADDED_AT]) && $data[ShoppingListAddLineItemAction::FIELD_ADDED_AT] instanceof \DateTimeImmutable) {
            $data[ShoppingListAddLineItemAction::FIELD_ADDED_AT] = $data[ShoppingListAddLineItemAction::FIELD_ADDED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return $data;
    }
}

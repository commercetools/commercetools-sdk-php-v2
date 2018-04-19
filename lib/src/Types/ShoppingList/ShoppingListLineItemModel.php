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
use Commercetools\Types\Type\CustomFields;
use Commercetools\Types\ProductType\ProductTypeReference;
use Commercetools\Types\Product\ProductVariant;

class ShoppingListLineItemModel extends JsonObjectModel implements ShoppingListLineItem
{
    /**
     * @var \DateTimeImmutable
     */
    protected $addedAt;
    /**
     * @var CustomFields
     */
    protected $custom;
    /**
     * @var \DateTimeImmutable
     */
    protected $deactivatedAt;
    /**
     * @var string
     */
    protected $id;
    /**
     * @var LocalizedString
     */
    protected $name;
    /**
     * @var string
     */
    protected $productId;
    /**
     * @var LocalizedString
     */
    protected $productSlug;
    /**
     * @var ProductTypeReference
     */
    protected $productType;
    /**
     * @var int
     */
    protected $quantity;
    /**
     * @var ProductVariant
     */
    protected $variant;
    /**
     * @var int
     */
    protected $variantId;

    /**
     * @return \DateTimeImmutable
     */
    public function getAddedAt()
    {
        if (is_null($this->addedAt)) {
            $value = $this->raw(ShoppingListLineItem::FIELD_ADDED_AT);
            $dateTime = \DateTimeImmutable::createFromFormat('Y-m-d?H:i:s.uT', $value);
            $value = $dateTime ? $dateTime : null;

            $this->addedAt = $value;
        }
        return $this->addedAt;
    }
    /**
     * @return CustomFields
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            $value = $this->raw(ShoppingListLineItem::FIELD_CUSTOM);
            if (is_null($value)) {
                return $this->mapData(CustomFields::class, null);
            }
            $value = $this->mapData(CustomFields::class, $value);

            $this->custom = $value;
        }
        return $this->custom;
    }
    /**
     * @return \DateTimeImmutable
     */
    public function getDeactivatedAt()
    {
        if (is_null($this->deactivatedAt)) {
            $value = $this->raw(ShoppingListLineItem::FIELD_DEACTIVATED_AT);
            $dateTime = \DateTimeImmutable::createFromFormat('Y-m-d?H:i:s.uT', $value);
            $value = $dateTime ? $dateTime : null;

            $this->deactivatedAt = $value;
        }
        return $this->deactivatedAt;
    }
    /**
     * @return string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            $value = $this->raw(ShoppingListLineItem::FIELD_ID);
            $value = (string)$value;
            $this->id = $value;
        }
        return $this->id;
    }
    /**
     * @return LocalizedString
     */
    public function getName()
    {
        if (is_null($this->name)) {
            $value = $this->raw(ShoppingListLineItem::FIELD_NAME);
            if (is_null($value)) {
                return $this->mapData(LocalizedString::class, null);
            }
            $value = $this->mapData(LocalizedString::class, $value);

            $this->name = $value;
        }
        return $this->name;
    }
    /**
     * @return string
     */
    public function getProductId()
    {
        if (is_null($this->productId)) {
            $value = $this->raw(ShoppingListLineItem::FIELD_PRODUCT_ID);
            $value = (string)$value;
            $this->productId = $value;
        }
        return $this->productId;
    }
    /**
     * @return LocalizedString
     */
    public function getProductSlug()
    {
        if (is_null($this->productSlug)) {
            $value = $this->raw(ShoppingListLineItem::FIELD_PRODUCT_SLUG);
            if (is_null($value)) {
                return $this->mapData(LocalizedString::class, null);
            }
            $value = $this->mapData(LocalizedString::class, $value);

            $this->productSlug = $value;
        }
        return $this->productSlug;
    }
    /**
     * @return ProductTypeReference
     */
    public function getProductType()
    {
        if (is_null($this->productType)) {
            $value = $this->raw(ShoppingListLineItem::FIELD_PRODUCT_TYPE);
            if (is_null($value)) {
                return $this->mapData(ProductTypeReference::class, null);
            }
            $value = $this->mapData(ProductTypeReference::class, $value);

            $this->productType = $value;
        }
        return $this->productType;
    }
    /**
     * @return int
     */
    public function getQuantity()
    {
        if (is_null($this->quantity)) {
            $value = $this->raw(ShoppingListLineItem::FIELD_QUANTITY);
            $value = (int)$value;
            $this->quantity = $value;
        }
        return $this->quantity;
    }
    /**
     * @return ProductVariant
     */
    public function getVariant()
    {
        if (is_null($this->variant)) {
            $value = $this->raw(ShoppingListLineItem::FIELD_VARIANT);
            if (is_null($value)) {
                return $this->mapData(ProductVariant::class, null);
            }
            $value = $this->mapData(ProductVariant::class, $value);

            $this->variant = $value;
        }
        return $this->variant;
    }
    /**
     * @return int
     */
    public function getVariantId()
    {
        if (is_null($this->variantId)) {
            $value = $this->raw(ShoppingListLineItem::FIELD_VARIANT_ID);
            $value = (int)$value;
            $this->variantId = $value;
        }
        return $this->variantId;
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
     * @param CustomFields $custom
     * @return $this
     */
    public function setCustom(CustomFields $custom)
    {
        $this->custom = $custom;

        return $this;
    }
    /**
     * @param \DateTimeImmutable|\DateTime|string $deactivatedAt
     * @return $this
     */
    public function setDeactivatedAt($deactivatedAt)
    {
        if ($deactivatedAt instanceof \DateTime) {
            $deactivatedAt = \DateTimeImmutable::createFromMutable($deactivatedAt);
        }
        if (!$deactivatedAt instanceof \DateTimeImmutable) {
            $deactivatedAt = new \DateTimeImmutable($deactivatedAt);
        }
        $this->$deactivatedAt = $deactivatedAt;

        return $this;
    }
    /**
     * @param string $id
     * @return $this
     */
    public function setId(string $id)
    {
        $this->id = (string)$id;

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
     * @param string $productId
     * @return $this
     */
    public function setProductId(string $productId)
    {
        $this->productId = (string)$productId;

        return $this;
    }
    /**
     * @param LocalizedString $productSlug
     * @return $this
     */
    public function setProductSlug(LocalizedString $productSlug)
    {
        $this->productSlug = $productSlug;

        return $this;
    }
    /**
     * @param ProductTypeReference $productType
     * @return $this
     */
    public function setProductType(ProductTypeReference $productType)
    {
        $this->productType = $productType;

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
     * @param ProductVariant $variant
     * @return $this
     */
    public function setVariant(ProductVariant $variant)
    {
        $this->variant = $variant;

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


    public function jsonSerialize() {
        $data = parent::jsonSerialize();
        if (isset($data[ShoppingListLineItem::FIELD_ADDED_AT]) && $data[ShoppingListLineItem::FIELD_ADDED_AT] instanceof \DateTimeImmutable) {
            $data[ShoppingListLineItem::FIELD_ADDED_AT] = $data[ShoppingListLineItem::FIELD_ADDED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        if (isset($data[ShoppingListLineItem::FIELD_DEACTIVATED_AT]) && $data[ShoppingListLineItem::FIELD_DEACTIVATED_AT] instanceof \DateTimeImmutable) {
            $data[ShoppingListLineItem::FIELD_DEACTIVATED_AT] = $data[ShoppingListLineItem::FIELD_DEACTIVATED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return $data;
    }
}

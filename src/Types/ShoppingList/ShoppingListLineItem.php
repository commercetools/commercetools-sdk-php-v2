<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Base\JsonObject;

use Commercetools\Types\Common\LocalizedString;
use Commercetools\Types\Type\CustomFields;
use Commercetools\Types\ProductType\ProductTypeReference;
use Commercetools\Types\Product\ProductVariant;

interface ShoppingListLineItem extends JsonObject {
    const FIELD_ADDED_AT = 'addedAt';
    const FIELD_CUSTOM = 'custom';
    const FIELD_DEACTIVATED_AT = 'deactivatedAt';
    const FIELD_ID = 'id';
    const FIELD_NAME = 'name';
    const FIELD_PRODUCT_ID = 'productId';
    const FIELD_PRODUCT_SLUG = 'productSlug';
    const FIELD_PRODUCT_TYPE = 'productType';
    const FIELD_QUANTITY = 'quantity';
    const FIELD_VARIANT = 'variant';
    const FIELD_VARIANT_ID = 'variantId';

    /**
     * @return \DateTimeImmutable
     */
    public function getAddedAt();

    /**
     * @return CustomFields
     */
    public function getCustom();

    /**
     * @return \DateTimeImmutable
     */
    public function getDeactivatedAt();

    /**
     * @return string
     */
    public function getId();

    /**
     * @return LocalizedString
     */
    public function getName();

    /**
     * @return string
     */
    public function getProductId();

    /**
     * @return LocalizedString
     */
    public function getProductSlug();

    /**
     * @return ProductTypeReference
     */
    public function getProductType();

    /**
     * @return int
     */
    public function getQuantity();

    /**
     * @return ProductVariant
     */
    public function getVariant();

    /**
     * @return int
     */
    public function getVariantId();

    /**
     * @param \DateTimeImmutable $addedAt
     * @return $this
     */
    public function setAddedAt($addedAt);

    /**
     * @param CustomFields $custom
     * @return $this
     */
    public function setCustom(CustomFields $custom);

    /**
     * @param \DateTimeImmutable $deactivatedAt
     * @return $this
     */
    public function setDeactivatedAt($deactivatedAt);

    /**
     * @param string $id
     * @return $this
     */
    public function setId(string $id);

    /**
     * @param LocalizedString $name
     * @return $this
     */
    public function setName(LocalizedString $name);

    /**
     * @param string $productId
     * @return $this
     */
    public function setProductId(string $productId);

    /**
     * @param LocalizedString $productSlug
     * @return $this
     */
    public function setProductSlug(LocalizedString $productSlug);

    /**
     * @param ProductTypeReference $productType
     * @return $this
     */
    public function setProductType(ProductTypeReference $productType);

    /**
     * @param int $quantity
     * @return $this
     */
    public function setQuantity(int $quantity);

    /**
     * @param ProductVariant $variant
     * @return $this
     */
    public function setVariant(ProductVariant $variant);

    /**
     * @param int $variantId
     * @return $this
     */
    public function setVariantId(int $variantId);

}

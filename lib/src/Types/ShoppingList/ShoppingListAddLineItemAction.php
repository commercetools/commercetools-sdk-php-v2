<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Types\Type\CustomFieldsDraft;

interface ShoppingListAddLineItemAction extends ShoppingListUpdateAction {
    const FIELD_ADDED_AT = 'addedAt';
    const FIELD_CUSTOM = 'custom';
    const FIELD_SKU = 'sku';
    const FIELD_PRODUCT_ID = 'productId';
    const FIELD_VARIANT_ID = 'variantId';
    const FIELD_QUANTITY = 'quantity';

    /**
     * @return \DateTimeImmutable
     */
    public function getAddedAt();

    /**
     * @return CustomFieldsDraft
     */
    public function getCustom();

    /**
     * @return string
     */
    public function getSku();

    /**
     * @return string
     */
    public function getProductId();

    /**
     * @return int
     */
    public function getVariantId();

    /**
     * @return int
     */
    public function getQuantity();

    /**
     * @param \DateTimeImmutable $addedAt
     * @return $this
     */
    public function setAddedAt($addedAt);

    /**
     * @param CustomFieldsDraft $custom
     * @return $this
     */
    public function setCustom(CustomFieldsDraft $custom);

    /**
     * @param string $sku
     * @return $this
     */
    public function setSku(string $sku);

    /**
     * @param string $productId
     * @return $this
     */
    public function setProductId(string $productId);

    /**
     * @param int $variantId
     * @return $this
     */
    public function setVariantId(int $variantId);

    /**
     * @param int $quantity
     * @return $this
     */
    public function setQuantity(int $quantity);

}

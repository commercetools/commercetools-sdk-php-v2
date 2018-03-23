<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Types;

interface Reference extends ResourceIdentifier {
    const DISCRIMINATOR = 'typeId';
    const SUB_TYPES = [
        'cart' => Types\Cart\CartReference::class,
        'product' => Types\Product\ProductReference::class,
        'discount-code' => Types\DiscountCode\DiscountCodeReference::class,
        'state' => Types\State\StateReference::class,
        'order' => Types\Order\OrderReference::class,
        'tax-category' => Types\TaxCategory\TaxCategoryReference::class,
        'cart-discount' => Types\CartDiscount\CartDiscountReference::class,
        'customer' => Types\Customer\CustomerReference::class,
        'zone' => Types\Zone\ZoneReference::class,
        'inventory-entry' => Types\Inventory\InventoryEntryReference::class,
        'key-value-document' => Types\CustomObject\CustomObjectReference::class,
        'review' => Types\Review\ReviewReference::class,
        'product-discount' => Types\ProductDiscount\ProductDiscountReference::class,
        'product-type' => Types\ProductType\ProductTypeReference::class,
        'channel' => Types\Channel\ChannelReference::class,
        'shopping-list' => Types\ShoppingList\ShoppingListReference::class,
        'payment' => Types\Payment\PaymentReference::class,
        'category' => Types\Category\CategoryReference::class,
        'type' => Types\Type\TypeReference::class,
        'customer-group' => Types\CustomerGroup\CustomerGroupReference::class,
        'shipping-method' => Types\ShippingMethod\ShippingMethodReference::class,

    ];

    /**
     * @return string
     */
    public function getTypeId();

    /**
     * @param string $typeId
     * @return $this
     */
    public function setTypeId(string $typeId);

}

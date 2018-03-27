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
        'cart-discount' => Types\CartDiscount\CartDiscountReference::class,
        'cart' => Types\Cart\CartReference::class,
        'category' => Types\Category\CategoryReference::class,
        'channel' => Types\Channel\ChannelReference::class,
        'key-value-document' => Types\CustomObject\CustomObjectReference::class,
        'customer-group' => Types\CustomerGroup\CustomerGroupReference::class,
        'customer' => Types\Customer\CustomerReference::class,
        'discount-code' => Types\DiscountCode\DiscountCodeReference::class,
        'inventory-entry' => Types\Inventory\InventoryEntryReference::class,
        'order' => Types\Order\OrderReference::class,
        'payment' => Types\Payment\PaymentReference::class,
        'product-discount' => Types\ProductDiscount\ProductDiscountReference::class,
        'product' => Types\Product\ProductReference::class,
        'product-type' => Types\ProductType\ProductTypeReference::class,
        'review' => Types\Review\ReviewReference::class,
        'shipping-method' => Types\ShippingMethod\ShippingMethodReference::class,
        'shopping-list' => Types\ShoppingList\ShoppingListReference::class,
        'state' => Types\State\StateReference::class,
        'tax-category' => Types\TaxCategory\TaxCategoryReference::class,
        'type' => Types\Type\TypeReference::class,
        'zone' => Types\Zone\ZoneReference::class,

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

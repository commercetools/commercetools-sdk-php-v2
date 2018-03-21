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
        'shipping-method' => Types\ShippingMethod\ShippingMethodReference::class,
        'zone' => Types\Zone\ZoneReference::class,
        'product' => Types\Product\ProductReference::class,
        'cart' => Types\Cart\CartReference::class,
        'cart-discount' => Types\CartDiscount\CartDiscountReference::class,
        'category' => Types\Category\CategoryReference::class,
        'shopping-list' => Types\ShoppingList\ShoppingListReference::class,
        'channel' => Types\Channel\ChannelReference::class,
        'inventory-entry' => Types\Inventory\InventoryEntryReference::class,
        'state' => Types\State\StateReference::class,
        'customer' => Types\Customer\CustomerReference::class,
        'discount-code' => Types\DiscountCode\DiscountCodeReference::class,
        'customer-group' => Types\CustomerGroup\CustomerGroupReference::class,
        'order' => Types\Order\OrderReference::class,
        'review' => Types\Review\ReviewReference::class,
        'tax-category' => Types\TaxCategory\TaxCategoryReference::class,
        'key-value-document' => Types\CustomObject\CustomObjectReference::class,
        'product-type' => Types\ProductType\ProductTypeReference::class,
        'type' => Types\Type\TypeReference::class,
        'product-discount' => Types\ProductDiscount\ProductDiscountReference::class,
        'payment' => Types\Payment\PaymentReference::class,

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

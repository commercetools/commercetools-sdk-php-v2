<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\CartDiscount\CartDiscountReference;
use Commercetools\Api\Models\Cart\CartReference;
use Commercetools\Api\Models\Category\CategoryReference;
use Commercetools\Api\Models\Channel\ChannelReference;
use Commercetools\Api\Models\CustomObject\CustomObjectReference;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReference;
use Commercetools\Api\Models\Customer\CustomerReference;
use Commercetools\Api\Models\DiscountCode\DiscountCodeReference;
use Commercetools\Api\Models\Inventory\InventoryEntryReference;
use Commercetools\Api\Models\OrderEdit\OrderEditReference;
use Commercetools\Api\Models\Order\OrderReference;
use Commercetools\Api\Models\Payment\PaymentReference;
use Commercetools\Api\Models\ProductDiscount\ProductDiscountReference;
use Commercetools\Api\Models\ProductType\ProductTypeReference;
use Commercetools\Api\Models\Product\ProductReference;
use Commercetools\Api\Models\Review\ReviewReference;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodReference;
use Commercetools\Api\Models\ShoppingList\ShoppingListReference;
use Commercetools\Api\Models\State\StateReference;
use Commercetools\Api\Models\Store\StoreReference;
use Commercetools\Api\Models\TaxCategory\TaxCategoryReference;
use Commercetools\Api\Models\Type\TypeReference;
use Commercetools\Api\Models\Zone\ZoneReference;

interface Reference extends JsonObject
{
    public const DISCRIMINATOR_FIELD = 'typeId';
    public const FIELD_TYPE_ID = 'typeId';
    public const FIELD_ID = 'id';

    /**
     * @return null|string
     */
    public function getTypeId();

    /**
     * @return null|string
     */
    public function getId();

    public function setId(?string $id): void;
}

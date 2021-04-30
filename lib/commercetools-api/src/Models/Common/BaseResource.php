<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Api\Models\Cart\Cart;
use Commercetools\Api\Models\CartDiscount\CartDiscount;
use Commercetools\Api\Models\Category\Category;
use Commercetools\Api\Models\Channel\Channel;
use Commercetools\Api\Models\Customer\Customer;
use Commercetools\Api\Models\CustomerGroup\CustomerGroup;
use Commercetools\Api\Models\CustomObject\CustomObject;
use Commercetools\Api\Models\DiscountCode\DiscountCode;
use Commercetools\Api\Models\Extension\Extension;
use Commercetools\Api\Models\Inventory\InventoryEntry;
use Commercetools\Api\Models\Message\Message;
use Commercetools\Api\Models\Order\Order;
use Commercetools\Api\Models\OrderEdit\OrderEdit;
use Commercetools\Api\Models\Payment\Payment;
use Commercetools\Api\Models\Product\Product;
use Commercetools\Api\Models\Product\ProductProjection;
use Commercetools\Api\Models\ProductDiscount\ProductDiscount;
use Commercetools\Api\Models\ProductType\ProductType;
use Commercetools\Api\Models\Review\Review;
use Commercetools\Api\Models\ShippingMethod\ShippingMethod;
use Commercetools\Api\Models\ShoppingList\ShoppingList;
use Commercetools\Api\Models\State\State;
use Commercetools\Api\Models\Store\Store;
use Commercetools\Api\Models\Subscription\Subscription;
use Commercetools\Api\Models\TaxCategory\TaxCategory;
use Commercetools\Api\Models\Type\Type;
use Commercetools\Api\Models\Zone\Zone;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface BaseResource extends JsonObject
{
    public const FIELD_ID = 'id';
    public const FIELD_VERSION = 'version';
    public const FIELD_CREATED_AT = 'createdAt';
    public const FIELD_LAST_MODIFIED_AT = 'lastModifiedAt';

    /**
     * @return null|string
     */
    public function getId();

    /**
     * @return null|int
     */
    public function getVersion();

    /**
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void;

    /**
     * @param ?DateTimeImmutable $createdAt
     */
    public function setCreatedAt(?DateTimeImmutable $createdAt): void;

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     */
    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;
}

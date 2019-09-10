<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Common;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\CartDiscount\CartDiscount;
use Commercetools\Api\Models\Cart\Cart;
use Commercetools\Api\Models\Category\Category;
use Commercetools\Api\Models\Channel\Channel;
use Commercetools\Api\Models\CustomerGroup\CustomerGroup;
use Commercetools\Api\Models\Customer\Customer;
use Commercetools\Api\Models\DiscountCode\DiscountCode;
use Commercetools\Api\Models\Extension\Extension;
use Commercetools\Api\Models\Inventory\InventoryEntry;
use Commercetools\Api\Models\OrderEdit\OrderEdit;
use Commercetools\Api\Models\Order\Order;
use Commercetools\Api\Models\Payment\Payment;
use Commercetools\Api\Models\ProductDiscount\ProductDiscount;
use Commercetools\Api\Models\ProductType\ProductType;
use Commercetools\Api\Models\Product\Product;
use Commercetools\Api\Models\Review\Review;
use Commercetools\Api\Models\ShoppingList\ShoppingList;
use Commercetools\Api\Models\State\State;
use Commercetools\Api\Models\Subscription\Subscription;
use Commercetools\Api\Models\TaxCategory\TaxCategory;
use Commercetools\Api\Models\Type\Type;

interface LoggedResource extends BaseResource
{
    
    const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    const FIELD_CREATED_BY = 'createdBy';

    /**
     *
     * @return LastModifiedBy|null
     */
    public function getLastModifiedBy();
    
    /**
     *
     * @return CreatedBy|null
     */
    public function getCreatedBy();
    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void;
    
    public function setCreatedBy(?CreatedBy $createdBy): void;
}
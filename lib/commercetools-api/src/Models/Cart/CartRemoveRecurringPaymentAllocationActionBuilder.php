<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CartRemoveRecurringPaymentAllocationAction>
 */
final class CartRemoveRecurringPaymentAllocationActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $id;

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:RecurringPaymentAllocation">RecurringPaymentAllocation</a> to remove.</p>
     *

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param ?string $id
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }


    public function build(): CartRemoveRecurringPaymentAllocationAction
    {
        return new CartRemoveRecurringPaymentAllocationActionModel(
            $this->id
        );
    }

    public static function of(): CartRemoveRecurringPaymentAllocationActionBuilder
    {
        return new self();
    }
}

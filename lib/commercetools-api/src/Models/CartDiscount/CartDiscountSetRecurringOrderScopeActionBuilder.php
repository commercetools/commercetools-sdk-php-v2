<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Api\Models\RecurringOrder\RecurringOrderScopeDraft;
use Commercetools\Api\Models\RecurringOrder\RecurringOrderScopeDraftBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CartDiscountSetRecurringOrderScopeAction>
 */
final class CartDiscountSetRecurringOrderScopeActionBuilder implements Builder
{
    /**

     * @var null|RecurringOrderScopeDraft|RecurringOrderScopeDraftBuilder
     */
    private $recurringOrderScope;

    /**
     * <p>Scope of the Cart Discount for Recurring Orders.</p>
     *

     * @return null|RecurringOrderScopeDraft
     */
    public function getRecurringOrderScope()
    {
        return $this->recurringOrderScope instanceof RecurringOrderScopeDraftBuilder ? $this->recurringOrderScope->build() : $this->recurringOrderScope;
    }

    /**
     * @param ?RecurringOrderScopeDraft $recurringOrderScope
     * @return $this
     */
    public function withRecurringOrderScope(?RecurringOrderScopeDraft $recurringOrderScope)
    {
        $this->recurringOrderScope = $recurringOrderScope;

        return $this;
    }

    /**
     * @deprecated use withRecurringOrderScope() instead
     * @return $this
     */
    public function withRecurringOrderScopeBuilder(?RecurringOrderScopeDraftBuilder $recurringOrderScope)
    {
        $this->recurringOrderScope = $recurringOrderScope;

        return $this;
    }

    public function build(): CartDiscountSetRecurringOrderScopeAction
    {
        return new CartDiscountSetRecurringOrderScopeActionModel(
            $this->recurringOrderScope instanceof RecurringOrderScopeDraftBuilder ? $this->recurringOrderScope->build() : $this->recurringOrderScope
        );
    }

    public static function of(): CartDiscountSetRecurringOrderScopeActionBuilder
    {
        return new self();
    }
}

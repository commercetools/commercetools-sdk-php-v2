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
 * @implements Builder<CartSetRecurringPaymentStrategyAction>
 */
final class CartSetRecurringPaymentStrategyActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $paymentStrategy;

    /**
     * <p>New value to set.</p>
     *

     * @return null|string
     */
    public function getPaymentStrategy()
    {
        return $this->paymentStrategy;
    }

    /**
     * @param ?string $paymentStrategy
     * @return $this
     */
    public function withPaymentStrategy(?string $paymentStrategy)
    {
        $this->paymentStrategy = $paymentStrategy;

        return $this;
    }


    public function build(): CartSetRecurringPaymentStrategyAction
    {
        return new CartSetRecurringPaymentStrategyActionModel(
            $this->paymentStrategy
        );
    }

    public static function of(): CartSetRecurringPaymentStrategyActionBuilder
    {
        return new self();
    }
}

<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurrencePolicy;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<RecurrencePolicySetMinDaysBetweenOrdersAction>
 */
final class RecurrencePolicySetMinDaysBetweenOrdersActionBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $minDaysBetweenOrders;

    /**
     * <p>Value to set. Must be greater than <code>0</code>.
     * If omitted, any existing value is removed and there is no limit.</p>
     *

     * @return null|int
     */
    public function getMinDaysBetweenOrders()
    {
        return $this->minDaysBetweenOrders;
    }

    /**
     * @param ?int $minDaysBetweenOrders
     * @return $this
     */
    public function withMinDaysBetweenOrders(?int $minDaysBetweenOrders)
    {
        $this->minDaysBetweenOrders = $minDaysBetweenOrders;

        return $this;
    }


    public function build(): RecurrencePolicySetMinDaysBetweenOrdersAction
    {
        return new RecurrencePolicySetMinDaysBetweenOrdersActionModel(
            $this->minDaysBetweenOrders
        );
    }

    public static function of(): RecurrencePolicySetMinDaysBetweenOrdersActionBuilder
    {
        return new self();
    }
}

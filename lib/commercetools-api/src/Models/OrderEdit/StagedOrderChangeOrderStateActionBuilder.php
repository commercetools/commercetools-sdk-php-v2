<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<StagedOrderChangeOrderStateAction>
 */
final class StagedOrderChangeOrderStateActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $orderState;

    /**
     * @return null|string
     */
    public function getOrderState()
    {
        return $this->orderState;
    }

    /**
     * @return $this
     */
    public function withOrderState(?string $orderState)
    {
        $this->orderState = $orderState;

        return $this;
    }


    public function build(): StagedOrderChangeOrderStateAction
    {
        return new StagedOrderChangeOrderStateActionModel(
            $this->orderState
        );
    }

    public static function of(): StagedOrderChangeOrderStateActionBuilder
    {
        return new self();
    }
}

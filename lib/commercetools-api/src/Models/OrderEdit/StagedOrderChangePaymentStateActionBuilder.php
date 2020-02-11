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
 * @implements Builder<StagedOrderChangePaymentStateAction>
 */
final class StagedOrderChangePaymentStateActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $paymentState;

    /**
     * @return null|string
     */
    public function getPaymentState()
    {
        return $this->paymentState;
    }

    /**
     * @return $this
     */
    public function withPaymentState(?string $paymentState)
    {
        $this->paymentState = $paymentState;

        return $this;
    }


    public function build(): StagedOrderChangePaymentStateAction
    {
        return new StagedOrderChangePaymentStateActionModel(
            $this->paymentState
        );
    }

    public static function of(): StagedOrderChangePaymentStateActionBuilder
    {
        return new self();
    }
}

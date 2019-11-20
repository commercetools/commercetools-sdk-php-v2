<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\Builder;

/**
 * @implements Builder<StagedOrderSetOrderNumberAction>
 */
final class StagedOrderSetOrderNumberActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $orderNumber;

    /**
     * @return null|string
     */
    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    /**
     * @return $this
     */
    public function withOrderNumber(?string $orderNumber)
    {
        $this->orderNumber = $orderNumber;

        return $this;
    }

    public function build(): StagedOrderSetOrderNumberAction
    {
        return new StagedOrderSetOrderNumberActionModel(
            $this->orderNumber
        );
    }

    public static function of(): StagedOrderSetOrderNumberActionBuilder
    {
        return new self();
    }
}

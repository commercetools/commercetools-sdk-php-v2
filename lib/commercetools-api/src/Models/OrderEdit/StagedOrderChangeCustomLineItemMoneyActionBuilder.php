<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<StagedOrderChangeCustomLineItemMoneyAction>
 */
final class StagedOrderChangeCustomLineItemMoneyActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $customLineItemId;

    /**
     * @var null|Money|MoneyBuilder
     */
    private $money;

    /**
     * @return null|string
     */
    public function getCustomLineItemId()
    {
        return $this->customLineItemId;
    }

    /**
     * @return null|Money
     */
    public function getMoney()
    {
        return $this->money instanceof MoneyBuilder ? $this->money->build() : $this->money;
    }

    /**
     * @return $this
     */
    public function withCustomLineItemId(?string $customLineItemId)
    {
        $this->customLineItemId = $customLineItemId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withMoney(?Money $money)
    {
        $this->money = $money;

        return $this;
    }

    /**
     * @return $this
     */
    public function withMoneyBuilder(?MoneyBuilder $money)
    {
        $this->money = $money;

        return $this;
    }

    public function build(): StagedOrderChangeCustomLineItemMoneyAction
    {
        return new StagedOrderChangeCustomLineItemMoneyActionModel(
            $this->customLineItemId,
            $this->money instanceof MoneyBuilder ? $this->money->build() : $this->money
        );
    }

    public static function of(): StagedOrderChangeCustomLineItemMoneyActionBuilder
    {
        return new self();
    }
}

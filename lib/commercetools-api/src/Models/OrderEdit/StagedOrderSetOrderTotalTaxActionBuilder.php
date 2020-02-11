<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Cart\TaxPortionDraftCollection;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyBuilder;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionBuilder;

/**
 * @implements Builder<StagedOrderSetOrderTotalTaxAction>
 */
final class StagedOrderSetOrderTotalTaxActionBuilder implements Builder
{
    /**
     * @var null|Money|MoneyBuilder
     */
    private $externalTotalGross;

    /**
     * @var ?TaxPortionDraftCollection
     */
    private $externalTaxPortions;

    /**
     * @return null|Money
     */
    public function getExternalTotalGross()
    {
        return $this->externalTotalGross instanceof MoneyBuilder ? $this->externalTotalGross->build() : $this->externalTotalGross;
    }

    /**
     * @return null|TaxPortionDraftCollection
     */
    public function getExternalTaxPortions()
    {
        return $this->externalTaxPortions;
    }

    /**
     * @return $this
     */
    public function withExternalTotalGross(?Money $externalTotalGross)
    {
        $this->externalTotalGross = $externalTotalGross;

        return $this;
    }

    /**
     * @return $this
     */
    public function withExternalTaxPortions(?TaxPortionDraftCollection $externalTaxPortions)
    {
        $this->externalTaxPortions = $externalTaxPortions;

        return $this;
    }

    /**
     * @return $this
     */
    public function withExternalTotalGrossBuilder(?MoneyBuilder $externalTotalGross)
    {
        $this->externalTotalGross = $externalTotalGross;

        return $this;
    }

    public function build(): StagedOrderSetOrderTotalTaxAction
    {
        return new StagedOrderSetOrderTotalTaxActionModel(
            $this->externalTotalGross instanceof MoneyBuilder ? $this->externalTotalGross->build() : $this->externalTotalGross,
            $this->externalTaxPortions
        );
    }

    public static function of(): StagedOrderSetOrderTotalTaxActionBuilder
    {
        return new self();
    }
}

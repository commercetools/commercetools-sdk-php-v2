<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\Builder;

/**
 * @implements Builder<StagedOrderChangeTaxModeAction>
 */
final class StagedOrderChangeTaxModeActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $taxMode;

    /**
     * @return null|string
     */
    public function getTaxMode()
    {
        return $this->taxMode;
    }

    /**
     * @return $this
     */
    public function withTaxMode(?string $taxMode)
    {
        $this->taxMode = $taxMode;

        return $this;
    }

    public function build(): StagedOrderChangeTaxModeAction
    {
        return new StagedOrderChangeTaxModeActionModel(
            $this->taxMode
        );
    }

    public static function of(): StagedOrderChangeTaxModeActionBuilder
    {
        return new self();
    }
}

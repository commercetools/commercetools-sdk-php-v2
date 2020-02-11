<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<MyCartChangeTaxModeAction>
 */
final class MyCartChangeTaxModeActionBuilder implements Builder
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


    public function build(): MyCartChangeTaxModeAction
    {
        return new MyCartChangeTaxModeActionModel(
            $this->taxMode
        );
    }

    public static function of(): MyCartChangeTaxModeActionBuilder
    {
        return new self();
    }
}

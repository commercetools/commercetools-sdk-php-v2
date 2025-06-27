<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProjectChangePriceRoundingModeAction>
 */
final class ProjectChangePriceRoundingModeActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $priceRoundingMode;

    /**
     * <p>Project-level default rounding mode for calculating the total prices on <a href="ctp:api:type:LineItem">LineItems</a> and <a href="ctp:api:type:CustomLineItem">CustomLineItems</a>. See <a href="ctp:api:type:CartsConfiguration">CartsConfiguration</a>.</p>
     *

     * @return null|string
     */
    public function getPriceRoundingMode()
    {
        return $this->priceRoundingMode;
    }

    /**
     * @param ?string $priceRoundingMode
     * @return $this
     */
    public function withPriceRoundingMode(?string $priceRoundingMode)
    {
        $this->priceRoundingMode = $priceRoundingMode;

        return $this;
    }


    public function build(): ProjectChangePriceRoundingModeAction
    {
        return new ProjectChangePriceRoundingModeActionModel(
            $this->priceRoundingMode
        );
    }

    public static function of(): ProjectChangePriceRoundingModeActionBuilder
    {
        return new self();
    }
}

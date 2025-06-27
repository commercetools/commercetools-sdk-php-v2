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
 * @implements Builder<ProjectChangeTaxRoundingModeAction>
 */
final class ProjectChangeTaxRoundingModeActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $taxRoundingMode;

    /**
     * <p>Project-level default rounding mode for tax calculation. See <a href="ctp:api:type:CartsConfiguration">CartsConfiguration</a>.</p>
     *

     * @return null|string
     */
    public function getTaxRoundingMode()
    {
        return $this->taxRoundingMode;
    }

    /**
     * @param ?string $taxRoundingMode
     * @return $this
     */
    public function withTaxRoundingMode(?string $taxRoundingMode)
    {
        $this->taxRoundingMode = $taxRoundingMode;

        return $this;
    }


    public function build(): ProjectChangeTaxRoundingModeAction
    {
        return new ProjectChangeTaxRoundingModeActionModel(
            $this->taxRoundingMode
        );
    }

    public static function of(): ProjectChangeTaxRoundingModeActionBuilder
    {
        return new self();
    }
}

<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProjectChangeTaxRoundingModeAction extends ProjectUpdateAction
{
    public const FIELD_TAX_ROUNDING_MODE = 'taxRoundingMode';

    /**
     * <p>Project-level default rounding mode for tax calculation. See <a href="ctp:api:type:CartsConfiguration">CartsConfiguration</a>.</p>
     *

     * @return null|string
     */
    public function getTaxRoundingMode();

    /**
     * @param ?string $taxRoundingMode
     */
    public function setTaxRoundingMode(?string $taxRoundingMode): void;
}

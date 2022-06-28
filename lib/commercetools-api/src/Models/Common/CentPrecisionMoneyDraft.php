<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CentPrecisionMoneyDraft extends TypedMoneyDraft
{
    /**
     * <p>This field is optional for cent precision. If provided, it must be equal to the default number of fraction digits for the specified currency.</p>
     *
     * @return null|int
     */
    public function getFractionDigits();

    /**
     * @param ?int $fractionDigits
     */
    public function setFractionDigits(?int $fractionDigits): void;
}

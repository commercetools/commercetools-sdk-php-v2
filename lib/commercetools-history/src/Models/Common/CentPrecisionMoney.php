<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface CentPrecisionMoney extends TypedMoney
{


    /**
     * <p>The number of default fraction digits for the given currency, like <code>2</code> for EUR or <code>0</code> for JPY.</p>
     *

     * @return null|int
     */
    public function getFractionDigits();

    /**
     * @param ?int $fractionDigits
     */
    public function setFractionDigits(?int $fractionDigits): void;
}

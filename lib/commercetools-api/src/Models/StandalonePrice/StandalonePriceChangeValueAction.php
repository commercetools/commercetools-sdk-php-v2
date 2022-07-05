<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\StandalonePrice;

use Commercetools\Api\Models\Common\Money;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StandalonePriceChangeValueAction extends StandalonePriceUpdateAction
{
    public const FIELD_VALUE = 'value';

    /**
     * <p>New value to set. Must not be empty.</p>
     *

     * @return null|Money
     */
    public function getValue();

    /**
     * @param ?Money $value
     */
    public function setValue(?Money $value): void;
}

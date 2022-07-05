<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\Money;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StandalonePriceValueChangedMessage extends Message
{
    public const FIELD_VALUE = 'value';

    /**
     * <p>The new value of the updated StandalonePrice.</p>
     *

     * @return null|Money
     */
    public function getValue();

    /**
     * @param ?Money $value
     */
    public function setValue(?Money $value): void;
}

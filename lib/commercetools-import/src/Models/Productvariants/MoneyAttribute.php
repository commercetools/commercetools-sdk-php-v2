<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productvariants;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Common\Money;

interface MoneyAttribute extends Attribute
{
    public const FIELD_VALUE = 'value';

    /**
     * <p>A money value in cent precision format.</p>
     *

     * @return null|Money
     */
    public function getValue();

    /**
     * @param ?Money $value
     */
    public function setValue(?Money $value): void;
}

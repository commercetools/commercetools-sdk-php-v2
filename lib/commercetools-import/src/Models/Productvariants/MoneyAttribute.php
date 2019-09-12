<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productvariants;

use Commercetools\Import\Models\Common\Money;

interface MoneyAttribute extends Attribute
{
    const FIELD_VALUE = 'value';

    /**
     * @return null|Money
     */
    public function getValue();

    public function setValue(?Money $value): void;
}

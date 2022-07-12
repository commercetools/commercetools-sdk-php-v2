<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productvariants;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Common\TypedMoney;

interface MoneyAttribute extends Attribute
{
    public const FIELD_VALUE = 'value';

    /**

     * @return null|TypedMoney
     */
    public function getValue();

    /**
     * @param ?TypedMoney $value
     */
    public function setValue(?TypedMoney $value): void;
}

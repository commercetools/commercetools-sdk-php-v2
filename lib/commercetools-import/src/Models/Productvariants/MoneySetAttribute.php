<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productvariants;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Common\TypedMoneyCollection;

interface MoneySetAttribute extends Attribute
{
    public const FIELD_VALUE = 'value';

    /**

     * @return null|TypedMoneyCollection
     */
    public function getValue();

    /**
     * @param ?TypedMoneyCollection $value
     */
    public function setValue(?TypedMoneyCollection $value): void;
}

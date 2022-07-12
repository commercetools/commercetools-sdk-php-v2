<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Customfields;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Common\TypedMoney;

interface MoneyField extends CustomField
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

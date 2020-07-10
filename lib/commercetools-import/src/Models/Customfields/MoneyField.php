<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Customfields;

use Shared\Base\JsonObject;
use Shared\Base\DateTimeImmutableCollection;
use Models\Common\Money;

interface MoneyField extends CustomField
{

    public const FIELD_VALUE = 'value';

    /**
     * @return null|Money
     */
    public function getValue();

    public function setValue(?Money $value): void;
}

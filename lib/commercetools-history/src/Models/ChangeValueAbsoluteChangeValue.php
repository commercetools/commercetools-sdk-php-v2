<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface ChangeValueAbsoluteChangeValue extends ChangeValueChangeValue
{

    public const FIELD_MONEY = 'money';

    /**
     * @return null|string
     */
    public function getType();

    /**
     * @return null|MoneyCollection
     */
    public function getMoney();

    /**
     * @param ?MoneyCollection $money
     */
    public function setMoney(?MoneyCollection $money): void;
}

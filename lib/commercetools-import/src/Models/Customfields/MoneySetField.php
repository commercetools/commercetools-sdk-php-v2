<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Customfields;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Common\MoneyCollection;

interface MoneySetField extends CustomField
{
    public const FIELD_VALUE = 'value';

    /**
     * <p>JSON array of money values in cent precision format.
     * The order of items in the array is not fixed.</p>
     *

     * @return null|MoneyCollection
     */
    public function getValue();

    /**
     * @param ?MoneyCollection $value
     */
    public function setValue(?MoneyCollection $value): void;
}

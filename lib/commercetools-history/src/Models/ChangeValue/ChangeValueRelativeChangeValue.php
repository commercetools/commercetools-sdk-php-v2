<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\ChangeValue;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface ChangeValueRelativeChangeValue extends ChangeValueChangeValue
{

    public const FIELD_PERMYRIAD = 'permyriad';

    /**

     * @return null|string
     */
    public function getType();

    /**
     * <p>Fraction (per ten thousand) the price is reduced by. For example, 1000 results in a 10% price reduction.</p>
     *

     * @return null|int
     */
    public function getPermyriad();

    /**
     * @param ?int $permyriad
     */
    public function setPermyriad(?int $permyriad): void;
}

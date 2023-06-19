<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Label;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface StringLabel extends Label
{

    public const FIELD_VALUE = 'value';

    /**

     * @return null|string
     */
    public function getType();

    /**
     * <p>Changed value.</p>
     *

     * @return null|string
     */
    public function getValue();

    /**
     * @param ?string $value
     */
    public function setValue(?string $value): void;
}

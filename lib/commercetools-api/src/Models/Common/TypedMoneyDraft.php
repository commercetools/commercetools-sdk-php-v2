<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface TypedMoneyDraft extends Money
{
    public const DISCRIMINATOR_FIELD = 'type';
    public const FIELD_TYPE = 'type';
    public const FIELD_FRACTION_DIGITS = 'fractionDigits';

    /**
     * @return null|string
     */
    public function getType();

    /**
     * @return null|int
     */
    public function getFractionDigits();

    /**
     * @param ?int $fractionDigits
     */
    public function setFractionDigits(?int $fractionDigits): void;
}

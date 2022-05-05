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
     * <p>The commercetools Platform supports two different types of Money: one for amounts in cent precision and another one for sub-cent amounts up to 20 fraction digits.</p>
     *
     * @return null|string
     */
    public function getType();

    /**
     * <p>Must be equal to the default number of fraction digits for the specified currency.</p>
     *
     * @return null|int
     */
    public function getFractionDigits();

    /**
     * @param ?int $fractionDigits
     */
    public function setFractionDigits(?int $fractionDigits): void;
}

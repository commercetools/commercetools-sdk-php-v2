<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ScoreShippingRateInput extends ShippingRateInput
{
    public const FIELD_SCORE = 'score';

    /**

     * @return null|float
     */
    public function getScore();

    /**
     * @param ?float $score
     */
    public function setScore(?float $score): void;
}

<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

interface ScoreShippingRateInput extends ShippingRateInput
{
    const FIELD_SCORE = 'score';

    /**
     * @return null|int
     */
    public function getScore();

    public function setScore(?int $score): void;
}

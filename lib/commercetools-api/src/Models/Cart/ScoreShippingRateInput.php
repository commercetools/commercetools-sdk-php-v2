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
     * <p>Abstract value for categorizing a Cart.</p>
     *

     * @return null|int
     */
    public function getScore();

    /**
     * @param ?int $score
     */
    public function setScore(?int $score): void;
}

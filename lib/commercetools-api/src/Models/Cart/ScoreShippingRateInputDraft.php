<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ScoreShippingRateInputDraft extends ShippingRateInputDraft
{
    public const FIELD_SCORE = 'score';

    /**
     * @return null|float
     */
    public function getScore();

    public function setScore(?float $score): void;
}

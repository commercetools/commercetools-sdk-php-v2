<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\ChangeValue;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface SetCartScoreShippingRateInputValue extends JsonObject
{

    public const FIELD_TYPE = 'type';
    public const FIELD_SCORE = 'score';

    /**
     * @return null|string
     */
    public function getType();

    /**
     * @return null|int
     */
    public function getScore();

    /**
     * @param ?string $type
     */
    public function setType(?string $type): void;

    /**
     * @param ?int $score
     */
    public function setScore(?int $score): void;
}

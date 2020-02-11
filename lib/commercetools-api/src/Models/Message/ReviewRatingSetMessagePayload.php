<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Common\Reference;

interface ReviewRatingSetMessagePayload extends MessagePayload
{

    public const FIELD_OLD_RATING = 'oldRating';
    public const FIELD_NEW_RATING = 'newRating';
    public const FIELD_INCLUDED_IN_STATISTICS = 'includedInStatistics';
    public const FIELD_TARGET = 'target';

    /**
     * @return null|int
     */
    public function getOldRating();

    /**
     * @return null|int
     */
    public function getNewRating();

    /**
     * @return null|bool
     */
    public function getIncludedInStatistics();

    /**
     * @return null|Reference
     */
    public function getTarget();

    public function setOldRating(?int $oldRating): void;

    public function setNewRating(?int $newRating): void;

    public function setIncludedInStatistics(?bool $includedInStatistics): void;

    public function setTarget(?Reference $target): void;
}

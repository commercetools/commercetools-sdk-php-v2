<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\Common\ReviewRatingStatistics;

interface ChangeReviewRatingStatisticsChange extends Change
{

    public const FIELD_NEXT_VALUE = 'nextValue';
    public const FIELD_PREVIOUS_VALUE = 'previousValue';

    /**
     * <p>Update action for <code>changeReviewRatingStatistics</code></p>
     *

     * @return null|string
     */
    public function getChange();

    /**

     * @return null|string
     */
    public function getType();

    /**

     * @return null|ReviewRatingStatistics
     */
    public function getNextValue();

    /**

     * @return null|ReviewRatingStatistics
     */
    public function getPreviousValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?ReviewRatingStatistics $nextValue
     */
    public function setNextValue(?ReviewRatingStatistics $nextValue): void;

    /**
     * @param ?ReviewRatingStatistics $previousValue
     */
    public function setPreviousValue(?ReviewRatingStatistics $previousValue): void;
}

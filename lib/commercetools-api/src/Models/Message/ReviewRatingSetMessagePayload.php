<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ReviewRatingSetMessagePayload extends MessagePayload
{
    public const FIELD_OLD_RATING = 'oldRating';
    public const FIELD_NEW_RATING = 'newRating';
    public const FIELD_INCLUDED_IN_STATISTICS = 'includedInStatistics';
    public const FIELD_TARGET = 'target';

    /**
     * <p>The <code>rating</code> of the <a href="ctp:api:type:Review">Review</a> before the <a href="ctp:api:type:ReviewSetRatingAction">Set Rating</a> update action.</p>
     *

     * @return null|float
     */
    public function getOldRating();

    /**
     * <p>The <code>rating</code> of the <a href="ctp:api:type:Review">Review</a> after the <a href="ctp:api:type:ReviewSetRatingAction">Set Rating</a> update action.</p>
     *

     * @return null|float
     */
    public function getNewRating();

    /**
     * <p>Whether the <a href="ctp:api:type:Review">Review</a> was taken into account in the ratings statistics of the target.</p>
     *

     * @return null|bool
     */
    public function getIncludedInStatistics();

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to the resource that the <a href="ctp:api:type:Review">Review</a> belongs to.</p>
     *

     * @return null|Reference
     */
    public function getTarget();

    /**
     * @param ?float $oldRating
     */
    public function setOldRating(?float $oldRating): void;

    /**
     * @param ?float $newRating
     */
    public function setNewRating(?float $newRating): void;

    /**
     * @param ?bool $includedInStatistics
     */
    public function setIncludedInStatistics(?bool $includedInStatistics): void;

    /**
     * @param ?Reference $target
     */
    public function setTarget(?Reference $target): void;
}

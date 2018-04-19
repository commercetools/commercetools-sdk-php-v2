<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Common\Reference;

interface ReviewRatingSetMessage extends Message
{
    const FIELD_OLD_RATING = 'oldRating';
    const FIELD_NEW_RATING = 'newRating';
    const FIELD_INCLUDED_IN_STATISTICS = 'includedInStatistics';
    const FIELD_TARGET = 'target';

    /**
     * @return int
     */
    public function getOldRating();

    /**
     * @return int
     */
    public function getNewRating();

    /**
     * @return mixed
     */
    public function getIncludedInStatistics();

    /**
     * @return Reference
     */
    public function getTarget();

    /**
     * @param int $oldRating
     * @return $this
     */
    public function setOldRating(int $oldRating);

    /**
     * @param int $newRating
     * @return $this
     */
    public function setNewRating(int $newRating);

    /**
     * @param mixed $includedInStatistics
     * @return $this
     */
    public function setIncludedInStatistics($includedInStatistics);

    /**
     * @param Reference $target
     * @return $this
     */
    public function setTarget(Reference $target);

}

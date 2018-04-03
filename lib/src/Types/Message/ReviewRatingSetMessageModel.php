<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Message\MessageModel;

use Commercetools\Types\Common\Reference;

class ReviewRatingSetMessageModel extends MessageModel implements ReviewRatingSetMessage {
    const DISCRIMINATOR_VALUE = 'ReviewRatingSet';

    /**
     * @var int
     */
    protected $oldRating;
    /**
     * @var int
     */
    protected $newRating;
    /**
     * @var mixed
     */
    protected $includedInStatistics;
    /**
     * @var Reference
     */
    protected $target;

    /**
     * @return int
     */
    public function getOldRating()
    {
        if (is_null($this->oldRating)) {
            $value = $this->raw(ReviewRatingSetMessage::FIELD_OLD_RATING);
            $value = (int)$value;
            $this->oldRating = $value;
        }
        return $this->oldRating;
    }
    /**
     * @return int
     */
    public function getNewRating()
    {
        if (is_null($this->newRating)) {
            $value = $this->raw(ReviewRatingSetMessage::FIELD_NEW_RATING);
            $value = (int)$value;
            $this->newRating = $value;
        }
        return $this->newRating;
    }
    /**
     * @return mixed
     */
    public function getIncludedInStatistics()
    {
        if (is_null($this->includedInStatistics)) {
            $value = $this->raw(ReviewRatingSetMessage::FIELD_INCLUDED_IN_STATISTICS);
            $this->includedInStatistics = $value;
        }
        return $this->includedInStatistics;
    }
    /**
     * @return Reference
     */
    public function getTarget()
    {
        if (is_null($this->target)) {
            $value = $this->raw(ReviewRatingSetMessage::FIELD_TARGET);
            $resolvedClass = $this->resolveDiscriminator(Reference::class, $value);
            if (is_null($value)) {
                return $this->mapData($resolvedClass, null);
            }
            $value = $this->mapData($resolvedClass, $value);

            $this->target = $value;
        }
        return $this->target;
    }

    /**
     * @param int $oldRating
     * @return $this
     */
    public function setOldRating(int $oldRating)
    {
        $this->oldRating = (int)$oldRating;

        return $this;
    }
    /**
     * @param int $newRating
     * @return $this
     */
    public function setNewRating(int $newRating)
    {
        $this->newRating = (int)$newRating;

        return $this;
    }
    /**
     * @param $includedInStatistics
     * @return $this
     */
    public function setIncludedInStatistics($includedInStatistics)
    {
        $this->includedInStatistics = $includedInStatistics;

        return $this;
    }
    /**
     * @param Reference $target
     * @return $this
     */
    public function setTarget(Reference $target)
    {
        $this->target = $target;

        return $this;
    }

}

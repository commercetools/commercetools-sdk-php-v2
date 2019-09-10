<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\Reference;

interface ReviewRatingSetMessage extends Message
{
    
    const FIELD_OLD_RATING = 'oldRating';
    const FIELD_NEW_RATING = 'newRating';
    const FIELD_INCLUDED_IN_STATISTICS = 'includedInStatistics';
    const FIELD_TARGET = 'target';

    /**
     *
     * @return int|null
     */
    public function getOldRating();
    
    /**
     *
     * @return int|null
     */
    public function getNewRating();
    
    /**
     *
     * @return bool|null
     */
    public function getIncludedInStatistics();
    
    /**
     *
     * @return Reference|null
     */
    public function getTarget();
    public function setOldRating(?int $oldRating): void;
    
    public function setNewRating(?int $newRating): void;
    
    public function setIncludedInStatistics(?bool $includedInStatistics): void;
    
    public function setTarget(?Reference $target): void;
}
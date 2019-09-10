<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\State\StateReference;

interface ReviewStateTransitionMessagePayload extends MessagePayload
{
    
    const FIELD_OLD_STATE = 'oldState';
    const FIELD_NEW_STATE = 'newState';
    const FIELD_OLD_INCLUDED_IN_STATISTICS = 'oldIncludedInStatistics';
    const FIELD_NEW_INCLUDED_IN_STATISTICS = 'newIncludedInStatistics';
    const FIELD_TARGET = 'target';
    const FIELD_FORCE = 'force';

    /**
     *
     * @return StateReference|null
     */
    public function getOldState();
    
    /**
     *
     * @return StateReference|null
     */
    public function getNewState();
    
    /**
     *
     * @return bool|null
     */
    public function getOldIncludedInStatistics();
    
    /**
     *
     * @return bool|null
     */
    public function getNewIncludedInStatistics();
    
    /**
     *
     * @return Reference|null
     */
    public function getTarget();
    
    /**
     *
     * @return bool|null
     */
    public function getForce();
    public function setOldState(?StateReference $oldState): void;
    
    public function setNewState(?StateReference $newState): void;
    
    public function setOldIncludedInStatistics(?bool $oldIncludedInStatistics): void;
    
    public function setNewIncludedInStatistics(?bool $newIncludedInStatistics): void;
    
    public function setTarget(?Reference $target): void;
    
    public function setForce(?bool $force): void;
}
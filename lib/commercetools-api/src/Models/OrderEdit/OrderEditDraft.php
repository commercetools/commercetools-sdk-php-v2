<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Order\OrderReference;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionCollection;
use Commercetools\Api\Models\Type\CustomFieldsDraft;

interface OrderEditDraft extends JsonObject
{
    
    const FIELD_KEY = 'key';
    const FIELD_RESOURCE = 'resource';
    const FIELD_STAGED_ACTIONS = 'stagedActions';
    const FIELD_CUSTOM = 'custom';
    const FIELD_COMMENT = 'comment';
    const FIELD_DRY_RUN = 'dryRun';

    /**
     *
     * @return string|null
     */
    public function getKey();
    
    /**
     *
     * @return OrderReference|null
     */
    public function getResource();
    
    /**
     *
     * @return StagedOrderUpdateActionCollection|null
     */
    public function getStagedActions();
    
    /**
     *
     * @return CustomFieldsDraft|null
     */
    public function getCustom();
    
    /**
     *
     * @return string|null
     */
    public function getComment();
    
    /**
     *
     * @return bool|null
     */
    public function getDryRun();
    public function setKey(?string $key): void;
    
    public function setResource(?OrderReference $resource): void;
    
    public function setStagedActions(?StagedOrderUpdateActionCollection $stagedActions): void;
    
    public function setCustom(?CustomFieldsDraft $custom): void;
    
    public function setComment(?string $comment): void;
    
    public function setDryRun(?bool $dryRun): void;
}
<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\LoggedResource;
use Commercetools\Api\Models\Order\OrderReference;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionCollection;
use Commercetools\Api\Models\Type\CustomFields;
use DateTimeImmutable;

interface OrderEdit extends LoggedResource
{
    
    const FIELD_KEY = 'key';
    const FIELD_RESOURCE = 'resource';
    const FIELD_STAGED_ACTIONS = 'stagedActions';
    const FIELD_CUSTOM = 'custom';
    const FIELD_RESULT = 'result';
    const FIELD_COMMENT = 'comment';

    /**
     *
     * @return DateTimeImmutable|null
     */
    public function getCreatedAt();
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    public function getLastModifiedAt();
    
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
     * @return CustomFields|null
     */
    public function getCustom();
    
    /**
     *
     * @return OrderEditResult|null
     */
    public function getResult();
    
    /**
     *
     * @return string|null
     */
    public function getComment();
    public function setCreatedAt(?DateTimeImmutable $createdAt): void;
    
    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;
    
    public function setKey(?string $key): void;
    
    public function setResource(?OrderReference $resource): void;
    
    public function setStagedActions(?StagedOrderUpdateActionCollection $stagedActions): void;
    
    public function setCustom(?CustomFields $custom): void;
    
    public function setResult(?OrderEditResult $result): void;
    
    public function setComment(?string $comment): void;
}
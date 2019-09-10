<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface MessageDelivery extends SubscriptionDelivery
{
    
    const FIELD_ID = 'id';
    const FIELD_VERSION = 'version';
    const FIELD_CREATED_AT = 'createdAt';
    const FIELD_LAST_MODIFIED_AT = 'lastModifiedAt';
    const FIELD_SEQUENCE_NUMBER = 'sequenceNumber';
    const FIELD_RESOURCE_VERSION = 'resourceVersion';
    const FIELD_PAYLOAD_NOT_INCLUDED = 'payloadNotIncluded';

    /**
     *
     * @return string|null
     */
    public function getId();
    
    /**
     *
     * @return int|null
     */
    public function getVersion();
    
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
     * @return int|null
     */
    public function getSequenceNumber();
    
    /**
     *
     * @return int|null
     */
    public function getResourceVersion();
    
    /**
     *
     * @return PayloadNotIncluded|null
     */
    public function getPayloadNotIncluded();
    public function setId(?string $id): void;
    
    public function setVersion(?int $version): void;
    
    public function setCreatedAt(?DateTimeImmutable $createdAt): void;
    
    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;
    
    public function setSequenceNumber(?int $sequenceNumber): void;
    
    public function setResourceVersion(?int $resourceVersion): void;
    
    public function setPayloadNotIncluded(?PayloadNotIncluded $payloadNotIncluded): void;
}
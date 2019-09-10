<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\JsonObject;

interface SqsDestination extends Destination
{
    
    const FIELD_ACCESS_KEY = 'accessKey';
    const FIELD_ACCESS_SECRET = 'accessSecret';
    const FIELD_QUEUE_URL = 'queueUrl';
    const FIELD_REGION = 'region';

    /**
     *
     * @return string|null
     */
    public function getAccessKey();
    
    /**
     *
     * @return string|null
     */
    public function getAccessSecret();
    
    /**
     *
     * @return string|null
     */
    public function getQueueUrl();
    
    /**
     *
     * @return string|null
     */
    public function getRegion();
    public function setAccessKey(?string $accessKey): void;
    
    public function setAccessSecret(?string $accessSecret): void;
    
    public function setQueueUrl(?string $queueUrl): void;
    
    public function setRegion(?string $region): void;
}
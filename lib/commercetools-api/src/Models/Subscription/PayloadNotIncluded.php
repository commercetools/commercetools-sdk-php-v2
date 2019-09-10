<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\JsonObject;

interface PayloadNotIncluded extends JsonObject
{
    
    const FIELD_REASON = 'reason';
    const FIELD_PAYLOAD_TYPE = 'payloadType';

    /**
     *
     * @return string|null
     */
    public function getReason();
    
    /**
     *
     * @return string|null
     */
    public function getPayloadType();
    public function setReason(?string $reason): void;
    
    public function setPayloadType(?string $payloadType): void;
}
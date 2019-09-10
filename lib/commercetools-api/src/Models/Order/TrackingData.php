<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObject;

interface TrackingData extends JsonObject
{
    
    const FIELD_TRACKING_ID = 'trackingId';
    const FIELD_CARRIER = 'carrier';
    const FIELD_PROVIDER = 'provider';
    const FIELD_PROVIDER_TRANSACTION = 'providerTransaction';
    const FIELD_IS_RETURN = 'isReturn';

    /**
     *
     * @return string|null
     */
    public function getTrackingId();
    
    /**
     *
     * @return string|null
     */
    public function getCarrier();
    
    /**
     *
     * @return string|null
     */
    public function getProvider();
    
    /**
     *
     * @return string|null
     */
    public function getProviderTransaction();
    
    /**
     *
     * @return bool|null
     */
    public function getIsReturn();
    public function setTrackingId(?string $trackingId): void;
    
    public function setCarrier(?string $carrier): void;
    
    public function setProvider(?string $provider): void;
    
    public function setProviderTransaction(?string $providerTransaction): void;
    
    public function setIsReturn(?bool $isReturn): void;
}
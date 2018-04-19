<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Base\JsonObject;

interface TrackingData extends JsonObject
{
    const FIELD_TRACKING_ID = 'trackingId';
    const FIELD_CARRIER = 'carrier';
    const FIELD_PROVIDER = 'provider';
    const FIELD_PROVIDER_TRANSACTION = 'providerTransaction';
    const FIELD_IS_RETURN = 'isReturn';

    /**
     * @return string
     */
    public function getTrackingId();

    /**
     * @return string
     */
    public function getCarrier();

    /**
     * @return string
     */
    public function getProvider();

    /**
     * @return string
     */
    public function getProviderTransaction();

    /**
     * @return mixed
     */
    public function getIsReturn();

    /**
     * @param string $trackingId
     * @return $this
     */
    public function setTrackingId(string $trackingId);

    /**
     * @param string $carrier
     * @return $this
     */
    public function setCarrier(string $carrier);

    /**
     * @param string $provider
     * @return $this
     */
    public function setProvider(string $provider);

    /**
     * @param string $providerTransaction
     * @return $this
     */
    public function setProviderTransaction(string $providerTransaction);

    /**
     * @param mixed $isReturn
     * @return $this
     */
    public function setIsReturn($isReturn);

}

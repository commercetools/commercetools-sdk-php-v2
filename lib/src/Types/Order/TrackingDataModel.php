<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

class TrackingDataModel extends JsonObjectModel implements TrackingData {
    /**
     * @var string
     */
    protected $trackingId;
    /**
     * @var string
     */
    protected $carrier;
    /**
     * @var string
     */
    protected $provider;
    /**
     * @var string
     */
    protected $providerTransaction;
    /**
     * @var mixed
     */
    protected $isReturn;

    /**
     * @return string
     */
    public function getTrackingId()
    {
        if (is_null($this->trackingId)) {
            $value = $this->raw(TrackingData::FIELD_TRACKING_ID);
            $value = (string)$value;
            $this->trackingId = $value;
        }
        return $this->trackingId;
    }
    /**
     * @return string
     */
    public function getCarrier()
    {
        if (is_null($this->carrier)) {
            $value = $this->raw(TrackingData::FIELD_CARRIER);
            $value = (string)$value;
            $this->carrier = $value;
        }
        return $this->carrier;
    }
    /**
     * @return string
     */
    public function getProvider()
    {
        if (is_null($this->provider)) {
            $value = $this->raw(TrackingData::FIELD_PROVIDER);
            $value = (string)$value;
            $this->provider = $value;
        }
        return $this->provider;
    }
    /**
     * @return string
     */
    public function getProviderTransaction()
    {
        if (is_null($this->providerTransaction)) {
            $value = $this->raw(TrackingData::FIELD_PROVIDER_TRANSACTION);
            $value = (string)$value;
            $this->providerTransaction = $value;
        }
        return $this->providerTransaction;
    }
    /**
     * @return mixed
     */
    public function getIsReturn()
    {
        if (is_null($this->isReturn)) {
            $value = $this->raw(TrackingData::FIELD_IS_RETURN);
            $this->isReturn = $value;
        }
        return $this->isReturn;
    }

    /**
     * @param string $trackingId
     * @return $this
     */
    public function setTrackingId(string $trackingId)
    {
        $this->trackingId = (string)$trackingId;

        return $this;
    }
    /**
     * @param string $carrier
     * @return $this
     */
    public function setCarrier(string $carrier)
    {
        $this->carrier = (string)$carrier;

        return $this;
    }
    /**
     * @param string $provider
     * @return $this
     */
    public function setProvider(string $provider)
    {
        $this->provider = (string)$provider;

        return $this;
    }
    /**
     * @param string $providerTransaction
     * @return $this
     */
    public function setProviderTransaction(string $providerTransaction)
    {
        $this->providerTransaction = (string)$providerTransaction;

        return $this;
    }
    /**
     * @param $isReturn
     * @return $this
     */
    public function setIsReturn($isReturn)
    {
        $this->isReturn = $isReturn;

        return $this;
    }

}

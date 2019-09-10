<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Order;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<TrackingData>
 */
final class TrackingDataBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?bool
     */
    protected $isReturn;
    
    /**
     * @var ?string
     */
    protected $carrier;
    
    /**
     * @var ?string
     */
    protected $providerTransaction;
    
    /**
     * @var ?string
     */
    protected $provider;
    
    /**
     * @var ?string
     */
    protected $trackingId;

    /**
     *
     * @return bool|null
     */
    final public function getIsReturn()
    {
       return $this->isReturn;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getCarrier()
    {
       return $this->carrier;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getProviderTransaction()
    {
       return $this->providerTransaction;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getProvider()
    {
       return $this->provider;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getTrackingId()
    {
       return $this->trackingId;
    }
    /**
     * @return $this
     */
    final public function withIsReturn(?bool $isReturn)
    {
        $this->isReturn = $isReturn;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCarrier(?string $carrier)
    {
        $this->carrier = $carrier;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withProviderTransaction(?string $providerTransaction)
    {
        $this->providerTransaction = $providerTransaction;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withProvider(?string $provider)
    {
        $this->provider = $provider;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTrackingId(?string $trackingId)
    {
        $this->trackingId = $trackingId;
        
        return $this;
    }
    
    public function build(): TrackingData {
        return new TrackingDataModel(
            $this->isReturn,
            $this->carrier,
            $this->providerTransaction,
            $this->provider,
            $this->trackingId
        );
    }
    
    public static function of(): TrackingDataBuilder
    {
        return new self();
    }
}
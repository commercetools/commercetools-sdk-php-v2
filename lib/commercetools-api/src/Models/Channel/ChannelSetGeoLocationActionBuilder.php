<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Channel;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ChannelSetGeoLocationAction>
 */
final class ChannelSetGeoLocationActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?JsonObject
     */
    protected $geoLocation;

    /**
     *
     * @return string|null
     */
    final public function getAction()
    {
       return $this->action;
    }
    
    /**
     *
     * @return JsonObject|null
     */
    final public function getGeoLocation()
    {
       return $this->geoLocation;
    }
    /**
     * @return $this
     */
    final public function withAction(?string $action)
    {
        $this->action = $action;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withGeoLocation(?JsonObject $geoLocation)
    {
        $this->geoLocation = $geoLocation;
        
        return $this;
    }
    
    public function build(): ChannelSetGeoLocationAction {
        return new ChannelSetGeoLocationActionModel(
            $this->action,
            $this->geoLocation
        );
    }
    
    public static function of(): ChannelSetGeoLocationActionBuilder
    {
        return new self();
    }
}
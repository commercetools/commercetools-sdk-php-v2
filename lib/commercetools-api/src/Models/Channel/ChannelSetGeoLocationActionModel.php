<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Channel;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class ChannelSetGeoLocationActionModel extends JsonObjectModel implements ChannelSetGeoLocationAction
{
    const DISCRIMINATOR_VALUE = 'setGeoLocation';
    public function __construct(
        string $action = null,
        JsonObject $geoLocation = null
    ) {
        $this->action = $action;
        $this->geoLocation = $geoLocation;
        
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
       if (is_null($this->action)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ChannelUpdateAction::FIELD_ACTION);
           if (is_null($data)) {
               return null;
           }
           $this->action = (string)$data;
       }
       return $this->action;
    }
    
    /**
     *
     * @return JsonObject|null
     */
    final public function getGeoLocation()
    {
       if (is_null($this->geoLocation)) {
           /** @psalm-var ?stdClass $data */
           $data = $this->raw(ChannelSetGeoLocationAction::FIELD_GEO_LOCATION);
           if (is_null($data)) {
               return null;
           }
           $this->geoLocation = JsonObjectModel::of($data);
       }
       return $this->geoLocation;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setGeoLocation(?JsonObject $geoLocation): void
    {
        $this->geoLocation = $geoLocation;
    }
    
}
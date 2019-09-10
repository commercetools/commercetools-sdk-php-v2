<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Zone;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class ZoneAddLocationActionModel extends JsonObjectModel implements ZoneAddLocationAction
{
    const DISCRIMINATOR_VALUE = 'addLocation';
    public function __construct(
        string $action = null,
        Location $location = null
    ) {
        $this->action = $action;
        $this->location = $location;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?Location
     */
    protected $location;

    /**
     *
     * @return string|null
     */
    final public function getAction()
    {
       if (is_null($this->action)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ZoneUpdateAction::FIELD_ACTION);
           if (is_null($data)) {
               return null;
           }
           $this->action = (string)$data;
       }
       return $this->action;
    }
    
    /**
     *
     * @return Location|null
     */
    final public function getLocation()
    {
       if (is_null($this->location)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ZoneAddLocationAction::FIELD_LOCATION);
           if (is_null($data)) {
               return null;
           }
           
           $this->location = LocationModel::of($data);
       }
       return $this->location;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setLocation(?Location $location): void
    {
        $this->location = $location;
    }
    
}
<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Zone;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ZoneRemoveLocationAction>
 */
final class ZoneRemoveLocationActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?LocationBuilder|Location
     */
    protected $location;

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
     * @return Location|null
     */
    final public function getLocation()
    {
       return ($this->location instanceof LocationBuilder ? $this->location->build() : $this->location);
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
    final public function withLocation(?Location $location)
    {
        $this->location = $location;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withLocationBuilder(?LocationBuilder $location)
    {
        $this->location = $location;
        
        return $this;
    }
    
    public function build(): ZoneRemoveLocationAction {
        return new ZoneRemoveLocationActionModel(
            $this->action,
            ($this->location instanceof LocationBuilder ? $this->location->build() : $this->location)
        );
    }
    
    public static function of(): ZoneRemoveLocationActionBuilder
    {
        return new self();
    }
}
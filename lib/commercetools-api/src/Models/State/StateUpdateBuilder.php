<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\State;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<StateUpdate>
 */
final class StateUpdateBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?StateUpdateActionCollection
     */
    protected $actions;
    
    /**
     * @var ?int
     */
    protected $version;

    /**
     *
     * @return StateUpdateActionCollection|null
     */
    final public function getActions()
    {
       return $this->actions;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getVersion()
    {
       return $this->version;
    }
    /**
     * @return $this
     */
    final public function withActions(?StateUpdateActionCollection $actions)
    {
        $this->actions = $actions;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withVersion(?int $version)
    {
        $this->version = $version;
        
        return $this;
    }
    
    public function build(): StateUpdate {
        return new StateUpdateModel(
            $this->actions,
            $this->version
        );
    }
    
    public static function of(): StateUpdateBuilder
    {
        return new self();
    }
}
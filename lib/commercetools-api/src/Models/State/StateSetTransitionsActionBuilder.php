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
 * @implements Builder<StateSetTransitionsAction>
 */
final class StateSetTransitionsActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?StateResourceIdentifierCollection
     */
    protected $transitions;

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
     * @return StateResourceIdentifierCollection|null
     */
    final public function getTransitions()
    {
       return $this->transitions;
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
    final public function withTransitions(?StateResourceIdentifierCollection $transitions)
    {
        $this->transitions = $transitions;
        
        return $this;
    }
    
    public function build(): StateSetTransitionsAction {
        return new StateSetTransitionsActionModel(
            $this->action,
            $this->transitions
        );
    }
    
    public static function of(): StateSetTransitionsActionBuilder
    {
        return new self();
    }
}
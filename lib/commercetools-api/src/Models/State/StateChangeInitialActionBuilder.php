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
 * @implements Builder<StateChangeInitialAction>
 */
final class StateChangeInitialActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?bool
     */
    protected $initial;

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
     * @return bool|null
     */
    final public function getInitial()
    {
       return $this->initial;
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
    final public function withInitial(?bool $initial)
    {
        $this->initial = $initial;
        
        return $this;
    }
    
    public function build(): StateChangeInitialAction {
        return new StateChangeInitialActionModel(
            $this->action,
            $this->initial
        );
    }
    
    public static function of(): StateChangeInitialActionBuilder
    {
        return new self();
    }
}
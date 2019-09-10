<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ExtensionChangeTriggersAction>
 */
final class ExtensionChangeTriggersActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?ExtensionTriggerCollection
     */
    protected $triggers;

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
     * @return ExtensionTriggerCollection|null
     */
    final public function getTriggers()
    {
       return $this->triggers;
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
    final public function withTriggers(?ExtensionTriggerCollection $triggers)
    {
        $this->triggers = $triggers;
        
        return $this;
    }
    
    public function build(): ExtensionChangeTriggersAction {
        return new ExtensionChangeTriggersActionModel(
            $this->action,
            $this->triggers
        );
    }
    
    public static function of(): ExtensionChangeTriggersActionBuilder
    {
        return new self();
    }
}
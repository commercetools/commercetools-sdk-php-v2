<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionBuilder;

/**
 * @implements Builder<StagedOrderSetCustomLineItemCustomFieldAction>
 */
final class StagedOrderSetCustomLineItemCustomFieldActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?string
     */
    protected $customLineItemId;
    
    /**
     * @var ?string
     */
    protected $name;
    
    /**
     * @var ?JsonObject
     */
    protected $value;

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
     * @return string|null
     */
    final public function getCustomLineItemId()
    {
       return $this->customLineItemId;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getName()
    {
       return $this->name;
    }
    
    /**
     *
     * @return JsonObject|null
     */
    final public function getValue()
    {
       return $this->value;
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
    final public function withCustomLineItemId(?string $customLineItemId)
    {
        $this->customLineItemId = $customLineItemId;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withName(?string $name)
    {
        $this->name = $name;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withValue(?JsonObject $value)
    {
        $this->value = $value;
        
        return $this;
    }
    
    public function build(): StagedOrderSetCustomLineItemCustomFieldAction {
        return new StagedOrderSetCustomLineItemCustomFieldActionModel(
            $this->action,
            $this->customLineItemId,
            $this->name,
            $this->value
        );
    }
    
    public static function of(): StagedOrderSetCustomLineItemCustomFieldActionBuilder
    {
        return new self();
    }
}
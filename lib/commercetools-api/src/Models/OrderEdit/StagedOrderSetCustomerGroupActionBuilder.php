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
use Commercetools\Api\Models\CustomerGroup\CustomerGroupResourceIdentifier;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupResourceIdentifierBuilder;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionBuilder;

/**
 * @implements Builder<StagedOrderSetCustomerGroupAction>
 */
final class StagedOrderSetCustomerGroupActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?CustomerGroupResourceIdentifierBuilder|CustomerGroupResourceIdentifier
     */
    protected $customerGroup;

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
     * @return CustomerGroupResourceIdentifier|null
     */
    final public function getCustomerGroup()
    {
       return ($this->customerGroup instanceof CustomerGroupResourceIdentifierBuilder ? $this->customerGroup->build() : $this->customerGroup);
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
    final public function withCustomerGroup(?CustomerGroupResourceIdentifier $customerGroup)
    {
        $this->customerGroup = $customerGroup;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withCustomerGroupBuilder(?CustomerGroupResourceIdentifierBuilder $customerGroup)
    {
        $this->customerGroup = $customerGroup;
        
        return $this;
    }
    
    public function build(): StagedOrderSetCustomerGroupAction {
        return new StagedOrderSetCustomerGroupActionModel(
            $this->action,
            ($this->customerGroup instanceof CustomerGroupResourceIdentifierBuilder ? $this->customerGroup->build() : $this->customerGroup)
        );
    }
    
    public static function of(): StagedOrderSetCustomerGroupActionBuilder
    {
        return new self();
    }
}
<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CustomerRemoveBillingAddressIdAction>
 */
final class CustomerRemoveBillingAddressIdActionBuilder implements Builder
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
    protected $addressId;

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
    final public function getAddressId()
    {
       return $this->addressId;
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
    final public function withAddressId(?string $addressId)
    {
        $this->addressId = $addressId;
        
        return $this;
    }
    
    public function build(): CustomerRemoveBillingAddressIdAction {
        return new CustomerRemoveBillingAddressIdActionModel(
            $this->action,
            $this->addressId
        );
    }
    
    public static function of(): CustomerRemoveBillingAddressIdActionBuilder
    {
        return new self();
    }
}
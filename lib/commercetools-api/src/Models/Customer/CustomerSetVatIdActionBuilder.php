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
 * @implements Builder<CustomerSetVatIdAction>
 */
final class CustomerSetVatIdActionBuilder implements Builder
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
    protected $vatId;

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
    final public function getVatId()
    {
       return $this->vatId;
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
    final public function withVatId(?string $vatId)
    {
        $this->vatId = $vatId;
        
        return $this;
    }
    
    public function build(): CustomerSetVatIdAction {
        return new CustomerSetVatIdActionModel(
            $this->action,
            $this->vatId
        );
    }
    
    public static function of(): CustomerSetVatIdActionBuilder
    {
        return new self();
    }
}
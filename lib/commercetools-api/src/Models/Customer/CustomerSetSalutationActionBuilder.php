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
 * @implements Builder<CustomerSetSalutationAction>
 */
final class CustomerSetSalutationActionBuilder implements Builder
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
    protected $salutation;

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
    final public function getSalutation()
    {
       return $this->salutation;
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
    final public function withSalutation(?string $salutation)
    {
        $this->salutation = $salutation;
        
        return $this;
    }
    
    public function build(): CustomerSetSalutationAction {
        return new CustomerSetSalutationActionModel(
            $this->action,
            $this->salutation
        );
    }
    
    public static function of(): CustomerSetSalutationActionBuilder
    {
        return new self();
    }
}
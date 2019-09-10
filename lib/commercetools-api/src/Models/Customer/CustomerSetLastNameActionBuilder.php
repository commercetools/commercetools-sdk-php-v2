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
 * @implements Builder<CustomerSetLastNameAction>
 */
final class CustomerSetLastNameActionBuilder implements Builder
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
    protected $lastName;

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
    final public function getLastName()
    {
       return $this->lastName;
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
    final public function withLastName(?string $lastName)
    {
        $this->lastName = $lastName;
        
        return $this;
    }
    
    public function build(): CustomerSetLastNameAction {
        return new CustomerSetLastNameActionModel(
            $this->action,
            $this->lastName
        );
    }
    
    public static function of(): CustomerSetLastNameActionBuilder
    {
        return new self();
    }
}
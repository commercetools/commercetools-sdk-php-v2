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
 * @implements Builder<CustomerSetFirstNameAction>
 */
final class CustomerSetFirstNameActionBuilder implements Builder
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
    protected $firstName;

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
    final public function getFirstName()
    {
       return $this->firstName;
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
    final public function withFirstName(?string $firstName)
    {
        $this->firstName = $firstName;
        
        return $this;
    }
    
    public function build(): CustomerSetFirstNameAction {
        return new CustomerSetFirstNameActionModel(
            $this->action,
            $this->firstName
        );
    }
    
    public static function of(): CustomerSetFirstNameActionBuilder
    {
        return new self();
    }
}
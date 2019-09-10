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
 * @implements Builder<CustomerSetMiddleNameAction>
 */
final class CustomerSetMiddleNameActionBuilder implements Builder
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
    protected $middleName;

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
    final public function getMiddleName()
    {
       return $this->middleName;
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
    final public function withMiddleName(?string $middleName)
    {
        $this->middleName = $middleName;
        
        return $this;
    }
    
    public function build(): CustomerSetMiddleNameAction {
        return new CustomerSetMiddleNameActionModel(
            $this->action,
            $this->middleName
        );
    }
    
    public static function of(): CustomerSetMiddleNameActionBuilder
    {
        return new self();
    }
}
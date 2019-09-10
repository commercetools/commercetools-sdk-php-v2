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
 * @implements Builder<CustomerSetCompanyNameAction>
 */
final class CustomerSetCompanyNameActionBuilder implements Builder
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
    protected $companyName;

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
    final public function getCompanyName()
    {
       return $this->companyName;
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
    final public function withCompanyName(?string $companyName)
    {
        $this->companyName = $companyName;
        
        return $this;
    }
    
    public function build(): CustomerSetCompanyNameAction {
        return new CustomerSetCompanyNameActionModel(
            $this->action,
            $this->companyName
        );
    }
    
    public static function of(): CustomerSetCompanyNameActionBuilder
    {
        return new self();
    }
}
<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<DiscountCodeSetMaxApplicationsPerCustomerAction>
 */
final class DiscountCodeSetMaxApplicationsPerCustomerActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?int
     */
    protected $maxApplicationsPerCustomer;

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
     * @return int|null
     */
    final public function getMaxApplicationsPerCustomer()
    {
       return $this->maxApplicationsPerCustomer;
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
    final public function withMaxApplicationsPerCustomer(?int $maxApplicationsPerCustomer)
    {
        $this->maxApplicationsPerCustomer = $maxApplicationsPerCustomer;
        
        return $this;
    }
    
    public function build(): DiscountCodeSetMaxApplicationsPerCustomerAction {
        return new DiscountCodeSetMaxApplicationsPerCustomerActionModel(
            $this->action,
            $this->maxApplicationsPerCustomer
        );
    }
    
    public static function of(): DiscountCodeSetMaxApplicationsPerCustomerActionBuilder
    {
        return new self();
    }
}
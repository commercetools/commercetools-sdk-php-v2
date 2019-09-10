<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<PaymentSetInterfaceIdAction>
 */
final class PaymentSetInterfaceIdActionBuilder implements Builder
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
    protected $interfaceId;

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
    final public function getInterfaceId()
    {
       return $this->interfaceId;
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
    final public function withInterfaceId(?string $interfaceId)
    {
        $this->interfaceId = $interfaceId;
        
        return $this;
    }
    
    public function build(): PaymentSetInterfaceIdAction {
        return new PaymentSetInterfaceIdActionModel(
            $this->action,
            $this->interfaceId
        );
    }
    
    public static function of(): PaymentSetInterfaceIdActionBuilder
    {
        return new self();
    }
}
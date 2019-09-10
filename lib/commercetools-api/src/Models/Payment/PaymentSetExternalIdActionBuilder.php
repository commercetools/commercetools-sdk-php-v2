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
 * @implements Builder<PaymentSetExternalIdAction>
 */
final class PaymentSetExternalIdActionBuilder implements Builder
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
    protected $externalId;

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
    final public function getExternalId()
    {
       return $this->externalId;
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
    final public function withExternalId(?string $externalId)
    {
        $this->externalId = $externalId;
        
        return $this;
    }
    
    public function build(): PaymentSetExternalIdAction {
        return new PaymentSetExternalIdActionModel(
            $this->action,
            $this->externalId
        );
    }
    
    public static function of(): PaymentSetExternalIdActionBuilder
    {
        return new self();
    }
}
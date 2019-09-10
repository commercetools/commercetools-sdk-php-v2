<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Order;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<OrderFromCartDraft>
 */
final class OrderFromCartDraftBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $orderNumber;
    
    /**
     * @var ?string
     */
    protected $id;
    
    /**
     * @var ?string
     */
    protected $paymentState;
    
    /**
     * @var ?int
     */
    protected $version;

    /**
     *
     * @return string|null
     */
    final public function getOrderNumber()
    {
       return $this->orderNumber;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getId()
    {
       return $this->id;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getPaymentState()
    {
       return $this->paymentState;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getVersion()
    {
       return $this->version;
    }
    /**
     * @return $this
     */
    final public function withOrderNumber(?string $orderNumber)
    {
        $this->orderNumber = $orderNumber;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withId(?string $id)
    {
        $this->id = $id;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withPaymentState(?string $paymentState)
    {
        $this->paymentState = $paymentState;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withVersion(?int $version)
    {
        $this->version = $version;
        
        return $this;
    }
    
    public function build(): OrderFromCartDraft {
        return new OrderFromCartDraftModel(
            $this->orderNumber,
            $this->id,
            $this->paymentState,
            $this->version
        );
    }
    
    public static function of(): OrderFromCartDraftBuilder
    {
        return new self();
    }
}
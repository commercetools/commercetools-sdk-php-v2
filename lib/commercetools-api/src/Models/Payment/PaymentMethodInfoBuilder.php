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
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;

/**
 * @implements Builder<PaymentMethodInfo>
 */
final class PaymentMethodInfoBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $method;
    
    /**
     * @var ?LocalizedStringBuilder|LocalizedString
     */
    protected $name;
    
    /**
     * @var ?string
     */
    protected $paymentInterface;

    /**
     *
     * @return string|null
     */
    final public function getMethod()
    {
       return $this->method;
    }
    
    /**
     *
     * @return LocalizedString|null
     */
    final public function getName()
    {
       return ($this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name);
    }
    
    /**
     *
     * @return string|null
     */
    final public function getPaymentInterface()
    {
       return $this->paymentInterface;
    }
    /**
     * @return $this
     */
    final public function withMethod(?string $method)
    {
        $this->method = $method;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withName(?LocalizedString $name)
    {
        $this->name = $name;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withPaymentInterface(?string $paymentInterface)
    {
        $this->paymentInterface = $paymentInterface;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withNameBuilder(?LocalizedStringBuilder $name)
    {
        $this->name = $name;
        
        return $this;
    }
    
    public function build(): PaymentMethodInfo {
        return new PaymentMethodInfoModel(
            $this->method,
            ($this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name),
            $this->paymentInterface
        );
    }
    
    public static function of(): PaymentMethodInfoBuilder
    {
        return new self();
    }
}
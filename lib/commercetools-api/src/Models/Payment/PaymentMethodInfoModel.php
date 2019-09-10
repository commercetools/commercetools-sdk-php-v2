<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;

final class PaymentMethodInfoModel extends JsonObjectModel implements PaymentMethodInfo
{
    
    public function __construct(
        string $method = null,
        LocalizedString $name = null,
        string $paymentInterface = null
    ) {
        $this->method = $method;
        $this->name = $name;
        $this->paymentInterface = $paymentInterface;
        
    }

    /**
     * @var ?string
     */
    protected $method;
    
    /**
     * @var ?LocalizedString
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
       if (is_null($this->method)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(PaymentMethodInfo::FIELD_METHOD);
           if (is_null($data)) {
               return null;
           }
           $this->method = (string)$data;
       }
       return $this->method;
    }
    
    /**
     *
     * @return LocalizedString|null
     */
    final public function getName()
    {
       if (is_null($this->name)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(PaymentMethodInfo::FIELD_NAME);
           if (is_null($data)) {
               return null;
           }
           
           $this->name = LocalizedStringModel::of($data);
       }
       return $this->name;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getPaymentInterface()
    {
       if (is_null($this->paymentInterface)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(PaymentMethodInfo::FIELD_PAYMENT_INTERFACE);
           if (is_null($data)) {
               return null;
           }
           $this->paymentInterface = (string)$data;
       }
       return $this->paymentInterface;
    }
    final public function setMethod(?string $method): void
    {
        $this->method = $method;
    }
    
    final public function setName(?LocalizedString $name): void
    {
        $this->name = $name;
    }
    
    final public function setPaymentInterface(?string $paymentInterface): void
    {
        $this->paymentInterface = $paymentInterface;
    }
    
}
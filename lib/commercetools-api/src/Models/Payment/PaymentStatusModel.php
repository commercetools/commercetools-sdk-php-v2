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

use Commercetools\Api\Models\State\StateReference;
use Commercetools\Api\Models\State\StateReferenceModel;

final class PaymentStatusModel extends JsonObjectModel implements PaymentStatus
{
    
    public function __construct(
        string $interfaceText = null,
        StateReference $state = null,
        string $interfaceCode = null
    ) {
        $this->interfaceText = $interfaceText;
        $this->state = $state;
        $this->interfaceCode = $interfaceCode;
        
    }

    /**
     * @var ?string
     */
    protected $interfaceText;
    
    /**
     * @var ?StateReference
     */
    protected $state;
    
    /**
     * @var ?string
     */
    protected $interfaceCode;

    /**
     *
     * @return string|null
     */
    final public function getInterfaceText()
    {
       if (is_null($this->interfaceText)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(PaymentStatus::FIELD_INTERFACE_TEXT);
           if (is_null($data)) {
               return null;
           }
           $this->interfaceText = (string)$data;
       }
       return $this->interfaceText;
    }
    
    /**
     *
     * @return StateReference|null
     */
    final public function getState()
    {
       if (is_null($this->state)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(PaymentStatus::FIELD_STATE);
           if (is_null($data)) {
               return null;
           }
           
           $this->state = StateReferenceModel::of($data);
       }
       return $this->state;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getInterfaceCode()
    {
       if (is_null($this->interfaceCode)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(PaymentStatus::FIELD_INTERFACE_CODE);
           if (is_null($data)) {
               return null;
           }
           $this->interfaceCode = (string)$data;
       }
       return $this->interfaceCode;
    }
    final public function setInterfaceText(?string $interfaceText): void
    {
        $this->interfaceText = $interfaceText;
    }
    
    final public function setState(?StateReference $state): void
    {
        $this->state = $state;
    }
    
    final public function setInterfaceCode(?string $interfaceCode): void
    {
        $this->interfaceCode = $interfaceCode;
    }
    
}
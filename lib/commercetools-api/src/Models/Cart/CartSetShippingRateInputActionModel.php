<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class CartSetShippingRateInputActionModel extends JsonObjectModel implements CartSetShippingRateInputAction
{
    const DISCRIMINATOR_VALUE = 'setShippingRateInput';
    public function __construct(
        string $action = null,
        ShippingRateInputDraft $shippingRateInput = null
    ) {
        $this->action = $action;
        $this->shippingRateInput = $shippingRateInput;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?ShippingRateInputDraft
     */
    protected $shippingRateInput;

    /**
     *
     * @return string|null
     */
    final public function getAction()
    {
       if (is_null($this->action)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CartUpdateAction::FIELD_ACTION);
           if (is_null($data)) {
               return null;
           }
           $this->action = (string)$data;
       }
       return $this->action;
    }
    
    /**
     *
     * @return ShippingRateInputDraft|null
     */
    final public function getShippingRateInput()
    {
       if (is_null($this->shippingRateInput)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(CartSetShippingRateInputAction::FIELD_SHIPPING_RATE_INPUT);
           if (is_null($data)) {
               return null;
           }
           $className = ShippingRateInputDraftModel::resolveDiscriminatorClass($data);
           $this->shippingRateInput = $className::of($data);
       }
       return $this->shippingRateInput;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setShippingRateInput(?ShippingRateInputDraft $shippingRateInput): void
    {
        $this->shippingRateInput = $shippingRateInput;
    }
    
}
<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Cart\ItemShippingDetailsDraft;
use Commercetools\Api\Models\Cart\ItemShippingDetailsDraftModel;

final class OrderSetLineItemShippingDetailsActionModel extends JsonObjectModel implements OrderSetLineItemShippingDetailsAction
{
    const DISCRIMINATOR_VALUE = 'setLineItemShippingDetails';
    public function __construct(
        string $action = null,
        ItemShippingDetailsDraft $shippingDetails = null,
        string $lineItemId = null
    ) {
        $this->action = $action;
        $this->shippingDetails = $shippingDetails;
        $this->lineItemId = $lineItemId;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?ItemShippingDetailsDraft
     */
    protected $shippingDetails;
    
    /**
     * @var ?string
     */
    protected $lineItemId;

    /**
     *
     * @return string|null
     */
    final public function getAction()
    {
       if (is_null($this->action)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(OrderUpdateAction::FIELD_ACTION);
           if (is_null($data)) {
               return null;
           }
           $this->action = (string)$data;
       }
       return $this->action;
    }
    
    /**
     *
     * @return ItemShippingDetailsDraft|null
     */
    final public function getShippingDetails()
    {
       if (is_null($this->shippingDetails)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(OrderSetLineItemShippingDetailsAction::FIELD_SHIPPING_DETAILS);
           if (is_null($data)) {
               return null;
           }
           
           $this->shippingDetails = ItemShippingDetailsDraftModel::of($data);
       }
       return $this->shippingDetails;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getLineItemId()
    {
       if (is_null($this->lineItemId)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(OrderSetLineItemShippingDetailsAction::FIELD_LINE_ITEM_ID);
           if (is_null($data)) {
               return null;
           }
           $this->lineItemId = (string)$data;
       }
       return $this->lineItemId;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setShippingDetails(?ItemShippingDetailsDraft $shippingDetails): void
    {
        $this->shippingDetails = $shippingDetails;
    }
    
    final public function setLineItemId(?string $lineItemId): void
    {
        $this->lineItemId = $lineItemId;
    }
    
}
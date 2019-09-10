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


final class CartSetLineItemTaxAmountActionModel extends JsonObjectModel implements CartSetLineItemTaxAmountAction
{
    const DISCRIMINATOR_VALUE = 'setLineItemTaxAmount';
    public function __construct(
        string $action = null,
        string $lineItemId = null,
        ExternalTaxAmountDraft $externalTaxAmount = null
    ) {
        $this->action = $action;
        $this->lineItemId = $lineItemId;
        $this->externalTaxAmount = $externalTaxAmount;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?string
     */
    protected $lineItemId;
    
    /**
     * @var ?ExternalTaxAmountDraft
     */
    protected $externalTaxAmount;

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
     * @return string|null
     */
    final public function getLineItemId()
    {
       if (is_null($this->lineItemId)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CartSetLineItemTaxAmountAction::FIELD_LINE_ITEM_ID);
           if (is_null($data)) {
               return null;
           }
           $this->lineItemId = (string)$data;
       }
       return $this->lineItemId;
    }
    
    /**
     *
     * @return ExternalTaxAmountDraft|null
     */
    final public function getExternalTaxAmount()
    {
       if (is_null($this->externalTaxAmount)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(CartSetLineItemTaxAmountAction::FIELD_EXTERNAL_TAX_AMOUNT);
           if (is_null($data)) {
               return null;
           }
           
           $this->externalTaxAmount = ExternalTaxAmountDraftModel::of($data);
       }
       return $this->externalTaxAmount;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setLineItemId(?string $lineItemId): void
    {
        $this->lineItemId = $lineItemId;
    }
    
    final public function setExternalTaxAmount(?ExternalTaxAmountDraft $externalTaxAmount): void
    {
        $this->externalTaxAmount = $externalTaxAmount;
    }
    
}
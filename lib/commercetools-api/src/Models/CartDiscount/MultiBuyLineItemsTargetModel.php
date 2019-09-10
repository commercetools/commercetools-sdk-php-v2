<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class MultiBuyLineItemsTargetModel extends JsonObjectModel implements MultiBuyLineItemsTarget
{
    const DISCRIMINATOR_VALUE = 'multiBuyLineItems';
    public function __construct(
        string $type = null,
        string $predicate = null,
        int $triggerQuantity = null,
        int $discountedQuantity = null,
        int $maxOccurrence = null,
        string $selectionMode = null
    ) {
        $this->type = $type;
        $this->predicate = $predicate;
        $this->triggerQuantity = $triggerQuantity;
        $this->discountedQuantity = $discountedQuantity;
        $this->maxOccurrence = $maxOccurrence;
        $this->selectionMode = $selectionMode;
        
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?string
     */
    protected $predicate;
    
    /**
     * @var ?int
     */
    protected $triggerQuantity;
    
    /**
     * @var ?int
     */
    protected $discountedQuantity;
    
    /**
     * @var ?int
     */
    protected $maxOccurrence;
    
    /**
     * @var ?string
     */
    protected $selectionMode;

    /**
     *
     * @return string|null
     */
    final public function getType()
    {
       if (is_null($this->type)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CartDiscountTarget::FIELD_TYPE);
           if (is_null($data)) {
               return null;
           }
           $this->type = (string)$data;
       }
       return $this->type;
    }
    
    /**
     * <p>A valid line item target predicate. The discount will be applied to line items that are matched by the predicate.</p>
     * @return string|null
     */
    final public function getPredicate()
    {
       if (is_null($this->predicate)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(MultiBuyLineItemsTarget::FIELD_PREDICATE);
           if (is_null($data)) {
               return null;
           }
           $this->predicate = (string)$data;
       }
       return $this->predicate;
    }
    
    /**
     * <p>Quantity of line items that need to be present in order to trigger an application of this discount.</p>
     * @return int|null
     */
    final public function getTriggerQuantity()
    {
       if (is_null($this->triggerQuantity)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(MultiBuyLineItemsTarget::FIELD_TRIGGER_QUANTITY);
           if (is_null($data)) {
               return null;
           }
           $this->triggerQuantity = (int)$data;
       }
       return $this->triggerQuantity;
    }
    
    /**
     * <p>Quantity of line items that are discounted per application of this discount.</p>
     * @return int|null
     */
    final public function getDiscountedQuantity()
    {
       if (is_null($this->discountedQuantity)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(MultiBuyLineItemsTarget::FIELD_DISCOUNTED_QUANTITY);
           if (is_null($data)) {
               return null;
           }
           $this->discountedQuantity = (int)$data;
       }
       return $this->discountedQuantity;
    }
    
    /**
     * <p>Maximum number of applications of this discount.</p>
     * @return int|null
     */
    final public function getMaxOccurrence()
    {
       if (is_null($this->maxOccurrence)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(MultiBuyLineItemsTarget::FIELD_MAX_OCCURRENCE);
           if (is_null($data)) {
               return null;
           }
           $this->maxOccurrence = (int)$data;
       }
       return $this->maxOccurrence;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getSelectionMode()
    {
       if (is_null($this->selectionMode)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(MultiBuyLineItemsTarget::FIELD_SELECTION_MODE);
           if (is_null($data)) {
               return null;
           }
           $this->selectionMode = (string)$data;
       }
       return $this->selectionMode;
    }
    final public function setType(?string $type): void
    {
        $this->type = $type;
    }
    
    final public function setPredicate(?string $predicate): void
    {
        $this->predicate = $predicate;
    }
    
    final public function setTriggerQuantity(?int $triggerQuantity): void
    {
        $this->triggerQuantity = $triggerQuantity;
    }
    
    final public function setDiscountedQuantity(?int $discountedQuantity): void
    {
        $this->discountedQuantity = $discountedQuantity;
    }
    
    final public function setMaxOccurrence(?int $maxOccurrence): void
    {
        $this->maxOccurrence = $maxOccurrence;
    }
    
    final public function setSelectionMode(?string $selectionMode): void
    {
        $this->selectionMode = $selectionMode;
    }
    
}
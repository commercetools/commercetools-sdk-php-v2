<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<MultiBuyLineItemsTarget>
 */
final class MultiBuyLineItemsTargetBuilder implements Builder
{
    public function __construct() {
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
       return $this->type;
    }
    
    /**
     * <p>A valid line item target predicate. The discount will be applied to line items that are matched by the predicate.</p>
     * @return string|null
     */
    final public function getPredicate()
    {
       return $this->predicate;
    }
    
    /**
     * <p>Quantity of line items that need to be present in order to trigger an application of this discount.</p>
     * @return int|null
     */
    final public function getTriggerQuantity()
    {
       return $this->triggerQuantity;
    }
    
    /**
     * <p>Quantity of line items that are discounted per application of this discount.</p>
     * @return int|null
     */
    final public function getDiscountedQuantity()
    {
       return $this->discountedQuantity;
    }
    
    /**
     * <p>Maximum number of applications of this discount.</p>
     * @return int|null
     */
    final public function getMaxOccurrence()
    {
       return $this->maxOccurrence;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getSelectionMode()
    {
       return $this->selectionMode;
    }
    /**
     * @return $this
     */
    final public function withType(?string $type)
    {
        $this->type = $type;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withPredicate(?string $predicate)
    {
        $this->predicate = $predicate;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTriggerQuantity(?int $triggerQuantity)
    {
        $this->triggerQuantity = $triggerQuantity;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withDiscountedQuantity(?int $discountedQuantity)
    {
        $this->discountedQuantity = $discountedQuantity;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withMaxOccurrence(?int $maxOccurrence)
    {
        $this->maxOccurrence = $maxOccurrence;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withSelectionMode(?string $selectionMode)
    {
        $this->selectionMode = $selectionMode;
        
        return $this;
    }
    
    public function build(): MultiBuyLineItemsTarget {
        return new MultiBuyLineItemsTargetModel(
            $this->type,
            $this->predicate,
            $this->triggerQuantity,
            $this->discountedQuantity,
            $this->maxOccurrence,
            $this->selectionMode
        );
    }
    
    public static function of(): MultiBuyLineItemsTargetBuilder
    {
        return new self();
    }
}
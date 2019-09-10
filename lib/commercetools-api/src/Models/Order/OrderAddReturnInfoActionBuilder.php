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
use DateTimeImmutable;

/**
 * @implements Builder<OrderAddReturnInfoAction>
 */
final class OrderAddReturnInfoActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?DateTimeImmutable
     */
    protected $returnDate;
    
    /**
     * @var ?string
     */
    protected $returnTrackingId;
    
    /**
     * @var ?ReturnItemDraftCollection
     */
    protected $items;

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
     * @return DateTimeImmutable|null
     */
    final public function getReturnDate()
    {
       return $this->returnDate;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getReturnTrackingId()
    {
       return $this->returnTrackingId;
    }
    
    /**
     *
     * @return ReturnItemDraftCollection|null
     */
    final public function getItems()
    {
       return $this->items;
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
    final public function withReturnDate(?DateTimeImmutable $returnDate)
    {
        $this->returnDate = $returnDate;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withReturnTrackingId(?string $returnTrackingId)
    {
        $this->returnTrackingId = $returnTrackingId;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withItems(?ReturnItemDraftCollection $items)
    {
        $this->items = $items;
        
        return $this;
    }
    
    public function build(): OrderAddReturnInfoAction {
        return new OrderAddReturnInfoActionModel(
            $this->action,
            $this->returnDate,
            $this->returnTrackingId,
            $this->items
        );
    }
    
    public static function of(): OrderAddReturnInfoActionBuilder
    {
        return new self();
    }
}
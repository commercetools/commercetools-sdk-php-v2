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
 * @implements Builder<ReturnInfo>
 */
final class ReturnInfoBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?DateTimeImmutable
     */
    protected $returnDate;
    
    /**
     * @var ?string
     */
    protected $returnTrackingId;
    
    /**
     * @var ?ReturnItemCollection
     */
    protected $items;

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
     * @return ReturnItemCollection|null
     */
    final public function getItems()
    {
       return $this->items;
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
    final public function withItems(?ReturnItemCollection $items)
    {
        $this->items = $items;
        
        return $this;
    }
    
    public function build(): ReturnInfo {
        return new ReturnInfoModel(
            $this->returnDate,
            $this->returnTrackingId,
            $this->items
        );
    }
    
    public static function of(): ReturnInfoBuilder
    {
        return new self();
    }
}
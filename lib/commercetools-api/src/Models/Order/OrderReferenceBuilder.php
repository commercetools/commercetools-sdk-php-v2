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
use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceBuilder;

/**
 * @implements Builder<OrderReference>
 */
final class OrderReferenceBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $typeId;
    
    /**
     * @var ?string
     */
    protected $id;
    
    /**
     * @var ?OrderBuilder|Order
     */
    protected $obj;

    /**
     *
     * @return string|null
     */
    final public function getTypeId()
    {
       return $this->typeId;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getId()
    {
       return $this->id;
    }
    
    /**
     *
     * @return Order|null
     */
    final public function getObj()
    {
       return ($this->obj instanceof OrderBuilder ? $this->obj->build() : $this->obj);
    }
    /**
     * @return $this
     */
    final public function withTypeId(?string $typeId)
    {
        $this->typeId = $typeId;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withId(?string $id)
    {
        $this->id = $id;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withObj(?Order $obj)
    {
        $this->obj = $obj;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withObjBuilder(?OrderBuilder $obj)
    {
        $this->obj = $obj;
        
        return $this;
    }
    
    public function build(): OrderReference {
        return new OrderReferenceModel(
            $this->typeId,
            $this->id,
            ($this->obj instanceof OrderBuilder ? $this->obj->build() : $this->obj)
        );
    }
    
    public static function of(): OrderReferenceBuilder
    {
        return new self();
    }
}
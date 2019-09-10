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
use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceBuilder;

/**
 * @implements Builder<CartDiscountReference>
 */
final class CartDiscountReferenceBuilder implements Builder
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
     * @var ?CartDiscountBuilder|CartDiscount
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
     * @return CartDiscount|null
     */
    final public function getObj()
    {
       return ($this->obj instanceof CartDiscountBuilder ? $this->obj->build() : $this->obj);
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
    final public function withObj(?CartDiscount $obj)
    {
        $this->obj = $obj;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withObjBuilder(?CartDiscountBuilder $obj)
    {
        $this->obj = $obj;
        
        return $this;
    }
    
    public function build(): CartDiscountReference {
        return new CartDiscountReferenceModel(
            $this->typeId,
            $this->id,
            ($this->obj instanceof CartDiscountBuilder ? $this->obj->build() : $this->obj)
        );
    }
    
    public static function of(): CartDiscountReferenceBuilder
    {
        return new self();
    }
}
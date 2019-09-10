<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\DiscountCode\DiscountCodeReference;
use Commercetools\Api\Models\DiscountCode\DiscountCodeReferenceBuilder;

/**
 * @implements Builder<OrderDiscountCodeAddedMessagePayload>
 */
final class OrderDiscountCodeAddedMessagePayloadBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?DiscountCodeReferenceBuilder|DiscountCodeReference
     */
    protected $discountCode;

    /**
     *
     * @return string|null
     */
    final public function getType()
    {
       return $this->type;
    }
    
    /**
     *
     * @return DiscountCodeReference|null
     */
    final public function getDiscountCode()
    {
       return ($this->discountCode instanceof DiscountCodeReferenceBuilder ? $this->discountCode->build() : $this->discountCode);
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
    final public function withDiscountCode(?DiscountCodeReference $discountCode)
    {
        $this->discountCode = $discountCode;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withDiscountCodeBuilder(?DiscountCodeReferenceBuilder $discountCode)
    {
        $this->discountCode = $discountCode;
        
        return $this;
    }
    
    public function build(): OrderDiscountCodeAddedMessagePayload {
        return new OrderDiscountCodeAddedMessagePayloadModel(
            $this->type,
            ($this->discountCode instanceof DiscountCodeReferenceBuilder ? $this->discountCode->build() : $this->discountCode)
        );
    }
    
    public static function of(): OrderDiscountCodeAddedMessagePayloadBuilder
    {
        return new self();
    }
}
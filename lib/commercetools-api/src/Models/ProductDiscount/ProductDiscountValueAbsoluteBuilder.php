<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Common\MoneyCollection;

/**
 * @implements Builder<ProductDiscountValueAbsolute>
 */
final class ProductDiscountValueAbsoluteBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?MoneyCollection
     */
    protected $money;

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
     * @return MoneyCollection|null
     */
    final public function getMoney()
    {
       return $this->money;
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
    final public function withMoney(?MoneyCollection $money)
    {
        $this->money = $money;
        
        return $this;
    }
    
    public function build(): ProductDiscountValueAbsolute {
        return new ProductDiscountValueAbsoluteModel(
            $this->type,
            $this->money
        );
    }
    
    public static function of(): ProductDiscountValueAbsoluteBuilder
    {
        return new self();
    }
}
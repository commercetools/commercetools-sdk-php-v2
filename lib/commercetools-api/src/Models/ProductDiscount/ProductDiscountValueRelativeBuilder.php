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

/**
 * @implements Builder<ProductDiscountValueRelative>
 */
final class ProductDiscountValueRelativeBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?int
     */
    protected $permyriad;

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
     * @return int|null
     */
    final public function getPermyriad()
    {
       return $this->permyriad;
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
    final public function withPermyriad(?int $permyriad)
    {
        $this->permyriad = $permyriad;
        
        return $this;
    }
    
    public function build(): ProductDiscountValueRelative {
        return new ProductDiscountValueRelativeModel(
            $this->type,
            $this->permyriad
        );
    }
    
    public static function of(): ProductDiscountValueRelativeBuilder
    {
        return new self();
    }
}
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
use DateTimeImmutable;

/**
 * @implements Builder<ProductDiscountSetValidFromAndUntilAction>
 */
final class ProductDiscountSetValidFromAndUntilActionBuilder implements Builder
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
    protected $validUntil;
    
    /**
     * @var ?DateTimeImmutable
     */
    protected $validFrom;

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
    final public function getValidUntil()
    {
       return $this->validUntil;
    }
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    final public function getValidFrom()
    {
       return $this->validFrom;
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
    final public function withValidUntil(?DateTimeImmutable $validUntil)
    {
        $this->validUntil = $validUntil;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withValidFrom(?DateTimeImmutable $validFrom)
    {
        $this->validFrom = $validFrom;
        
        return $this;
    }
    
    public function build(): ProductDiscountSetValidFromAndUntilAction {
        return new ProductDiscountSetValidFromAndUntilActionModel(
            $this->action,
            $this->validUntil,
            $this->validFrom
        );
    }
    
    public static function of(): ProductDiscountSetValidFromAndUntilActionBuilder
    {
        return new self();
    }
}
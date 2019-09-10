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
use DateTimeImmutable;

/**
 * @implements Builder<CartDiscountSetValidUntilAction>
 */
final class CartDiscountSetValidUntilActionBuilder implements Builder
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
    
    public function build(): CartDiscountSetValidUntilAction {
        return new CartDiscountSetValidUntilActionModel(
            $this->action,
            $this->validUntil
        );
    }
    
    public static function of(): CartDiscountSetValidUntilActionBuilder
    {
        return new self();
    }
}
<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Product;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Common\PriceDraft;
use Commercetools\Api\Models\Common\PriceDraftBuilder;

/**
 * @implements Builder<ProductChangePriceAction>
 */
final class ProductChangePriceActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?PriceDraftBuilder|PriceDraft
     */
    protected $price;
    
    /**
     * @var ?bool
     */
    protected $staged;
    
    /**
     * @var ?string
     */
    protected $priceId;

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
     * @return PriceDraft|null
     */
    final public function getPrice()
    {
       return ($this->price instanceof PriceDraftBuilder ? $this->price->build() : $this->price);
    }
    
    /**
     *
     * @return bool|null
     */
    final public function getStaged()
    {
       return $this->staged;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getPriceId()
    {
       return $this->priceId;
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
    final public function withPrice(?PriceDraft $price)
    {
        $this->price = $price;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withStaged(?bool $staged)
    {
        $this->staged = $staged;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withPriceId(?string $priceId)
    {
        $this->priceId = $priceId;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withPriceBuilder(?PriceDraftBuilder $price)
    {
        $this->price = $price;
        
        return $this;
    }
    
    public function build(): ProductChangePriceAction {
        return new ProductChangePriceActionModel(
            $this->action,
            ($this->price instanceof PriceDraftBuilder ? $this->price->build() : $this->price),
            $this->staged,
            $this->priceId
        );
    }
    
    public static function of(): ProductChangePriceActionBuilder
    {
        return new self();
    }
}
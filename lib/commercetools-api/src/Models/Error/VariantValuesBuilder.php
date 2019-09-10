<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Error;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Common\PriceDraftCollection;
use Commercetools\Api\Models\Product\AttributeCollection;

/**
 * @implements Builder<VariantValues>
 */
final class VariantValuesBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?AttributeCollection
     */
    protected $attributes;
    
    /**
     * @var ?PriceDraftCollection
     */
    protected $prices;
    
    /**
     * @var ?string
     */
    protected $sku;

    /**
     *
     * @return AttributeCollection|null
     */
    final public function getAttributes()
    {
       return $this->attributes;
    }
    
    /**
     *
     * @return PriceDraftCollection|null
     */
    final public function getPrices()
    {
       return $this->prices;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getSku()
    {
       return $this->sku;
    }
    /**
     * @return $this
     */
    final public function withAttributes(?AttributeCollection $attributes)
    {
        $this->attributes = $attributes;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withPrices(?PriceDraftCollection $prices)
    {
        $this->prices = $prices;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withSku(?string $sku)
    {
        $this->sku = $sku;
        
        return $this;
    }
    
    public function build(): VariantValues {
        return new VariantValuesModel(
            $this->attributes,
            $this->prices,
            $this->sku
        );
    }
    
    public static function of(): VariantValuesBuilder
    {
        return new self();
    }
}
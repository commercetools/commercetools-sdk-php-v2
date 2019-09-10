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

/**
 * @implements Builder<ProductPriceDiscountsSetMessagePayload>
 */
final class ProductPriceDiscountsSetMessagePayloadBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?ProductPriceDiscountsSetUpdatedPriceCollection
     */
    protected $updatedPrices;

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
     * @return ProductPriceDiscountsSetUpdatedPriceCollection|null
     */
    final public function getUpdatedPrices()
    {
       return $this->updatedPrices;
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
    final public function withUpdatedPrices(?ProductPriceDiscountsSetUpdatedPriceCollection $updatedPrices)
    {
        $this->updatedPrices = $updatedPrices;
        
        return $this;
    }
    
    public function build(): ProductPriceDiscountsSetMessagePayload {
        return new ProductPriceDiscountsSetMessagePayloadModel(
            $this->type,
            $this->updatedPrices
        );
    }
    
    public static function of(): ProductPriceDiscountsSetMessagePayloadBuilder
    {
        return new self();
    }
}
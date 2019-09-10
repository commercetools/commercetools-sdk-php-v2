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

/**
 * @implements Builder<ProductRemovePriceAction>
 */
final class ProductRemovePriceActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
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
    
    public function build(): ProductRemovePriceAction {
        return new ProductRemovePriceActionModel(
            $this->action,
            $this->staged,
            $this->priceId
        );
    }
    
    public static function of(): ProductRemovePriceActionBuilder
    {
        return new self();
    }
}
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
 * @implements Builder<ProductCatalogData>
 */
final class ProductCatalogDataBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?ProductDataBuilder|ProductData
     */
    protected $current;
    
    /**
     * @var ?ProductDataBuilder|ProductData
     */
    protected $staged;
    
    /**
     * @var ?bool
     */
    protected $published;
    
    /**
     * @var ?bool
     */
    protected $hasStagedChanges;

    /**
     *
     * @return ProductData|null
     */
    final public function getCurrent()
    {
       return ($this->current instanceof ProductDataBuilder ? $this->current->build() : $this->current);
    }
    
    /**
     *
     * @return ProductData|null
     */
    final public function getStaged()
    {
       return ($this->staged instanceof ProductDataBuilder ? $this->staged->build() : $this->staged);
    }
    
    /**
     *
     * @return bool|null
     */
    final public function getPublished()
    {
       return $this->published;
    }
    
    /**
     *
     * @return bool|null
     */
    final public function getHasStagedChanges()
    {
       return $this->hasStagedChanges;
    }
    /**
     * @return $this
     */
    final public function withCurrent(?ProductData $current)
    {
        $this->current = $current;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withStaged(?ProductData $staged)
    {
        $this->staged = $staged;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withPublished(?bool $published)
    {
        $this->published = $published;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withHasStagedChanges(?bool $hasStagedChanges)
    {
        $this->hasStagedChanges = $hasStagedChanges;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withCurrentBuilder(?ProductDataBuilder $current)
    {
        $this->current = $current;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withStagedBuilder(?ProductDataBuilder $staged)
    {
        $this->staged = $staged;
        
        return $this;
    }
    
    public function build(): ProductCatalogData {
        return new ProductCatalogDataModel(
            ($this->current instanceof ProductDataBuilder ? $this->current->build() : $this->current),
            ($this->staged instanceof ProductDataBuilder ? $this->staged->build() : $this->staged),
            $this->published,
            $this->hasStagedChanges
        );
    }
    
    public static function of(): ProductCatalogDataBuilder
    {
        return new self();
    }
}
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
 * @implements Builder<TermFacetResult>
 */
final class TermFacetResultBuilder implements Builder
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
    protected $other;
    
    /**
     * @var ?int
     */
    protected $total;
    
    /**
     * @var ?FacetResultTermCollection
     */
    protected $terms;
    
    /**
     * @var ?string
     */
    protected $dataType;
    
    /**
     * @var ?int
     */
    protected $missing;

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
    final public function getOther()
    {
       return $this->other;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getTotal()
    {
       return $this->total;
    }
    
    /**
     *
     * @return FacetResultTermCollection|null
     */
    final public function getTerms()
    {
       return $this->terms;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getDataType()
    {
       return $this->dataType;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getMissing()
    {
       return $this->missing;
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
    final public function withOther(?int $other)
    {
        $this->other = $other;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTotal(?int $total)
    {
        $this->total = $total;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTerms(?FacetResultTermCollection $terms)
    {
        $this->terms = $terms;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withDataType(?string $dataType)
    {
        $this->dataType = $dataType;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withMissing(?int $missing)
    {
        $this->missing = $missing;
        
        return $this;
    }
    
    public function build(): TermFacetResult {
        return new TermFacetResultModel(
            $this->type,
            $this->other,
            $this->total,
            $this->terms,
            $this->dataType,
            $this->missing
        );
    }
    
    public static function of(): TermFacetResultBuilder
    {
        return new self();
    }
}
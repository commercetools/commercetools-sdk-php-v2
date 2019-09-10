<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use DateTimeImmutable;

/**
 * @implements Builder<OrderEditApplied>
 */
final class OrderEditAppliedBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?OrderExcerptBuilder|OrderExcerpt
     */
    protected $excerptAfterEdit;
    
    /**
     * @var ?OrderExcerptBuilder|OrderExcerpt
     */
    protected $excerptBeforeEdit;
    
    /**
     * @var ?DateTimeImmutable
     */
    protected $appliedAt;

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
     * @return OrderExcerpt|null
     */
    final public function getExcerptAfterEdit()
    {
       return ($this->excerptAfterEdit instanceof OrderExcerptBuilder ? $this->excerptAfterEdit->build() : $this->excerptAfterEdit);
    }
    
    /**
     *
     * @return OrderExcerpt|null
     */
    final public function getExcerptBeforeEdit()
    {
       return ($this->excerptBeforeEdit instanceof OrderExcerptBuilder ? $this->excerptBeforeEdit->build() : $this->excerptBeforeEdit);
    }
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    final public function getAppliedAt()
    {
       return $this->appliedAt;
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
    final public function withExcerptAfterEdit(?OrderExcerpt $excerptAfterEdit)
    {
        $this->excerptAfterEdit = $excerptAfterEdit;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withExcerptBeforeEdit(?OrderExcerpt $excerptBeforeEdit)
    {
        $this->excerptBeforeEdit = $excerptBeforeEdit;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withAppliedAt(?DateTimeImmutable $appliedAt)
    {
        $this->appliedAt = $appliedAt;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withExcerptAfterEditBuilder(?OrderExcerptBuilder $excerptAfterEdit)
    {
        $this->excerptAfterEdit = $excerptAfterEdit;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withExcerptBeforeEditBuilder(?OrderExcerptBuilder $excerptBeforeEdit)
    {
        $this->excerptBeforeEdit = $excerptBeforeEdit;
        
        return $this;
    }
    
    public function build(): OrderEditApplied {
        return new OrderEditAppliedModel(
            $this->type,
            ($this->excerptAfterEdit instanceof OrderExcerptBuilder ? $this->excerptAfterEdit->build() : $this->excerptAfterEdit),
            ($this->excerptBeforeEdit instanceof OrderExcerptBuilder ? $this->excerptBeforeEdit->build() : $this->excerptBeforeEdit),
            $this->appliedAt
        );
    }
    
    public static function of(): OrderEditAppliedBuilder
    {
        return new self();
    }
}
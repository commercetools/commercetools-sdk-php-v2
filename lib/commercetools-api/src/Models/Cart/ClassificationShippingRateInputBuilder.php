<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;

/**
 * @implements Builder<ClassificationShippingRateInput>
 */
final class ClassificationShippingRateInputBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?LocalizedStringBuilder|LocalizedString
     */
    protected $label;
    
    /**
     * @var ?string
     */
    protected $key;

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
     * @return LocalizedString|null
     */
    final public function getLabel()
    {
       return ($this->label instanceof LocalizedStringBuilder ? $this->label->build() : $this->label);
    }
    
    /**
     *
     * @return string|null
     */
    final public function getKey()
    {
       return $this->key;
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
    final public function withLabel(?LocalizedString $label)
    {
        $this->label = $label;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withKey(?string $key)
    {
        $this->key = $key;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withLabelBuilder(?LocalizedStringBuilder $label)
    {
        $this->label = $label;
        
        return $this;
    }
    
    public function build(): ClassificationShippingRateInput {
        return new ClassificationShippingRateInputModel(
            $this->type,
            ($this->label instanceof LocalizedStringBuilder ? $this->label->build() : $this->label),
            $this->key
        );
    }
    
    public static function of(): ClassificationShippingRateInputBuilder
    {
        return new self();
    }
}
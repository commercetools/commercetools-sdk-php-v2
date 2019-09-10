<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Type;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;

/**
 * @implements Builder<CustomFieldLocalizedEnumValue>
 */
final class CustomFieldLocalizedEnumValueBuilder implements Builder
{
    public function __construct() {
    }

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
    
    public function build(): CustomFieldLocalizedEnumValue {
        return new CustomFieldLocalizedEnumValueModel(
            ($this->label instanceof LocalizedStringBuilder ? $this->label->build() : $this->label),
            $this->key
        );
    }
    
    public static function of(): CustomFieldLocalizedEnumValueBuilder
    {
        return new self();
    }
}
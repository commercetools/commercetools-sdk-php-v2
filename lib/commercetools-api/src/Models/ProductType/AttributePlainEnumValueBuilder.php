<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<AttributePlainEnumValue>
 */
final class AttributePlainEnumValueBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
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
    final public function getLabel()
    {
       return $this->label;
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
    final public function withLabel(?string $label)
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
    
    public function build(): AttributePlainEnumValue {
        return new AttributePlainEnumValueModel(
            $this->label,
            $this->key
        );
    }
    
    public static function of(): AttributePlainEnumValueBuilder
    {
        return new self();
    }
}
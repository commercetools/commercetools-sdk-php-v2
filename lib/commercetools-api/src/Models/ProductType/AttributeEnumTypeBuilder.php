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
 * @implements Builder<AttributeEnumType>
 */
final class AttributeEnumTypeBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $name;
    
    /**
     * @var ?AttributePlainEnumValueCollection
     */
    protected $values;

    /**
     *
     * @return string|null
     */
    final public function getName()
    {
       return $this->name;
    }
    
    /**
     *
     * @return AttributePlainEnumValueCollection|null
     */
    final public function getValues()
    {
       return $this->values;
    }
    /**
     * @return $this
     */
    final public function withName(?string $name)
    {
        $this->name = $name;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withValues(?AttributePlainEnumValueCollection $values)
    {
        $this->values = $values;
        
        return $this;
    }
    
    public function build(): AttributeEnumType {
        return new AttributeEnumTypeModel(
            $this->name,
            $this->values
        );
    }
    
    public static function of(): AttributeEnumTypeBuilder
    {
        return new self();
    }
}
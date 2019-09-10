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

/**
 * @implements Builder<CustomFieldLocalizedEnumType>
 */
final class CustomFieldLocalizedEnumTypeBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $name;
    
    /**
     * @var ?CustomFieldLocalizedEnumValueCollection
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
     * @return CustomFieldLocalizedEnumValueCollection|null
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
    final public function withValues(?CustomFieldLocalizedEnumValueCollection $values)
    {
        $this->values = $values;
        
        return $this;
    }
    
    public function build(): CustomFieldLocalizedEnumType {
        return new CustomFieldLocalizedEnumTypeModel(
            $this->name,
            $this->values
        );
    }
    
    public static function of(): CustomFieldLocalizedEnumTypeBuilder
    {
        return new self();
    }
}
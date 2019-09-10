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
 * @implements Builder<AttributeNumberType>
 */
final class AttributeNumberTypeBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $name;

    /**
     *
     * @return string|null
     */
    final public function getName()
    {
       return $this->name;
    }
    /**
     * @return $this
     */
    final public function withName(?string $name)
    {
        $this->name = $name;
        
        return $this;
    }
    
    public function build(): AttributeNumberType {
        return new AttributeNumberTypeModel(
            $this->name
        );
    }
    
    public static function of(): AttributeNumberTypeBuilder
    {
        return new self();
    }
}
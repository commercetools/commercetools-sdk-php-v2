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
 * @implements Builder<CustomFieldTimeType>
 */
final class CustomFieldTimeTypeBuilder implements Builder
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
    
    public function build(): CustomFieldTimeType {
        return new CustomFieldTimeTypeModel(
            $this->name
        );
    }
    
    public static function of(): CustomFieldTimeTypeBuilder
    {
        return new self();
    }
}
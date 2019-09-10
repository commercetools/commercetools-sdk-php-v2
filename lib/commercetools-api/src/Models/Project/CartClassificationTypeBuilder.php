<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Project;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Type\CustomFieldLocalizedEnumValueCollection;

/**
 * @implements Builder<CartClassificationType>
 */
final class CartClassificationTypeBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?CustomFieldLocalizedEnumValueCollection
     */
    protected $values;

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
     * @return CustomFieldLocalizedEnumValueCollection|null
     */
    final public function getValues()
    {
       return $this->values;
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
    final public function withValues(?CustomFieldLocalizedEnumValueCollection $values)
    {
        $this->values = $values;
        
        return $this;
    }
    
    public function build(): CartClassificationType {
        return new CartClassificationTypeModel(
            $this->type,
            $this->values
        );
    }
    
    public static function of(): CartClassificationTypeBuilder
    {
        return new self();
    }
}
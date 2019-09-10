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
 * @implements Builder<AttributeReferenceType>
 */
final class AttributeReferenceTypeBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $name;
    
    /**
     * @var ?string
     */
    protected $referenceTypeId;

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
     * @return string|null
     */
    final public function getReferenceTypeId()
    {
       return $this->referenceTypeId;
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
    final public function withReferenceTypeId(?string $referenceTypeId)
    {
        $this->referenceTypeId = $referenceTypeId;
        
        return $this;
    }
    
    public function build(): AttributeReferenceType {
        return new AttributeReferenceTypeModel(
            $this->name,
            $this->referenceTypeId
        );
    }
    
    public static function of(): AttributeReferenceTypeBuilder
    {
        return new self();
    }
}
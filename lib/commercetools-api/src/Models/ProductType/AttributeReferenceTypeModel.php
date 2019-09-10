<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class AttributeReferenceTypeModel extends JsonObjectModel implements AttributeReferenceType
{
    const DISCRIMINATOR_VALUE = 'reference';
    public function __construct(
        string $name = null,
        string $referenceTypeId = null
    ) {
        $this->name = $name;
        $this->referenceTypeId = $referenceTypeId;
        
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
       if (is_null($this->name)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(AttributeType::FIELD_NAME);
           if (is_null($data)) {
               return null;
           }
           $this->name = (string)$data;
       }
       return $this->name;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getReferenceTypeId()
    {
       if (is_null($this->referenceTypeId)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(AttributeReferenceType::FIELD_REFERENCE_TYPE_ID);
           if (is_null($data)) {
               return null;
           }
           $this->referenceTypeId = (string)$data;
       }
       return $this->referenceTypeId;
    }
    final public function setName(?string $name): void
    {
        $this->name = $name;
    }
    
    final public function setReferenceTypeId(?string $referenceTypeId): void
    {
        $this->referenceTypeId = $referenceTypeId;
    }
    
}
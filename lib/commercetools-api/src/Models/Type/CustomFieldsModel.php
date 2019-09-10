<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Type;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class CustomFieldsModel extends JsonObjectModel implements CustomFields
{
    
    public function __construct(
        FieldContainer $fields = null,
        TypeReference $type = null
    ) {
        $this->fields = $fields;
        $this->type = $type;
        
    }

    /**
     * @var ?FieldContainer
     */
    protected $fields;
    
    /**
     * @var ?TypeReference
     */
    protected $type;

    /**
     *
     * @return FieldContainer|null
     */
    final public function getFields()
    {
       if (is_null($this->fields)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(CustomFields::FIELD_FIELDS);
           if (is_null($data)) {
               return null;
           }
           
           $this->fields = FieldContainerModel::of($data);
       }
       return $this->fields;
    }
    
    /**
     *
     * @return TypeReference|null
     */
    final public function getType()
    {
       if (is_null($this->type)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(CustomFields::FIELD_TYPE);
           if (is_null($data)) {
               return null;
           }
           
           $this->type = TypeReferenceModel::of($data);
       }
       return $this->type;
    }
    final public function setFields(?FieldContainer $fields): void
    {
        $this->fields = $fields;
    }
    
    final public function setType(?TypeReference $type): void
    {
        $this->type = $type;
    }
    
}
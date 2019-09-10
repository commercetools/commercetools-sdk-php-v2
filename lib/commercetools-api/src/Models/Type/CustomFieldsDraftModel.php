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


final class CustomFieldsDraftModel extends JsonObjectModel implements CustomFieldsDraft
{
    
    public function __construct(
        FieldContainer $fields = null,
        TypeResourceIdentifier $type = null
    ) {
        $this->fields = $fields;
        $this->type = $type;
        
    }

    /**
     * @var ?FieldContainer
     */
    protected $fields;
    
    /**
     * @var ?TypeResourceIdentifier
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
           $data = $this->raw(CustomFieldsDraft::FIELD_FIELDS);
           if (is_null($data)) {
               return null;
           }
           
           $this->fields = FieldContainerModel::of($data);
       }
       return $this->fields;
    }
    
    /**
     *
     * @return TypeResourceIdentifier|null
     */
    final public function getType()
    {
       if (is_null($this->type)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(CustomFieldsDraft::FIELD_TYPE);
           if (is_null($data)) {
               return null;
           }
           
           $this->type = TypeResourceIdentifierModel::of($data);
       }
       return $this->type;
    }
    final public function setFields(?FieldContainer $fields): void
    {
        $this->fields = $fields;
    }
    
    final public function setType(?TypeResourceIdentifier $type): void
    {
        $this->type = $type;
    }
    
}
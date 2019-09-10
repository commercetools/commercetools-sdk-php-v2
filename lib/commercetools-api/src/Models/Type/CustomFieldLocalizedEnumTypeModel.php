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


final class CustomFieldLocalizedEnumTypeModel extends JsonObjectModel implements CustomFieldLocalizedEnumType
{
    const DISCRIMINATOR_VALUE = 'LocalizedEnum';
    public function __construct(
        string $name = null,
        CustomFieldLocalizedEnumValueCollection $values = null
    ) {
        $this->name = $name;
        $this->values = $values;
        
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
       if (is_null($this->name)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(FieldType::FIELD_NAME);
           if (is_null($data)) {
               return null;
           }
           $this->name = (string)$data;
       }
       return $this->name;
    }
    
    /**
     *
     * @return CustomFieldLocalizedEnumValueCollection|null
     */
    final public function getValues()
    {
       if (is_null($this->values)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(CustomFieldLocalizedEnumType::FIELD_VALUES);
           if (is_null($data)) {
               return null;
           }
           $this->values = CustomFieldLocalizedEnumValueCollection::fromArray($data);
       }
       return $this->values;
    }
    final public function setName(?string $name): void
    {
        $this->name = $name;
    }
    
    final public function setValues(?CustomFieldLocalizedEnumValueCollection $values): void
    {
        $this->values = $values;
    }
    
}
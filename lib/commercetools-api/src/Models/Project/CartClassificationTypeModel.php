<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Project;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Type\CustomFieldLocalizedEnumValueCollection;

final class CartClassificationTypeModel extends JsonObjectModel implements CartClassificationType
{
    const DISCRIMINATOR_VALUE = 'CartClassification';
    public function __construct(
        string $type = null,
        CustomFieldLocalizedEnumValueCollection $values = null
    ) {
        $this->type = $type;
        $this->values = $values;
        
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
       if (is_null($this->type)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ShippingRateInputType::FIELD_TYPE);
           if (is_null($data)) {
               return null;
           }
           $this->type = (string)$data;
       }
       return $this->type;
    }
    
    /**
     *
     * @return CustomFieldLocalizedEnumValueCollection|null
     */
    final public function getValues()
    {
       if (is_null($this->values)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(CartClassificationType::FIELD_VALUES);
           if (is_null($data)) {
               return null;
           }
           $this->values = CustomFieldLocalizedEnumValueCollection::fromArray($data);
       }
       return $this->values;
    }
    final public function setType(?string $type): void
    {
        $this->type = $type;
    }
    
    final public function setValues(?CustomFieldLocalizedEnumValueCollection $values): void
    {
        $this->values = $values;
    }
    
}
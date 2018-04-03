<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Project;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Project\ShippingRateInputTypeModel;

use Commercetools\Types\Type\CustomFieldLocalizedEnumValue;
use Commercetools\Types\Type\CustomFieldLocalizedEnumValueCollection;

class CartClassificationTypeModel extends ShippingRateInputTypeModel implements CartClassificationType {
    const DISCRIMINATOR_VALUE = 'CartClassification';

    /**
     * @var CustomFieldLocalizedEnumValueCollection
     */
    protected $values;

    /**
     * @return CustomFieldLocalizedEnumValueCollection
     */
    public function getValues()
    {
        if (is_null($this->values)) {
            $value = $this->raw(CartClassificationType::FIELD_VALUES);
            if (is_null($value)) {
                return $this->mapData(CustomFieldLocalizedEnumValueCollection::class, null);
            }
            $value = $this->mapData(CustomFieldLocalizedEnumValueCollection::class, $value);
            $this->values = $value;
        }
        return $this->values;
    }

    /**
     * @param CustomFieldLocalizedEnumValueCollection $values
     * @return $this
     */
    public function setValues(CustomFieldLocalizedEnumValueCollection $values)
    {
        $this->values = $values;

        return $this;
    }

}

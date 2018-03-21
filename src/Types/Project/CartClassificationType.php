<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Project;

use Commercetools\Types\Type\CustomFieldLocalizedEnumValue;
use Commercetools\Types\Type\CustomFieldLocalizedEnumValueCollection;

interface CartClassificationType extends ShippingRateInputType {
    const FIELD_VALUES = 'values';

    /**
     * @return CustomFieldLocalizedEnumValueCollection
     */
    public function getValues();

    /**
     * @param CustomFieldLocalizedEnumValueCollection $values
     * @return $this
     */
    public function setValues(CustomFieldLocalizedEnumValueCollection $values);

}

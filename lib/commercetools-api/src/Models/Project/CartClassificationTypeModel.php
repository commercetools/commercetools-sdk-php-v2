<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Api\Models\Type\CustomFieldLocalizedEnumValueCollection;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class CartClassificationTypeModel extends JsonObjectModel implements CartClassificationType
{
    const DISCRIMINATOR_VALUE = 'CartClassification';

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?CustomFieldLocalizedEnumValueCollection
     */
    protected $values;

    public function __construct(
        CustomFieldLocalizedEnumValueCollection $values = null
    ) {
        $this->values = $values;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ShippingRateInputType::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * @return null|CustomFieldLocalizedEnumValueCollection
     */
    public function getValues()
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

    public function setValues(?CustomFieldLocalizedEnumValueCollection $values): void
    {
        $this->values = $values;
    }
}

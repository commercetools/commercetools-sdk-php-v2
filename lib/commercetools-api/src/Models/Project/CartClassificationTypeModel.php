<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Api\Models\Type\CustomFieldLocalizedEnumValueCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class CartClassificationTypeModel extends JsonObjectModel implements CartClassificationType
{
    public const DISCRIMINATOR_VALUE = 'CartClassification';
    /**

     * @var ?string
     */
    protected $type;

    /**

     * @var ?CustomFieldLocalizedEnumValueCollection
     */
    protected $values;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?CustomFieldLocalizedEnumValueCollection $values = null
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
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>The classification items that can be used for specifiying any <a href="ctp:api:type:ShippingRatePriceTier">ShippingRatePriceTier</a>.</p>
     *

     * @return null|CustomFieldLocalizedEnumValueCollection
     */
    public function getValues()
    {
        if (is_null($this->values)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_VALUES);
            if (is_null($data)) {
                return null;
            }
            $this->values = CustomFieldLocalizedEnumValueCollection::fromArray($data);
        }

        return $this->values;
    }


    /**
     * @param ?CustomFieldLocalizedEnumValueCollection $values
     */
    public function setValues(?CustomFieldLocalizedEnumValueCollection $values): void
    {
        $this->values = $values;
    }
}

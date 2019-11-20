<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class ProductTypeChangeLocalizedEnumValueOrderActionModel extends JsonObjectModel implements ProductTypeChangeLocalizedEnumValueOrderAction
{
    const DISCRIMINATOR_VALUE = 'changeLocalizedEnumValueOrder';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?AttributeLocalizedEnumValueCollection
     */
    protected $values;

    /**
     * @var ?string
     */
    protected $attributeName;

    public function __construct(
        AttributeLocalizedEnumValueCollection $values = null,
        string $attributeName = null
    ) {
        $this->values = $values;
        $this->attributeName = $attributeName;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProductTypeUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|AttributeLocalizedEnumValueCollection
     */
    public function getValues()
    {
        if (is_null($this->values)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(ProductTypeChangeLocalizedEnumValueOrderAction::FIELD_VALUES);
            if (is_null($data)) {
                return null;
            }
            $this->values = AttributeLocalizedEnumValueCollection::fromArray($data);
        }

        return $this->values;
    }

    /**
     * @return null|string
     */
    public function getAttributeName()
    {
        if (is_null($this->attributeName)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProductTypeChangeLocalizedEnumValueOrderAction::FIELD_ATTRIBUTE_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->attributeName = (string) $data;
        }

        return $this->attributeName;
    }

    public function setValues(?AttributeLocalizedEnumValueCollection $values): void
    {
        $this->values = $values;
    }

    public function setAttributeName(?string $attributeName): void
    {
        $this->attributeName = $attributeName;
    }
}

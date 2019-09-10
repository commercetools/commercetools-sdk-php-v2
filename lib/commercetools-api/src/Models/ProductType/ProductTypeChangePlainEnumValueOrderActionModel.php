<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class ProductTypeChangePlainEnumValueOrderActionModel extends JsonObjectModel implements ProductTypeChangePlainEnumValueOrderAction
{
    const DISCRIMINATOR_VALUE = 'changePlainEnumValueOrder';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?AttributePlainEnumValueCollection
     */
    protected $values;

    /**
     * @var ?string
     */
    protected $attributeName;

    public function __construct(
        string $action = null,
        AttributePlainEnumValueCollection $values = null,
        string $attributeName = null
    ) {
        $this->action = $action;
        $this->values = $values;
        $this->attributeName = $attributeName;
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
     * @return null|AttributePlainEnumValueCollection
     */
    public function getValues()
    {
        if (is_null($this->values)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(ProductTypeChangePlainEnumValueOrderAction::FIELD_VALUES);
            if (is_null($data)) {
                return null;
            }
            $this->values = AttributePlainEnumValueCollection::fromArray($data);
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
            $data = $this->raw(ProductTypeChangePlainEnumValueOrderAction::FIELD_ATTRIBUTE_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->attributeName = (string) $data;
        }

        return $this->attributeName;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setValues(?AttributePlainEnumValueCollection $values): void
    {
        $this->values = $values;
    }

    public function setAttributeName(?string $attributeName): void
    {
        $this->attributeName = $attributeName;
    }
}

<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

final class ProductTypeChangePlainEnumValueLabelActionModel extends JsonObjectModel implements ProductTypeChangePlainEnumValueLabelAction
{
    public const DISCRIMINATOR_VALUE = 'changePlainEnumValueLabel';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $attributeName;

    /**
     * @var ?AttributePlainEnumValue
     */
    protected $newValue;


    public function __construct(
        string $attributeName = null,
        AttributePlainEnumValue $newValue = null
    ) {
        $this->attributeName = $attributeName;
        $this->newValue = $newValue;
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
     * @return null|string
     */
    public function getAttributeName()
    {
        if (is_null($this->attributeName)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProductTypeChangePlainEnumValueLabelAction::FIELD_ATTRIBUTE_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->attributeName = (string) $data;
        }

        return $this->attributeName;
    }

    /**
     * @return null|AttributePlainEnumValue
     */
    public function getNewValue()
    {
        if (is_null($this->newValue)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ProductTypeChangePlainEnumValueLabelAction::FIELD_NEW_VALUE);
            if (is_null($data)) {
                return null;
            }

            $this->newValue = AttributePlainEnumValueModel::of($data);
        }

        return $this->newValue;
    }

    public function setAttributeName(?string $attributeName): void
    {
        $this->attributeName = $attributeName;
    }

    public function setNewValue(?AttributePlainEnumValue $newValue): void
    {
        $this->newValue = $newValue;
    }
}

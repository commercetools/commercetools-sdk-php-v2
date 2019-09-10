<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\JsonObjectModel;

final class AttributePlainEnumValueModel extends JsonObjectModel implements AttributePlainEnumValue
{
    /**
     * @var ?string
     */
    protected $label;

    /**
     * @var ?string
     */
    protected $key;

    public function __construct(
        string $label = null,
        string $key = null
    ) {
        $this->label = $label;
        $this->key = $key;
    }

    /**
     * @return null|string
     */
    public function getLabel()
    {
        if (is_null($this->label)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(AttributePlainEnumValue::FIELD_LABEL);
            if (is_null($data)) {
                return null;
            }
            $this->label = (string) $data;
        }

        return $this->label;
    }

    /**
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(AttributePlainEnumValue::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    public function setLabel(?string $label): void
    {
        $this->label = $label;
    }

    public function setKey(?string $key): void
    {
        $this->key = $key;
    }
}

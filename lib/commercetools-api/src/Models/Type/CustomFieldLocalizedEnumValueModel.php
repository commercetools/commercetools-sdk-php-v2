<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class CustomFieldLocalizedEnumValueModel extends JsonObjectModel implements CustomFieldLocalizedEnumValue
{
    /**
     * @var ?string
     */
    protected $key;

    /**
     * @var ?LocalizedString
     */
    protected $label;

    public function __construct(
        string $key = null,
        LocalizedString $label = null
    ) {
        $this->key = $key;
        $this->label = $label;
    }

    /**
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CustomFieldLocalizedEnumValue::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    /**
     * @return null|LocalizedString
     */
    public function getLabel()
    {
        if (is_null($this->label)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(CustomFieldLocalizedEnumValue::FIELD_LABEL);
            if (is_null($data)) {
                return null;
            }

            $this->label = LocalizedStringModel::of($data);
        }

        return $this->label;
    }

    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    public function setLabel(?LocalizedString $label): void
    {
        $this->label = $label;
    }
}

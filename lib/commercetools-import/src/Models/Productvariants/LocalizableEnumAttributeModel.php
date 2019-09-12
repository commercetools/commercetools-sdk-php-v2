<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productvariants;

use Commercetools\Base\JsonObjectModel;
use Commercetools\Import\Models\Common\LocalizedEnumValue;
use Commercetools\Import\Models\Common\LocalizedEnumValueModel;
use stdClass;

final class LocalizableEnumAttributeModel extends JsonObjectModel implements LocalizableEnumAttribute
{
    const DISCRIMINATOR_VALUE = 'lenum';

    /**
     * @var ?string
     */
    protected $name;

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?LocalizedEnumValue
     */
    protected $value;

    public function __construct(
        string $name = null,
        string $type = null,
        LocalizedEnumValue $value = null
    ) {
        $this->name = $name;
        $this->type = $type;
        $this->value = $value;
    }

    /**
     * <p>For now we reuse this type in two different context. And that's why the name is required when used in the full import.
     * And why the name isn't required when used in patch.</p>.
     *
     * @return null|string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Attribute::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->name = (string) $data;
        }

        return $this->name;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Attribute::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * @return null|LocalizedEnumValue
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(LocalizableEnumAttribute::FIELD_VALUE);
            if (is_null($data)) {
                return null;
            }

            $this->value = LocalizedEnumValueModel::of($data);
        }

        return $this->value;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    public function setValue(?LocalizedEnumValue $value): void
    {
        $this->value = $value;
    }
}

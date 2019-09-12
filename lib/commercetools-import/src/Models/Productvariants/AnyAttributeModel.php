<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productvariants;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class AnyAttributeModel extends JsonObjectModel implements AnyAttribute
{
    const DISCRIMINATOR_VALUE = 'any';

    /**
     * @var ?string
     */
    protected $name;

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?JsonObject
     */
    protected $value;

    public function __construct(
        string $name = null,
        string $type = null,
        JsonObject $value = null
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
     * @return null|JsonObject
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            /** @psalm-var ?stdClass $data */
            $data = $this->raw(AnyAttribute::FIELD_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->value = JsonObjectModel::of($data);
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

    public function setValue(?JsonObject $value): void
    {
        $this->value = $value;
    }
}

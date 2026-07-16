<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\McpServer;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ParameterOverrideModel extends JsonObjectModel implements ParameterOverride
{
    /**
     *
     * @var ?string
     */
    protected $name;

    /**
     *
     * @var ?string
     */
    protected $description;

    /**
     *
     * @var ?mixed
     */
    protected $const;

    /**
     *
     * @var ?mixed
     */
    protected $default;

    /**
     *
     * @var ?array
     */
    protected $allowedTypes;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $name = null,
        ?string $description = null,
        $const = null,
        $default = null,
        ?array $allowedTypes = null
    ) {
        $this->name = $name;
        $this->description = $description;
        $this->const = $const;
        $this->default = $default;
        $this->allowedTypes = $allowedTypes;
    }

    /**
     * <p>Name of the parameter in the tool's input schema to override.</p>
     *
     *
     * @return null|string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->name = (string) $data;
        }

        return $this->name;
    }

    /**
     * <p>Replacement description for the parameter, shown to the AI agent.</p>
     *
     *
     * @return null|string
     */
    public function getDescription()
    {
        if (is_null($this->description)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_DESCRIPTION);
            if (is_null($data)) {
                return null;
            }
            $this->description = (string) $data;
        }

        return $this->description;
    }

    /**
     * <p>Pins the parameter to a fixed value. Mutually exclusive with <code>default</code> and <code>allowedTypes</code>.</p>
     *
     *
     * @return null|mixed
     */
    public function getConst()
    {
        if (is_null($this->const)) {
            /** @psalm-var mixed $data */
            $data = $this->raw(self::FIELD_CONST);
            if (is_null($data)) {
                return null;
            }
            $this->const = $data;
        }

        return $this->const;
    }

    /**
     * <p>Default value applied when the caller omits the parameter. Mutually exclusive with <code>const</code>.</p>
     *
     *
     * @return null|mixed
     */
    public function getDefault()
    {
        if (is_null($this->default)) {
            /** @psalm-var mixed $data */
            $data = $this->raw(self::FIELD_DEFAULT);
            if (is_null($data)) {
                return null;
            }
            $this->default = $data;
        }

        return $this->default;
    }

    /**
     * <p>Restricts accepted values to this set. Mutually exclusive with <code>const</code>.</p>
     *
     *
     * @return null|array
     */
    public function getAllowedTypes()
    {
        if (is_null($this->allowedTypes)) {
            /** @psalm-var ?list<mixed> $data */
            $data = $this->raw(self::FIELD_ALLOWED_TYPES);
            if (is_null($data)) {
                return null;
            }
            $this->allowedTypes = $data;
        }

        return $this->allowedTypes;
    }


    /**
     * @param ?string $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param ?string $description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * @param mixed $const
     */
    public function setConst($const): void
    {
        $this->const = $const;
    }

    /**
     * @param mixed $default
     */
    public function setDefault($default): void
    {
        $this->default = $default;
    }

    /**
     * @param ?array $allowedTypes
     */
    public function setAllowedTypes(?array $allowedTypes): void
    {
        $this->allowedTypes = $allowedTypes;
    }
}

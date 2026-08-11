<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\McpServer;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ParameterOverride>
 */
final class ParameterOverrideBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $name;

    /**

     * @var ?string
     */
    private $description;

    /**

     * @var null|mixed|mixed
     */
    private $const;

    /**

     * @var null|mixed|mixed
     */
    private $default;

    /**

     * @var ?array
     */
    private $allowedTypes;

    /**
     * <p>Name of the parameter in the tool's input schema to override.</p>
     *

     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <p>Replacement description for the parameter, shown to the AI agent.</p>
     *

     * @return null|string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * <p>Pins the parameter to a fixed value. Mutually exclusive with <code>default</code> and <code>allowedTypes</code>.</p>
     *

     * @return null|mixed
     */
    public function getConst()
    {
        return $this->const;
    }

    /**
     * <p>Default value applied when the caller omits the parameter. Mutually exclusive with <code>const</code>.</p>
     *

     * @return null|mixed
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * <p>Restricts accepted values to this set. Mutually exclusive with <code>const</code>.</p>
     *

     * @return null|array
     */
    public function getAllowedTypes()
    {
        return $this->allowedTypes;
    }

    /**
     * @param ?string $name
     * @return $this
     */
    public function withName(?string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param ?string $description
     * @return $this
     */
    public function withDescription(?string $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @param mixed $const
     * @return $this
     */
    public function withConst($const)
    {
        $this->const = $const;

        return $this;
    }

    /**
     * @param mixed $default
     * @return $this
     */
    public function withDefault($default)
    {
        $this->default = $default;

        return $this;
    }

    /**
     * @param ?array $allowedTypes
     * @return $this
     */
    public function withAllowedTypes(?array $allowedTypes)
    {
        $this->allowedTypes = $allowedTypes;

        return $this;
    }


    public function build(): ParameterOverride
    {
        return new ParameterOverrideModel(
            $this->name,
            $this->description,
            $this->const,
            $this->default,
            $this->allowedTypes
        );
    }

    public static function of(): ParameterOverrideBuilder
    {
        return new self();
    }
}

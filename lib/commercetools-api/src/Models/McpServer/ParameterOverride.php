<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\McpServer;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ParameterOverride extends JsonObject
{
    public const FIELD_NAME = 'name';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_CONST = 'const';
    public const FIELD_DEFAULT = 'default';
    public const FIELD_ALLOWED_TYPES = 'allowedTypes';

    /**
     * <p>Name of the parameter in the tool's input schema to override.</p>
     *

     * @return null|string
     */
    public function getName();

    /**
     * <p>Replacement description for the parameter, shown to the AI agent.</p>
     *

     * @return null|string
     */
    public function getDescription();

    /**
     * <p>Pins the parameter to a fixed value. Mutually exclusive with <code>default</code> and <code>allowedTypes</code>.</p>
     *

     * @return null|mixed
     */
    public function getConst();

    /**
     * <p>Default value applied when the caller omits the parameter. Mutually exclusive with <code>const</code>.</p>
     *

     * @return null|mixed
     */
    public function getDefault();

    /**
     * <p>Restricts accepted values to this set. Mutually exclusive with <code>const</code>.</p>
     *

     * @return null|array
     */
    public function getAllowedTypes();

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void;

    /**
     * @param ?string $description
     */
    public function setDescription(?string $description): void;

    /**
     * @param mixed $const
     */
    public function setConst($const): void;

    /**
     * @param mixed $default
     */
    public function setDefault($default): void;

    /**
     * @param ?array $allowedTypes
     */
    public function setAllowedTypes(?array $allowedTypes): void;
}

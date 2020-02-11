<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CustomObject;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CustomObjectDraft extends JsonObject
{
    public const FIELD_CONTAINER = 'container';
    public const FIELD_KEY = 'key';
    public const FIELD_VALUE = 'value';
    public const FIELD_VERSION = 'version';

    /**
     * <p>A namespace to group custom objects.</p>
     *
     * @return null|string
     */
    public function getContainer();

    /**
     * <p>A user-defined key that is unique within the given container.</p>
     *
     * @return null|string
     */
    public function getKey();

    /**
     * @return null|JsonObject
     */
    public function getValue();

    /**
     * @return null|int
     */
    public function getVersion();

    public function setContainer(?string $container): void;

    public function setKey(?string $key): void;

    public function setValue(?JsonObject $value): void;

    public function setVersion(?int $version): void;
}

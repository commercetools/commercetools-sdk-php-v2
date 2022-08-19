<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ContainerAndKey extends JsonObject
{
    public const FIELD_KEY = 'key';
    public const FIELD_CONTAINER = 'container';

    /**
     * <p>User-defined identifier that is unique within the given container.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>Namespace to group <a href="ctp:api:type:CustomObject">Custom Objects</a>.</p>
     *

     * @return null|string
     */
    public function getContainer();

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?string $container
     */
    public function setContainer(?string $container): void;
}

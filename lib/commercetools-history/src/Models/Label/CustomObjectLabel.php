<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Label;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface CustomObjectLabel extends Label
{

    public const FIELD_KEY = 'key';
    public const FIELD_CONTAINER = 'container';

    /**

     * @return null|string
     */
    public function getType();

    /**
     * <p>User-defined unique identifier of the CustomObject within the defined <code>container</code>.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>Namespace to group Custom Objects.</p>
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

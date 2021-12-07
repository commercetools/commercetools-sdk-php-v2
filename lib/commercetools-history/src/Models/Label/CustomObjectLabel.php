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
     * @return null|string
     */
    public function getKey();

    /**
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

<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Common;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CustomObjectKeyReference extends KeyReference
{
    public const FIELD_CONTAINER = 'container';

    /**
     * <p>User-defined unique identifier of the referenced CustomObject.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>The <code>container</code> of the referenced CustomObject.</p>
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

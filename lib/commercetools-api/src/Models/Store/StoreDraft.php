<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Store;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Common\LocalizedString;

interface StoreDraft extends JsonObject
{

    public const FIELD_KEY = 'key';
    public const FIELD_NAME = 'name';

    /**
     * <p>User-specific unique identifier for the store.
     * The <code>key</code> is mandatory and immutable.
     * It is used to reference the store.</p>
     *
     * @return null|string
     */
    public function getKey();

    /**
     * <p>The name of the store</p>
     *
     * @return null|LocalizedString
     */
    public function getName();

    public function setKey(?string $key): void;

    public function setName(?LocalizedString $name): void;
}

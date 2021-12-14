<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CustomerGroup;

use Commercetools\Api\Models\Common\ResourceIdentifier;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CustomerGroupResourceIdentifier extends ResourceIdentifier
{
    /**
     * <p>Unique ID of the referenced <a href="ctp:api:type:CustomerGroup">CustomerGroup</a>. Either <code>id</code> or <code>key</code> is required.</p>
     *
     * @return null|string
     */
    public function getId();

    /**
     * <p>Unique key of the referenced <a href="ctp:api:type:CustomerGroup">CustomerGroup</a>. Either <code>id</code> or <code>key</code> is required.</p>
     *
     * @return null|string
     */
    public function getKey();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;
}

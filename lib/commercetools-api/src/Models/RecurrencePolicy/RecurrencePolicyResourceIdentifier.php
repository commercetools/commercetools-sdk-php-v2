<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurrencePolicy;

use Commercetools\Api\Models\Common\ResourceIdentifier;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface RecurrencePolicyResourceIdentifier extends ResourceIdentifier
{
    /**
     * <p>Unique identifier of the referenced <a href="ctp:api:type:RecurrencePolicy">RecurrencePolicy</a>. Required if <code>key</code> is absent.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>User-defined unique identifier of the referenced <a href="ctp:api:type:RecurrencePolicy">RecurrencePolicy</a>. Required if <code>id</code> is absent.</p>
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

<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MyOrderFromCartDraft extends JsonObject
{
    public const FIELD_ID = 'id';
    public const FIELD_VERSION = 'version';

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:Cart">Cart</a> from which the Order is created.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>Current <code>version</code> of the <a href="ctp:api:type:Cart">Cart</a> from which the Order is created.</p>
     *

     * @return null|int
     */
    public function getVersion();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void;
}

<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\JsonObject;

interface MyOrderFromCartDraft extends JsonObject
{
    const FIELD_ID = 'id';
    const FIELD_VERSION = 'version';

    /**
     * @return null|string
     */
    public function getId();

    /**
     * @return null|int
     */
    public function getVersion();

    public function setId(?string $id): void;

    public function setVersion(?int $version): void;
}

<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StoreImprintUrlSetMessage extends Message
{
    public const FIELD_IMPRINT_URL = 'imprintUrl';

    /**
     * <p>The <code>imprintUrl</code> of the <a href="ctp:api:type:Store">Store</a> after the <a href="ctp:api:type:StoreSetImprintUrlAction">Set Imprint Url</a> update action.</p>
     *

     * @return null|string
     */
    public function getImprintUrl();

    /**
     * @param ?string $imprintUrl
     */
    public function setImprintUrl(?string $imprintUrl): void;
}

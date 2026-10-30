<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Warning;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StoreSettingOngoingWarning extends WarningObject
{
    /**

     * @return null|string
     */
    public function getCode();

    /**
     * <p><code>&quot;The store setting is still ongoing.&quot;</code></p>
     *

     * @return null|string
     */
    public function getMessage();

    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void;
}

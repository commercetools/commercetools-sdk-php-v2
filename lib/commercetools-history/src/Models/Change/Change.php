<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface Change extends JsonObject
{
    public const DISCRIMINATOR_FIELD = 'type';
    public const FIELD_TYPE = 'type';
    public const FIELD_CHANGE = 'change';

    /**
     * <p>Unique discriminator value to reliably deserialize the data type.</p>
     *

     * @return null|string
     */
    public function getType();

    /**
     * <p><a href="#type-of-change">Type of change</a> on a resource that is similar to the update action it relates to, where possible.
     * It is not a unique identifier for the data structure, for example, the <code>setDescription</code> change can occur with a localized and non-localized representation.</p>
     * <p><a href="ctp:history:type:Record">Records</a> can be filtered by this value using the <code>changes</code> query parameter.</p>
     *

     * @return null|string
     */
    public function getChange();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;
}

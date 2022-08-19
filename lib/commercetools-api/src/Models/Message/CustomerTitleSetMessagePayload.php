<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CustomerTitleSetMessagePayload extends MessagePayload
{
    public const FIELD_TITLE = 'title';

    /**
     * <p>The <code>title</code> that was set during the <a href="ctp:api:type:CustomerSetTitleAction">Set Title</a> update action.</p>
     *

     * @return null|string
     */
    public function getTitle();

    /**
     * @param ?string $title
     */
    public function setTitle(?string $title): void;
}

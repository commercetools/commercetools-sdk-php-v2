<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StoreFaqUrlSetMessage extends Message
{
    public const FIELD_FAQ_URL = 'faqUrl';

    /**
     * <p>The <code>faqUrl</code> of the <a href="ctp:api:type:Store">Store</a> after the <a href="ctp:api:type:StoreSetFaqUrlAction">Set Faq Url</a> update action.</p>
     *

     * @return null|string
     */
    public function getFaqUrl();

    /**
     * @param ?string $faqUrl
     */
    public function setFaqUrl(?string $faqUrl): void;
}

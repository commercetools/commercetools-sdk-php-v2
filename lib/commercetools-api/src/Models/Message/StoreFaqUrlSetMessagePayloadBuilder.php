<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<StoreFaqUrlSetMessagePayload>
 */
final class StoreFaqUrlSetMessagePayloadBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $faqUrl;

    /**
     * <p>The <code>faqUrl</code> of the <a href="ctp:api:type:Store">Store</a> after the <a href="ctp:api:type:StoreSetFaqUrlAction">Set Faq Url</a> update action.</p>
     *

     * @return null|string
     */
    public function getFaqUrl()
    {
        return $this->faqUrl;
    }

    /**
     * @param ?string $faqUrl
     * @return $this
     */
    public function withFaqUrl(?string $faqUrl)
    {
        $this->faqUrl = $faqUrl;

        return $this;
    }


    public function build(): StoreFaqUrlSetMessagePayload
    {
        return new StoreFaqUrlSetMessagePayloadModel(
            $this->faqUrl
        );
    }

    public static function of(): StoreFaqUrlSetMessagePayloadBuilder
    {
        return new self();
    }
}

<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class StoreFaqUrlSetMessagePayloadModel extends JsonObjectModel implements StoreFaqUrlSetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'StoreFaqUrlSet';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $faqUrl;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $faqUrl = null,
        ?string $type = null
    ) {
        $this->faqUrl = $faqUrl;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>The <code>faqUrl</code> of the <a href="ctp:api:type:Store">Store</a> after the <a href="ctp:api:type:StoreSetFaqUrlAction">Set Faq Url</a> update action.</p>
     *
     *
     * @return null|string
     */
    public function getFaqUrl()
    {
        if (is_null($this->faqUrl)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_FAQ_URL);
            if (is_null($data)) {
                return null;
            }
            $this->faqUrl = (string) $data;
        }

        return $this->faqUrl;
    }


    /**
     * @param ?string $faqUrl
     */
    public function setFaqUrl(?string $faqUrl): void
    {
        $this->faqUrl = $faqUrl;
    }
}

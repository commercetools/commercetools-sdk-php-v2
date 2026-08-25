<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Store;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class StoreSetFaqUrlActionModel extends JsonObjectModel implements StoreSetFaqUrlAction
{
    public const DISCRIMINATOR_VALUE = 'setFaqUrl';
    /**
     *
     * @var ?string
     */
    protected $action;

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
        ?string $action = null
    ) {
        $this->faqUrl = $faqUrl;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>Value to set. Must be an absolute <code>https</code> URL. If empty, any existing value is removed.</p>
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

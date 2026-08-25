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
final class StoreCookiePolicyUrlSetMessagePayloadModel extends JsonObjectModel implements StoreCookiePolicyUrlSetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'StoreCookiePolicyUrlSet';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $cookiePolicyUrl;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $cookiePolicyUrl = null,
        ?string $type = null
    ) {
        $this->cookiePolicyUrl = $cookiePolicyUrl;
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
     * <p>The <code>cookiePolicyUrl</code> of the <a href="ctp:api:type:Store">Store</a> after the <a href="ctp:api:type:StoreSetCookiePolicyUrlAction">Set Cookie Policy Url</a> update action.</p>
     *
     *
     * @return null|string
     */
    public function getCookiePolicyUrl()
    {
        if (is_null($this->cookiePolicyUrl)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_COOKIE_POLICY_URL);
            if (is_null($data)) {
                return null;
            }
            $this->cookiePolicyUrl = (string) $data;
        }

        return $this->cookiePolicyUrl;
    }


    /**
     * @param ?string $cookiePolicyUrl
     */
    public function setCookiePolicyUrl(?string $cookiePolicyUrl): void
    {
        $this->cookiePolicyUrl = $cookiePolicyUrl;
    }
}

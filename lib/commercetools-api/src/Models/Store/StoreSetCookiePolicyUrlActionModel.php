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
final class StoreSetCookiePolicyUrlActionModel extends JsonObjectModel implements StoreSetCookiePolicyUrlAction
{
    public const DISCRIMINATOR_VALUE = 'setCookiePolicyUrl';
    /**
     *
     * @var ?string
     */
    protected $action;

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
        ?string $action = null
    ) {
        $this->cookiePolicyUrl = $cookiePolicyUrl;
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

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
final class StoreSetPrivacyPolicyUrlActionModel extends JsonObjectModel implements StoreSetPrivacyPolicyUrlAction
{
    public const DISCRIMINATOR_VALUE = 'setPrivacyPolicyUrl';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?string
     */
    protected $privacyPolicyUrl;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $privacyPolicyUrl = null,
        ?string $action = null
    ) {
        $this->privacyPolicyUrl = $privacyPolicyUrl;
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
    public function getPrivacyPolicyUrl()
    {
        if (is_null($this->privacyPolicyUrl)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PRIVACY_POLICY_URL);
            if (is_null($data)) {
                return null;
            }
            $this->privacyPolicyUrl = (string) $data;
        }

        return $this->privacyPolicyUrl;
    }


    /**
     * @param ?string $privacyPolicyUrl
     */
    public function setPrivacyPolicyUrl(?string $privacyPolicyUrl): void
    {
        $this->privacyPolicyUrl = $privacyPolicyUrl;
    }
}

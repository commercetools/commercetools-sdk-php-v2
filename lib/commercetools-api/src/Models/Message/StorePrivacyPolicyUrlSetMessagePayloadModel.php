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
final class StorePrivacyPolicyUrlSetMessagePayloadModel extends JsonObjectModel implements StorePrivacyPolicyUrlSetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'StorePrivacyPolicyUrlSet';
    /**
     *
     * @var ?string
     */
    protected $type;

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
        ?string $type = null
    ) {
        $this->privacyPolicyUrl = $privacyPolicyUrl;
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
     * <p>The <code>privacyPolicyUrl</code> of the <a href="ctp:api:type:Store">Store</a> after the <a href="ctp:api:type:StoreSetPrivacyPolicyUrlAction">Set Privacy Policy Url</a> update action.</p>
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

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
final class StoreShippingPolicyUrlSetMessagePayloadModel extends JsonObjectModel implements StoreShippingPolicyUrlSetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'StoreShippingPolicyUrlSet';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $shippingPolicyUrl;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $shippingPolicyUrl = null,
        ?string $type = null
    ) {
        $this->shippingPolicyUrl = $shippingPolicyUrl;
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
     * <p>The <code>shippingPolicyUrl</code> of the <a href="ctp:api:type:Store">Store</a> after the <a href="ctp:api:type:StoreSetShippingPolicyUrlAction">Set Shipping Policy Url</a> update action.</p>
     *
     *
     * @return null|string
     */
    public function getShippingPolicyUrl()
    {
        if (is_null($this->shippingPolicyUrl)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_SHIPPING_POLICY_URL);
            if (is_null($data)) {
                return null;
            }
            $this->shippingPolicyUrl = (string) $data;
        }

        return $this->shippingPolicyUrl;
    }


    /**
     * @param ?string $shippingPolicyUrl
     */
    public function setShippingPolicyUrl(?string $shippingPolicyUrl): void
    {
        $this->shippingPolicyUrl = $shippingPolicyUrl;
    }
}

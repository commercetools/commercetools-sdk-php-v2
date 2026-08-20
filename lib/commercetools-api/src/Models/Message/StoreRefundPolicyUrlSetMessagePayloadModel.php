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
final class StoreRefundPolicyUrlSetMessagePayloadModel extends JsonObjectModel implements StoreRefundPolicyUrlSetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'StoreRefundPolicyUrlSet';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $refundPolicyUrl;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $refundPolicyUrl = null,
        ?string $type = null
    ) {
        $this->refundPolicyUrl = $refundPolicyUrl;
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
     * <p>The <code>refundPolicyUrl</code> of the <a href="ctp:api:type:Store">Store</a> after the <a href="ctp:api:type:StoreSetRefundPolicyUrlAction">Set Refund Policy Url</a> update action.</p>
     *
     *
     * @return null|string
     */
    public function getRefundPolicyUrl()
    {
        if (is_null($this->refundPolicyUrl)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_REFUND_POLICY_URL);
            if (is_null($data)) {
                return null;
            }
            $this->refundPolicyUrl = (string) $data;
        }

        return $this->refundPolicyUrl;
    }


    /**
     * @param ?string $refundPolicyUrl
     */
    public function setRefundPolicyUrl(?string $refundPolicyUrl): void
    {
        $this->refundPolicyUrl = $refundPolicyUrl;
    }
}

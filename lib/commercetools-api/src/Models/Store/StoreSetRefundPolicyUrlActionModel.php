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
final class StoreSetRefundPolicyUrlActionModel extends JsonObjectModel implements StoreSetRefundPolicyUrlAction
{
    public const DISCRIMINATOR_VALUE = 'setRefundPolicyUrl';
    /**
     *
     * @var ?string
     */
    protected $action;

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
        ?string $action = null
    ) {
        $this->refundPolicyUrl = $refundPolicyUrl;
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

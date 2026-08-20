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
final class StoreSetShippingPolicyUrlActionModel extends JsonObjectModel implements StoreSetShippingPolicyUrlAction
{
    public const DISCRIMINATOR_VALUE = 'setShippingPolicyUrl';
    /**
     *
     * @var ?string
     */
    protected $action;

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
        ?string $action = null
    ) {
        $this->shippingPolicyUrl = $shippingPolicyUrl;
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

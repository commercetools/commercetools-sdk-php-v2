<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<StoreShippingPolicyUrlSetMessagePayload>
 */
final class StoreShippingPolicyUrlSetMessagePayloadBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $shippingPolicyUrl;

    /**
     * <p>The <code>shippingPolicyUrl</code> of the <a href="ctp:api:type:Store">Store</a> after the <a href="ctp:api:type:StoreSetShippingPolicyUrlAction">Set Shipping Policy Url</a> update action.</p>
     *

     * @return null|string
     */
    public function getShippingPolicyUrl()
    {
        return $this->shippingPolicyUrl;
    }

    /**
     * @param ?string $shippingPolicyUrl
     * @return $this
     */
    public function withShippingPolicyUrl(?string $shippingPolicyUrl)
    {
        $this->shippingPolicyUrl = $shippingPolicyUrl;

        return $this;
    }


    public function build(): StoreShippingPolicyUrlSetMessagePayload
    {
        return new StoreShippingPolicyUrlSetMessagePayloadModel(
            $this->shippingPolicyUrl
        );
    }

    public static function of(): StoreShippingPolicyUrlSetMessagePayloadBuilder
    {
        return new self();
    }
}

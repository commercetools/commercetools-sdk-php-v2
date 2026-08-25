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
 * @implements Builder<StoreRefundPolicyUrlSetMessagePayload>
 */
final class StoreRefundPolicyUrlSetMessagePayloadBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $refundPolicyUrl;

    /**
     * <p>The <code>refundPolicyUrl</code> of the <a href="ctp:api:type:Store">Store</a> after the <a href="ctp:api:type:StoreSetRefundPolicyUrlAction">Set Refund Policy Url</a> update action.</p>
     *

     * @return null|string
     */
    public function getRefundPolicyUrl()
    {
        return $this->refundPolicyUrl;
    }

    /**
     * @param ?string $refundPolicyUrl
     * @return $this
     */
    public function withRefundPolicyUrl(?string $refundPolicyUrl)
    {
        $this->refundPolicyUrl = $refundPolicyUrl;

        return $this;
    }


    public function build(): StoreRefundPolicyUrlSetMessagePayload
    {
        return new StoreRefundPolicyUrlSetMessagePayloadModel(
            $this->refundPolicyUrl
        );
    }

    public static function of(): StoreRefundPolicyUrlSetMessagePayloadBuilder
    {
        return new self();
    }
}

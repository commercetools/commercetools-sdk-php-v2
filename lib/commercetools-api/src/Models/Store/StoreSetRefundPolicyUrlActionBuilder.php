<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Store;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<StoreSetRefundPolicyUrlAction>
 */
final class StoreSetRefundPolicyUrlActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $refundPolicyUrl;

    /**
     * <p>Value to set. Must be an absolute <code>https</code> URL. If empty, any existing value is removed.</p>
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


    public function build(): StoreSetRefundPolicyUrlAction
    {
        return new StoreSetRefundPolicyUrlActionModel(
            $this->refundPolicyUrl
        );
    }

    public static function of(): StoreSetRefundPolicyUrlActionBuilder
    {
        return new self();
    }
}

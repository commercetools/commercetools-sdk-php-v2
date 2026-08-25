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
 * @implements Builder<StoreSetPrivacyPolicyUrlAction>
 */
final class StoreSetPrivacyPolicyUrlActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $privacyPolicyUrl;

    /**
     * <p>Value to set. Must be an absolute <code>https</code> URL. If empty, any existing value is removed.</p>
     *

     * @return null|string
     */
    public function getPrivacyPolicyUrl()
    {
        return $this->privacyPolicyUrl;
    }

    /**
     * @param ?string $privacyPolicyUrl
     * @return $this
     */
    public function withPrivacyPolicyUrl(?string $privacyPolicyUrl)
    {
        $this->privacyPolicyUrl = $privacyPolicyUrl;

        return $this;
    }


    public function build(): StoreSetPrivacyPolicyUrlAction
    {
        return new StoreSetPrivacyPolicyUrlActionModel(
            $this->privacyPolicyUrl
        );
    }

    public static function of(): StoreSetPrivacyPolicyUrlActionBuilder
    {
        return new self();
    }
}

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
 * @implements Builder<StoreSetCookiePolicyUrlAction>
 */
final class StoreSetCookiePolicyUrlActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $cookiePolicyUrl;

    /**
     * <p>Value to set. Must be an absolute <code>https</code> URL. If empty, any existing value is removed.</p>
     *

     * @return null|string
     */
    public function getCookiePolicyUrl()
    {
        return $this->cookiePolicyUrl;
    }

    /**
     * @param ?string $cookiePolicyUrl
     * @return $this
     */
    public function withCookiePolicyUrl(?string $cookiePolicyUrl)
    {
        $this->cookiePolicyUrl = $cookiePolicyUrl;

        return $this;
    }


    public function build(): StoreSetCookiePolicyUrlAction
    {
        return new StoreSetCookiePolicyUrlActionModel(
            $this->cookiePolicyUrl
        );
    }

    public static function of(): StoreSetCookiePolicyUrlActionBuilder
    {
        return new self();
    }
}

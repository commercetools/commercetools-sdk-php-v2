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
 * @implements Builder<StoreCookiePolicyUrlSetMessagePayload>
 */
final class StoreCookiePolicyUrlSetMessagePayloadBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $cookiePolicyUrl;

    /**
     * <p>The <code>cookiePolicyUrl</code> of the <a href="ctp:api:type:Store">Store</a> after the <a href="ctp:api:type:StoreSetCookiePolicyUrlAction">Set Cookie Policy Url</a> update action.</p>
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


    public function build(): StoreCookiePolicyUrlSetMessagePayload
    {
        return new StoreCookiePolicyUrlSetMessagePayloadModel(
            $this->cookiePolicyUrl
        );
    }

    public static function of(): StoreCookiePolicyUrlSetMessagePayloadBuilder
    {
        return new self();
    }
}

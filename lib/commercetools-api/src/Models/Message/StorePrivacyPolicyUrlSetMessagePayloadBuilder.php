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
 * @implements Builder<StorePrivacyPolicyUrlSetMessagePayload>
 */
final class StorePrivacyPolicyUrlSetMessagePayloadBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $privacyPolicyUrl;

    /**
     * <p>The <code>privacyPolicyUrl</code> of the <a href="ctp:api:type:Store">Store</a> after the <a href="ctp:api:type:StoreSetPrivacyPolicyUrlAction">Set Privacy Policy Url</a> update action.</p>
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


    public function build(): StorePrivacyPolicyUrlSetMessagePayload
    {
        return new StorePrivacyPolicyUrlSetMessagePayloadModel(
            $this->privacyPolicyUrl
        );
    }

    public static function of(): StorePrivacyPolicyUrlSetMessagePayloadBuilder
    {
        return new self();
    }
}

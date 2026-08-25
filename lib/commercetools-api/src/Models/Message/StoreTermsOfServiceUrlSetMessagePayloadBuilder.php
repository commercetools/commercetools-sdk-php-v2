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
 * @implements Builder<StoreTermsOfServiceUrlSetMessagePayload>
 */
final class StoreTermsOfServiceUrlSetMessagePayloadBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $termsOfServiceUrl;

    /**
     * <p>The <code>termsOfServiceUrl</code> of the <a href="ctp:api:type:Store">Store</a> after the <a href="ctp:api:type:StoreSetTermsOfServiceUrlAction">Set Terms Of Service Url</a> update action.</p>
     *

     * @return null|string
     */
    public function getTermsOfServiceUrl()
    {
        return $this->termsOfServiceUrl;
    }

    /**
     * @param ?string $termsOfServiceUrl
     * @return $this
     */
    public function withTermsOfServiceUrl(?string $termsOfServiceUrl)
    {
        $this->termsOfServiceUrl = $termsOfServiceUrl;

        return $this;
    }


    public function build(): StoreTermsOfServiceUrlSetMessagePayload
    {
        return new StoreTermsOfServiceUrlSetMessagePayloadModel(
            $this->termsOfServiceUrl
        );
    }

    public static function of(): StoreTermsOfServiceUrlSetMessagePayloadBuilder
    {
        return new self();
    }
}

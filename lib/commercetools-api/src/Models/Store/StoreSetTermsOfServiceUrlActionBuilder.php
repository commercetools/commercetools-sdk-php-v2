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
 * @implements Builder<StoreSetTermsOfServiceUrlAction>
 */
final class StoreSetTermsOfServiceUrlActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $termsOfServiceUrl;

    /**
     * <p>Value to set. Must be an absolute <code>https</code> URL. If empty, any existing value is removed.</p>
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


    public function build(): StoreSetTermsOfServiceUrlAction
    {
        return new StoreSetTermsOfServiceUrlActionModel(
            $this->termsOfServiceUrl
        );
    }

    public static function of(): StoreSetTermsOfServiceUrlActionBuilder
    {
        return new self();
    }
}

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
 * @implements Builder<StoreSetFaqUrlAction>
 */
final class StoreSetFaqUrlActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $faqUrl;

    /**
     * <p>Value to set. Must be an absolute <code>https</code> URL. If empty, any existing value is removed.</p>
     *

     * @return null|string
     */
    public function getFaqUrl()
    {
        return $this->faqUrl;
    }

    /**
     * @param ?string $faqUrl
     * @return $this
     */
    public function withFaqUrl(?string $faqUrl)
    {
        $this->faqUrl = $faqUrl;

        return $this;
    }


    public function build(): StoreSetFaqUrlAction
    {
        return new StoreSetFaqUrlActionModel(
            $this->faqUrl
        );
    }

    public static function of(): StoreSetFaqUrlActionBuilder
    {
        return new self();
    }
}

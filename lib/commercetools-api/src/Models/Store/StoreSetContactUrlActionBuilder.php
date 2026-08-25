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
 * @implements Builder<StoreSetContactUrlAction>
 */
final class StoreSetContactUrlActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $contactUrl;

    /**
     * <p>Value to set. Must be an absolute <code>https</code> URL. If empty, any existing value is removed.</p>
     *

     * @return null|string
     */
    public function getContactUrl()
    {
        return $this->contactUrl;
    }

    /**
     * @param ?string $contactUrl
     * @return $this
     */
    public function withContactUrl(?string $contactUrl)
    {
        $this->contactUrl = $contactUrl;

        return $this;
    }


    public function build(): StoreSetContactUrlAction
    {
        return new StoreSetContactUrlActionModel(
            $this->contactUrl
        );
    }

    public static function of(): StoreSetContactUrlActionBuilder
    {
        return new self();
    }
}

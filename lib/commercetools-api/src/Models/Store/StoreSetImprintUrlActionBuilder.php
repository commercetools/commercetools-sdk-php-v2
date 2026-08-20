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
 * @implements Builder<StoreSetImprintUrlAction>
 */
final class StoreSetImprintUrlActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $imprintUrl;

    /**
     * <p>Value to set. Must be an absolute <code>https</code> URL. If empty, any existing value is removed.</p>
     *

     * @return null|string
     */
    public function getImprintUrl()
    {
        return $this->imprintUrl;
    }

    /**
     * @param ?string $imprintUrl
     * @return $this
     */
    public function withImprintUrl(?string $imprintUrl)
    {
        $this->imprintUrl = $imprintUrl;

        return $this;
    }


    public function build(): StoreSetImprintUrlAction
    {
        return new StoreSetImprintUrlActionModel(
            $this->imprintUrl
        );
    }

    public static function of(): StoreSetImprintUrlActionBuilder
    {
        return new self();
    }
}

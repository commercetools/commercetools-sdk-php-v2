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
 * @implements Builder<StoreImprintUrlSetMessagePayload>
 */
final class StoreImprintUrlSetMessagePayloadBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $imprintUrl;

    /**
     * <p>The <code>imprintUrl</code> of the <a href="ctp:api:type:Store">Store</a> after the <a href="ctp:api:type:StoreSetImprintUrlAction">Set Imprint Url</a> update action.</p>
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


    public function build(): StoreImprintUrlSetMessagePayload
    {
        return new StoreImprintUrlSetMessagePayloadModel(
            $this->imprintUrl
        );
    }

    public static function of(): StoreImprintUrlSetMessagePayloadBuilder
    {
        return new self();
    }
}

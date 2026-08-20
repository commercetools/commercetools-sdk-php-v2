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
 * @implements Builder<StoreContactUrlSetMessagePayload>
 */
final class StoreContactUrlSetMessagePayloadBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $contactUrl;

    /**
     * <p>The <code>contactUrl</code> of the <a href="ctp:api:type:Store">Store</a> after the <a href="ctp:api:type:StoreSetContactUrlAction">Set Contact Url</a> update action.</p>
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


    public function build(): StoreContactUrlSetMessagePayload
    {
        return new StoreContactUrlSetMessagePayloadModel(
            $this->contactUrl
        );
    }

    public static function of(): StoreContactUrlSetMessagePayloadBuilder
    {
        return new self();
    }
}

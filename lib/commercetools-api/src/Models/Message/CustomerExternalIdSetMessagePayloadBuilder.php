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
 * @implements Builder<CustomerExternalIdSetMessagePayload>
 */
final class CustomerExternalIdSetMessagePayloadBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $externalId;

    /**
     * <p>The identifier that was set.</p>
     *

     * @return null|string
     */
    public function getExternalId()
    {
        return $this->externalId;
    }

    /**
     * @param ?string $externalId
     * @return $this
     */
    public function withExternalId(?string $externalId)
    {
        $this->externalId = $externalId;

        return $this;
    }


    public function build(): CustomerExternalIdSetMessagePayload
    {
        return new CustomerExternalIdSetMessagePayloadModel(
            $this->externalId
        );
    }

    public static function of(): CustomerExternalIdSetMessagePayloadBuilder
    {
        return new self();
    }
}

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
 * @implements Builder<CustomerCustomTypeRemovedMessagePayload>
 */
final class CustomerCustomTypeRemovedMessagePayloadBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $previousTypeId;

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:Type">Custom Type</a> that has been removed.</p>
     * <p>Absent when there has not been a Custom Type before.</p>
     *

     * @return null|string
     */
    public function getPreviousTypeId()
    {
        return $this->previousTypeId;
    }

    /**
     * @param ?string $previousTypeId
     * @return $this
     */
    public function withPreviousTypeId(?string $previousTypeId)
    {
        $this->previousTypeId = $previousTypeId;

        return $this;
    }


    public function build(): CustomerCustomTypeRemovedMessagePayload
    {
        return new CustomerCustomTypeRemovedMessagePayloadModel(
            $this->previousTypeId
        );
    }

    public static function of(): CustomerCustomTypeRemovedMessagePayloadBuilder
    {
        return new self();
    }
}

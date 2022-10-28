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
 * @implements Builder<BusinessUnitStatusChangedMessagePayload>
 */
final class BusinessUnitStatusChangedMessagePayloadBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $active;

    /**
     * <p>Updated status of the <a href="ctp:api:type:BusinessUnit">Business Unit</a>.</p>
     *

     * @return null|string
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param ?string $active
     * @return $this
     */
    public function withActive(?string $active)
    {
        $this->active = $active;

        return $this;
    }


    public function build(): BusinessUnitStatusChangedMessagePayload
    {
        return new BusinessUnitStatusChangedMessagePayloadModel(
            $this->active
        );
    }

    public static function of(): BusinessUnitStatusChangedMessagePayloadBuilder
    {
        return new self();
    }
}

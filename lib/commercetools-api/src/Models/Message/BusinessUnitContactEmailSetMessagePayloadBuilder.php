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
 * @implements Builder<BusinessUnitContactEmailSetMessagePayload>
 */
final class BusinessUnitContactEmailSetMessagePayloadBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $contactEmail;

    /**
     * <p>The contact email that was updated on the <a href="ctp:api:type:BusinessUnit">Business Unit</a>.</p>
     *

     * @return null|string
     */
    public function getContactEmail()
    {
        return $this->contactEmail;
    }

    /**
     * @param ?string $contactEmail
     * @return $this
     */
    public function withContactEmail(?string $contactEmail)
    {
        $this->contactEmail = $contactEmail;

        return $this;
    }


    public function build(): BusinessUnitContactEmailSetMessagePayload
    {
        return new BusinessUnitContactEmailSetMessagePayloadModel(
            $this->contactEmail
        );
    }

    public static function of(): BusinessUnitContactEmailSetMessagePayloadBuilder
    {
        return new self();
    }
}

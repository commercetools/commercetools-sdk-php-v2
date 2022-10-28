<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\BusinessUnit\AssociateCollection;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<BusinessUnitAssociatesSetMessagePayload>
 */
final class BusinessUnitAssociatesSetMessagePayloadBuilder implements Builder
{
    /**

     * @var ?AssociateCollection
     */
    private $associates;

    /**
     * <p>The list of <a href="ctp:api:type:Associate">Associates</a> that was updated on the <a href="ctp:api:type:BusinessUnit">Business Unit</a>.</p>
     *

     * @return null|AssociateCollection
     */
    public function getAssociates()
    {
        return $this->associates;
    }

    /**
     * @param ?AssociateCollection $associates
     * @return $this
     */
    public function withAssociates(?AssociateCollection $associates)
    {
        $this->associates = $associates;

        return $this;
    }


    public function build(): BusinessUnitAssociatesSetMessagePayload
    {
        return new BusinessUnitAssociatesSetMessagePayloadModel(
            $this->associates
        );
    }

    public static function of(): BusinessUnitAssociatesSetMessagePayloadBuilder
    {
        return new self();
    }
}

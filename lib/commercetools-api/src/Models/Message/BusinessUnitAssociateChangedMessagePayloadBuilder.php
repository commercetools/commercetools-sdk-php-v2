<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\BusinessUnit\Associate;
use Commercetools\Api\Models\BusinessUnit\AssociateBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<BusinessUnitAssociateChangedMessagePayload>
 */
final class BusinessUnitAssociateChangedMessagePayloadBuilder implements Builder
{
    /**

     * @var null|Associate|AssociateBuilder
     */
    private $associate;

    /**
     * <p>The <a href="ctp:api:type:Associate">Associate</a> that was updated.</p>
     *

     * @return null|Associate
     */
    public function getAssociate()
    {
        return $this->associate instanceof AssociateBuilder ? $this->associate->build() : $this->associate;
    }

    /**
     * @param ?Associate $associate
     * @return $this
     */
    public function withAssociate(?Associate $associate)
    {
        $this->associate = $associate;

        return $this;
    }

    /**
     * @deprecated use withAssociate() instead
     * @return $this
     */
    public function withAssociateBuilder(?AssociateBuilder $associate)
    {
        $this->associate = $associate;

        return $this;
    }

    public function build(): BusinessUnitAssociateChangedMessagePayload
    {
        return new BusinessUnitAssociateChangedMessagePayloadModel(
            $this->associate instanceof AssociateBuilder ? $this->associate->build() : $this->associate
        );
    }

    public static function of(): BusinessUnitAssociateChangedMessagePayloadBuilder
    {
        return new self();
    }
}

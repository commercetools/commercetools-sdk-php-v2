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
 * @implements Builder<BusinessUnitAssociateModeChangedMessagePayload>
 */
final class BusinessUnitAssociateModeChangedMessagePayloadBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $associateMode;

    /**

     * @var ?string
     */
    private $oldAssociateMode;

    /**
     * <p><a href="ctp:api:type:BusinessUnitAssociateMode">BusinessUnitAssociateMode</a> of the Business Unit after the <a href="ctp:api:type:BusinessUnitChangeAssociateModeAction">Change Associate Mode</a> update action.</p>
     *

     * @return null|string
     */
    public function getAssociateMode()
    {
        return $this->associateMode;
    }

    /**
     * <p><a href="ctp:api:type:BusinessUnitAssociateMode">BusinessUnitAssociateMode</a> of the Business Unit before the <a href="ctp:api:type:BusinessUnitChangeAssociateModeAction">Change Associate Mode</a> update action.</p>
     *

     * @return null|string
     */
    public function getOldAssociateMode()
    {
        return $this->oldAssociateMode;
    }

    /**
     * @param ?string $associateMode
     * @return $this
     */
    public function withAssociateMode(?string $associateMode)
    {
        $this->associateMode = $associateMode;

        return $this;
    }

    /**
     * @param ?string $oldAssociateMode
     * @return $this
     */
    public function withOldAssociateMode(?string $oldAssociateMode)
    {
        $this->oldAssociateMode = $oldAssociateMode;

        return $this;
    }


    public function build(): BusinessUnitAssociateModeChangedMessagePayload
    {
        return new BusinessUnitAssociateModeChangedMessagePayloadModel(
            $this->associateMode,
            $this->oldAssociateMode
        );
    }

    public static function of(): BusinessUnitAssociateModeChangedMessagePayloadBuilder
    {
        return new self();
    }
}

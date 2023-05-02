<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class BusinessUnitAssociateModeChangedMessagePayloadModel extends JsonObjectModel implements BusinessUnitAssociateModeChangedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'BusinessUnitAssociateModeChanged';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $associateMode;

    /**
     *
     * @var ?string
     */
    protected $oldAssociateMode;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $associateMode = null,
        ?string $oldAssociateMode = null,
        ?string $type = null
    ) {
        $this->associateMode = $associateMode;
        $this->oldAssociateMode = $oldAssociateMode;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p><a href="ctp:api:type:BusinessUnitAssociateMode">BusinessUnitAssociateMode</a> of the Business Unit after the <a href="ctp:api:type:BusinessUnitChangeAssociateModeAction">Change Associate Mode</a> update action.</p>
     *
     *
     * @return null|string
     */
    public function getAssociateMode()
    {
        if (is_null($this->associateMode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ASSOCIATE_MODE);
            if (is_null($data)) {
                return null;
            }
            $this->associateMode = (string) $data;
        }

        return $this->associateMode;
    }

    /**
     * <p><a href="ctp:api:type:BusinessUnitAssociateMode">BusinessUnitAssociateMode</a> of the Business Unit before the <a href="ctp:api:type:BusinessUnitChangeAssociateModeAction">Change Associate Mode</a> update action.</p>
     *
     *
     * @return null|string
     */
    public function getOldAssociateMode()
    {
        if (is_null($this->oldAssociateMode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_OLD_ASSOCIATE_MODE);
            if (is_null($data)) {
                return null;
            }
            $this->oldAssociateMode = (string) $data;
        }

        return $this->oldAssociateMode;
    }


    /**
     * @param ?string $associateMode
     */
    public function setAssociateMode(?string $associateMode): void
    {
        $this->associateMode = $associateMode;
    }

    /**
     * @param ?string $oldAssociateMode
     */
    public function setOldAssociateMode(?string $oldAssociateMode): void
    {
        $this->oldAssociateMode = $oldAssociateMode;
    }
}

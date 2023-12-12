<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class BusinessUnitCustomTypeSetMessagePayloadModel extends JsonObjectModel implements BusinessUnitCustomTypeSetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'BusinessUnitCustomTypeSet';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?CustomFields
     */
    protected $customFields;

    /**
     *
     * @var ?string
     */
    protected $oldTypeId;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?CustomFields $customFields = null,
        ?string $oldTypeId = null,
        ?string $type = null
    ) {
        $this->customFields = $customFields;
        $this->oldTypeId = $oldTypeId;
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
     * <p>The Custom Fields that were set.</p>
     *
     *
     * @return null|CustomFields
     */
    public function getCustomFields()
    {
        if (is_null($this->customFields)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOM_FIELDS);
            if (is_null($data)) {
                return null;
            }

            $this->customFields = CustomFieldsModel::of($data);
        }

        return $this->customFields;
    }

    /**
     * <p><code>id</code> of the previous <a href="ctp:api:type:Type">Custom Type</a>. Absent if there was no previous Custom Type present.</p>
     *
     *
     * @return null|string
     */
    public function getOldTypeId()
    {
        if (is_null($this->oldTypeId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_OLD_TYPE_ID);
            if (is_null($data)) {
                return null;
            }
            $this->oldTypeId = (string) $data;
        }

        return $this->oldTypeId;
    }


    /**
     * @param ?CustomFields $customFields
     */
    public function setCustomFields(?CustomFields $customFields): void
    {
        $this->customFields = $customFields;
    }

    /**
     * @param ?string $oldTypeId
     */
    public function setOldTypeId(?string $oldTypeId): void
    {
        $this->oldTypeId = $oldTypeId;
    }
}

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
final class CustomerAddressCustomTypeSetMessagePayloadModel extends JsonObjectModel implements CustomerAddressCustomTypeSetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'CustomerAddressCustomTypeSet';
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
    protected $previousTypeId;

    /**
     *
     * @var ?string
     */
    protected $addressId;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?CustomFields $customFields = null,
        ?string $previousTypeId = null,
        ?string $addressId = null,
        ?string $type = null
    ) {
        $this->customFields = $customFields;
        $this->previousTypeId = $previousTypeId;
        $this->addressId = $addressId;
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
     * <p>The Custom Fields that have been set.</p>
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
    public function getPreviousTypeId()
    {
        if (is_null($this->previousTypeId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PREVIOUS_TYPE_ID);
            if (is_null($data)) {
                return null;
            }
            $this->previousTypeId = (string) $data;
        }

        return $this->previousTypeId;
    }

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:Address">Address</a> on which the Custom Field was set.</p>
     *
     *
     * @return null|string
     */
    public function getAddressId()
    {
        if (is_null($this->addressId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ADDRESS_ID);
            if (is_null($data)) {
                return null;
            }
            $this->addressId = (string) $data;
        }

        return $this->addressId;
    }


    /**
     * @param ?CustomFields $customFields
     */
    public function setCustomFields(?CustomFields $customFields): void
    {
        $this->customFields = $customFields;
    }

    /**
     * @param ?string $previousTypeId
     */
    public function setPreviousTypeId(?string $previousTypeId): void
    {
        $this->previousTypeId = $previousTypeId;
    }

    /**
     * @param ?string $addressId
     */
    public function setAddressId(?string $addressId): void
    {
        $this->addressId = $addressId;
    }
}

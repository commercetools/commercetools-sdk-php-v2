<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CustomerAddressCustomTypeSetMessagePayload>
 */
final class CustomerAddressCustomTypeSetMessagePayloadBuilder implements Builder
{
    /**

     * @var null|CustomFields|CustomFieldsBuilder
     */
    private $customFields;

    /**

     * @var ?string
     */
    private $previousTypeId;

    /**
     * <p>The Custom Fields that have been set.</p>
     *

     * @return null|CustomFields
     */
    public function getCustomFields()
    {
        return $this->customFields instanceof CustomFieldsBuilder ? $this->customFields->build() : $this->customFields;
    }

    /**
     * <p><code>id</code> of the previous <a href="ctp:api:type:Type">Custom Type</a>. Absent if there was no previous Custom Type present.</p>
     *

     * @return null|string
     */
    public function getPreviousTypeId()
    {
        return $this->previousTypeId;
    }

    /**
     * @param ?CustomFields $customFields
     * @return $this
     */
    public function withCustomFields(?CustomFields $customFields)
    {
        $this->customFields = $customFields;

        return $this;
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

    /**
     * @deprecated use withCustomFields() instead
     * @return $this
     */
    public function withCustomFieldsBuilder(?CustomFieldsBuilder $customFields)
    {
        $this->customFields = $customFields;

        return $this;
    }

    public function build(): CustomerAddressCustomTypeSetMessagePayload
    {
        return new CustomerAddressCustomTypeSetMessagePayloadModel(
            $this->customFields instanceof CustomFieldsBuilder ? $this->customFields->build() : $this->customFields,
            $this->previousTypeId
        );
    }

    public static function of(): CustomerAddressCustomTypeSetMessagePayloadBuilder
    {
        return new self();
    }
}

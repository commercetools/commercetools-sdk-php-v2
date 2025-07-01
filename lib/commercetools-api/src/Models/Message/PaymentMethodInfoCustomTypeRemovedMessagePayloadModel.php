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
final class PaymentMethodInfoCustomTypeRemovedMessagePayloadModel extends JsonObjectModel implements PaymentMethodInfoCustomTypeRemovedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'PaymentMethodInfoCustomTypeRemoved';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $oldTypeId;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $oldTypeId = null,
        ?string $type = null
    ) {
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
     * <p><code>id</code> of the <a href="ctp:api:type:Type">Type</a> that was removed. Absent if there was no previous Custom Type present.</p>
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
     * @param ?string $oldTypeId
     */
    public function setOldTypeId(?string $oldTypeId): void
    {
        $this->oldTypeId = $oldTypeId;
    }
}

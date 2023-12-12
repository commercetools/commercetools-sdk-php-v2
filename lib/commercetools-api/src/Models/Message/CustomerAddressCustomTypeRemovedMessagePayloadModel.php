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
final class CustomerAddressCustomTypeRemovedMessagePayloadModel extends JsonObjectModel implements CustomerAddressCustomTypeRemovedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'CustomerAddressCustomTypeRemoved';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $previousTypeId;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $previousTypeId = null,
        ?string $type = null
    ) {
        $this->previousTypeId = $previousTypeId;
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
     * <p><code>id</code> of the <a href="ctp:api:type:Type">Custom Type</a> that was removed. Absent if there was no previous Custom Type present.</p>
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
     * @param ?string $previousTypeId
     */
    public function setPreviousTypeId(?string $previousTypeId): void
    {
        $this->previousTypeId = $previousTypeId;
    }
}

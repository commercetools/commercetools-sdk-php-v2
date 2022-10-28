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
final class BusinessUnitStatusChangedMessagePayloadModel extends JsonObjectModel implements BusinessUnitStatusChangedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'BusinessUnitStatusChanged';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $active;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $active = null,
        ?string $type = null
    ) {
        $this->active = $active;
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
     * <p>Updated status of the <a href="ctp:api:type:BusinessUnit">Business Unit</a>.</p>
     *
     *
     * @return null|string
     */
    public function getActive()
    {
        if (is_null($this->active)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTIVE);
            if (is_null($data)) {
                return null;
            }
            $this->active = (string) $data;
        }

        return $this->active;
    }


    /**
     * @param ?string $active
     */
    public function setActive(?string $active): void
    {
        $this->active = $active;
    }
}

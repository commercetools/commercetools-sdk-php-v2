<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\BusinessUnit\AssociateCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class BusinessUnitAssociatesSetMessagePayloadModel extends JsonObjectModel implements BusinessUnitAssociatesSetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'BusinessUnitAssociatesSet';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?AssociateCollection
     */
    protected $associates;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?AssociateCollection $associates = null,
        ?string $type = null
    ) {
        $this->associates = $associates;
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
     * <p>The list of <a href="ctp:api:type:Associate">Associates</a> that was updated on the <a href="ctp:api:type:BusinessUnit">Business Unit</a>.</p>
     *
     *
     * @return null|AssociateCollection
     */
    public function getAssociates()
    {
        if (is_null($this->associates)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_ASSOCIATES);
            if (is_null($data)) {
                return null;
            }
            $this->associates = AssociateCollection::fromArray($data);
        }

        return $this->associates;
    }


    /**
     * @param ?AssociateCollection $associates
     */
    public function setAssociates(?AssociateCollection $associates): void
    {
        $this->associates = $associates;
    }
}

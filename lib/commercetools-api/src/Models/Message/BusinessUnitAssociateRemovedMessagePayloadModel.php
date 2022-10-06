<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\BusinessUnit\Associate;
use Commercetools\Api\Models\BusinessUnit\AssociateModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class BusinessUnitAssociateRemovedMessagePayloadModel extends JsonObjectModel implements BusinessUnitAssociateRemovedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'BusinessUnitAssociateRemoved';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?Associate
     */
    protected $associate;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?Associate $associate = null,
        ?string $type = null
    ) {
        $this->associate = $associate;
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
     * <p>The <a href="ctp:api:type:Associate">Associate</a> that was removed from the <a href="ctp:api:type:BusinessUnit">Business Unit</a>.</p>
     *
     *
     * @return null|Associate
     */
    public function getAssociate()
    {
        if (is_null($this->associate)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_ASSOCIATE);
            if (is_null($data)) {
                return null;
            }

            $this->associate = AssociateModel::of($data);
        }

        return $this->associate;
    }


    /**
     * @param ?Associate $associate
     */
    public function setAssociate(?Associate $associate): void
    {
        $this->associate = $associate;
    }
}

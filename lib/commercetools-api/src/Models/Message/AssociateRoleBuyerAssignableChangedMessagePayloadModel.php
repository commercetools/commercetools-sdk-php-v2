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
final class AssociateRoleBuyerAssignableChangedMessagePayloadModel extends JsonObjectModel implements AssociateRoleBuyerAssignableChangedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'AssociateRoleBuyerAssignableChanged';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?bool
     */
    protected $buyerAssignable;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?bool $buyerAssignable = null,
        ?string $type = null
    ) {
        $this->buyerAssignable = $buyerAssignable;
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
     * <p>The new value of the <code>buyerAssignable</code> field of the AssociateRole.</p>
     *
     *
     * @return null|bool
     */
    public function getBuyerAssignable()
    {
        if (is_null($this->buyerAssignable)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_BUYER_ASSIGNABLE);
            if (is_null($data)) {
                return null;
            }
            $this->buyerAssignable = (bool) $data;
        }

        return $this->buyerAssignable;
    }


    /**
     * @param ?bool $buyerAssignable
     */
    public function setBuyerAssignable(?bool $buyerAssignable): void
    {
        $this->buyerAssignable = $buyerAssignable;
    }
}

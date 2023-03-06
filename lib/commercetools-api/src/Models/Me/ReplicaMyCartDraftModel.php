<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Cart\CartReference;
use Commercetools\Api\Models\Cart\CartReferenceModel;
use Commercetools\Api\Models\Order\OrderReference;
use Commercetools\Api\Models\Order\OrderReferenceModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ReplicaMyCartDraftModel extends JsonObjectModel implements ReplicaMyCartDraft
{
    /**
     *
     * @var ?mixed
     */
    protected $reference;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?JsonObject $reference = null
    ) {
        $this->reference = $reference;
    }

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to a <a href="ctp:api:type:Cart">Cart</a> or <a href="ctp:api:type:Order">Order</a> that is replicated.</p>
     *
     *
     * @return ?mixed
     */
    public function getReference()
    {
        if (is_null($this->reference)) {
            /** @psalm-var ?mixed $data */
            $data = $this->raw(self::FIELD_REFERENCE);
            if (is_null($data)) {
                return null;
            }
            $this->reference = $data;
        }

        return $this->reference;
    }

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to a <a href="ctp:api:type:Cart">Cart</a> or <a href="ctp:api:type:Order">Order</a> that is replicated.</p>
     *
     * @return null|CartReference
     */
    public function getReferenceAsCartReference()
    {
        /** @psalm-var stdClass|array<string, mixed>|null $data */
        $data = $this->raw(self::FIELD_REFERENCE);
        if (is_null($data)) {
            return null;
        }

        return CartReferenceModel::of($data);
    }

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to a <a href="ctp:api:type:Cart">Cart</a> or <a href="ctp:api:type:Order">Order</a> that is replicated.</p>
     *
     * @return null|OrderReference
     */
    public function getReferenceAsOrderReference()
    {
        /** @psalm-var stdClass|array<string, mixed>|null $data */
        $data = $this->raw(self::FIELD_REFERENCE);
        if (is_null($data)) {
            return null;
        }

        return OrderReferenceModel::of($data);
    }

    /**
     * @param ?JsonObject $reference
     */
    public function setReference(?JsonObject $reference): void
    {
        $this->reference = $reference;
    }
}

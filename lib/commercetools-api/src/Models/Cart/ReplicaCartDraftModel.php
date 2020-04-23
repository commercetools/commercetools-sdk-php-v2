<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

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
final class ReplicaCartDraftModel extends JsonObjectModel implements ReplicaCartDraft
{
    /**
     * @var ?mixed
     */
    protected $reference;


    public function __construct(
        JsonObject $reference = null
    ) {
        $this->reference = $reference;
    }

    /**
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
     * @return null|CartReference
     */
    public function getReferenceAsCartReference()
    {
        if (!$this->reference instanceof CartReference) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_REFERENCE);
            if (is_null($data)) {
                return null;
            }

            $this->reference = CartReferenceModel::of($data);
        }

        return $this->reference;
    }

    /**
     * @return null|OrderReference
     */
    public function getReferenceAsOrderReference()
    {
        if (!$this->reference instanceof OrderReference) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_REFERENCE);
            if (is_null($data)) {
                return null;
            }

            $this->reference = OrderReferenceModel::of($data);
        }

        return $this->reference;
    }

    public function setReference(?JsonObject $reference): void
    {
        $this->reference = $reference;
    }
}

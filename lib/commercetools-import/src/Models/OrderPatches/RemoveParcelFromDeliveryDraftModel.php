<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\OrderPatches;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class RemoveParcelFromDeliveryDraftModel extends JsonObjectModel implements RemoveParcelFromDeliveryDraft
{
    /**
     *
     * @var ?string
     */
    protected $parcelId;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $parcelId = null
    ) {
        $this->parcelId = $parcelId;
    }

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:Parcel">Parcel</a> to be removed from the Delivery.</p>
     *
     *
     * @return null|string
     */
    public function getParcelId()
    {
        if (is_null($this->parcelId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PARCEL_ID);
            if (is_null($data)) {
                return null;
            }
            $this->parcelId = (string) $data;
        }

        return $this->parcelId;
    }


    /**
     * @param ?string $parcelId
     */
    public function setParcelId(?string $parcelId): void
    {
        $this->parcelId = $parcelId;
    }
}

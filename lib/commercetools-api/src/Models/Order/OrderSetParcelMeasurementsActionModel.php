<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class OrderSetParcelMeasurementsActionModel extends JsonObjectModel implements OrderSetParcelMeasurementsAction
{
    public const DISCRIMINATOR_VALUE = 'setParcelMeasurements';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?string
     */
    protected $parcelId;

    /**
     *
     * @var ?string
     */
    protected $parcelKey;

    /**
     *
     * @var ?ParcelMeasurements
     */
    protected $measurements;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $parcelId = null,
        ?string $parcelKey = null,
        ?ParcelMeasurements $measurements = null,
        ?string $action = null
    ) {
        $this->parcelId = $parcelId;
        $this->parcelKey = $parcelKey;
        $this->measurements = $measurements;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p><code>id</code> of an existing <a href="ctp:api:type:Parcel">Parcel</a>.</p>
     * <p>Either <code>parcelId</code> or <code>parcelKey</code> must be provided.</p>
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
     * <p><code>key</code> of an existing <a href="ctp:api:type:Parcel">Parcel</a>.</p>
     * <p>Either <code>parcelId</code> or <code>parcelKey</code> must be provided.</p>
     *
     *
     * @return null|string
     */
    public function getParcelKey()
    {
        if (is_null($this->parcelKey)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PARCEL_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->parcelKey = (string) $data;
        }

        return $this->parcelKey;
    }

    /**
     * <p>Value to set.
     * If empty, any existing value is removed.</p>
     *
     *
     * @return null|ParcelMeasurements
     */
    public function getMeasurements()
    {
        if (is_null($this->measurements)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_MEASUREMENTS);
            if (is_null($data)) {
                return null;
            }

            $this->measurements = ParcelMeasurementsModel::of($data);
        }

        return $this->measurements;
    }


    /**
     * @param ?string $parcelId
     */
    public function setParcelId(?string $parcelId): void
    {
        $this->parcelId = $parcelId;
    }

    /**
     * @param ?string $parcelKey
     */
    public function setParcelKey(?string $parcelKey): void
    {
        $this->parcelKey = $parcelKey;
    }

    /**
     * @param ?ParcelMeasurements $measurements
     */
    public function setMeasurements(?ParcelMeasurements $measurements): void
    {
        $this->measurements = $measurements;
    }
}

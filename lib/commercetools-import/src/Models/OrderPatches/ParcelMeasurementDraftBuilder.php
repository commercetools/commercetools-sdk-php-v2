<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\OrderPatches;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Orders\ParcelMeasurements;
use Commercetools\Import\Models\Orders\ParcelMeasurementsBuilder;
use stdClass;

/**
 * @implements Builder<ParcelMeasurementDraft>
 */
final class ParcelMeasurementDraftBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $parcelId;

    /**

     * @var null|ParcelMeasurements|ParcelMeasurementsBuilder
     */
    private $measurements;

    /**

     * @return null|string
     */
    public function getParcelId()
    {
        return $this->parcelId;
    }

    /**

     * @return null|ParcelMeasurements
     */
    public function getMeasurements()
    {
        return $this->measurements instanceof ParcelMeasurementsBuilder ? $this->measurements->build() : $this->measurements;
    }

    /**
     * @param ?string $parcelId
     * @return $this
     */
    public function withParcelId(?string $parcelId)
    {
        $this->parcelId = $parcelId;

        return $this;
    }

    /**
     * @param ?ParcelMeasurements $measurements
     * @return $this
     */
    public function withMeasurements(?ParcelMeasurements $measurements)
    {
        $this->measurements = $measurements;

        return $this;
    }

    /**
     * @deprecated use withMeasurements() instead
     * @return $this
     */
    public function withMeasurementsBuilder(?ParcelMeasurementsBuilder $measurements)
    {
        $this->measurements = $measurements;

        return $this;
    }

    public function build(): ParcelMeasurementDraft
    {
        return new ParcelMeasurementDraftModel(
            $this->parcelId,
            $this->measurements instanceof ParcelMeasurementsBuilder ? $this->measurements->build() : $this->measurements
        );
    }

    public static function of(): ParcelMeasurementDraftBuilder
    {
        return new self();
    }
}

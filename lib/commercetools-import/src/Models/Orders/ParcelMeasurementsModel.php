<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Orders;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ParcelMeasurementsModel extends JsonObjectModel implements ParcelMeasurements
{
    /**
     *
     * @var ?int
     */
    protected $heightInMillimeter;

    /**
     *
     * @var ?int
     */
    protected $lengthInMillimeter;

    /**
     *
     * @var ?int
     */
    protected $widthInMillimeter;

    /**
     *
     * @var ?int
     */
    protected $weightInGram;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?int $heightInMillimeter = null,
        ?int $lengthInMillimeter = null,
        ?int $widthInMillimeter = null,
        ?int $weightInGram = null
    ) {
        $this->heightInMillimeter = $heightInMillimeter;
        $this->lengthInMillimeter = $lengthInMillimeter;
        $this->widthInMillimeter = $widthInMillimeter;
        $this->weightInGram = $weightInGram;
    }

    /**
     * <p>Height of the Parcel.</p>
     *
     *
     * @return null|int
     */
    public function getHeightInMillimeter()
    {
        if (is_null($this->heightInMillimeter)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_HEIGHT_IN_MILLIMETER);
            if (is_null($data)) {
                return null;
            }
            $this->heightInMillimeter = (int) $data;
        }

        return $this->heightInMillimeter;
    }

    /**
     * <p>Length of the Parcel.</p>
     *
     *
     * @return null|int
     */
    public function getLengthInMillimeter()
    {
        if (is_null($this->lengthInMillimeter)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_LENGTH_IN_MILLIMETER);
            if (is_null($data)) {
                return null;
            }
            $this->lengthInMillimeter = (int) $data;
        }

        return $this->lengthInMillimeter;
    }

    /**
     * <p>Width of the Parcel.</p>
     *
     *
     * @return null|int
     */
    public function getWidthInMillimeter()
    {
        if (is_null($this->widthInMillimeter)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_WIDTH_IN_MILLIMETER);
            if (is_null($data)) {
                return null;
            }
            $this->widthInMillimeter = (int) $data;
        }

        return $this->widthInMillimeter;
    }

    /**
     * <p>Weight of the Parcel.</p>
     *
     *
     * @return null|int
     */
    public function getWeightInGram()
    {
        if (is_null($this->weightInGram)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_WEIGHT_IN_GRAM);
            if (is_null($data)) {
                return null;
            }
            $this->weightInGram = (int) $data;
        }

        return $this->weightInGram;
    }


    /**
     * @param ?int $heightInMillimeter
     */
    public function setHeightInMillimeter(?int $heightInMillimeter): void
    {
        $this->heightInMillimeter = $heightInMillimeter;
    }

    /**
     * @param ?int $lengthInMillimeter
     */
    public function setLengthInMillimeter(?int $lengthInMillimeter): void
    {
        $this->lengthInMillimeter = $lengthInMillimeter;
    }

    /**
     * @param ?int $widthInMillimeter
     */
    public function setWidthInMillimeter(?int $widthInMillimeter): void
    {
        $this->widthInMillimeter = $widthInMillimeter;
    }

    /**
     * @param ?int $weightInGram
     */
    public function setWeightInGram(?int $weightInGram): void
    {
        $this->weightInGram = $weightInGram;
    }
}

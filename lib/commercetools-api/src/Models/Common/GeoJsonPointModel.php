<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\JsonObjectModel;

final class GeoJsonPointModel extends JsonObjectModel implements GeoJsonPoint
{
    const DISCRIMINATOR_VALUE = 'Point';

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?array
     */
    protected $coordinates;

    public function __construct(
        string $type = null,
        array $coordinates = null
    ) {
        $this->type = $type;
        $this->coordinates = $coordinates;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(GeoJson::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * @return null|array
     */
    public function getCoordinates()
    {
        if (is_null($this->coordinates)) {
            /** @psalm-var ?array<int, mixed> $data */
            $data = $this->raw(GeoJsonPoint::FIELD_COORDINATES);
            if (is_null($data)) {
                return null;
            }
            $this->coordinates = $data;
        }

        return $this->coordinates;
    }

    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    public function setCoordinates(?array $coordinates): void
    {
        $this->coordinates = $coordinates;
    }
}

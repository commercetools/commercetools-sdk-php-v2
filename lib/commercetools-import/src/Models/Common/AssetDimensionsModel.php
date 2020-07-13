<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Common;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class AssetDimensionsModel extends JsonObjectModel implements AssetDimensions
{
    /**
     * @var ?float
     */
    protected $w;

    /**
     * @var ?float
     */
    protected $h;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?float $w = null,
        ?float $h = null
    ) {
        $this->w = $w;
        $this->h = $h;
    }

    /**
     * @return null|float
     */
    public function getW()
    {
        if (is_null($this->w)) {
            /** @psalm-var ?float $data */
            $data = $this->raw(self::FIELD_W);
            if (is_null($data)) {
                return null;
            }
            $this->w = (float) $data;
        }

        return $this->w;
    }

    /**
     * @return null|float
     */
    public function getH()
    {
        if (is_null($this->h)) {
            /** @psalm-var ?float $data */
            $data = $this->raw(self::FIELD_H);
            if (is_null($data)) {
                return null;
            }
            $this->h = (float) $data;
        }

        return $this->h;
    }


    /**
     * @param ?float $w
     */
    public function setW(?float $w): void
    {
        $this->w = $w;
    }

    /**
     * @param ?float $h
     */
    public function setH(?float $h): void
    {
        $this->h = $h;
    }
}

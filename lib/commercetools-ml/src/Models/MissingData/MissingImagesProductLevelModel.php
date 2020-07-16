<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\MissingData;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class MissingImagesProductLevelModel extends JsonObjectModel implements MissingImagesProductLevel
{
    /**
     * @var ?int
     */
    protected $missingImages;

    /**
     * @var ?int
     */
    protected $total;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?int $missingImages = null,
        ?int $total = null
    ) {
        $this->missingImages = $missingImages;
        $this->total = $total;
    }

    /**
     * <p>Number of products missing images.</p>
     *
     * @return null|int
     */
    public function getMissingImages()
    {
        if (is_null($this->missingImages)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_MISSING_IMAGES);
            if (is_null($data)) {
                return null;
            }
            $this->missingImages = (int) $data;
        }

        return $this->missingImages;
    }

    /**
     * <p>Number of products scanned.</p>
     *
     * @return null|int
     */
    public function getTotal()
    {
        if (is_null($this->total)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_TOTAL);
            if (is_null($data)) {
                return null;
            }
            $this->total = (int) $data;
        }

        return $this->total;
    }


    /**
     * @param ?int $missingImages
     */
    public function setMissingImages(?int $missingImages): void
    {
        $this->missingImages = $missingImages;
    }

    /**
     * @param ?int $total
     */
    public function setTotal(?int $total): void
    {
        $this->total = $total;
    }
}

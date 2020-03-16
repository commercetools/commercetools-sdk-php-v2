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
final class ImageModel extends JsonObjectModel implements Image
{
    /**
     * @var ?string
     */
    protected $url;

    /**
     * @var ?AssetDimensions
     */
    protected $dimensions;

    /**
     * @var ?string
     */
    protected $label;


    public function __construct(
        string $url = null,
        AssetDimensions $dimensions = null,
        string $label = null
    ) {
        $this->url = $url;
        $this->dimensions = $dimensions;
        $this->label = $label;
    }

    /**
     * @return null|string
     */
    public function getUrl()
    {
        if (is_null($this->url)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Image::FIELD_URL);
            if (is_null($data)) {
                return null;
            }
            $this->url = (string) $data;
        }

        return $this->url;
    }

    /**
     * @return null|AssetDimensions
     */
    public function getDimensions()
    {
        if (is_null($this->dimensions)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(Image::FIELD_DIMENSIONS);
            if (is_null($data)) {
                return null;
            }

            $this->dimensions = AssetDimensionsModel::of($data);
        }

        return $this->dimensions;
    }

    /**
     * @return null|string
     */
    public function getLabel()
    {
        if (is_null($this->label)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Image::FIELD_LABEL);
            if (is_null($data)) {
                return null;
            }
            $this->label = (string) $data;
        }

        return $this->label;
    }

    public function setUrl(?string $url): void
    {
        $this->url = $url;
    }

    public function setDimensions(?AssetDimensions $dimensions): void
    {
        $this->dimensions = $dimensions;
    }

    public function setLabel(?string $label): void
    {
        $this->label = $label;
    }
}

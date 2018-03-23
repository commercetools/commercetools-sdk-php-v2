<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Base\JsonObjectModel;

class ImageModel extends JsonObjectModel implements Image {
    /**
     * @var string
     */
    protected $url;
    /**
     * @var ImageDimensions
     */
    protected $dimensions;
    /**
     * @var string
     */
    protected $label;

    /**
     * @return string
     */
    public function getUrl()
    {
        if (is_null($this->url)) {
            $value = $this->raw(Image::FIELD_URL);
            $value = (string)$value;
            $this->url = $value;
        }
        return $this->url;
    }
    /**
     * @return ImageDimensions
     */
    public function getDimensions()
    {
        if (is_null($this->dimensions)) {
            $value = $this->raw(Image::FIELD_DIMENSIONS);
            if (is_null($value)) {
                return $this->mapData(ImageDimensions::class, null);
            }
            $value = $this->mapData(ImageDimensions::class, $value);

            $this->dimensions = $value;
        }
        return $this->dimensions;
    }
    /**
     * @return string
     */
    public function getLabel()
    {
        if (is_null($this->label)) {
            $value = $this->raw(Image::FIELD_LABEL);
            $value = (string)$value;
            $this->label = $value;
        }
        return $this->label;
    }

    /**
     * @param string $url
     * @return $this
     */
    public function setUrl(string $url)
    {
        $this->url = (string)$url;

        return $this;
    }
    /**
     * @param ImageDimensions $dimensions
     * @return $this
     */
    public function setDimensions(ImageDimensions $dimensions)
    {
        $this->dimensions = $dimensions;

        return $this;
    }
    /**
     * @param string $label
     * @return $this
     */
    public function setLabel(string $label)
    {
        $this->label = (string)$label;

        return $this;
    }

}

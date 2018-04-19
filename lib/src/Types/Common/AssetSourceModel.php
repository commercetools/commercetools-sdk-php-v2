<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

class AssetSourceModel extends JsonObjectModel implements AssetSource
{
    /**
     * @var string
     */
    protected $uri;
    /**
     * @var string
     */
    protected $key;
    /**
     * @var AssetDimensions
     */
    protected $dimensions;
    /**
     * @var string
     */
    protected $contentType;

    /**
     * @return string
     */
    public function getUri()
    {
        if (is_null($this->uri)) {
            $value = $this->raw(AssetSource::FIELD_URI);
            $value = (string)$value;
            $this->uri = $value;
        }
        return $this->uri;
    }
    /**
     * @return string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            $value = $this->raw(AssetSource::FIELD_KEY);
            $value = (string)$value;
            $this->key = $value;
        }
        return $this->key;
    }
    /**
     * @return AssetDimensions
     */
    public function getDimensions()
    {
        if (is_null($this->dimensions)) {
            $value = $this->raw(AssetSource::FIELD_DIMENSIONS);
            if (is_null($value)) {
                return $this->mapData(AssetDimensions::class, null);
            }
            $value = $this->mapData(AssetDimensions::class, $value);

            $this->dimensions = $value;
        }
        return $this->dimensions;
    }
    /**
     * @return string
     */
    public function getContentType()
    {
        if (is_null($this->contentType)) {
            $value = $this->raw(AssetSource::FIELD_CONTENT_TYPE);
            $value = (string)$value;
            $this->contentType = $value;
        }
        return $this->contentType;
    }

    /**
     * @param string $uri
     * @return $this
     */
    public function setUri(string $uri)
    {
        $this->uri = (string)$uri;

        return $this;
    }
    /**
     * @param string $key
     * @return $this
     */
    public function setKey(string $key)
    {
        $this->key = (string)$key;

        return $this;
    }
    /**
     * @param AssetDimensions $dimensions
     * @return $this
     */
    public function setDimensions(AssetDimensions $dimensions)
    {
        $this->dimensions = $dimensions;

        return $this;
    }
    /**
     * @param string $contentType
     * @return $this
     */
    public function setContentType(string $contentType)
    {
        $this->contentType = (string)$contentType;

        return $this;
    }

}

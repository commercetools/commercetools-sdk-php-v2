<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class AssetSource extends JsonObject {
    protected $uri;
    protected $key;
    protected $dimensions;
    protected $contentType;

    /**
     * @return string
     */
    public function getUri(): string
    {
        if (is_null($this->uri)) {
            $value = $this->raw('uri');
            if (!is_null($value)) {
                $this->uri = (string)$value;
            } else {
                return '';
            }
        }
        return $this->uri;
    }
                

    /**
     * @return string
     */
    public function getKey(): string
    {
        if (is_null($this->key)) {
            $value = $this->raw('key');
            if (!is_null($value)) {
                $this->key = (string)$value;
            } else {
                return '';
            }
        }
        return $this->key;
    }
                

    /**
     * @return AssetDimensions
     */
    public function getDimensions(): AssetDimensions
    {
        if (is_null($this->dimensions)) {
            $value = $this->raw('dimensions');
            if (!is_null($value)) {
                $this->dimensions = Mapper::map($value, AssetDimensions::class);
            } else {
                return Mapper::map([], AssetDimensions::class);
            }
        }
        return $this->dimensions;
    }
                

    /**
     * @return string
     */
    public function getContentType(): string
    {
        if (is_null($this->contentType)) {
            $value = $this->raw('contentType');
            if (!is_null($value)) {
                $this->contentType = (string)$value;
            } else {
                return '';
            }
        }
        return $this->contentType;
    }
                
}

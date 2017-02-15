<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class Image extends JsonObject {
    protected $url;
    protected $dimensions;
    protected $label;

    /**
     * @return string
     */
    public function getUrl(): string
    {
        if (is_null($this->url)) {
            $value = $this->raw('url');
            if (!is_null($value)) {
                $this->url = (string)$value;
            } else {
                return '';
            }
        }
        return $this->url;
    }
                

    /**
     * @return ImageDimensions
     */
    public function getDimensions(): ImageDimensions
    {
        if (is_null($this->dimensions)) {
            $value = $this->raw('dimensions');
            if (!is_null($value)) {
                $this->dimensions = Mapper::map($value, ImageDimensions::class);
            } else {
                return Mapper::map([], ImageDimensions::class);
            }
        }
        return $this->dimensions;
    }
                

    /**
     * @return string
     */
    public function getLabel(): string
    {
        if (is_null($this->label)) {
            $value = $this->raw('label');
            if (!is_null($value)) {
                $this->label = (string)$value;
            } else {
                return '';
            }
        }
        return $this->label;
    }
                
}

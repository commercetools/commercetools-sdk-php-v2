<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class ImageDimensions extends JsonObject {
    protected $w;
    protected $h;

    /**
     * @return float
     */
    public function getW(): float
    {
        if (is_null($this->w)) {
            $value = $this->raw('w');
            if (!is_null($value)) {
                $this->w = (float)$value;
            } else {
                return 0;
            }
        }
        return $this->w;
    }
                

    /**
     * @return float
     */
    public function getH(): float
    {
        if (is_null($this->h)) {
            $value = $this->raw('h');
            if (!is_null($value)) {
                $this->h = (float)$value;
            } else {
                return 0;
            }
        }
        return $this->h;
    }
                
}

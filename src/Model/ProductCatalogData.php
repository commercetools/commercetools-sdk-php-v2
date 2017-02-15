<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class ProductCatalogData extends JsonObject {
    protected $published;
    protected $current;
    protected $staged;
    protected $hasStagedChanges;

    /**
     * @return bool
     */
    public function getPublished(): bool
    {
        if (is_null($this->published)) {
            $value = $this->raw('published');
            if (!is_null($value)) {
                $this->published = (bool)$value;
            } else {
                return false;
            }
        }
        return $this->published;
    }
                

    /**
     * @return ProductData
     */
    public function getCurrent(): ProductData
    {
        if (is_null($this->current)) {
            $value = $this->raw('current');
            if (!is_null($value)) {
                $this->current = Mapper::map($value, ProductData::class);
            } else {
                return Mapper::map([], ProductData::class);
            }
        }
        return $this->current;
    }
                

    /**
     * @return ProductData
     */
    public function getStaged(): ProductData
    {
        if (is_null($this->staged)) {
            $value = $this->raw('staged');
            if (!is_null($value)) {
                $this->staged = Mapper::map($value, ProductData::class);
            } else {
                return Mapper::map([], ProductData::class);
            }
        }
        return $this->staged;
    }
                

    /**
     * @return bool
     */
    public function getHasStagedChanges(): bool
    {
        if (is_null($this->hasStagedChanges)) {
            $value = $this->raw('hasStagedChanges');
            if (!is_null($value)) {
                $this->hasStagedChanges = (bool)$value;
            } else {
                return false;
            }
        }
        return $this->hasStagedChanges;
    }
                
}

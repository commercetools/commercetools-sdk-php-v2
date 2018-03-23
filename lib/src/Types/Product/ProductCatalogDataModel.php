<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Base\JsonObjectModel;

class ProductCatalogDataModel extends JsonObjectModel implements ProductCatalogData {
    /**
     * @var mixed
     */
    protected $published;
    /**
     * @var ProductData
     */
    protected $current;
    /**
     * @var ProductData
     */
    protected $staged;
    /**
     * @var mixed
     */
    protected $hasStagedChanges;

    /**
     * @return mixed
     */
    public function getPublished()
    {
        if (is_null($this->published)) {
            $value = $this->raw(ProductCatalogData::FIELD_PUBLISHED);
            $this->published = $value;
        }
        return $this->published;
    }
    /**
     * @return ProductData
     */
    public function getCurrent()
    {
        if (is_null($this->current)) {
            $value = $this->raw(ProductCatalogData::FIELD_CURRENT);
            if (is_null($value)) {
                return $this->mapData(ProductData::class, null);
            }
            $value = $this->mapData(ProductData::class, $value);

            $this->current = $value;
        }
        return $this->current;
    }
    /**
     * @return ProductData
     */
    public function getStaged()
    {
        if (is_null($this->staged)) {
            $value = $this->raw(ProductCatalogData::FIELD_STAGED);
            if (is_null($value)) {
                return $this->mapData(ProductData::class, null);
            }
            $value = $this->mapData(ProductData::class, $value);

            $this->staged = $value;
        }
        return $this->staged;
    }
    /**
     * @return mixed
     */
    public function getHasStagedChanges()
    {
        if (is_null($this->hasStagedChanges)) {
            $value = $this->raw(ProductCatalogData::FIELD_HAS_STAGED_CHANGES);
            $this->hasStagedChanges = $value;
        }
        return $this->hasStagedChanges;
    }

    /**
     * @param $published
     * @return $this
     */
    public function setPublished($published)
    {
        $this->published = $published;

        return $this;
    }
    /**
     * @param ProductData $current
     * @return $this
     */
    public function setCurrent(ProductData $current)
    {
        $this->current = $current;

        return $this;
    }
    /**
     * @param ProductData $staged
     * @return $this
     */
    public function setStaged(ProductData $staged)
    {
        $this->staged = $staged;

        return $this;
    }
    /**
     * @param $hasStagedChanges
     * @return $this
     */
    public function setHasStagedChanges($hasStagedChanges)
    {
        $this->hasStagedChanges = $hasStagedChanges;

        return $this;
    }

}

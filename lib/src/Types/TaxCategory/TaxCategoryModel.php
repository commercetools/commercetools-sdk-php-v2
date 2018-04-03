<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\TaxCategory;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Common\ResourceModel;

use Commercetools\Builder\TaxCategoryUpdateBuilder;
use Commercetools\Types\Common\Resource;

class TaxCategoryModel extends ResourceModel implements TaxCategory {
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var TaxRateCollection
     */
    protected $rates;
    /**
     * @var string
     */
    protected $key;

    /**
     * @return string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            $value = $this->raw(TaxCategory::FIELD_NAME);
            $value = (string)$value;
            $this->name = $value;
        }
        return $this->name;
    }
    /**
     * @return string
     */
    public function getDescription()
    {
        if (is_null($this->description)) {
            $value = $this->raw(TaxCategory::FIELD_DESCRIPTION);
            $value = (string)$value;
            $this->description = $value;
        }
        return $this->description;
    }
    /**
     * @return TaxRateCollection
     */
    public function getRates()
    {
        if (is_null($this->rates)) {
            $value = $this->raw(TaxCategory::FIELD_RATES);
            if (is_null($value)) {
                return $this->mapData(TaxRateCollection::class, null);
            }
            $value = $this->mapData(TaxRateCollection::class, $value);
            $this->rates = $value;
        }
        return $this->rates;
    }
    /**
     * @return string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            $value = $this->raw(TaxCategory::FIELD_KEY);
            $value = (string)$value;
            $this->key = $value;
        }
        return $this->key;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name)
    {
        $this->name = (string)$name;

        return $this;
    }
    /**
     * @param string $description
     * @return $this
     */
    public function setDescription(string $description)
    {
        $this->description = (string)$description;

        return $this;
    }
    /**
     * @param TaxRateCollection $rates
     * @return $this
     */
    public function setRates(TaxRateCollection $rates)
    {
        $this->rates = $rates;

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
     * @return TaxCategoryUpdateBuilder
     */
    public function update()
    {
        $builder = new TaxCategoryUpdateBuilder();
        $builder->setMapper($this->getMapper());
        $builder->with($this);
        return $builder;
    }
}

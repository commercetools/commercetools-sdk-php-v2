<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\TaxCategory;

use Commercetools\Base\JsonObjectModel;

class TaxCategoryDraftModel extends JsonObjectModel implements TaxCategoryDraft {
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var TaxRateDraftCollection
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
            $value = $this->raw(TaxCategoryDraft::FIELD_NAME);
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
            $value = $this->raw(TaxCategoryDraft::FIELD_DESCRIPTION);
            $value = (string)$value;
            $this->description = $value;
        }
        return $this->description;
    }
    /**
     * @return TaxRateDraftCollection
     */
    public function getRates()
    {
        if (is_null($this->rates)) {
            $value = $this->raw(TaxCategoryDraft::FIELD_RATES);
            if (is_null($value)) {
                return $this->mapData(TaxRateDraftCollection::class, null);
            }
            $value = $this->mapData(TaxRateDraftCollection::class, $value);
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
            $value = $this->raw(TaxCategoryDraft::FIELD_KEY);
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
     * @param TaxRateDraftCollection $rates
     * @return $this
     */
    public function setRates(TaxRateDraftCollection $rates)
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

}

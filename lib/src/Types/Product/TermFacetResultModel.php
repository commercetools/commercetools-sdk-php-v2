<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Product\FacetResultModel;

class TermFacetResultModel extends FacetResultModel implements TermFacetResult
{
    const DISCRIMINATOR_VALUE = 'terms';

    /**
     * @var string
     */
    protected $dataType;
    /**
     * @var int
     */
    protected $missing;
    /**
     * @var int
     */
    protected $total;
    /**
     * @var int
     */
    protected $other;
    /**
     * @var FacetResultTermCollection
     */
    protected $terms;

    /**
     * @return string
     */
    public function getDataType()
    {
        if (is_null($this->dataType)) {
            $value = $this->raw(TermFacetResult::FIELD_DATA_TYPE);
            $value = (string)$value;
            $this->dataType = $value;
        }
        return $this->dataType;
    }
    /**
     * @return int
     */
    public function getMissing()
    {
        if (is_null($this->missing)) {
            $value = $this->raw(TermFacetResult::FIELD_MISSING);
            $value = (int)$value;
            $this->missing = $value;
        }
        return $this->missing;
    }
    /**
     * @return int
     */
    public function getTotal()
    {
        if (is_null($this->total)) {
            $value = $this->raw(TermFacetResult::FIELD_TOTAL);
            $value = (int)$value;
            $this->total = $value;
        }
        return $this->total;
    }
    /**
     * @return int
     */
    public function getOther()
    {
        if (is_null($this->other)) {
            $value = $this->raw(TermFacetResult::FIELD_OTHER);
            $value = (int)$value;
            $this->other = $value;
        }
        return $this->other;
    }
    /**
     * @return FacetResultTermCollection
     */
    public function getTerms()
    {
        if (is_null($this->terms)) {
            $value = $this->raw(TermFacetResult::FIELD_TERMS);
            if (is_null($value)) {
                return $this->mapData(FacetResultTermCollection::class, null);
            }
            $value = $this->mapData(FacetResultTermCollection::class, $value);
            $this->terms = $value;
        }
        return $this->terms;
    }

    /**
     * @param string $dataType
     * @return $this
     */
    public function setDataType(string $dataType)
    {
        $this->dataType = (string)$dataType;

        return $this;
    }
    /**
     * @param int $missing
     * @return $this
     */
    public function setMissing(int $missing)
    {
        $this->missing = (int)$missing;

        return $this;
    }
    /**
     * @param int $total
     * @return $this
     */
    public function setTotal(int $total)
    {
        $this->total = (int)$total;

        return $this;
    }
    /**
     * @param int $other
     * @return $this
     */
    public function setOther(int $other)
    {
        $this->other = (int)$other;

        return $this;
    }
    /**
     * @param FacetResultTermCollection $terms
     * @return $this
     */
    public function setTerms(FacetResultTermCollection $terms)
    {
        $this->terms = $terms;

        return $this;
    }

}

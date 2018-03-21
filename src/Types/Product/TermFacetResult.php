<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

interface TermFacetResult extends FacetResult {
    const FIELD_DATA_TYPE = 'dataType';
    const FIELD_MISSING = 'missing';
    const FIELD_TOTAL = 'total';
    const FIELD_OTHER = 'other';
    const FIELD_TERMS = 'terms';

    /**
     * @return string
     */
    public function getDataType();

    /**
     * @return int
     */
    public function getMissing();

    /**
     * @return int
     */
    public function getTotal();

    /**
     * @return int
     */
    public function getOther();

    /**
     * @return FacetResultTermCollection
     */
    public function getTerms();

    /**
     * @param string $dataType
     * @return $this
     */
    public function setDataType(string $dataType);

    /**
     * @param int $missing
     * @return $this
     */
    public function setMissing(int $missing);

    /**
     * @param int $total
     * @return $this
     */
    public function setTotal(int $total);

    /**
     * @param int $other
     * @return $this
     */
    public function setOther(int $other);

    /**
     * @param FacetResultTermCollection $terms
     * @return $this
     */
    public function setTerms(FacetResultTermCollection $terms);

}

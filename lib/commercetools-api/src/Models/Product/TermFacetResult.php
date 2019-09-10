<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObject;

interface TermFacetResult extends FacetResult
{
    
    const FIELD_DATA_TYPE = 'dataType';
    const FIELD_MISSING = 'missing';
    const FIELD_TOTAL = 'total';
    const FIELD_OTHER = 'other';
    const FIELD_TERMS = 'terms';

    /**
     *
     * @return string|null
     */
    public function getDataType();
    
    /**
     *
     * @return int|null
     */
    public function getMissing();
    
    /**
     *
     * @return int|null
     */
    public function getTotal();
    
    /**
     *
     * @return int|null
     */
    public function getOther();
    
    /**
     *
     * @return FacetResultTermCollection|null
     */
    public function getTerms();
    public function setDataType(?string $dataType): void;
    
    public function setMissing(?int $missing): void;
    
    public function setTotal(?int $total): void;
    
    public function setOther(?int $other): void;
    
    public function setTerms(?FacetResultTermCollection $terms): void;
}
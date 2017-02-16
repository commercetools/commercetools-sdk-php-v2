<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class TermFacetResult extends FacetResult {
    protected $dataType;
    protected $missing;
    protected $total;
    protected $other;
    protected $terms;
    const DISCRIMINATOR_VALUE = 'terms';

    /**
     * @return TermFacetResultType
     */
    public function getDataType(): TermFacetResultType
    {
        if (is_null($this->dataType)) {
            $value = $this->raw('dataType');
            if (!is_null($value)) {
                $this->dataType = Mapper::map($value, TermFacetResultType::class);
            } else {
                return Mapper::map([], TermFacetResultType::class);
            }
        }
        return $this->dataType;
    }
                

    /**
     * @return int
     */
    public function getMissing(): int
    {
        if (is_null($this->missing)) {
            $value = $this->raw('missing');
            if (!is_null($value)) {
                $this->missing = (int)$value;
            } else {
                return 0;
            }
        }
        return $this->missing;
    }
                

    /**
     * @return int
     */
    public function getTotal(): int
    {
        if (is_null($this->total)) {
            $value = $this->raw('total');
            if (!is_null($value)) {
                $this->total = (int)$value;
            } else {
                return 0;
            }
        }
        return $this->total;
    }
                

    /**
     * @return int
     */
    public function getOther(): int
    {
        if (is_null($this->other)) {
            $value = $this->raw('other');
            if (!is_null($value)) {
                $this->other = (int)$value;
            } else {
                return 0;
            }
        }
        return $this->other;
    }
                

    /**
     * @return FacetResultTermCollection
     */
    public function getTerms(): FacetResultTermCollection
    {
        if (is_null($this->terms)) {
            $value = $this->raw('terms');
            if (!is_null($value)) {
                $this->terms = Mapper::map($value, FacetResultTermCollection::class);
            } else {
                return Mapper::map([], FacetResultTermCollection::class);
            }
        }
        return $this->terms;
    }
                
}

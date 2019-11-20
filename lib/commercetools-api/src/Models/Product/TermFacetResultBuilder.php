<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\Builder;

/**
 * @implements Builder<TermFacetResult>
 */
final class TermFacetResultBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $other;

    /**
     * @var ?int
     */
    private $total;

    /**
     * @var ?FacetResultTermCollection
     */
    private $terms;

    /**
     * @var ?string
     */
    private $dataType;

    /**
     * @var ?int
     */
    private $missing;

    /**
     * @return null|int
     */
    public function getOther()
    {
        return $this->other;
    }

    /**
     * @return null|int
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @return null|FacetResultTermCollection
     */
    public function getTerms()
    {
        return $this->terms;
    }

    /**
     * @return null|string
     */
    public function getDataType()
    {
        return $this->dataType;
    }

    /**
     * @return null|int
     */
    public function getMissing()
    {
        return $this->missing;
    }

    /**
     * @return $this
     */
    public function withOther(?int $other)
    {
        $this->other = $other;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTotal(?int $total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTerms(?FacetResultTermCollection $terms)
    {
        $this->terms = $terms;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDataType(?string $dataType)
    {
        $this->dataType = $dataType;

        return $this;
    }

    /**
     * @return $this
     */
    public function withMissing(?int $missing)
    {
        $this->missing = $missing;

        return $this;
    }

    public function build(): TermFacetResult
    {
        return new TermFacetResultModel(
            $this->other,
            $this->total,
            $this->terms,
            $this->dataType,
            $this->missing
        );
    }

    public static function of(): TermFacetResultBuilder
    {
        return new self();
    }
}

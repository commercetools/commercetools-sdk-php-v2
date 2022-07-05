<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<TermFacetResult>
 */
final class TermFacetResultBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $dataType;

    /**

     * @var ?int
     */
    private $missing;

    /**

     * @var ?int
     */
    private $total;

    /**

     * @var ?int
     */
    private $other;

    /**

     * @var ?FacetTermCollection
     */
    private $terms;

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

     * @return null|int
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**

     * @return null|int
     */
    public function getOther()
    {
        return $this->other;
    }

    /**

     * @return null|FacetTermCollection
     */
    public function getTerms()
    {
        return $this->terms;
    }

    /**
     * @param ?string $dataType
     * @return $this
     */
    public function withDataType(?string $dataType)
    {
        $this->dataType = $dataType;

        return $this;
    }

    /**
     * @param ?int $missing
     * @return $this
     */
    public function withMissing(?int $missing)
    {
        $this->missing = $missing;

        return $this;
    }

    /**
     * @param ?int $total
     * @return $this
     */
    public function withTotal(?int $total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * @param ?int $other
     * @return $this
     */
    public function withOther(?int $other)
    {
        $this->other = $other;

        return $this;
    }

    /**
     * @param ?FacetTermCollection $terms
     * @return $this
     */
    public function withTerms(?FacetTermCollection $terms)
    {
        $this->terms = $terms;

        return $this;
    }


    public function build(): TermFacetResult
    {
        return new TermFacetResultModel(
            $this->dataType,
            $this->missing,
            $this->total,
            $this->other,
            $this->terms
        );
    }

    public static function of(): TermFacetResultBuilder
    {
        return new self();
    }
}

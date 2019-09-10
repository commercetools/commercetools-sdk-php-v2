<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class TermFacetResultModel extends JsonObjectModel implements TermFacetResult
{
    const DISCRIMINATOR_VALUE = 'terms';

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?int
     */
    protected $other;

    /**
     * @var ?int
     */
    protected $total;

    /**
     * @var ?FacetResultTermCollection
     */
    protected $terms;

    /**
     * @var ?string
     */
    protected $dataType;

    /**
     * @var ?int
     */
    protected $missing;

    public function __construct(
        string $type = null,
        int $other = null,
        int $total = null,
        FacetResultTermCollection $terms = null,
        string $dataType = null,
        int $missing = null
    ) {
        $this->type = $type;
        $this->other = $other;
        $this->total = $total;
        $this->terms = $terms;
        $this->dataType = $dataType;
        $this->missing = $missing;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(FacetResult::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * @return null|int
     */
    public function getOther()
    {
        if (is_null($this->other)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(TermFacetResult::FIELD_OTHER);
            if (is_null($data)) {
                return null;
            }
            $this->other = (int) $data;
        }

        return $this->other;
    }

    /**
     * @return null|int
     */
    public function getTotal()
    {
        if (is_null($this->total)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(TermFacetResult::FIELD_TOTAL);
            if (is_null($data)) {
                return null;
            }
            $this->total = (int) $data;
        }

        return $this->total;
    }

    /**
     * @return null|FacetResultTermCollection
     */
    public function getTerms()
    {
        if (is_null($this->terms)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(TermFacetResult::FIELD_TERMS);
            if (is_null($data)) {
                return null;
            }
            $this->terms = FacetResultTermCollection::fromArray($data);
        }

        return $this->terms;
    }

    /**
     * @return null|string
     */
    public function getDataType()
    {
        if (is_null($this->dataType)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(TermFacetResult::FIELD_DATA_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->dataType = (string) $data;
        }

        return $this->dataType;
    }

    /**
     * @return null|int
     */
    public function getMissing()
    {
        if (is_null($this->missing)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(TermFacetResult::FIELD_MISSING);
            if (is_null($data)) {
                return null;
            }
            $this->missing = (int) $data;
        }

        return $this->missing;
    }

    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    public function setOther(?int $other): void
    {
        $this->other = $other;
    }

    public function setTotal(?int $total): void
    {
        $this->total = $total;
    }

    public function setTerms(?FacetResultTermCollection $terms): void
    {
        $this->terms = $terms;
    }

    public function setDataType(?string $dataType): void
    {
        $this->dataType = $dataType;
    }

    public function setMissing(?int $missing): void
    {
        $this->missing = $missing;
    }
}

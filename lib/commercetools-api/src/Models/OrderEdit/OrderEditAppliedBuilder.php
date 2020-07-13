<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<OrderEditApplied>
 */
final class OrderEditAppliedBuilder implements Builder
{
    /**
     * @var ?DateTimeImmutable
     */
    private $appliedAt;

    /**
     * @var null|OrderExcerpt|OrderExcerptBuilder
     */
    private $excerptBeforeEdit;

    /**
     * @var null|OrderExcerpt|OrderExcerptBuilder
     */
    private $excerptAfterEdit;

    /**
     * @return null|DateTimeImmutable
     */
    public function getAppliedAt()
    {
        return $this->appliedAt;
    }

    /**
     * @return null|OrderExcerpt
     */
    public function getExcerptBeforeEdit()
    {
        return $this->excerptBeforeEdit instanceof OrderExcerptBuilder ? $this->excerptBeforeEdit->build() : $this->excerptBeforeEdit;
    }

    /**
     * @return null|OrderExcerpt
     */
    public function getExcerptAfterEdit()
    {
        return $this->excerptAfterEdit instanceof OrderExcerptBuilder ? $this->excerptAfterEdit->build() : $this->excerptAfterEdit;
    }

    /**
     * @param ?DateTimeImmutable $appliedAt
     * @return $this
     */
    public function withAppliedAt(?DateTimeImmutable $appliedAt)
    {
        $this->appliedAt = $appliedAt;

        return $this;
    }

    /**
     * @param ?OrderExcerpt $excerptBeforeEdit
     * @return $this
     */
    public function withExcerptBeforeEdit(?OrderExcerpt $excerptBeforeEdit)
    {
        $this->excerptBeforeEdit = $excerptBeforeEdit;

        return $this;
    }

    /**
     * @param ?OrderExcerpt $excerptAfterEdit
     * @return $this
     */
    public function withExcerptAfterEdit(?OrderExcerpt $excerptAfterEdit)
    {
        $this->excerptAfterEdit = $excerptAfterEdit;

        return $this;
    }

    /**
     * @return $this
     */
    public function withExcerptBeforeEditBuilder(?OrderExcerptBuilder $excerptBeforeEdit)
    {
        $this->excerptBeforeEdit = $excerptBeforeEdit;

        return $this;
    }

    /**
     * @return $this
     */
    public function withExcerptAfterEditBuilder(?OrderExcerptBuilder $excerptAfterEdit)
    {
        $this->excerptAfterEdit = $excerptAfterEdit;

        return $this;
    }

    public function build(): OrderEditApplied
    {
        return new OrderEditAppliedModel(
            $this->appliedAt,
            $this->excerptBeforeEdit instanceof OrderExcerptBuilder ? $this->excerptBeforeEdit->build() : $this->excerptBeforeEdit,
            $this->excerptAfterEdit instanceof OrderExcerptBuilder ? $this->excerptAfterEdit->build() : $this->excerptAfterEdit
        );
    }

    public static function of(): OrderEditAppliedBuilder
    {
        return new self();
    }
}

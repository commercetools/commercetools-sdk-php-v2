<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\Builder;
use DateTimeImmutable;

/**
 * @implements Builder<OrderEditApplied>
 */
final class OrderEditAppliedBuilder implements Builder
{
    /**
     * @var OrderExcerpt|?OrderExcerptBuilder
     */
    private $excerptAfterEdit;

    /**
     * @var OrderExcerpt|?OrderExcerptBuilder
     */
    private $excerptBeforeEdit;

    /**
     * @var ?DateTimeImmutable
     */
    private $appliedAt;

    /**
     * @return null|OrderExcerpt
     */
    public function getExcerptAfterEdit()
    {
        return $this->excerptAfterEdit instanceof OrderExcerptBuilder ? $this->excerptAfterEdit->build() : $this->excerptAfterEdit;
    }

    /**
     * @return null|OrderExcerpt
     */
    public function getExcerptBeforeEdit()
    {
        return $this->excerptBeforeEdit instanceof OrderExcerptBuilder ? $this->excerptBeforeEdit->build() : $this->excerptBeforeEdit;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getAppliedAt()
    {
        return $this->appliedAt;
    }

    /**
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
    public function withExcerptBeforeEdit(?OrderExcerpt $excerptBeforeEdit)
    {
        $this->excerptBeforeEdit = $excerptBeforeEdit;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAppliedAt(?DateTimeImmutable $appliedAt)
    {
        $this->appliedAt = $appliedAt;

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

    /**
     * @return $this
     */
    public function withExcerptBeforeEditBuilder(?OrderExcerptBuilder $excerptBeforeEdit)
    {
        $this->excerptBeforeEdit = $excerptBeforeEdit;

        return $this;
    }

    public function build(): OrderEditApplied
    {
        return new OrderEditAppliedModel(
            ($this->excerptAfterEdit instanceof OrderExcerptBuilder ? $this->excerptAfterEdit->build() : $this->excerptAfterEdit),
            ($this->excerptBeforeEdit instanceof OrderExcerptBuilder ? $this->excerptBeforeEdit->build() : $this->excerptBeforeEdit),
            $this->appliedAt
        );
    }

    public static function of(): OrderEditAppliedBuilder
    {
        return new self();
    }
}

<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

final class OrderEditAppliedModel extends JsonObjectModel implements OrderEditApplied
{
    const DISCRIMINATOR_VALUE = 'Applied';

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?OrderExcerpt
     */
    protected $excerptAfterEdit;

    /**
     * @var ?OrderExcerpt
     */
    protected $excerptBeforeEdit;

    /**
     * @var ?DateTimeImmutable
     */
    protected $appliedAt;

    public function __construct(
        OrderExcerpt $excerptAfterEdit = null,
        OrderExcerpt $excerptBeforeEdit = null,
        DateTimeImmutable $appliedAt = null
    ) {
        $this->excerptAfterEdit = $excerptAfterEdit;
        $this->excerptBeforeEdit = $excerptBeforeEdit;
        $this->appliedAt = $appliedAt;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(OrderEditResult::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * @return null|OrderExcerpt
     */
    public function getExcerptAfterEdit()
    {
        if (is_null($this->excerptAfterEdit)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(OrderEditApplied::FIELD_EXCERPT_AFTER_EDIT);
            if (is_null($data)) {
                return null;
            }

            $this->excerptAfterEdit = OrderExcerptModel::of($data);
        }

        return $this->excerptAfterEdit;
    }

    /**
     * @return null|OrderExcerpt
     */
    public function getExcerptBeforeEdit()
    {
        if (is_null($this->excerptBeforeEdit)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(OrderEditApplied::FIELD_EXCERPT_BEFORE_EDIT);
            if (is_null($data)) {
                return null;
            }

            $this->excerptBeforeEdit = OrderExcerptModel::of($data);
        }

        return $this->excerptBeforeEdit;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getAppliedAt()
    {
        if (is_null($this->appliedAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(OrderEditApplied::FIELD_APPLIED_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->appliedAt = $data;
        }

        return $this->appliedAt;
    }

    public function setExcerptAfterEdit(?OrderExcerpt $excerptAfterEdit): void
    {
        $this->excerptAfterEdit = $excerptAfterEdit;
    }

    public function setExcerptBeforeEdit(?OrderExcerpt $excerptBeforeEdit): void
    {
        $this->excerptBeforeEdit = $excerptBeforeEdit;
    }

    public function setAppliedAt(?DateTimeImmutable $appliedAt): void
    {
        $this->appliedAt = $appliedAt;
    }

    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[OrderEditApplied::FIELD_APPLIED_AT]) && $data[OrderEditApplied::FIELD_APPLIED_AT] instanceof \DateTimeImmutable) {
            $data[OrderEditApplied::FIELD_APPLIED_AT] = $data[OrderEditApplied::FIELD_APPLIED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        return (object) $data;
    }
}

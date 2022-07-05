<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @internal
 */
final class OrderEditAppliedModel extends JsonObjectModel implements OrderEditApplied
{
    public const DISCRIMINATOR_VALUE = 'Applied';
    /**

     * @var ?string
     */
    protected $type;

    /**

     * @var ?DateTimeImmutable
     */
    protected $appliedAt;

    /**

     * @var ?OrderExcerpt
     */
    protected $excerptBeforeEdit;

    /**

     * @var ?OrderExcerpt
     */
    protected $excerptAfterEdit;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?DateTimeImmutable $appliedAt = null,
        ?OrderExcerpt $excerptBeforeEdit = null,
        ?OrderExcerpt $excerptAfterEdit = null
    ) {
        $this->appliedAt = $appliedAt;
        $this->excerptBeforeEdit = $excerptBeforeEdit;
        $this->excerptAfterEdit = $excerptAfterEdit;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**

     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**

     * @return null|DateTimeImmutable
     */
    public function getAppliedAt()
    {
        if (is_null($this->appliedAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_APPLIED_AT);
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

    /**

     * @return null|OrderExcerpt
     */
    public function getExcerptBeforeEdit()
    {
        if (is_null($this->excerptBeforeEdit)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_EXCERPT_BEFORE_EDIT);
            if (is_null($data)) {
                return null;
            }

            $this->excerptBeforeEdit = OrderExcerptModel::of($data);
        }

        return $this->excerptBeforeEdit;
    }

    /**

     * @return null|OrderExcerpt
     */
    public function getExcerptAfterEdit()
    {
        if (is_null($this->excerptAfterEdit)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_EXCERPT_AFTER_EDIT);
            if (is_null($data)) {
                return null;
            }

            $this->excerptAfterEdit = OrderExcerptModel::of($data);
        }

        return $this->excerptAfterEdit;
    }


    /**
     * @param ?DateTimeImmutable $appliedAt
     */
    public function setAppliedAt(?DateTimeImmutable $appliedAt): void
    {
        $this->appliedAt = $appliedAt;
    }

    /**
     * @param ?OrderExcerpt $excerptBeforeEdit
     */
    public function setExcerptBeforeEdit(?OrderExcerpt $excerptBeforeEdit): void
    {
        $this->excerptBeforeEdit = $excerptBeforeEdit;
    }

    /**
     * @param ?OrderExcerpt $excerptAfterEdit
     */
    public function setExcerptAfterEdit(?OrderExcerpt $excerptAfterEdit): void
    {
        $this->excerptAfterEdit = $excerptAfterEdit;
    }


    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[OrderEditApplied::FIELD_APPLIED_AT]) && $data[OrderEditApplied::FIELD_APPLIED_AT] instanceof \DateTimeImmutable) {
            $data[OrderEditApplied::FIELD_APPLIED_AT] = $data[OrderEditApplied::FIELD_APPLIED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}

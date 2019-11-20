<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;

final class DiscountCodeSetValidFromAndUntilActionModel extends JsonObjectModel implements DiscountCodeSetValidFromAndUntilAction
{
    const DISCRIMINATOR_VALUE = 'setValidFromAndUntil';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?DateTimeImmutable
     */
    protected $validUntil;

    /**
     * @var ?DateTimeImmutable
     */
    protected $validFrom;

    public function __construct(
        DateTimeImmutable $validUntil = null,
        DateTimeImmutable $validFrom = null
    ) {
        $this->validUntil = $validUntil;
        $this->validFrom = $validFrom;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(DiscountCodeUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getValidUntil()
    {
        if (is_null($this->validUntil)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(DiscountCodeSetValidFromAndUntilAction::FIELD_VALID_UNTIL);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->validUntil = $data;
        }

        return $this->validUntil;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getValidFrom()
    {
        if (is_null($this->validFrom)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(DiscountCodeSetValidFromAndUntilAction::FIELD_VALID_FROM);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->validFrom = $data;
        }

        return $this->validFrom;
    }

    public function setValidUntil(?DateTimeImmutable $validUntil): void
    {
        $this->validUntil = $validUntil;
    }

    public function setValidFrom(?DateTimeImmutable $validFrom): void
    {
        $this->validFrom = $validFrom;
    }

    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[DiscountCodeSetValidFromAndUntilAction::FIELD_VALID_UNTIL]) && $data[DiscountCodeSetValidFromAndUntilAction::FIELD_VALID_UNTIL] instanceof \DateTimeImmutable) {
            $data[DiscountCodeSetValidFromAndUntilAction::FIELD_VALID_UNTIL] = $data[DiscountCodeSetValidFromAndUntilAction::FIELD_VALID_UNTIL]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[DiscountCodeSetValidFromAndUntilAction::FIELD_VALID_FROM]) && $data[DiscountCodeSetValidFromAndUntilAction::FIELD_VALID_FROM] instanceof \DateTimeImmutable) {
            $data[DiscountCodeSetValidFromAndUntilAction::FIELD_VALID_FROM] = $data[DiscountCodeSetValidFromAndUntilAction::FIELD_VALID_FROM]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        return (object) $data;
    }
}

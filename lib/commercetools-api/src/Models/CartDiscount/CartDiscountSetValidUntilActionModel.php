<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;

final class CartDiscountSetValidUntilActionModel extends JsonObjectModel implements CartDiscountSetValidUntilAction
{
    const DISCRIMINATOR_VALUE = 'setValidUntil';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?DateTimeImmutable
     */
    protected $validUntil;

    public function __construct(
        DateTimeImmutable $validUntil = null
    ) {
        $this->validUntil = $validUntil;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CartDiscountUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>If absent, the field with the value is removed in case a value was set before.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getValidUntil()
    {
        if (is_null($this->validUntil)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CartDiscountSetValidUntilAction::FIELD_VALID_UNTIL);
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

    public function setValidUntil(?DateTimeImmutable $validUntil): void
    {
        $this->validUntil = $validUntil;
    }

    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[CartDiscountSetValidUntilAction::FIELD_VALID_UNTIL]) && $data[CartDiscountSetValidUntilAction::FIELD_VALID_UNTIL] instanceof \DateTimeImmutable) {
            $data[CartDiscountSetValidUntilAction::FIELD_VALID_UNTIL] = $data[CartDiscountSetValidUntilAction::FIELD_VALID_UNTIL]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        return (object) $data;
    }
}

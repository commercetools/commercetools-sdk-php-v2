<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;

final class ProductDiscountSetValidUntilActionModel extends JsonObjectModel implements ProductDiscountSetValidUntilAction
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
        string $action = null,
        DateTimeImmutable $validUntil = null
    ) {
        $this->action = $action;
        $this->validUntil = $validUntil;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProductDiscountUpdateAction::FIELD_ACTION);
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
            $data = $this->raw(ProductDiscountSetValidUntilAction::FIELD_VALID_UNTIL);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::TIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->validUntil = $data;
        }

        return $this->validUntil;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setValidUntil(?DateTimeImmutable $validUntil): void
    {
        $this->validUntil = $validUntil;
    }

    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[ProductDiscountSetValidUntilAction::FIELD_VALID_UNTIL]) && $data[ProductDiscountSetValidUntilAction::FIELD_VALID_UNTIL] instanceof \DateTimeImmutable) {
            $data[ProductDiscountSetValidUntilAction::FIELD_VALID_UNTIL] = $data[ProductDiscountSetValidUntilAction::FIELD_VALID_UNTIL]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        return (object) $data;
    }
}

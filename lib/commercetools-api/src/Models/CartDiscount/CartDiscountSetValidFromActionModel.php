<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @internal
 */
final class CartDiscountSetValidFromActionModel extends JsonObjectModel implements CartDiscountSetValidFromAction
{
    public const DISCRIMINATOR_VALUE = 'setValidFrom';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $validFrom;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?DateTimeImmutable $validFrom = null,
        ?string $action = null
    ) {
        $this->validFrom = $validFrom;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>Value to set.
     * If empty, any existing value will be removed.</p>
     *
     *
     * @return null|DateTimeImmutable
     */
    public function getValidFrom()
    {
        if (is_null($this->validFrom)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_VALID_FROM);
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


    /**
     * @param ?DateTimeImmutable $validFrom
     */
    public function setValidFrom(?DateTimeImmutable $validFrom): void
    {
        $this->validFrom = $validFrom;
    }


    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[CartDiscountSetValidFromAction::FIELD_VALID_FROM]) && $data[CartDiscountSetValidFromAction::FIELD_VALID_FROM] instanceof \DateTimeImmutable) {
            $data[CartDiscountSetValidFromAction::FIELD_VALID_FROM] = $data[CartDiscountSetValidFromAction::FIELD_VALID_FROM]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}

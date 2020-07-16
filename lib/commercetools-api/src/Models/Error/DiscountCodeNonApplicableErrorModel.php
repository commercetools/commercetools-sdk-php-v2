<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @internal
 */
final class DiscountCodeNonApplicableErrorModel extends JsonObjectModel implements DiscountCodeNonApplicableError
{
    public const DISCRIMINATOR_VALUE = 'DiscountCodeNonApplicable';
    /**
     * @var ?string
     */
    protected $code;

    /**
     * @var ?string
     */
    protected $message;

    /**
     * @var ?string
     */
    protected $discountCode;

    /**
     * @var ?string
     */
    protected $reason;

    /**
     * @var ?string
     */
    protected $dicountCodeId;

    /**
     * @var ?DateTimeImmutable
     */
    protected $validFrom;

    /**
     * @var ?DateTimeImmutable
     */
    protected $validUntil;

    /**
     * @var ?DateTimeImmutable
     */
    protected $validityCheckTime;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $message = null,
        ?string $discountCode = null,
        ?string $reason = null,
        ?string $dicountCodeId = null,
        ?DateTimeImmutable $validFrom = null,
        ?DateTimeImmutable $validUntil = null,
        ?DateTimeImmutable $validityCheckTime = null
    ) {
        $this->message = $message;
        $this->discountCode = $discountCode;
        $this->reason = $reason;
        $this->dicountCodeId = $dicountCodeId;
        $this->validFrom = $validFrom;
        $this->validUntil = $validUntil;
        $this->validityCheckTime = $validityCheckTime;
        $this->code = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getCode()
    {
        if (is_null($this->code)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CODE);
            if (is_null($data)) {
                return null;
            }
            $this->code = (string) $data;
        }

        return $this->code;
    }

    /**
     * @return null|string
     */
    public function getMessage()
    {
        if (is_null($this->message)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_MESSAGE);
            if (is_null($data)) {
                return null;
            }
            $this->message = (string) $data;
        }

        return $this->message;
    }

    /**
     * @return null|string
     */
    public function getDiscountCode()
    {
        if (is_null($this->discountCode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_DISCOUNT_CODE);
            if (is_null($data)) {
                return null;
            }
            $this->discountCode = (string) $data;
        }

        return $this->discountCode;
    }

    /**
     * @return null|string
     */
    public function getReason()
    {
        if (is_null($this->reason)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_REASON);
            if (is_null($data)) {
                return null;
            }
            $this->reason = (string) $data;
        }

        return $this->reason;
    }

    /**
     * @return null|string
     */
    public function getDicountCodeId()
    {
        if (is_null($this->dicountCodeId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_DICOUNT_CODE_ID);
            if (is_null($data)) {
                return null;
            }
            $this->dicountCodeId = (string) $data;
        }

        return $this->dicountCodeId;
    }

    /**
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
     * @return null|DateTimeImmutable
     */
    public function getValidUntil()
    {
        if (is_null($this->validUntil)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_VALID_UNTIL);
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
    public function getValidityCheckTime()
    {
        if (is_null($this->validityCheckTime)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_VALIDITY_CHECK_TIME);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->validityCheckTime = $data;
        }

        return $this->validityCheckTime;
    }


    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    /**
     * @param ?string $discountCode
     */
    public function setDiscountCode(?string $discountCode): void
    {
        $this->discountCode = $discountCode;
    }

    /**
     * @param ?string $reason
     */
    public function setReason(?string $reason): void
    {
        $this->reason = $reason;
    }

    /**
     * @param ?string $dicountCodeId
     */
    public function setDicountCodeId(?string $dicountCodeId): void
    {
        $this->dicountCodeId = $dicountCodeId;
    }

    /**
     * @param ?DateTimeImmutable $validFrom
     */
    public function setValidFrom(?DateTimeImmutable $validFrom): void
    {
        $this->validFrom = $validFrom;
    }

    /**
     * @param ?DateTimeImmutable $validUntil
     */
    public function setValidUntil(?DateTimeImmutable $validUntil): void
    {
        $this->validUntil = $validUntil;
    }

    /**
     * @param ?DateTimeImmutable $validityCheckTime
     */
    public function setValidityCheckTime(?DateTimeImmutable $validityCheckTime): void
    {
        $this->validityCheckTime = $validityCheckTime;
    }


    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[DiscountCodeNonApplicableError::FIELD_VALID_FROM]) && $data[DiscountCodeNonApplicableError::FIELD_VALID_FROM] instanceof \DateTimeImmutable) {
            $data[DiscountCodeNonApplicableError::FIELD_VALID_FROM] = $data[DiscountCodeNonApplicableError::FIELD_VALID_FROM]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[DiscountCodeNonApplicableError::FIELD_VALID_UNTIL]) && $data[DiscountCodeNonApplicableError::FIELD_VALID_UNTIL] instanceof \DateTimeImmutable) {
            $data[DiscountCodeNonApplicableError::FIELD_VALID_UNTIL] = $data[DiscountCodeNonApplicableError::FIELD_VALID_UNTIL]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[DiscountCodeNonApplicableError::FIELD_VALIDITY_CHECK_TIME]) && $data[DiscountCodeNonApplicableError::FIELD_VALIDITY_CHECK_TIME] instanceof \DateTimeImmutable) {
            $data[DiscountCodeNonApplicableError::FIELD_VALIDITY_CHECK_TIME] = $data[DiscountCodeNonApplicableError::FIELD_VALIDITY_CHECK_TIME]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}

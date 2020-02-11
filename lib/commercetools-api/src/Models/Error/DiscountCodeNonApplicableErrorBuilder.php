<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use DateTimeImmutable;

/**
 * @implements Builder<DiscountCodeNonApplicableError>
 */
final class DiscountCodeNonApplicableErrorBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $message;

    /**
     * @var ?string
     */
    private $discountCode;

    /**
     * @var ?string
     */
    private $reason;

    /**
     * @var ?string
     */
    private $dicountCodeId;

    /**
     * @var ?DateTimeImmutable
     */
    private $validFrom;

    /**
     * @var ?DateTimeImmutable
     */
    private $validUntil;

    /**
     * @var ?DateTimeImmutable
     */
    private $validityCheckTime;

    /**
     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @return null|string
     */
    public function getDiscountCode()
    {
        return $this->discountCode;
    }

    /**
     * @return null|string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @return null|string
     */
    public function getDicountCodeId()
    {
        return $this->dicountCodeId;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getValidUntil()
    {
        return $this->validUntil;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getValidityCheckTime()
    {
        return $this->validityCheckTime;
    }

    /**
     * @return $this
     */
    public function withMessage(?string $message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDiscountCode(?string $discountCode)
    {
        $this->discountCode = $discountCode;

        return $this;
    }

    /**
     * @return $this
     */
    public function withReason(?string $reason)
    {
        $this->reason = $reason;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDicountCodeId(?string $dicountCodeId)
    {
        $this->dicountCodeId = $dicountCodeId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withValidFrom(?DateTimeImmutable $validFrom)
    {
        $this->validFrom = $validFrom;

        return $this;
    }

    /**
     * @return $this
     */
    public function withValidUntil(?DateTimeImmutable $validUntil)
    {
        $this->validUntil = $validUntil;

        return $this;
    }

    /**
     * @return $this
     */
    public function withValidityCheckTime(?DateTimeImmutable $validityCheckTime)
    {
        $this->validityCheckTime = $validityCheckTime;

        return $this;
    }


    public function build(): DiscountCodeNonApplicableError
    {
        return new DiscountCodeNonApplicableErrorModel(
            $this->message,
            $this->discountCode,
            $this->reason,
            $this->dicountCodeId,
            $this->validFrom,
            $this->validUntil,
            $this->validityCheckTime
        );
    }

    public static function of(): DiscountCodeNonApplicableErrorBuilder
    {
        return new self();
    }
}

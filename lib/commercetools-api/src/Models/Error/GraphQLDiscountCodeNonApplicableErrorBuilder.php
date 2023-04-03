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
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<GraphQLDiscountCodeNonApplicableError>
 */
final class GraphQLDiscountCodeNonApplicableErrorBuilder implements Builder
{
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
    private $discountCodeId;

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
     * <p>Discount Code passed to the Cart.</p>
     *

     * @return null|string
     */
    public function getDiscountCode()
    {
        return $this->discountCode;
    }

    /**
     * <p><code>&quot;DoesNotExist&quot;</code> or <code>&quot;TimeRangeNonApplicable&quot;</code></p>
     *

     * @return null|string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * <p>Unique identifier of the Discount Code.</p>
     *

     * @return null|string
     */
    public function getDiscountCodeId()
    {
        return $this->discountCodeId;
    }

    /**
     * <p>Date and time (UTC) from which the Discount Code is valid.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * <p>Date and time (UTC) until which the Discount Code is valid.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidUntil()
    {
        return $this->validUntil;
    }

    /**
     * <p>Date and time (UTC) the Discount Code validity check was last performed.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidityCheckTime()
    {
        return $this->validityCheckTime;
    }

    /**
     * @param ?string $discountCode
     * @return $this
     */
    public function withDiscountCode(?string $discountCode)
    {
        $this->discountCode = $discountCode;

        return $this;
    }

    /**
     * @param ?string $reason
     * @return $this
     */
    public function withReason(?string $reason)
    {
        $this->reason = $reason;

        return $this;
    }

    /**
     * @param ?string $discountCodeId
     * @return $this
     */
    public function withDiscountCodeId(?string $discountCodeId)
    {
        $this->discountCodeId = $discountCodeId;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $validFrom
     * @return $this
     */
    public function withValidFrom(?DateTimeImmutable $validFrom)
    {
        $this->validFrom = $validFrom;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $validUntil
     * @return $this
     */
    public function withValidUntil(?DateTimeImmutable $validUntil)
    {
        $this->validUntil = $validUntil;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $validityCheckTime
     * @return $this
     */
    public function withValidityCheckTime(?DateTimeImmutable $validityCheckTime)
    {
        $this->validityCheckTime = $validityCheckTime;

        return $this;
    }


    public function build(): GraphQLDiscountCodeNonApplicableError
    {
        return new GraphQLDiscountCodeNonApplicableErrorModel(
            $this->discountCode,
            $this->reason,
            $this->discountCodeId,
            $this->validFrom,
            $this->validUntil,
            $this->validityCheckTime
        );
    }

    public static function of(): GraphQLDiscountCodeNonApplicableErrorBuilder
    {
        return new self();
    }
}

<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ReviewRatingSetMessagePayloadModel extends JsonObjectModel implements ReviewRatingSetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'ReviewRatingSet';
    /**

     * @var ?string
     */
    protected $type;

    /**

     * @var ?float
     */
    protected $oldRating;

    /**

     * @var ?float
     */
    protected $newRating;

    /**

     * @var ?bool
     */
    protected $includedInStatistics;

    /**

     * @var ?Reference
     */
    protected $target;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?float $oldRating = null,
        ?float $newRating = null,
        ?bool $includedInStatistics = null,
        ?Reference $target = null
    ) {
        $this->oldRating = $oldRating;
        $this->newRating = $newRating;
        $this->includedInStatistics = $includedInStatistics;
        $this->target = $target;
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
     * <p>The <code>rating</code> of the <a href="ctp:api:type:Review">Review</a> before the <a href="ctp:api:type:ReviewSetRatingAction">Set Rating</a> update action.</p>
     *

     * @return null|float
     */
    public function getOldRating()
    {
        if (is_null($this->oldRating)) {
            /** @psalm-var ?float $data */
            $data = $this->raw(self::FIELD_OLD_RATING);
            if (is_null($data)) {
                return null;
            }
            $this->oldRating = (float) $data;
        }

        return $this->oldRating;
    }

    /**
     * <p>The <code>rating</code> of the <a href="ctp:api:type:Review">Review</a> after the <a href="ctp:api:type:ReviewSetRatingAction">Set Rating</a> update action.</p>
     *

     * @return null|float
     */
    public function getNewRating()
    {
        if (is_null($this->newRating)) {
            /** @psalm-var ?float $data */
            $data = $this->raw(self::FIELD_NEW_RATING);
            if (is_null($data)) {
                return null;
            }
            $this->newRating = (float) $data;
        }

        return $this->newRating;
    }

    /**
     * <p>Whether the <a href="ctp:api:type:Review">Review</a> was taken into account in the ratings statistics of the target.</p>
     *

     * @return null|bool
     */
    public function getIncludedInStatistics()
    {
        if (is_null($this->includedInStatistics)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_INCLUDED_IN_STATISTICS);
            if (is_null($data)) {
                return null;
            }
            $this->includedInStatistics = (bool) $data;
        }

        return $this->includedInStatistics;
    }

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to the resource that the <a href="ctp:api:type:Review">Review</a> belongs to.</p>
     *

     * @return null|Reference
     */
    public function getTarget()
    {
        if (is_null($this->target)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TARGET);
            if (is_null($data)) {
                return null;
            }
            $className = ReferenceModel::resolveDiscriminatorClass($data);
            $this->target = $className::of($data);
        }

        return $this->target;
    }


    /**
     * @param ?float $oldRating
     */
    public function setOldRating(?float $oldRating): void
    {
        $this->oldRating = $oldRating;
    }

    /**
     * @param ?float $newRating
     */
    public function setNewRating(?float $newRating): void
    {
        $this->newRating = $newRating;
    }

    /**
     * @param ?bool $includedInStatistics
     */
    public function setIncludedInStatistics(?bool $includedInStatistics): void
    {
        $this->includedInStatistics = $includedInStatistics;
    }

    /**
     * @param ?Reference $target
     */
    public function setTarget(?Reference $target): void
    {
        $this->target = $target;
    }
}

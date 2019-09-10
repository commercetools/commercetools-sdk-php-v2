<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class ReviewRatingSetMessagePayloadModel extends JsonObjectModel implements ReviewRatingSetMessagePayload
{
    const DISCRIMINATOR_VALUE = 'ReviewRatingSet';

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?int
     */
    protected $oldRating;

    /**
     * @var ?bool
     */
    protected $includedInStatistics;

    /**
     * @var ?int
     */
    protected $newRating;

    /**
     * @var ?Reference
     */
    protected $target;

    public function __construct(
        string $type = null,
        int $oldRating = null,
        bool $includedInStatistics = null,
        int $newRating = null,
        Reference $target = null
    ) {
        $this->type = $type;
        $this->oldRating = $oldRating;
        $this->includedInStatistics = $includedInStatistics;
        $this->newRating = $newRating;
        $this->target = $target;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MessagePayload::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * @return null|int
     */
    public function getOldRating()
    {
        if (is_null($this->oldRating)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(ReviewRatingSetMessagePayload::FIELD_OLD_RATING);
            if (is_null($data)) {
                return null;
            }
            $this->oldRating = (int) $data;
        }

        return $this->oldRating;
    }

    /**
     * @return null|bool
     */
    public function getIncludedInStatistics()
    {
        if (is_null($this->includedInStatistics)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(ReviewRatingSetMessagePayload::FIELD_INCLUDED_IN_STATISTICS);
            if (is_null($data)) {
                return null;
            }
            $this->includedInStatistics = (bool) $data;
        }

        return $this->includedInStatistics;
    }

    /**
     * @return null|int
     */
    public function getNewRating()
    {
        if (is_null($this->newRating)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(ReviewRatingSetMessagePayload::FIELD_NEW_RATING);
            if (is_null($data)) {
                return null;
            }
            $this->newRating = (int) $data;
        }

        return $this->newRating;
    }

    /**
     * @return null|Reference
     */
    public function getTarget()
    {
        if (is_null($this->target)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ReviewRatingSetMessagePayload::FIELD_TARGET);
            if (is_null($data)) {
                return null;
            }
            $className = ReferenceModel::resolveDiscriminatorClass($data);
            $this->target = $className::of($data);
        }

        return $this->target;
    }

    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    public function setOldRating(?int $oldRating): void
    {
        $this->oldRating = $oldRating;
    }

    public function setIncludedInStatistics(?bool $includedInStatistics): void
    {
        $this->includedInStatistics = $includedInStatistics;
    }

    public function setNewRating(?int $newRating): void
    {
        $this->newRating = $newRating;
    }

    public function setTarget(?Reference $target): void
    {
        $this->target = $target;
    }
}

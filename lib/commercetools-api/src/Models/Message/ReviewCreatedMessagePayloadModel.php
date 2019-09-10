<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Review\Review;
use Commercetools\Api\Models\Review\ReviewModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class ReviewCreatedMessagePayloadModel extends JsonObjectModel implements ReviewCreatedMessagePayload
{
    const DISCRIMINATOR_VALUE = 'ReviewCreated';

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?Review
     */
    protected $review;

    public function __construct(
        string $type = null,
        Review $review = null
    ) {
        $this->type = $type;
        $this->review = $review;
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
     * @return null|Review
     */
    public function getReview()
    {
        if (is_null($this->review)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ReviewCreatedMessagePayload::FIELD_REVIEW);
            if (is_null($data)) {
                return null;
            }

            $this->review = ReviewModel::of($data);
        }

        return $this->review;
    }

    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    public function setReview(?Review $review): void
    {
        $this->review = $review;
    }
}

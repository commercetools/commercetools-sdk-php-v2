<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Review\Review;
use Commercetools\Api\Models\Review\ReviewModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ReviewCreatedMessagePayloadModel extends JsonObjectModel implements ReviewCreatedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'ReviewCreated';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?Review
     */
    protected $review;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?Review $review = null
    ) {
        $this->review = $review;
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
     * @return null|Review
     */
    public function getReview()
    {
        if (is_null($this->review)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_REVIEW);
            if (is_null($data)) {
                return null;
            }

            $this->review = ReviewModel::of($data);
        }

        return $this->review;
    }


    /**
     * @param ?Review $review
     */
    public function setReview(?Review $review): void
    {
        $this->review = $review;
    }
}

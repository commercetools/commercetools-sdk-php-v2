<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Review;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ReviewSetRatingActionModel extends JsonObjectModel implements ReviewSetRatingAction
{
    public const DISCRIMINATOR_VALUE = 'setRating';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?int
     */
    protected $rating;


    public function __construct(
        int $rating = null
    ) {
        $this->rating = $rating;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ReviewUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>Number between -100 and 100 included.
     * If <code>rating</code> is absent or <code>null</code>, this field will be removed if it exists.</p>
     *
     * @return null|int
     */
    public function getRating()
    {
        if (is_null($this->rating)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(ReviewSetRatingAction::FIELD_RATING);
            if (is_null($data)) {
                return null;
            }
            $this->rating = (int) $data;
        }

        return $this->rating;
    }

    public function setRating(?int $rating): void
    {
        $this->rating = $rating;
    }
}

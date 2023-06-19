<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Label;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ReviewLabel>
 */
final class ReviewLabelBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $key;

    /**

     * @var ?string
     */
    private $title;

    /**
     * <p>User-defined unique identifier of the Review.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>Title of the Review.</p>
     *

     * @return null|string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @param ?string $title
     * @return $this
     */
    public function withTitle(?string $title)
    {
        $this->title = $title;

        return $this;
    }


    public function build(): ReviewLabel
    {
        return new ReviewLabelModel(
            $this->key,
            $this->title
        );
    }

    public static function of(): ReviewLabelBuilder
    {
        return new self();
    }
}

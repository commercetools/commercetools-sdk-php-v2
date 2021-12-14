<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Review;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ReviewReference>
 */
final class ReviewReferenceBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $id;

    /**
     * @var null|Review|ReviewBuilder
     */
    private $obj;

    /**
     * <p>Unique ID of the referenced resource.</p>
     *
     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return null|Review
     */
    public function getObj()
    {
        return $this->obj instanceof ReviewBuilder ? $this->obj->build() : $this->obj;
    }

    /**
     * @param ?string $id
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param ?Review $obj
     * @return $this
     */
    public function withObj(?Review $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    /**
     * @deprecated use withObj() instead
     * @return $this
     */
    public function withObjBuilder(?ReviewBuilder $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    public function build(): ReviewReference
    {
        return new ReviewReferenceModel(
            $this->id,
            $this->obj instanceof ReviewBuilder ? $this->obj->build() : $this->obj
        );
    }

    public static function of(): ReviewReferenceBuilder
    {
        return new self();
    }
}

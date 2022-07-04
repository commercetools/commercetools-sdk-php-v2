<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\QuoteRequest;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<QuoteRequestReference>
 */
final class QuoteRequestReferenceBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $id;

    /**
     * @var null|QuoteRequest|QuoteRequestBuilder
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
     * <p>Contains the representation of the expanded QuoteRequest.
     * Only present in responses to requests with <a href="/../api/general-concepts#reference-expansion">Reference Expansion</a> for QuoteRequest.</p>
     *
     * @return null|QuoteRequest
     */
    public function getObj()
    {
        return $this->obj instanceof QuoteRequestBuilder ? $this->obj->build() : $this->obj;
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
     * @param ?QuoteRequest $obj
     * @return $this
     */
    public function withObj(?QuoteRequest $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    /**
     * @deprecated use withObj() instead
     * @return $this
     */
    public function withObjBuilder(?QuoteRequestBuilder $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    public function build(): QuoteRequestReference
    {
        return new QuoteRequestReferenceModel(
            $this->id,
            $this->obj instanceof QuoteRequestBuilder ? $this->obj->build() : $this->obj
        );
    }

    public static function of(): QuoteRequestReferenceBuilder
    {
        return new self();
    }
}

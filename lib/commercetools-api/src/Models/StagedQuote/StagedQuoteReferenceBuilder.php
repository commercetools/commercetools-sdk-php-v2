<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\StagedQuote;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<StagedQuoteReference>
 */
final class StagedQuoteReferenceBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $id;

    /**
     * @var null|StagedQuote|StagedQuoteBuilder
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
     * <p>Contains the representation of the expanded StagedQuote.
     * Only present in responses to requests with <a href="/../api/general-concepts#reference-expansion">Reference Expansion</a> for StagedQuote.</p>
     *
     * @return null|StagedQuote
     */
    public function getObj()
    {
        return $this->obj instanceof StagedQuoteBuilder ? $this->obj->build() : $this->obj;
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
     * @param ?StagedQuote $obj
     * @return $this
     */
    public function withObj(?StagedQuote $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    /**
     * @deprecated use withObj() instead
     * @return $this
     */
    public function withObjBuilder(?StagedQuoteBuilder $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    public function build(): StagedQuoteReference
    {
        return new StagedQuoteReferenceModel(
            $this->id,
            $this->obj instanceof StagedQuoteBuilder ? $this->obj->build() : $this->obj
        );
    }

    public static function of(): StagedQuoteReferenceBuilder
    {
        return new self();
    }
}

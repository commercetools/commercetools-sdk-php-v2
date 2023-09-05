<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\StandalonePrice;

use Commercetools\Api\Models\Common\TypedMoneyDraft;
use Commercetools\Api\Models\Common\TypedMoneyDraftBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<StagedPriceDraft>
 */
final class StagedPriceDraftBuilder implements Builder
{
    /**

     * @var null|TypedMoneyDraft|TypedMoneyDraftBuilder
     */
    private $value;

    /**
     * <p>Money value for the StagedPriceDraft.</p>
     *

     * @return null|TypedMoneyDraft
     */
    public function getValue()
    {
        return $this->value instanceof TypedMoneyDraftBuilder ? $this->value->build() : $this->value;
    }

    /**
     * @param ?TypedMoneyDraft $value
     * @return $this
     */
    public function withValue(?TypedMoneyDraft $value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @deprecated use withValue() instead
     * @return $this
     */
    public function withValueBuilder(?TypedMoneyDraftBuilder $value)
    {
        $this->value = $value;

        return $this;
    }

    public function build(): StagedPriceDraft
    {
        return new StagedPriceDraftModel(
            $this->value instanceof TypedMoneyDraftBuilder ? $this->value->build() : $this->value
        );
    }

    public static function of(): StagedPriceDraftBuilder
    {
        return new self();
    }
}

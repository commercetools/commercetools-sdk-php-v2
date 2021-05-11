<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\OrderReference;
use Commercetools\Api\Models\Order\OrderReferenceBuilder;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionCollection;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<OrderEditDraft>
 */
final class OrderEditDraftBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $key;

    /**
     * @var null|OrderReference|OrderReferenceBuilder
     */
    private $resource;

    /**
     * @var ?StagedOrderUpdateActionCollection
     */
    private $stagedActions;

    /**
     * @var null|CustomFieldsDraft|CustomFieldsDraftBuilder
     */
    private $custom;

    /**
     * @var ?string
     */
    private $comment;

    /**
     * @var ?bool
     */
    private $dryRun;

    /**
     * <p>Unique identifier for this edit.</p>
     *
     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>The order to be updated with this edit.</p>
     *
     * @return null|OrderReference
     */
    public function getResource()
    {
        return $this->resource instanceof OrderReferenceBuilder ? $this->resource->build() : $this->resource;
    }

    /**
     * <p>The actions to apply to <code>resource</code>.</p>
     *
     * @return null|StagedOrderUpdateActionCollection
     */
    public function getStagedActions()
    {
        return $this->stagedActions;
    }

    /**
     * <p>The custom fields.</p>
     *
     * @return null|CustomFieldsDraft
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom;
    }

    /**
     * <p>This field can be used to add additional textual information regarding the edit.</p>
     *
     * @return null|string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * <p>When set to <code>true</code> the edit is applied on the Order without persisting it.</p>
     *
     * @return null|bool
     */
    public function getDryRun()
    {
        return $this->dryRun;
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
     * @param ?OrderReference $resource
     * @return $this
     */
    public function withResource(?OrderReference $resource)
    {
        $this->resource = $resource;

        return $this;
    }

    /**
     * @param ?StagedOrderUpdateActionCollection $stagedActions
     * @return $this
     */
    public function withStagedActions(?StagedOrderUpdateActionCollection $stagedActions)
    {
        $this->stagedActions = $stagedActions;

        return $this;
    }

    /**
     * @param ?CustomFieldsDraft $custom
     * @return $this
     */
    public function withCustom(?CustomFieldsDraft $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @param ?string $comment
     * @return $this
     */
    public function withComment(?string $comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * @param ?bool $dryRun
     * @return $this
     */
    public function withDryRun(?bool $dryRun)
    {
        $this->dryRun = $dryRun;

        return $this;
    }

    /**
     * @deprecated use withResource() instead
     * @return $this
     */
    public function withResourceBuilder(?OrderReferenceBuilder $resource)
    {
        $this->resource = $resource;

        return $this;
    }

    /**
     * @deprecated use withCustom() instead
     * @return $this
     */
    public function withCustomBuilder(?CustomFieldsDraftBuilder $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    public function build(): OrderEditDraft
    {
        return new OrderEditDraftModel(
            $this->key,
            $this->resource instanceof OrderReferenceBuilder ? $this->resource->build() : $this->resource,
            $this->stagedActions,
            $this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom,
            $this->comment,
            $this->dryRun
        );
    }

    public static function of(): OrderEditDraftBuilder
    {
        return new self();
    }
}

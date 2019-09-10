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

/**
 * @implements Builder<OrderEditDraft>
 */
final class OrderEditDraftBuilder implements Builder
{
    /**
     * @var ?bool
     */
    private $dryRun;

    /**
     * @var OrderReference|?OrderReferenceBuilder
     */
    private $resource;

    /**
     * @var CustomFieldsDraft|?CustomFieldsDraftBuilder
     */
    private $custom;

    /**
     * @var ?string
     */
    private $comment;

    /**
     * @var ?StagedOrderUpdateActionCollection
     */
    private $stagedActions;

    /**
     * @var ?string
     */
    private $key;

    public function __construct()
    {
    }

    /**
     * @return null|bool
     */
    public function getDryRun()
    {
        return $this->dryRun;
    }

    /**
     * @return null|OrderReference
     */
    public function getResource()
    {
        return $this->resource instanceof OrderReferenceBuilder ? $this->resource->build() : $this->resource;
    }

    /**
     * @return null|CustomFieldsDraft
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom;
    }

    /**
     * @return null|string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @return null|StagedOrderUpdateActionCollection
     */
    public function getStagedActions()
    {
        return $this->stagedActions;
    }

    /**
     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @return $this
     */
    public function withDryRun(?bool $dryRun)
    {
        $this->dryRun = $dryRun;

        return $this;
    }

    /**
     * @return $this
     */
    public function withResource(?OrderReference $resource)
    {
        $this->resource = $resource;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustom(?CustomFieldsDraft $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @return $this
     */
    public function withComment(?string $comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * @return $this
     */
    public function withStagedActions(?StagedOrderUpdateActionCollection $stagedActions)
    {
        $this->stagedActions = $stagedActions;

        return $this;
    }

    /**
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @return $this
     */
    public function withResourceBuilder(?OrderReferenceBuilder $resource)
    {
        $this->resource = $resource;

        return $this;
    }

    /**
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
            $this->dryRun,
            ($this->resource instanceof OrderReferenceBuilder ? $this->resource->build() : $this->resource),
            ($this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom),
            $this->comment,
            $this->stagedActions,
            $this->key
        );
    }

    public static function of(): OrderEditDraftBuilder
    {
        return new self();
    }
}

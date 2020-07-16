<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\OrderReference;
use Commercetools\Api\Models\Order\OrderReferenceModel;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionCollection;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class OrderEditDraftModel extends JsonObjectModel implements OrderEditDraft
{
    /**
     * @var ?string
     */
    protected $key;

    /**
     * @var ?OrderReference
     */
    protected $resource;

    /**
     * @var ?StagedOrderUpdateActionCollection
     */
    protected $stagedActions;

    /**
     * @var ?CustomFieldsDraft
     */
    protected $custom;

    /**
     * @var ?string
     */
    protected $comment;

    /**
     * @var ?bool
     */
    protected $dryRun;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $key = null,
        ?OrderReference $resource = null,
        ?StagedOrderUpdateActionCollection $stagedActions = null,
        ?CustomFieldsDraft $custom = null,
        ?string $comment = null,
        ?bool $dryRun = null
    ) {
        $this->key = $key;
        $this->resource = $resource;
        $this->stagedActions = $stagedActions;
        $this->custom = $custom;
        $this->comment = $comment;
        $this->dryRun = $dryRun;
    }

    /**
     * <p>Unique identifier for this edit.</p>
     *
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    /**
     * <p>The order to be updated with this edit.</p>
     *
     * @return null|OrderReference
     */
    public function getResource()
    {
        if (is_null($this->resource)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_RESOURCE);
            if (is_null($data)) {
                return null;
            }

            $this->resource = OrderReferenceModel::of($data);
        }

        return $this->resource;
    }

    /**
     * <p>The actions to apply to <code>resource</code>.</p>
     *
     * @return null|StagedOrderUpdateActionCollection
     */
    public function getStagedActions()
    {
        if (is_null($this->stagedActions)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_STAGED_ACTIONS);
            if (is_null($data)) {
                return null;
            }
            $this->stagedActions = StagedOrderUpdateActionCollection::fromArray($data);
        }

        return $this->stagedActions;
    }

    /**
     * <p>The custom fields.</p>
     *
     * @return null|CustomFieldsDraft
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOM);
            if (is_null($data)) {
                return null;
            }

            $this->custom = CustomFieldsDraftModel::of($data);
        }

        return $this->custom;
    }

    /**
     * <p>This field can be used to add additional textual information regarding the edit.</p>
     *
     * @return null|string
     */
    public function getComment()
    {
        if (is_null($this->comment)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_COMMENT);
            if (is_null($data)) {
                return null;
            }
            $this->comment = (string) $data;
        }

        return $this->comment;
    }

    /**
     * <p>When set to <code>true</code> the edit is applied on the Order without persisting it.</p>
     *
     * @return null|bool
     */
    public function getDryRun()
    {
        if (is_null($this->dryRun)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_DRY_RUN);
            if (is_null($data)) {
                return null;
            }
            $this->dryRun = (bool) $data;
        }

        return $this->dryRun;
    }


    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    /**
     * @param ?OrderReference $resource
     */
    public function setResource(?OrderReference $resource): void
    {
        $this->resource = $resource;
    }

    /**
     * @param ?StagedOrderUpdateActionCollection $stagedActions
     */
    public function setStagedActions(?StagedOrderUpdateActionCollection $stagedActions): void
    {
        $this->stagedActions = $stagedActions;
    }

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void
    {
        $this->custom = $custom;
    }

    /**
     * @param ?string $comment
     */
    public function setComment(?string $comment): void
    {
        $this->comment = $comment;
    }

    /**
     * @param ?bool $dryRun
     */
    public function setDryRun(?bool $dryRun): void
    {
        $this->dryRun = $dryRun;
    }
}

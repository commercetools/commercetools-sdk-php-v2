<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class OrderEditUpdateModel extends JsonObjectModel implements OrderEditUpdate
{
    /**
     *
     * @var ?int
     */
    protected $version;

    /**
     *
     * @var ?OrderEditUpdateActionCollection
     */
    protected $actions;

    /**
     *
     * @var ?bool
     */
    protected $dryRun;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?int $version = null,
        ?OrderEditUpdateActionCollection $actions = null,
        ?bool $dryRun = null
    ) {
        $this->version = $version;
        $this->actions = $actions;
        $this->dryRun = $dryRun;
    }

    /**
     * <p>Expected version of the Order Edit on which the changes should be applied.
     * If the expected version does not match the actual version, a <a href="ctp:api:type:ConcurrentModificationError">ConcurrentModification</a> error will be returned.</p>
     *
     *
     * @return null|int
     */
    public function getVersion()
    {
        if (is_null($this->version)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->version = (int) $data;
        }

        return $this->version;
    }

    /**
     * <p>Update actions to be performed on the Order Edit.</p>
     *
     *
     * @return null|OrderEditUpdateActionCollection
     */
    public function getActions()
    {
        if (is_null($this->actions)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_ACTIONS);
            if (is_null($data)) {
                return null;
            }
            $this->actions = OrderEditUpdateActionCollection::fromArray($data);
        }

        return $this->actions;
    }

    /**
     * <p>If set to <code>true</code>, the Order Edit is applied on the <a href="ctp:api:type:Order">Order</a> without persisting it.</p>
     *
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
     * @param ?int $version
     */
    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }

    /**
     * @param ?OrderEditUpdateActionCollection $actions
     */
    public function setActions(?OrderEditUpdateActionCollection $actions): void
    {
        $this->actions = $actions;
    }

    /**
     * @param ?bool $dryRun
     */
    public function setDryRun(?bool $dryRun): void
    {
        $this->dryRun = $dryRun;
    }
}

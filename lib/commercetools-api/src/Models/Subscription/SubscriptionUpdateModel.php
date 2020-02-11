<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class SubscriptionUpdateModel extends JsonObjectModel implements SubscriptionUpdate
{

    /**
     * @var ?int
     */
    protected $version;

    /**
     * @var ?SubscriptionUpdateActionCollection
     */
    protected $actions;


    public function __construct(
        int $version = null,
        SubscriptionUpdateActionCollection $actions = null
    ) {
        $this->version = $version;
        $this->actions = $actions;

    }

    /**
     * @return null|int
     */
    public function getVersion()
    {
        if (is_null($this->version)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(SubscriptionUpdate::FIELD_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->version = (int) $data;
        }

        return $this->version;
    }

    /**
     * @return null|SubscriptionUpdateActionCollection
     */
    public function getActions()
    {
        if (is_null($this->actions)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(SubscriptionUpdate::FIELD_ACTIONS);
            if (is_null($data)) {
                return null;
            }
            $this->actions = SubscriptionUpdateActionCollection::fromArray($data);
        }

        return $this->actions;
    }

    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }

    public function setActions(?SubscriptionUpdateActionCollection $actions): void
    {
        $this->actions = $actions;
    }



}

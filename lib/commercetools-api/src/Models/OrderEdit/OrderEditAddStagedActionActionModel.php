<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class OrderEditAddStagedActionActionModel extends JsonObjectModel implements OrderEditAddStagedActionAction
{
    public const DISCRIMINATOR_VALUE = 'addStagedAction';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?StagedOrderUpdateAction
     */
    protected $stagedAction;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?StagedOrderUpdateAction $stagedAction = null,
        ?string $action = null
    ) {
        $this->stagedAction = $stagedAction;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     *
     * @return null|StagedOrderUpdateAction
     */
    public function getStagedAction()
    {
        if (is_null($this->stagedAction)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_STAGED_ACTION);
            if (is_null($data)) {
                return null;
            }
            $className = StagedOrderUpdateActionModel::resolveDiscriminatorClass($data);
            $this->stagedAction = $className::of($data);
        }

        return $this->stagedAction;
    }


    /**
     * @param ?StagedOrderUpdateAction $stagedAction
     */
    public function setStagedAction(?StagedOrderUpdateAction $stagedAction): void
    {
        $this->stagedAction = $stagedAction;
    }
}

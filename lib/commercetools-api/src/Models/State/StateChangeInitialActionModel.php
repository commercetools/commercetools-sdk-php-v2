<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\State;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class StateChangeInitialActionModel extends JsonObjectModel implements StateChangeInitialAction
{
    public const DISCRIMINATOR_VALUE = 'changeInitial';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?bool
     */
    protected $initial;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?bool $initial = null,
        ?string $action = null
    ) {
        $this->initial = $initial;
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
     * <p>Set to <code>true</code> for defining the State as initial State in a state machine and making it the first step in a workflow.</p>
     *
     *
     * @return null|bool
     */
    public function getInitial()
    {
        if (is_null($this->initial)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_INITIAL);
            if (is_null($data)) {
                return null;
            }
            $this->initial = (bool) $data;
        }

        return $this->initial;
    }


    /**
     * @param ?bool $initial
     */
    public function setInitial(?bool $initial): void
    {
        $this->initial = $initial;
    }
}

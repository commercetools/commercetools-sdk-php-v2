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
final class StateSetTransitionsActionModel extends JsonObjectModel implements StateSetTransitionsAction
{
    public const DISCRIMINATOR_VALUE = 'setTransitions';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?StateResourceIdentifierCollection
     */
    protected $transitions;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?StateResourceIdentifierCollection $transitions = null,
        ?string $action = null
    ) {
        $this->transitions = $transitions;
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
     * <p>Value to set.
     * If empty, any existing value will be removed.</p>
     * <p>Possible transformations of the current State to other States of the same <code>type</code> (for example, <em>Initial</em> -&gt; <em>Shipped</em>).
     * When performing a <code>transitionState</code> update action and <code>transitions</code> is set, the currently referenced State must have a transition to the new State.</p>
     * <p>If <code>transitions</code> is an empty list, it means the current State is a final State and no further transitions are allowed.
     * If <code>transitions</code> is not set, the validation is turned off.</p>
     * <p>When performing a <code>transitionState</code> update action, any other State of the same <code>type</code> can be transitioned to.</p>
     *
     *
     * @return null|StateResourceIdentifierCollection
     */
    public function getTransitions()
    {
        if (is_null($this->transitions)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_TRANSITIONS);
            if (is_null($data)) {
                return null;
            }
            $this->transitions = StateResourceIdentifierCollection::fromArray($data);
        }

        return $this->transitions;
    }


    /**
     * @param ?StateResourceIdentifierCollection $transitions
     */
    public function setTransitions(?StateResourceIdentifierCollection $transitions): void
    {
        $this->transitions = $transitions;
    }
}

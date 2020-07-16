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
     * @var ?string
     */
    protected $action;

    /**
     * @var ?StateResourceIdentifierCollection
     */
    protected $transitions;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?StateResourceIdentifierCollection $transitions = null
    ) {
        $this->transitions = $transitions;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
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

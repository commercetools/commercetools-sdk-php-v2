<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\State;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<StateSetTransitionsAction>
 */
final class StateSetTransitionsActionBuilder implements Builder
{
    /**
     * @var ?StateResourceIdentifierCollection
     */
    private $transitions;

    /**
     * @return null|StateResourceIdentifierCollection
     */
    public function getTransitions()
    {
        return $this->transitions;
    }

    /**
     * @return $this
     */
    public function withTransitions(?StateResourceIdentifierCollection $transitions)
    {
        $this->transitions = $transitions;

        return $this;
    }


    public function build(): StateSetTransitionsAction
    {
        return new StateSetTransitionsActionModel(
            $this->transitions
        );
    }

    public static function of(): StateSetTransitionsActionBuilder
    {
        return new self();
    }
}
